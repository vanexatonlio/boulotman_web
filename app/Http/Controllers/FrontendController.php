<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutus(){

   	     return view('frontend.aboutus');
   }
   
   public function contactus(){
         
         return view('frontend.contact');

   }

   public function services(){

   	      return view ('frontend.services');
   }

   public function booking(){
         return view ('frontend.booking');
   }
}
