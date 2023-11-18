<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tourpackages;


class TrekkingController extends Controller
{
    public function index(){

        return view('frontend.trekking');
        
 }



}





