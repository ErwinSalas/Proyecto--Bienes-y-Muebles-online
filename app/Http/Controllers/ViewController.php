<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function home(){
        $properties=Property::paginate(8);
        return view('home', ['properties' => $properties]);
    }
    public function createProperty(){

        return view('properties/create');

    }

}
