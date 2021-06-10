<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Modele;
use Redirect,Response;
use App\Car;
use Illuminate\Support\Arr;
use Session;
class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

     public $dateGet='';
     public $dateReturn='';

    function index() //array c1
    {
    //     $a=[];
    //    $a = session()->pull('m');
     $mod = Modele::get();
    //  $data = Car::simplePaginate(5);
    // $this->dateGet='2000-10-30';
     $aa =  DB::table('cars')->where('penalite',0)->get();
    //  ->join('modeles', 'cars.modele_id', '=', 'modeles.id')
        return view('rentparent',
        [
            'data'=>$aa,
            'modele'=>$mod,

        ]);

    dd($this->dateGet);
    }


    public function fetchsNath(Request $request){
        $data =  Car::simplePaginate(5);

        return Response::json($data);
        
    }





    public function fetchs(Request $request){

           $data =  DB::table('cars')->where('penalite',0)->where('description', 'LIKE', '%'.$request->mes.'%')->get();
    
        return $data;


        




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
    public function add(String $aa,String $s){
        $this->dateGet = $aa;
        // $this->dateGet = $s;
    }

//     public function submit(Request $req){
//     // return view('aaa',[
//     //     'bb'=>$req->name,
//     //     'zz'=>$req->pass,
//     // ]);
//     // seesion()->put('info',$req->input());
//     // seesion()->push('m',$req->dater);
//     // $arrayd = Arr::collapse([[$req->dateg, $req->dater]]);
//     add($req->dateg,$req->dater);
// //  dd($this->dateGet);
//     return redirect()->route('rentp.index');
//     // return $arrayd;
//     }

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

    //Car details 
    public function cardatails($id){
        $data =  DB::table('cars')->where('cars.id', '=', $id)->get();
        return view('cardetail',[
            'cardd'=>$data
        ]);
    }


}
