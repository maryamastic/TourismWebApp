<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function index(){

        return view('frontend.contact');

    }

    public function  contact_mail_send(Request $request){

Mail::to('info@takpaktour.com')->send(new ContactMail($request));

return redirect('contact');

    }
}

