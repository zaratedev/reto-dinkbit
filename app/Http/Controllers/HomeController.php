<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }

    public function contact()
    {
      return view('contact');
    }

    public function quote()
    {
      return view('quote');
    }

    public function about()
    {
      return view('about');
    }

    public function services()
    {
      return view('services');
    }

    public function faqs()
    {
      return view('faqs');
    }
}
