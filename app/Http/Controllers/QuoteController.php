<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function generateTableAmortization(Request $request)
    {
      $annualInterest = 0;
      $biweeklyInterest = 0;
      $biweeklyInterestIVA = 0;

      switch ($request->fortnight) {
        case '8':
          $annualInterest = 83.35;
          $biweeklyInterest = round(($annualInterest / 24), 2);
          $biweeklyInterestIVA = round(($biweeklyInterest * 1.16), 2);

          $table = array();
          // GENERATE TABLE
          for ($i = 1; $i <= 8; $i++) {

            $interest = $request->rode * $biweeklyInterest;
            
          }


          return response()->json(['message' => '8', 'annualInterest' => $annualInterest, 'biweeklyInterest' => $biweeklyInterest, 'biweeklyInterestIVA' => $biweeklyInterestIVA]);
          break;
        case '10':
          // code...
          return response()->json(['message' => '10']);
          break;
        case '12':
          // code...
          return response()->json(['message' => '12']);
        break;
      }
      return response()->json(['message' => 'OK']);
    }
}
