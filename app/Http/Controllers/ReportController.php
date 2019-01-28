<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Session;
use App\User;
use App\Terapy;
use App\Historial;
use App\Disease;
use App\SexualOrientation;
use App\CivilState;
use App\Derivado;
use App\Observation;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function general()
    {
         
           $valor = auth()->user()->institute_id;

        $totalusuarios = User::all()
        ->count();

        $totalpsicologos = User::all()
        ->where('user_types_id',4)
        ->count();

         $totalpacientes = User::all()
        ->where('user_types_id',5)
        ->count();

        $totaldirectores = User::all()
        ->where('user_types_id',2)
        ->count();

        $totalsecretarias = User::all()
        ->where('user_types_id',3)
        ->count();


        $enalta = Session::all()
        ->where('alta','Ninguna')
        ->count();

        $sinalta = Session::all()
        ->where('alta','!=','Ninguna')
        ->count();


        return view('reports.general',compact('totalusuarios','totalpsicologos','totalpacientes','totalsecretarias','totaldirectores','enalta','sinalta'));
    }

    public function especific()
    {

        $valor = auth()->user()->institute_id;

        $totalusuarios = User::all()
        ->where('institute_id',$valor)
        ->count();

        $totalpsicologos = User::all()
        ->where('institute_id',$valor)
        ->where('user_types_id',4)
        ->count();

         $totalpacientes = User::all()
        ->where('institute_id',$valor)
        ->where('user_types_id',5)
        ->count();

        $totaldirectores = User::all()
        ->where('institute_id',$valor)
        ->where('user_types_id',2)
        ->count();

        $totalsecretarias = User::all()
        ->where('institute_id',$valor)
        ->where('user_types_id',3)
        ->count();



        return view('reports.especificos',compact('totalusuarios','totalpsicologos','totalpacientes','totalsecretarias','totaldirectores'));
    }






    public function index()
    {
        //
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
}
