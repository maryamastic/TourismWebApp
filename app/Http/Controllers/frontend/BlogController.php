<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogs;


class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog');

        
    }

    public function showblog($id,$slug)
{
    // Query the database to retrieve the package based on PackageType and Slug
    $blog = blogs::where('id' ,$id)
                   ->where('slug', $slug)->first();

    if (!$blog) {
        // Handle the case where the package with the given PackageType and Slug is not found
        abort(404);
    }

    return view('frontend.blog.showblog', compact('blog'));
}
}
