<?php

namespace App\Http\Controllers;

use App\Models\Village;
use App\Services\IndonesianAddressService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiAddressController extends Controller
{
    protected $addressService;

    public function __construct(IndonesianAddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    /**
     * Get all provinces
     */
    public function getProvinces()
    {
        $provinces = $this->addressService->getProvinces();
        return response()->json($provinces);
    }

    /**
     * Get cities by province ID
     */
    public function getCitiesByProvince($provinceId)
    {
        $cities = $this->addressService->getCitiesByProvince($provinceId);
        return response()->json($cities);
    }

    /**
     * Get districts by city ID
     */
    public function getDistrictsByCity($cityId)
    {
        $districts = $this->addressService->getDistrictsByCity($cityId);
        return response()->json($districts);
    }

    /**
     * Get villages by district ID
     */
    public function getVillagesByDistrict($districtId)
    {
        $villages = $this->addressService->getVillagesByDistrict($districtId);
        return response()->json($villages);
    }

    /**
     * Search for location by name
     */
    public function searchLocation(Request $request)
    {
        $query = $request->input('q');
        $results = $this->addressService->searchLocation($query);
        return response()->json($results);
    }
}
