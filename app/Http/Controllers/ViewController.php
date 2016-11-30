<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //
    public function home(){
    	if (Auth::check()) {
    		//$properties=Property::paginate(8);
    		return redirect('/properties');
    		//return view('home', ['properties' => $properties]);
		}
        return view('auth/login');
    }
    public function createProperty(){
        return view('properties/create');
    }

}
