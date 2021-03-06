<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;

class PropertyController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(Request $request)
    {
        //
        /*$properties=Property::all();
        return response()->json(
            $properties->toArray()
        );*/
        $properties=Property::paginate(4);
        if($request->ajax()) {
            return response()->json(view('properties/properties', compact('properties'))->render());
        }
        return view("properties/properties", compact("properties")->render());
    }


    public function index()
    {
        //
        return view("properties/index");

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Property::create($request->all());
        return $this->index($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Property::destroy($id);

        return response()->json(["Mensaje"=>"Listo"]);


    }
    public function verProductos($id){

    }
}
