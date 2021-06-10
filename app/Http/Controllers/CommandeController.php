<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(Auth::id);
        return view('panier');
    }


    public function addPanier(Request $request){
    // dd($request->dateget);
    //  $validatedData = $request->validate([
    //     'dateget' => 'required|min:3',
    //     'datereturn' => 'required|email',
    // ]);
    // dd($validatedData);
    // dd($validatedData);
     $aaa = DB::table('commandes')->insert(
        [
        'user_id' => Auth::id(),
        'car_id' => $request->id,
        'taken_time'=>$request->dateget,
        'return_time'=>$request->datereturn,

        ]
         
    );
    $car = DB::table('commandes')->where('user_id','=',Auth::id())->join('cars', 'commandes.car_id', '=', 'cars.id')->get();
    return view ('cart',[
        'car'=>$car
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
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
