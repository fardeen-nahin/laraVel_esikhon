<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Person;

class PersonsCotroller extends Controller
{
    public function index(){

        $person_list = person::all();
        dd($person_list);
        
    }
}