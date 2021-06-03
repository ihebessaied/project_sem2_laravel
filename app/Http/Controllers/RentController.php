<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    //  $data = Car::simplePaginate(5);
     $aa =  DB::table('cars')->join('modeles', 'cars.modele_id', '=', 'modeles.id')->simplePaginate(5);
        return view('rentparent',
        [
            'data'=>$aa,
            'modele'=>$mod
        ]);
    }


    public function fetchsNath(Request $request){
        $data =  Car::simplePaginate(5);
        // $output = '';
        //    foreach($data as $row){
        //        $output+='<article class="card card-product-list">
        //        <div class="row no-gutters">
        //            <aside class="col-md-3">
        //            <a href="#" class="img-wrap"><img src="'.$row->image.'"></a>
        //            </aside> <!-- col.// -->
        //            <div class="col-md-6">
        //                <div class="info-main">
        //                    <a href="#" class="h5 title">'.$row->modele_id.'  </a>
        //                    <div class="rating-wrap mb-3">
        //                        <ul class="rating-stars">
        //                            <li style="width:80%" class="stars-active"> 
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> 
        //                            </li>
        //                            <li>
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> 
        //                            </li>
        //                        </ul>
        //                        <div class="label-rating">7/10</div>
        //                    </div> <!-- rating-wrap.// -->
       
        //                <p> '.$row->description.'</p>
        //                </div> <!-- info-main.// -->
        //            </div> <!-- col.// -->
        //            <aside class="col-sm-3">
        //                <div class="info-aside">
        //                    <div class="price-wrap">
        //                        <span class="price h5"> '.$row->prix.' TND </span>	
        //                        <del class="price-old"> $85</del>
        //                    </div> <!-- info-price-detail // -->
        //                    <p class="text-success">Free shipping</p>
        //                    <br>
        //                    <p>
        //                        <a href="#" class="btn btn-primary btn-block"> Details </a>
        //                        <a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> 
        //                            <span class="text">Add to wishlist</span></a>
        //                    </p>
        //                </div> <!-- info-aside.// -->
        //            </aside> <!-- col.// -->
        //        </div> <!-- row.// -->
        //    </article> <!-- card-product .// -->';
        //    }
        //    return response()->json($output);
        return Response::json($data);
        
    }

    public function fetchs(Request $request){
        // if($request->ajax()){
            // $cat = $request->mes;
        //    if($request->mes == ""){
        //        return view('rentp?page=1');
        //    }
           $data =  DB::table('cars')->where('description', 'LIKE', '%'.$request->mes.'%')->get();
        //    $output ='';
        //    foreach($data as $row){
        //        $output+='<article class="card card-product-list">
        //        <div class="row no-gutters">
        //            <aside class="col-md-3">
        //            <a href="#" class="img-wrap"><img src="'.$row->image.'"></a>
        //            </aside> <!-- col.// -->
        //            <div class="col-md-6">
        //                <div class="info-main">
        //                    <a href="#" class="h5 title">'.$row->modele_id.'  </a>
        //                    <div class="rating-wrap mb-3">
        //                        <ul class="rating-stars">
        //                            <li style="width:80%" class="stars-active"> 
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> 
        //                            </li>
        //                            <li>
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
        //                                <i class="fa fa-star"></i> 
        //                            </li>
        //                        </ul>
        //                        <div class="label-rating">7/10</div>
        //                    </div> <!-- rating-wrap.// -->
       
        //                <p> '.$row->description.'</p>
        //                </div> <!-- info-main.// -->
        //            </div> <!-- col.// -->
        //            <aside class="col-sm-3">
        //                <div class="info-aside">
        //                    <div class="price-wrap">
        //                        <span class="price h5"> '.$row->prix.' TND </span>	
        //                        <del class="price-old"> $85</del>
        //                    </div> <!-- info-price-detail // -->
        //                    <p class="text-success">Free shipping</p>
        //                    <br>
        //                    <p>
        //                        <a href="#" class="btn btn-primary btn-block"> Details </a>
        //                        <a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> 
        //                            <span class="text">Add to wishlist</span></a>
        //                    </p>
        //                </div> <!-- info-aside.// -->
        //            </aside> <!-- col.// -->
        //        </div> <!-- row.// -->
        //    </article> <!-- card-product .// -->';
        //    }
        // // $mod = Car::get();
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

    //Car details 
    public function cardatails($id){
        $data =  DB::table('cars')->join('modeles', 'cars.modele_id', '=', 'modeles.id')->where('cars.id', '=', $id)->get();
        return view('cardetail',[
            'cardd'=>$data
        ]);
    }
}
