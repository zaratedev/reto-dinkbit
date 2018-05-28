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
}
