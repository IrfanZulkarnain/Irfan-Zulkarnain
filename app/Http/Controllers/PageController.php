<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage() {
        
        return view('/pages/landingPage');
    }

    public function aboutPage() {
        
        return view('/pages/about');
    }

    public function contactUsPage() {
        
        return view('/pages/contactUs');
    }

    public function FAQ() {
        
        return view('/pages/FAQ');
    }

    
}
