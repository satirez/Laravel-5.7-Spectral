<?php

namespace App\Http\Controllers;

use App\Historial;
use App\Asistence;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $sesion_id = $id;
        $asistencia = Asistence::OrderBy('id','ASC')->pluck('name','id');

        return view('historials.create',compact('asistencia','sesion_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $historial = Historial::create($request->all());

       
       
        return redirect()->route('sessions.index',$historial->id)
            ->with('info','Nueva sesion Guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(Historial $historial, $id)
    {
        $historials = Historial::orderBy('id','DESC')
            ->where('sesion_id', $id)
            ->paginate();

        return view('historials.show',compact('historials'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(Historial $historial, $id)
    {
        
        $sesionfind = Historial::find($id);
        $historialid = $sesionfind;

        $sesion_id = $sesionfind->sesion_id;
        $asistencia = Asistence::OrderBy('id','ASC')->pluck('name','id');

        return view('historials.edit',compact('historialid','asistencia','sesion_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historial $historial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historial $historial)
    {
         $historial->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
