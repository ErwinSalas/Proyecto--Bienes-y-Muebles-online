<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function home(){
        $properties=Property::all();
        return view('home', ['properties' => $properties]);

    }



}
