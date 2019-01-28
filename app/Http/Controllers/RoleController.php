<?php

namespace App\Http\Controllers;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;


use App\Region;
use App\Commune;
use App\Institution;
use App\RoleType;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;


use DB;
class RoleController extends Controller
{   

    public function _construct(){

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        /*  establecimiento  1
            director    2
            secretaria  3
            psicologo   4
            paciente    5
            admin   6
        */
        $roles = Role::orderBy('id','ASC')
            ->paginate();

        $directores = "Directores";
        return view('roles.index',compact('roles','directores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index',$role->id)
            ->with('info','Usuario Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $permissions = DB::table('permission_role')->get()
            ->where('role_id', $role->id);

        

        return view('roles.show', compact('role','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::get();

        return view('roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
         $role->update($request->all());

         $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index',$role->id)
            ->with('info','Rol Actualizado con exito');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
