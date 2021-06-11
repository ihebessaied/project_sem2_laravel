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
          $mess =''; 
        $mod = Modele::get();
        return view('Admin.car.addcar',[
            'modele'=>$mod,
            'messageup'=>$mess
        ]);
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
         $validatedData = $request->validate([
            'matricule' => 'required|min:3',
            'modele_id'=>'required',
            'nbplace' => 'required|integer|between:2,5',
            'nbgame' => 'required|integer|between:2,6',
            'prix' => 'required',
            'image' => 'required|file',
            'description' => 'required|min:15',
        ]);
        $car=$validatedData;
        $car['image'] = $request['image']->store('uploads', 'public');
        // dd($car['image']);
        //  dd($validatedData);
        // $car =Car::create($validatedData);
        // Car::create($car);
        $update =Car::create( [ 
            'matricule' => $car['matricule'],
            'modele_id' => $car['modele_id'],
            'description' => $car['description'],
            'nbplace' => $car['nbplace'],   
            'image' => $car['image'],
            'mane_game' => $car['nbgame'],
            'prix' => $car['prix']  

            ]);

        return redirect()->route('cars.create')->with('messageup', 'State saved correctly!!!');
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
            'nbplace' => 'required|integer|between:2,5',
            'nbgame' => 'required|integer|between:2,6',
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
        $message = "Car is update ";
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
