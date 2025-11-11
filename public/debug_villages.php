<?php
// Simple debug script to check village data
require_once '../vendor/autoload.php';
require_once '../bootstrap/app.php';

use App\Models\Village;
use App\Models\District;

echo "<h2>Debug Village Data</h2>";

// Check if Village model exists
echo "<p>Total villages in DB: " . Village::count() . "</p>";

if (Village::count() > 0) {
    $sampleVillage = Village::first();
    echo "<p>Sample village: " . $sampleVillage->name . "</p>";
    echo "<p>District ID for sample: " . $sampleVillage->district_id . "</p>";
    
    // Check if corresponding district exists
    $district = District::find($sampleVillage->district_id);
    if ($district) {
        echo "<p>District for this village: " . $district->name . " (code: " . $district->code . ")</p>";
    } else {
        echo "<p>No corresponding district found for district_id: " . $sampleVillage->district_id . "</p>";
    }
} else {
    echo "<p>No villages found in database!</p>";
}

echo "<p>Sample districts:</p>";
$sampleDistricts = District::limit(5)->get();
foreach ($sampleDistricts as $dist) {
    $villageCount = Village::where('district_id', $dist->id)->count();
    echo "<p>- " . $dist->name . " (ID: " . $dist->id . ", Code: " . $dist->code . ") has " . $villageCount . " villages</p>";
}
?>