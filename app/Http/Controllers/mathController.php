<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
    public function sum($num1, $num2){

         $result = $num1 + $num2;
        return view('sum', ['result' => $result]);

    }

    public function sub(){
        return view('sub');
    }
    public function mul(){
        return view('mul');
    }
}
