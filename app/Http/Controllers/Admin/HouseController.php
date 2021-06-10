<?php

namespace App\Http\Controllers\Admin;
use App\House;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.houses-admin.index', ['houses' => House::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.houses-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'Emplacement'=>'required',
            'nombre_chambre' => 'required',
            'status' => 'required',
            'taken_time' => 'required|date|before:return_time',
            'return_time' => 'required|date|after:event_start',
            'house_image' => 'file|required',
            'prix' => 'required',
        ]);
        
        $house=$validatedData;
        $house['house_image'] = $request['house_image']->store('uploads', 'public');
        $house = House::create($house);
        return redirect()->route('houses-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HouseAdmin  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $house = House::find($id);
        return view('admin.houses-admin.show',['house' => $house]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($houseAdmin)
    {
        //
        $houss = DB::table('houses')->where('id', '=', $houseAdmin)->get();
        return view('Admin.houses-admin.edit',[
            'hous'=>$houss
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $validatedData = $request->validate([
            'nameh' => 'required|min:3',
            'Emplacementh'=>'required',
            'nombre_chambreh' => 'required',
            'statush' => 'required',
            'taken_timeh' => 'required',
            'return_timeh' => 'required',
            'prixh' => 'required'
        ]);


        $house = House::find($id);

        $house['name']=$validatedData['nameh'];
        $house['Emplacement']=$validatedData['Emplacementh'];
        $house['nombre_chambre']=$validatedData['nombre_chambreh'];
        $house['status']=$validatedData['statush'];
        $house['taken_time']=$validatedData['taken_timeh'];
        $house['return_time']=$validatedData['return_timeh'];
        $house['prix']=$validatedData['prixh'];

        if($request['house_image']){
            $house['house_image'] = $request['house_image']->store('uploads', 'public');
        }

        $house->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house,$id)
    {
        $house=House::find($id);
        $house->delete();
        return redirect()->route('houses-admin.index');
    }
}
