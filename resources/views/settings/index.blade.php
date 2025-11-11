<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaturan Perusahaan') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Informasi Perusahaan</h3>
                    
                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong>Oops! Ada yang salah:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('superuser.settings.update') }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <x-input-label for="company_name" :value="__('Nama Perusahaan')" />
                                <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name', $settings->company_name)" required />
                            </div>
                            
                            <div>
                                <x-input-label for="company_phone" :value="__('Nomor Telepon')" />
                                <x-text-input id="company_phone" class="block mt-1 w-full" type="text" name="company_phone" :value="old('company_phone', $settings->company_phone)" required />
                            </div>
                            
                            <div>
                                <x-input-label for="company_email" :value="__('Email Perusahaan')" />
                                <x-text-input id="company_email" class="block mt-1 w-full" type="email" name="company_email" :value="old('company_email', $settings->company_email)" required />
                            </div>
                            
                            <div>
                                <x-input-label for="tax_number" :value="__('Nomor NPWP')" />
                                <x-text-input id="tax_number" class="block mt-1 w-full" type="text" name="tax_number" :value="old('tax_number', $settings->tax_number)" />
                            </div>
                        </div>
                        
                        <!-- Indonesian Address Structure -->
                        <div class="mb-6">
                            <h4 class="text-md font-semibold mb-4">Alamat Perusahaan</h4>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <x-input-label for="province_id" :value="__('Provinsi')" />
                                    <select id="province_id" name="province_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="">-- Pilih Provinsi --</option>
                                        @foreach($provinces as $province)
                                            <option value="{{ $province->id }}" {{ old('province_id', $settings->province_id) == $province->id ? 'selected' : '' }}>
                                                {{ $province->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <x-input-label for="city_id" :value="__('Kota/Kabupaten')" />
                                    <select id="city_id" name="city_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" {{ $settings->province_id ? '' : 'disabled' }}>
                                        <option value="">-- Pilih Kota/Kabupaten --</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}" {{ old('city_id', $settings->city_id) == $city->id ? 'selected' : '' }}>
                                                {{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <x-input-label for="district_id" :value="__('Kecamatan')" />
                                    <select id="district_id" name="district_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" {{ $settings->city_id ? '' : 'disabled' }}>
                                        <option value="">-- Pilih Kecamatan --</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->id }}" {{ old('district_id', $settings->district_id) == $district->id ? 'selected' : '' }}>
                                                {{ $district->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <x-input-label for="village_id" :value="__('Desa/Kelurahan')" />
                                    <select id="village_id" name="village_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" {{ $settings->district_id ? '' : 'disabled' }}>
                                        <option value="">-- Pilih Desa/Kelurahan --</option>
                                        @foreach($villages as $village)
                                            <option value="{{ $village->id }}" {{ old('village_id', $settings->village_id) == $village->id ? 'selected' : '' }}>
                                                {{ $village->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <x-input-label for="postal_code" :value="__('Kode Pos')" />
                                    <x-text-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code', $settings->postal_code)" 
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5)" />
                                </div>

                                <div>
                                    <x-input-label for="street_name" :value="__('Nama Jalan')" />
                                    <x-text-input id="street_name" class="block mt-1 w-full" type="text" name="street_name" :value="old('street_name', $settings->street_name)" />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <x-input-label for="building" :value="__('Gedung')" />
                                    <x-text-input id="building" class="block mt-1 w-full" type="text" name="building" :value="old('building', $settings->building)" />
                                </div>
                                <div>
                                    <x-input-label for="company_number" :value="__('No Perusahaan')" />
                                    <x-text-input id="company_number" class="block mt-1 w-full" type="text" name="company_number" :value="old('company_number', $settings->company_number)" />
                                </div>
                            </div>

                            <div>
                                <x-input-label for="address_details" :value="__('Detail Lainnya')" />
                                <textarea id="address_details" name="address_details" rows="2" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('address_details', $settings->address_details) }}</textarea>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Contoh: Gedung A, Lantai 3, Unit 5, atau informasi tambahan alamat</p>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-md font-semibold mb-3">Informasi Rekening Bank</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <x-input-label for="bank_account_name" :value="__('Atas Nama')" />
                                    <x-text-input id="bank_account_name" class="block mt-1 w-full" type="text" name="bank_account_name" :value="old('bank_account_name', $settings->bank_account_name)" />
                                </div>
                                
                                <div>
                                    <x-input-label for="bank_account_number" :value="__('Nomor Rekening')" />
                                    <x-text-input id="bank_account_number" class="block mt-1 w-full" type="text" name="bank_account_number" :value="old('bank_account_number', $settings->bank_account_number)" />
                                </div>
                                
                                <div>
                                    <x-input-label for="bank_name" :value="__('Nama Bank')" />
                                    <x-text-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" :value="old('bank_name', $settings->bank_name)" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <x-primary-button type="submit">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const provinceSelect = document.getElementById('province_id');
            const citySelect = document.getElementById('city_id');
            const districtSelect = document.getElementById('district_id');
            const villageSelect = document.getElementById('village_id');
            const postalCodeInput = document.getElementById('postal_code');
            let allDistricts = []; // Store all districts for the selected city
            let allVillages = []; // Store all villages for the selected district
            
            // Function to fetch provinces
            function loadProvinces() {
                fetch('/api/provinces')
                    .then(response => response.json())
                    .then(data => {
                        // Clear existing options except the first one
                        provinceSelect.innerHTML = '<option value="">-- Pilih Provinsi --</option>';
                        
                        data.forEach(province => {
                            const option = document.createElement('option');
                            option.value = province.id;
                            option.textContent = province.name;
                            
                            if ('{{ old('province_id', $settings->province_id ?? '') }}' == province.id) {
                                option.selected = true;
                            }
                            
                            provinceSelect.appendChild(option);
                        });
                        
                        // Initialize city dropdown if province is already selected
                        loadCitiesForProvince(provinceSelect.value);
                        
                        // Initialize village dropdown if all parent levels are selected
                        if (districtSelect.value) {
                            loadVillagesForDistrict(districtSelect.value);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching provinces:', error);
                    });
            }
            
            // Function to load cities for a specific province
            function loadCitiesForProvince(provinceId) {
                if (provinceId) {
                    fetch(`/api/cities/${provinceId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Clear city options except the first one
                            citySelect.innerHTML = '<option value="">-- Pilih Kota/Kabupaten --</option>';
                            
                            data.forEach(city => {
                                const option = document.createElement('option');
                                option.value = city.id;
                                option.textContent = city.name;
                                
                                if ('{{ old('city_id', $settings->city_id ?? '') }}' == city.id) {
                                    option.selected = true;
                                }
                                
                                citySelect.appendChild(option);
                            });
                            
                            citySelect.disabled = false;
                            
                            // Initialize district dropdown if city is already selected
                            if (citySelect.value) {
                                loadDistrictsForCity(citySelect.value);
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching cities:', error);
                        });
                } else {
                    citySelect.innerHTML = '<option value="">-- Pilih Kota/Kabupaten --</option>';
                    districtSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                    villageSelect.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
                    citySelect.disabled = true;
                    districtSelect.disabled = true;
                    villageSelect.disabled = true;
                    postalCodeInput.disabled = true;
                }
            }
            
            // Function to load districts for a specific city
            function loadDistrictsForCity(cityId) {
                if (cityId) {
                    // Clear district options except the first one
                    districtSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                    allDistricts = [];
                    
                    fetch(`/api/districts/${cityId}`)
                        .then(response => response.json())
                        .then(data => {
                            allDistricts = data; // Store all districts data
                            
                            data.forEach(district => {
                                const option = document.createElement('option');
                                option.value = district.id;
                                option.textContent = district.name;
                                
                                if ('{{ old('district_id', $settings->district_id ?? '') }}' == district.id) {
                                    option.selected = true;
                                }
                                
                                districtSelect.appendChild(option);
                            });
                            
                            districtSelect.disabled = false;
                            
                            // Initialize village dropdown if district is already selected
                            if (districtSelect.value) {
                                loadVillagesForDistrict(districtSelect.value);
                            } else {
                                // Clear village dropdown if district is cleared
                                villageSelect.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
                                villageSelect.disabled = true;
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching districts:', error);
                        });
                } else {
                    districtSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                    villageSelect.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
                    allDistricts = [];
                    allVillages = [];
                    districtSelect.disabled = true;
                    villageSelect.disabled = true;
                    postalCodeInput.disabled = true;
                }
            }
            
            // Function to load villages for a specific district
            function loadVillagesForDistrict(districtId) {
                if (districtId) {
                    // Clear village options except the first one
                    villageSelect.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
                    allVillages = [];
                    
                    // Use direct fetch to app's local database instead of external API
                    fetch(`/api/villages/${districtId}`)
                        .then(response => response.json())
                        .then(data => {
                            allVillages = data; // Store all villages data
                            
                            if (data.length > 0) {
                                data.forEach(village => {
                                    const option = document.createElement('option');
                                    option.value = village.id;
                                    option.textContent = village.name;
                                    
                                    if ('{{ old('village_id', $settings->village_id ?? '') }}' == village.id) {
                                        option.selected = true;
                                        
                                        // Auto-populate postal code if available
                                        if (village.postal_code) {
                                            postalCodeInput.value = village.postal_code;
                                            postalCodeInput.disabled = false;
                                        }
                                    }
                                    
                                    villageSelect.appendChild(option);
                                });
                                villageSelect.disabled = false;
                            } else {
                                // Still show the empty option but enable the dropdown
                                villageSelect.disabled = false;
                                console.log('No villages found for this district');
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching villages:', error);
                            // In case of API failure, still enable the select with no options
                            villageSelect.disabled = false;
                        });
                } else {
                    villageSelect.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
                    allVillages = [];
                    villageSelect.disabled = true;
                }
            }
            
            // Function to fetch cities based on selected province
            provinceSelect.addEventListener('change', function() {
                loadCitiesForProvince(this.value);
            });
            
            // Function to fetch districts based on selected city
            citySelect.addEventListener('change', function() {
                loadDistrictsForCity(this.value);
            });
            
            // Function to fetch villages based on selected district
            districtSelect.addEventListener('change', function() {
                loadVillagesForDistrict(this.value);
            });
            
            // Function to handle village change and populate postal code
            villageSelect.addEventListener('change', function() {
                const selectedVillageId = this.value;
                
                if (selectedVillageId && allVillages.length > 0) {
                    const selectedVillage = allVillages.find(v => v.id == selectedVillageId);
                    if (selectedVillage && selectedVillage.postal_code) {
                        postalCodeInput.value = selectedVillage.postal_code;
                        postalCodeInput.disabled = false;
                    } else {
                        postalCodeInput.value = '';
                        postalCodeInput.disabled = false; // Still allow manual input if no postal code is found
                    }
                } else {
                    postalCodeInput.value = '';
                    postalCodeInput.disabled = false; // Keep enabled for manual input
                }
            });
            
            // Load provinces on page load
            loadProvinces();
        });
    </script>
</x-app-layout>