<?php

namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use Illuminate\Http\Request;
use cars_loct;
use App\Vole;

class voleController extends Controller
{
    public function addVole(Request $req){
            $vole=new Vole;
            $vole->date_dpr=$req->date_dpr;
            $vole->date_arv=$req->date_arv;
            $vole->lieu_depart=$req->lieu_depart;
            $vole->lieu_arrivee=$req->lieu_arrivee;
            $vole->avion=$req->avion;
            $vole->prix=$req->prix;
            $vole->save();
            return view("voleAdmin");
        
    }
    public function getVole(){
            $voles=Vole::get();
            return view('voleAdmin');    
    }
}
