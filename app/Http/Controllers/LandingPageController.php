<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Vendor;
use App\Models\Service;
use App\Models\Venue;
use App\Models\CompanySetting;

class LandingPageController extends Controller
{
    public function index()
    {
        // Check if user is authenticated
        $user = auth()->user();

        // For authenticated clients, we might want to show additional content
        if ($user && $user->hasRole('Client')) {
            // Client-specific enhancements can go here
            $showClientDashboardAccess = true;
        } else {
            $showClientDashboardAccess = false;
        }

        // Mengambil data portfolio, venue, dan vendor
        $portfolios = Portfolio::limit(6)->get();
        $venues = Venue::limit(8)->get();

        // Get main vendors for the main vendor section (first 8 vendors)
        $vendors = Vendor::with(['user', 'serviceType'])
                        ->whereNotNull('user_id')
                        ->where('is_active', true) // Only show active vendors
                        ->whereHas('user', function($query) {
                            $query->whereHas('roles', function($roleQuery) {
                                $roleQuery->where('name', 'Vendor');
                            });
                        })
                        // Prioritize vendors with complete business profiles
                        ->orderByRaw('CASE WHEN brand_name IS NOT NULL AND logo_path IS NOT NULL THEN 0 ELSE 1 END')
                        ->orderBy('created_at', 'desc')
                        ->limit(8)
                        ->get()
                        ->map(function ($vendor) {
                            // Add placeholder rating for display purposes
                            $vendor->average_rating = 4.5; // Placeholder average rating
                            $vendor->total_reviews = rand(10, 100); // Placeholder number of reviews

                            // Ensure contact information is available
                            $vendor->display_name = $vendor->brand_name ?? ($vendor->user ? $vendor->user->name : $vendor->contact_person);
                            $vendor->display_category = $vendor->serviceType ? $vendor->serviceType->name : $vendor->category;

                            return $vendor;
                        });

        // Get additional vendors for the second vendor section (remaining vendors)
        $additionalVendors = Vendor::with(['user', 'serviceType'])
                        ->whereNotNull('user_id')
                        ->where('is_active', true) // Only show active vendors
                        ->whereHas('user', function($query) {
                            $query->whereHas('roles', function($roleQuery) {
                                $roleQuery->where('name', 'Vendor');
                            });
                        })
                        ->orderByRaw('CASE WHEN brand_name IS NOT NULL AND logo_path IS NOT NULL THEN 0 ELSE 1 END')
                        ->orderBy('created_at', 'desc')
                        ->offset(8) // Skip the first 8 vendors to show different ones
                        ->limit(6)
                        ->get()
                        ->map(function ($vendor) {
                            // Add placeholder rating for display purposes
                            $vendor->average_rating = 4.5; // Placeholder average rating
                            $vendor->total_reviews = rand(10, 100); // Placeholder number of reviews

                            // Ensure contact information is available
                            $vendor->display_name = $vendor->brand_name ?? ($vendor->user ? $vendor->user->name : $vendor->contact_person);
                            $vendor->display_category = $vendor->serviceType ? $vendor->serviceType->name : $vendor->category;

                            return $vendor;
                        });

        // Ambil data company settings
        $companySetting = CompanySetting::first();

        return view('landing-page.index', compact('portfolios', 'venues', 'vendors', 'additionalVendors', 'companySetting', 'showClientDashboardAccess'));
    }
}
