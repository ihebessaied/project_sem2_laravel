<?php

namespace App\Http\Controllers\Admin;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Modele;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = DB::table('cars')->Paginate(10);
        return view('admin.car.index',[
            'car'=>$cars
        ]);
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
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
        // $validatedData = $request->validate([
        //     'Matricule' => 'required|min:3',
        //     'nbplace' => 'required',
        //     'nbgame' => 'required',
        //     'prix' => 'required',
        //     'description' => 'required|min:15',
        // ]);
        // $Car->matricule = $request->Matricule;
        // $userFind = DB::table('users')->where('id','=',$user)->first();
        // $message = "";
        // return view ('Admin.customer.edit',['data' => $userFind,'messageup'=>$message]);

        $mod = Modele::get();
        $message='';
        return view('Admin.car.edit',[
            'modele'=>$mod,
            'data'=>$car,
            'messageup'=>$message
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$car)
    {
        //
           $validatedData = $request->validate([
            'Matricule' => 'required|min:3',
            'modele'=>'required',
            'nbplace' => 'required',
            'nbgame' => 'required',
            'prix' => 'required',
            // 'image'=>'required',
            'description' => 'required|min:15'
        ]);
        $update = DB::table('cars') ->where('id', $car) ->limit(1) ->update( [ 
            'matricule' => $validatedData['Matricule'],
            'modele_id' => $validatedData['modele'],
            'description' => $validatedData['description'],
            'nbplace' => $validatedData['nbplace'],
            'mane_game' => $validatedData['nbgame'],
            'prix' => $validatedData['prix']  

            ]);
            $carFind = DB::table('cars') ->where('id','=', $car)->first();
        // $car->update($validatedData);
        $mod = Modele::get();
        $message = "Customer is update ";
        return view ('Admin.car.edit',
        [
            'data' => $carFind,
            'messageup'=>$message,
            'modele'=>$mod
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
         $car->delete();
         return redirect()->route('cars.index');
    }
}
