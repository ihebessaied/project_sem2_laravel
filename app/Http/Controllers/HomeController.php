<?php

namespace App\Http\Controllers;
use App\Car;
use App\Modele;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('rentcar');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        return view('welcome');
    }


    // }
    // select count(*) from cars 
    // where idmodele = id (mte3 model) join 58
    // public function rentcar(){
    // $car = Car::inRandomOrder()->limit(6)->get();

    // $mod = Modele::get();
    
    // // $count = Car::where('modele_id','=',$mod->id())->count();

    //     return view('rentcar',[
    //         'car'=> $car,
    //         'modele'=> $mod
    //         // 'count'=>$count
    //     ]);
    // }
}
