<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Modele;
use Redirect,Response;
use App\Car;
class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    function index()
    {
     $mod = Modele::get();
     $data = DB::table('cars')->simplePaginate(5);
        return view('rentparent',['modele'=>$mod], compact('data'));
    }

    public function fetchs(Request $request){
        // if($request->ajax()){
            // $cat = $request->mes;
           if($request->mes == ""){
               return view('rentp?page=1');
           }
           $data =  DB::table('cars')->where('description', 'LIKE', '%'.$request->mes.'%')->get();
        // $mod = Car::get();
        return $data;
        // return view('rentchild',[
        //     'cars'=>$car
        // ]);




        //ll valeur mta3 ll champ Search mahouch 9a33d yousl !!!!!!!!!!!!!----> down :))


        //    return response()->json(['success'=>'car  get susscc.']);
        // return 'test succs'+$request->mes;
      
        
     
    }

    function fetch(Request $request)
    {
        
     if($request->ajax())
     {
      $data = DB::table('cars')->simplePaginate(5);
         return view('rentchild',compact('data'))->render();
     }
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
    }
}
