<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
    public function multy($number){
        $num = $number * 10;
        return view('multy',['result' => $num, 'myname' => 'nahin']);

    }
}
