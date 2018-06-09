<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dependencia;

class HomeController extends Controller
{
   
    public function __construct(){
    
        $this->middleware('auth');
    }


    public function index(){
    
        $dependencia=Dependencia::orderBy('id','DESC')->paginate(3);
        return view('Dependencia.index',compact('dependencia'));
    }
}       
    
