<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Province;
use App\Models\City;
use App\Models\District;

class IndonesianAddressService
{
    protected $baseUrl;
    
    public function __construct()
    {
        // Use environment variable for API URL, default to Nusantara Kita API if not set
        $this->baseUrl = env('INDONESIAN_ADDRESS_API_URL', 'https://api-nusantarakita.vercel.app/v2');
    }

    /**
     * Get all provinces - try API first, fallback to local database
     */
    public function getProvinces()
    {
        $cacheKey = 'provinces_list_api';
        
        // Try to get from cache first
        $cached = cache()->get($cacheKey);
        if ($cached !== null) {
            return $cached;
        }
        
        // If API is configured and available, try it first
        if ($this->baseUrl && !str_contains($this->baseUrl, 'alamat.thecloudalert.com')) {
            try {
                $response = Http::timeout(5)->get($this->baseUrl . '/provinsi', [
                    'pagination' => 'false'
                ]);
                if ($response->successful()) {
                    $responseData = $response->json();
                    // Handle different response structures
                    $apiData = $this->extractApiData($responseData, 'provinsi');
                    if (!empty($apiData) && is_array($apiData)) {
                        cache()->put($cacheKey, $apiData, 3600); // Cache for 1 hour
                        return $apiData;
                    }
                }
            } catch (\Exception $e) {
                \Log::info('Nusantara Kita API fetch failed, using database fallback', [
                    'service' => 'IndonesianAddressService',
                    'method' => 'getProvinces',
                    'error' => \get_class($e)
                ]);
            }
        }
        
        // Fallback to local database with caching
        $dbResult = cache()->remember('provinces_list_db', 3600, function () {
            return Province::orderBy('name')->select('id', 'name', 'code')->get()->toArray();
        });
        
        cache()->put($cacheKey, $dbResult, 3600); // Cache the DB result too
        return $dbResult;
    }

    /**
     * Get cities by province ID - try API first, fallback to local database
     */
    public function getCitiesByProvince($provinceId)
    {
        $cacheKey = "cities_by_province_{$provinceId}_api";
        
        // Try to get from cache first
        $cached = cache()->get($cacheKey);
        if ($cached !== null) {
            return $cached;
        }
        
        // If API is configured and available, try it first
        if ($this->baseUrl && !str_contains($this->baseUrl, 'alamat.thecloudalert.com')) {
            try {
                $response = Http::timeout(5)->get($this->baseUrl . '/kota-kabupaten', [
                    'pagination' => 'false',
                    'provinsi_id' => $provinceId
                ]);
                if ($response->successful()) {
                    $responseData = $response->json();
                    // Handle different response structures
                    $apiData = $this->extractApiData($responseData, 'kota-kabupaten');
                    if (!empty($apiData) && is_array($apiData)) {
                        cache()->put($cacheKey, $apiData, 3600); // Cache for 1 hour
                        return $apiData;
                    }
                }
            } catch (\Exception $e) {
                \Log::info('Nusantara Kita API fetch failed, using database fallback', [
                    'service' => 'IndonesianAddressService',
                    'method' => 'getCitiesByProvince',
                    'province_id' => $provinceId,
                    'error' => \get_class($e)
                ]);
            }
        }
        
        // Fallback to local database with caching
        $dbResult = cache()->remember("cities_by_province_{$provinceId}_db", 3600, function () use ($provinceId) {
            return City::where('province_id', $provinceId)
                ->orderBy('name')
                ->select('id', 'name', 'code')
                ->get()
                ->toArray();
        });
        
        cache()->put($cacheKey, $dbResult, 3600); // Cache the DB result too
        return $dbResult;
    }

    /**
     * Get districts by city ID - try API first, fallback to local database
     */
    public function getDistrictsByCity($cityId)
    {
        $cacheKey = "districts_by_city_{$cityId}_api";
        
        // Try to get from cache first
        $cached = cache()->get($cacheKey);
        if ($cached !== null) {
            return $cached;
        }
        
        // If API is configured and available, try it first
        if ($this->baseUrl && !str_contains($this->baseUrl, 'alamat.thecloudalert.com')) {
            try {
                $response = Http::timeout(5)->get($this->baseUrl . '/kecamatan', [
                    'pagination' => 'false',
                    'kota_kabupaten_id' => $cityId
                ]);
                if ($response->successful()) {
                    $responseData = $response->json();
                    // Handle different response structures
                    $apiData = $this->extractApiData($responseData, 'kecamatan');
                    if (!empty($apiData) && is_array($apiData)) {
                        cache()->put($cacheKey, $apiData, 3600); // Cache for 1 hour
                        return $apiData;
                    }
                }
            } catch (\Exception $e) {
                \Log::info('Nusantara Kita API fetch failed, using database fallback', [
                    'service' => 'IndonesianAddressService',
                    'method' => 'getDistrictsByCity',
                    'city_id' => $cityId,
                    'error' => \get_class($e)
                ]);
            }
        }
        
        // Fallback to local database with caching
        $dbResult = cache()->remember("districts_by_city_{$cityId}_db", 3600, function () use ($cityId) {
            return District::where('city_id', $cityId)
                ->orderBy('name')
                ->select('id', 'name', 'code', 'postal_code')
                ->get()
                ->toArray();
        });
        
        cache()->put($cacheKey, $dbResult, 3600); // Cache the DB result too
        return $dbResult;
    }

    /**
     * Get villages by district ID - try API first, fallback to local database
     */
    public function getVillagesByDistrict($districtId)
    {
        $cacheKey = "villages_by_district_{$districtId}_api";
        
        // Try to get from cache first
        $cached = cache()->get($cacheKey);
        if ($cached !== null) {
            return $cached;
        }
        
        // If API is configured and available, try it first
        if ($this->baseUrl && !str_contains($this->baseUrl, 'alamat.thecloudalert.com')) {
            try {
                // Try different endpoint patterns based on API documentation
                // Pattern 1: /kecamatan/{id}/desa-kel (based on your mention)
                $response = Http::timeout(5)->get($this->baseUrl . "/kecamatan/{$districtId}/desa-kel");
                
                if (!$response->successful() || empty($response->json())) {
                    // Pattern 2: Standard /desa endpoint with filters
                    $response = Http::timeout(5)->get($this->baseUrl . "/desa", [
                        'pagination' => 'false',
                        'kecamatan_id' => $districtId
                    ]);
                }
                
                if (!$response->successful() || empty($response->json())) {
                    // Pattern 3: Alternative /desa-kel endpoint (based on your suggestion)
                    $allVillagesResponse = Http::timeout(5)->get($this->baseUrl . "/desa-kel", [
                        'pagination' => 'false'
                    ]);
                    
                    if ($allVillagesResponse->successful()) {
                        $responseData = $allVillagesResponse->json();
                        $allVillages = $this->extractApiData($responseData, 'desa');
                        
                        // Filter by district_id (kecamatan_id)
                        $villagesInDistrict = array_filter($allVillages, function($village) use ($districtId) {
                            return isset($village['kecamatan_id']) && $village['kecamatan_id'] == $districtId;
                        });
                        
                        $apiData = array_values($villagesInDistrict); // Re-index array
                        
                        if (!empty($apiData)) {
                            cache()->put($cacheKey, $apiData, 3600); // Cache for 1 hour
                            return $apiData;
                        }
                    }
                }
                
                if ($response->successful()) {
                    $responseData = $response->json();
                    // Handle different response structures
                    $apiData = $this->extractApiData($responseData, 'desa');
                    if (!empty($apiData) && is_array($apiData)) {
                        cache()->put($cacheKey, $apiData, 3600); // Cache for 1 hour
                        return $apiData;
                    }
                }
            } catch (\Exception $e) {
                \Log::info('Nusantara Kita API fetch failed, using database fallback', [
                    'service' => 'IndonesianAddressService',
                    'method' => 'getVillagesByDistrict',
                    'district_id' => $districtId,
                    'error' => \get_class($e)
                ]);
            }
        }
        
        // Fallback to local database with caching
        $dbResult = cache()->remember("villages_by_district_{$districtId}_db", 3600, function () use ($districtId) {
            return \App\Models\Village::where('district_id', $districtId)
                ->orderBy('name')
                ->select('id', 'name', 'code', 'postal_code')
                ->get()
                ->toArray();
        });
        
        cache()->put($cacheKey, $dbResult, 3600); // Cache the DB result too
        return $dbResult;
    }

    /**
     * Search for location by name - using local database as primary source
     */
    public function searchLocation($query)
    {
        // For search functionality, we'll use the database directly with cache based on query
        if (empty($query)) {
            return [];
        }

        $cacheKey = "location_search_" . md5($query);
        return cache()->remember($cacheKey, 300, function () use ($query) { // Cache for 5 minutes
            $results = [];

            if (!empty($query)) {
                $provinces = Province::where('name', 'LIKE', "%{$query}%")
                    ->select('id', 'name', 'code')
                    ->get()
                    ->toArray();

                $cities = City::where('name', 'LIKE', "%{$query}%")
                    ->select('id', 'name', 'code')
                    ->get()
                    ->toArray();

                $districts = District::where('name', 'LIKE', "%{$query}%")
                    ->select('id', 'name', 'code')
                    ->get()
                    ->toArray();

                $results = [
                    'provinces' => $provinces,
                    'cities' => $cities,
                    'districts' => $districts
                ];
            }

            return $results;
        });
    }
    
    /**
     * Helper method to extract data from different API response formats
     */
    private function extractApiData($responseData, $type)
    {
        // Handle different response formats
        if (is_array($responseData)) {
            // Check if it's a paginated response with data wrapper
            if (isset($responseData['data']) && is_array($responseData['data'])) {
                return $this->normalizeApiData($responseData['data'], $type);
            } 
            // Or if it's a direct array response
            elseif (isset($responseData[0]) && is_array($responseData[0])) {
                return $this->normalizeApiData($responseData, $type);
            }
        }
        
        return [];
    }
    
    /**
     * Normalize API data to match our expected format
     */
    private function normalizeApiData($apiData, $type)
    {
        $normalized = [];
        
        foreach ($apiData as $item) {
            $normalizedItem = [
                'id' => $item['id'] ?? $item['provinsi_id'] ?? $item['kota_kabupaten_id'] ?? $item['kecamatan_id'] ?? null,
                'name' => $item['name'] ?? $item['nama'] ?? $item['nama_provinsi'] ?? $item['nama_kota'] ?? $item['nama_kecamatan'] ?? $item['nama_desa'] ?? null,
                'code' => $item['code'] ?? $item['kode'] ?? null,
            ];
            
            // Add type-specific fields
            if ($type === 'desa' && isset($item['kode_pos'])) {
                $normalizedItem['postal_code'] = $item['kode_pos'];
            }
            
            $normalized[] = $normalizedItem;
        }
        
        return $normalized;
    }
}