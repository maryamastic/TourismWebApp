<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tourpackages;


class PackageController extends Controller
{
    public function index(){

        return view('frontend.package.show');
        
 }

 public function show($PackageType, $slug)
{
    // Query the database to retrieve the package based on PackageType and Slug
    $package = TourPackages::where('PackageType', $PackageType)
        ->where('slug', $slug)
        ->first();

    if (!$package) {
        // Handle the case where the package with the given PackageType and Slug is not found
        abort(404);
    }

    return view('frontend.package.show', compact('package'));
}






}





