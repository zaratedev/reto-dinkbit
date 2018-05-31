<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function generateTableAmortization(Request $request)
    {
      return response()->json(['message' => 'OK']);
    }
}
