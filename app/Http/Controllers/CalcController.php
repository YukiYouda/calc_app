<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result ($num1, $operator, $num2)
    {
        if ($operator === 'addition') {
            $total = $num1 + $num2;
        } elseif ($operator === 'subtraction') {
            $total = $num1 - $num2;
        } elseif ($operator === 'multiplication') {
            $total = $num1 * $num2;
        } elseif ($operator === 'division') {
            $total = $num1 / $num2; 
        } 

        return view('result', ['total' => $total
        ]);
    }
}
