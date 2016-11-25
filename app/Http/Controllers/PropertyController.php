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
<<<<<<< HEAD

        $filter=$request->input('filter');
        if($filter != "") {
            $properties=Property::where('name','like',"%".$filter."%")->paginate(8);
            return response()->json(view('properties/properties', compact('properties'))->render());
        }
        $properties=Property::paginate(8);
        return response()->json(view('properties/properties', compact('properties'))->render());
=======
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
>>>>>>> 584e885858a9c4456521d0a09eb34caa7770fe57
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

<<<<<<< HEAD
        $property=Property::find($id);
        $comments = Comment::all();
        
        return view('properties/show',['property'=>$property, 'comments'=>$comments]);
=======


>>>>>>> 584e885858a9c4456521d0a09eb34caa7770fe57

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
