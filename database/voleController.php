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
            // $file=$request->file('image');
            // $filename=$file->getClientOriginalName();
            // $filename=time().'.'.$filename;
            // $path=$file->storeAs('public',$filename);
            // Fileupload::create([
            //     'filename'=>$path,
            // ]);

            $validatedData = $request->validate([
                'date_dpr' => 'required|date|before:date_arv',
                'date_arv'=>'required|date|after:date_dpr',
                'lieu_depart' => 'required',
                'lieu_arrivee' => 'required',
                'avion' => 'required',
                'prix' => 'required',
                'seats' => 'required',
                'image'=>'file|required',
                
                
            ]);
            
            $vole=$validatedData;
            
            $vole = vole::create($vole);
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
    public function update(Request $request,$id)
    {

            $validateData =  $request->validate([
                'date_dpr'=>'required|date|before:date_arv',
                'date_arv'=>'required|date|after:date_dpr',
                'lieu_depart'=>'required',
                'lieu_arrivee'=>'required',
                'avion'=>'required',
                'prix'=>'required',
                'seats'=>'required'
           ]);
           //Mass assignement

        $voles = vole::find($id);

        $voles['date_dpr']=$validateData['date_dpr'];
        $voles['date_arv']=$validateData['date_arv'];
        $voles['lieu_depart']=$validateData['lieu_depart'];
        $voles['lieu_arrivee']=$validateData['lieu_arrivee'];
        $voles['avion']=$validateData['avion'];
        $voles['prix']=$validateData['prix'];
        $voles['seats']=$validateData['seats'];

        // if($request['event_image']){
        //     $event['event_image'] = $request['event_image']->store('uploads', 'public');
        // }

        $voles->update();
        return redirect()->route('voles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(vole $vole,$id)
    {
        $vole=vole::find($id);
        $vole->delete();
        return redirect()->back();
           
    }
    
}
