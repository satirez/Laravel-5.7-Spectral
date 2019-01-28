<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Session;

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

        
        return view('home');
    }


    public function indexpaciente()
    {
        $userid = auth()->user()->id;


        $session = Session::Select('id')
                ->where('paciente_id',$userid)
                ->orwhere('psicologo_id',$userid)
                ->first()->id;

        $actividades = Activity::get()
        ->where('sesion_id',$session);

        
        return view('/intranetpaciente/homepaciente', compact('actividades'));
    }


}
