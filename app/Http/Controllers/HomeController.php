<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\libro;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias=Dependencia::orderBy('id','DESC')->paginate(3);
        return view('Dependencia.index',compact('dependencias'));
    }
}