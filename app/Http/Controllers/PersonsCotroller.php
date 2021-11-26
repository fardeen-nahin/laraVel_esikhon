<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Person;

class PersonsCotroller extends Controller
{
    public function index(){

        $person_list = person::all();
        return view('personlist', compact('person_list'));
        
    }
}