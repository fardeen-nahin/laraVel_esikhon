<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
   public function sum($n1, $n2){
        $result = $n1 + $n2;
        return view('sum', compact('result'
    ));
   }
}
