<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\InstitutionStoreRequest;
use App\Http\Requests\InstitutionUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Institution;
use App\Region;
use App\Commune;
use App\CategoryClinic;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $institutions = Institution::orderBy('id','DESC')
            ->paginate();

        return view('institutions.index',compact('institutions'));
    }

     public function indexhome()
    {
         $institutions = Institution::all();
         $contador =Institution::all()->count();

        return view('places',compact('institutions','contador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $categorias = CategoryClinic::OrderBy('name','ASC')->pluck('name','id');
        $listaregiones = Region::OrderBy('id','ASC')->pluck('name','id');
        $listacomunas = Commune::OrderBy('id','ASC')->pluck('name','id');

        return view('institutions.create',compact('categorias','listacomunas','listaregiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitutionStoreRequest $request)
    {
         $institution = Institution::create($request->all());

         // image 
         if ($request->file('logo')) {
             $path =Storage::disk('public')
                   ->put('logos', $request->file('logo'));

             $institution->fill(['file' => asset($path)])->save();
         }

        return redirect()->route('institutions.index',$institution->id)
            ->with('info','Establecimiento Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function show(Institution $institution)
    {
        return view('institutions.show', compact('institution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {   
        $categorias = CategoryClinic::OrderBy('name','ASC')->pluck('name','id');
        $listaregiones = Region::OrderBy('id','ASC')->pluck('name','id');
        $listacomunas = Commune::OrderBy('id','ASC')->pluck('name','id');
        return view('institutions.edit',compact('institution','categorias','listacomunas','listaregiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
        $institution = Institution::find($id);

        $institution->fill($request->all())->save();
         // image 
         if ($request->file('logo')) {
             $path =Storage::disk('public')
                   ->put('logos', $request->file('logo'));      
             $institution->fill(['logo' => asset($path)])->save();
         }

        return redirect()->route('institutions.index',$institution->id)
            ->with('info','Establecimiento Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        $institution->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
