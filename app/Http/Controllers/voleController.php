<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vole;
class VoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voles= vole::get();
        return view('Admin.vole.index',[
            'voles'=>$voles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'depdate'=>'required',
            'arvdate'=>'required',
            'depplace'=>'required',
            'arvplace'=>'required',
            'plane'=>'required',
            'price'=>'required',
        ]);

        $vole=new Vole;
        $vole->date_dpr=$request->input('depdate');
        $vole->date_arv=$request->input('arvdate');
        $vole->lieu_depart=$request->input('depplace');
        $vole->lieu_arrivee=$request->input('arvplace');
        $vole->avion=$request->input('plane');
        $vole->prix=$request->input('price');
        $vole->save();
        return redirect()->route('voles.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        
        $voles= vole::where('id',$id)->get();
        return view('Admin.vole.edit',[
            'voles'=>$voles
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
            $newVoles=vole::find($req->id);
            $newVoles->date_dpr=$request->input('depdate');
            $newVoles->date_arv=$request->input('arvdate');
            $newVoles->lieu_depart=$request->input('dpr');
            $newVoles->lieu_arrivee=$request->input('arv');
            $newVoles->avion=$request->input('plane');
            $newVoles->prix=$request->input('price');
            $vole->save();
         return redirect()->route('voles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vole::destroy($id);
        return redirect()->route('voles.index');
           
    }
    
}
