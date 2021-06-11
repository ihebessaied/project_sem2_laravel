<?php

namespace App\Http\Controllers;
use App\Car;
use App\Modele;
use Illuminate\Http\Request;
use DB;

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
        $car = DB::table('cars')
        ->where('favoir','=',1)
        ->get();
        $e = DB::table('events')
        ->where('favoir','=',1)
        ->get();
        $mostevent = DB::table('events')
        ->where('favoir','=',2)
        ->get();

        $countcar = DB::table('cars')
        ->count();


        $countevent = DB::table('events')
        ->count();

        $countvol = DB::table('voles')
        ->count();


        $counthouse = DB::table('houses')
        ->count();

        return view('welcome',[
            'car'=>$car,
            'event'=>$e,
            'eventmos'=>$mostevent,
            'countcar'=>$countcar,
            'countevent'=>$countevent,
            'countvol'=>$countvol,
            'counthous'=>$counthouse
        ]);
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
