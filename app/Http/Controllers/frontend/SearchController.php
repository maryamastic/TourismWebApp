<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tourpackages;


class SearchController extends Controller
{
   
    public function searchResults(Request $request)
    {
        $packagePrice = $request->input('package_price');
        $packageType = $request->input('package_type');


        $query = Tourpackages::query();
    
        // Convert packagePrice switch statement to if-else
        if ($packagePrice === 'custom' && $packageType === 'Mountaineering') {

            $query->where(function ($query) {
                $query->where('PackagePrice', 'custom')->where('PackageType', 'Mountaineering');
            });
    
        }
        elseif ($packagePrice === 'custom' && $packageType === 'RockClimbing') {

            $query->where(function ($query) {
                $query->where('PackagePrice', 'custom')->where('PackageType', 'RockClimbing');
            });
    
        }
        

        elseif ($packagePrice === 'custom' && $packageType === 'Tours') {

            $query->where(function ($query) {
                $query->where('PackagePrice', 'custom')->where('PackageType', 'Tours');
            });
    
        }
        

        elseif ($packagePrice === 'custom' && $packageType === 'Trekking') {

            $query->where(function ($query) {
                $query->where('PackagePrice', 'custom')->where('PackageType', 'Trekking');
            });
    
        }


        elseif ($packagePrice === 'custom' && $packageType === 'SpecialInterest') {

            $query->where(function ($query) {
                $query->where('PackagePrice', 'custom')->where('PackageType', 'SpecialInterest');
            });
    
        }

        elseif ($packagePrice === 'taylormade' && $packageType === 'Mountaineering') {

            $query->where(function ($query) {
                $query->where('PackagePrice', '!=', 'custom')
                      ->where('PackageType', 'Mountaineering');
            });
    
        }
        
        elseif ($packagePrice === 'taylormade' && $packageType === 'RockClimbing') {

            $query->where(function ($query) {
                $query->where('PackagePrice', '!=', 'custom')
                      ->where('PackageType', 'RockClimbing');
            });
    
        }
        elseif ($packagePrice === 'taylormade' && $packageType === 'Tours') {

            $query->where(function ($query) {
                $query->where('PackagePrice', '!=', 'custom')
                      ->where('PackageType', 'Tours');
            });
    
        }

        elseif ($packagePrice === 'taylormade' && $packageType === 'Trekking') {

            $query->where(function ($query) {
                $query->where('PackagePrice', '!=', 'custom')
                      ->where('PackageType', 'Trekking');
            });
    
        }
        elseif ($packagePrice === 'taylormade' && $packageType === 'SpecialInterest') {

            $query->where(function ($query) {
                $query->where('PackagePrice', '!=', 'custom')
                      ->where('PackageType', 'SpecialInterest');
            });
    
        }
        elseif ($packagePrice === 'all' && $packageType === 'Mountaineering' ) {

            $query->where(function ($query) {
                $query->where('PackageType', 'Mountaineering');
            });
    
        }
        elseif ($packagePrice === 'all' && $packageType === 'RockClimbing' ) {

            $query->where(function ($query) {
                $query->where('PackageType', 'RockClimbing');
            });
    
        }
        elseif ($packagePrice === 'all' && $packageType === 'Tours' ) {

            $query->where(function ($query) {
                $query->where('PackageType', 'Tours');
            });
    
        }

        elseif ($packagePrice === 'all' && $packageType === 'Trekking' ) {

            $query->where(function ($query) {
                $query->where('PackageType', 'Trekking');
            });
    
        }
        elseif ($packagePrice === 'all' && $packageType === 'SpecialInterest' ) {

            $query->where(function ($query) {
                $query->where('PackageType', 'SpecialInterest');
            });
    
        }



        $packages = $query->get(); // Execute the query and get results as a collection

        // Check if the collection is empty
        if ($packages->isEmpty()) {
            // Handle the case when no packages are found
            $packages = []; 
            return view('frontend.search.results', compact('packages'));
            // Pass null or empty data to the view
        }
        return view('frontend.search.results', compact('packages'));
       

    }
    
    
    
    
    
    
    
        // Perform database queries and fetch relevant packages based on selected options
        // Store the results in a variable (e.g., $packages)
    
    }







