<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function generateTableAmortization(Request $request)
    {
      $annualInterest = 0;
      switch ($request->fortnight) {
        case '8':
          $annualInterest = 83.35;
          $table = $this->calculatePayments($annualInterest, $request->rode, $request->fortnight);
          return response()->json(['table' => $table]);
          break;
        case '10':
          $annualInterest = 82.86;
          $table = $this->calculatePayments($annualInterest, $request->rode, $request->fortnight);
          return response()->json(['table' => $table]);
          break;
        case '12':
          $annualInterest = 82.35;
          $table = $this->calculatePayments($annualInterest, $request->rode, $request->fortnight);
          return response()->json(['table' => $table]);
        break;
      }
      return response()->json(['table' => null]);
    }

    public function calculatePayments($annualInterest, $rode, $fortnight)
    {
      $biweeklyInterest = round(($annualInterest / 24) / 100, 4);
      $biweeklyInterestIVA = round($biweeklyInterest * 1.16, 4);

      $outstandingBalance = intval($rode);

      $table = array();
      // Calcule payment
      $A1 = $biweeklyInterestIVA; #type of interest
      $B1 = intval($fortnight); #number of periods
      $C1 = intval($rode); #initial capital

      $payment1 = ($A1 * (pow( 1 + $A1, $B1)) * $C1);
      $payment2 = pow(1 + $A1, $B1) - 1;
      $payment = round($payment1 / $payment2, 2);
      // GENERATE TABLE
      for ($i = 1; $i <= $fortnight; $i++) {
        // we declare an auxiliary array
        $tableAuxiliary = array();
        // Calcule interest
        $interest = round($outstandingBalance * $biweeklyInterest, 2);
        // Calcule iva
        $iva = round($interest * 0.16, 2);
        // Calculate amortization
        $amortization = round($payment - $interest - $iva, 2);
        // Add atribute to array $tableAuxiliary
        $tableAuxiliary['numberPayment'] = $i;
        $tableAuxiliary['outstandingBalance'] = $outstandingBalance;
        $tableAuxiliary['amortization'] = $amortization;
        $tableAuxiliary['interest'] = $interest;
        $tableAuxiliary['iva'] = $iva;
        $tableAuxiliary['payment'] = $payment;
        // calculate unpaid balance
        $outstandingBalance = round($outstandingBalance - $amortization, 2);
        // Add array to array $table
        array_push($table, $tableAuxiliary);
      }

      return $table;
    }
}
