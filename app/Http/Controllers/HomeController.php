<?php

namespace App\Http\Controllers;
use App\Car;
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
        $this->middleware('auth')->except('welcome');

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


    public function welcome(){
        $car = Car::inRandomOrder()->limit(6)->get();
        return  view('welcome' ,[
            'car'=> $car
        ]);
    }
}