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
        return view('Admin.houses-admin.index', ['houses' => House::paginate(3)]);
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
    public function update(Request $request,$houseAdmin)
    {
        //
        $validatedData = $request->validate([
            'nameh' => 'required|min:3',
            'Emplacementh'=>'required',
            'nombre_chambreh' => 'required',
            'statush' => 'required',
            'taken_timeh' => 'required',
            // 'image'=>'required',
            'return_timeh' => 'required',
            'prixh' => 'required'
        ]);


        $update = DB::table('houses') ->where('id', $houseAdmin) ->limit(1) ->update( [ 
            'name' => $validatedData['nameh'],
            'Emplacement' => $validatedData['Emplacementh'],
            'nombre_chambre' => $validatedData['nombre_chambreh'],
            'status' => $validatedData['statush'],
            'taken_time' => $validatedData['taken_timeh'],
            'return_time' => $validatedData['return_timeh'],
            'prix' => $validatedData['prixh'],
            
            
            

            ]);

            $housFind = DB::table('houses') ->where('id', $houseAdmin)->first();

            // return view ('Admin.houses-admin.edit',
            // [
            //     'hous' => $housFind,
            // ]);
            return redirect('houses-admin/'.$houseAdmin.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $houseAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $houseAdmin)
    {
        //
    }
}
