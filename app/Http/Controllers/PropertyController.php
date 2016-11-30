<?php

namespace App\Http\Controllers;

use App\Property;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
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

        $filter=$request->input('filter');
        if($filter != "") {
            $properties=Property::where('name','like',"%".$filter."%")->paginate(8);
            return response()->json(view('properties/properties', compact('properties'))->render());
        }
        $properties=Property::paginate(8);
        return response()->json(view('properties/properties', compact('properties'))->render());
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

        $property=Property::find($id);
        $comments = Comment::all();
        
        return view('properties/show',['property'=>$property, 'comments'=>$comments]);

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
        $property=Property::find($id);
        return view('properties/edit',['property'=>$property]);
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
        $property=Property::find($id);
        $property->fill($request->all());
        $property->save();
        return view("properties/index");

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
