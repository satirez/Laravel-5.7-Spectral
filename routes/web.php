<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intranetpaciente/homepaciente', 'HomeController@indexpaciente')
            ->name('homepaciente');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/places', 'InstitutionController@indexhome')->name('places');
Route::get('/nosotros','HomePublicController@nosotros')->name('nosotros');
Route::get('/contacto','HomePublicController@contacto')->name('contacto');
Route::get('/videochat','HomeController@videochat')->name('videochat');


Route::get('reports/general','ReportController@general')->name('reports.general')
                ->middleware('permission:report.general');
Route::get('reports/especificos','ReportController@especific')->name('reports.especifico')
                ->middleware('permission:report.especific');
	//routes

	Route::middleware(['auth'])->group(function() {

	//Roles::: en post ponemos la ruta, en name el nombre de la ruta y en el middleware el permiso

	//Proceso guardado
	Route::post('roles/store','RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	//Visualizar listado
	Route::get('roles/','RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	//Ver formulario de creacion
	Route::get('roles/create','RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	// actualizar
	Route::put('roles/{role}','RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');

	//Ver detalle			
	Route::get('roles/{role}','RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	//Eliminar
	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');

	//Ver formulario de edicion
	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');


	//INSTITUCIONES

	//Proceso guardado
	Route::post('institutions/store','InstitutionController@store')->name('institutions.store')
			->middleware('permission:institutions.create');

	//Visualizar listado
	Route::get('institutions/','InstitutionController@index')->name('institutions.index')
			->middleware('permission:institutions.index');

	//Ver formulario de creacion
	Route::get('institutions/create','InstitutionController@create')->name('institutions.create')
			->middleware('permission:institutions.create');

	// actualizar
	Route::put('institutions/{institution}','InstitutionController@update')->name('institutions.update')
			->middleware('permission:institutions.edit');

	//Ver detalle			
	Route::get('institutions/{institution}','InstitutionController@show')->name('institutions.show')
			->middleware('permission:institutions.show');

	//Eliminar
	Route::delete('institutions/{institution}','InstitutionController@destroy')->name('institutions.destroy')
			->middleware('permission:institutions.destroy');

	//Ver formulario de edicion
	Route::get('institutions/{institution}/edit','InstitutionController@edit')->name('institutions.edit')
			->middleware('permission:institutions.edit');


	// USUARIOS

	//Visualizar listado
	Route::get('users/','UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::get('directors/','UserController@indextdirector')->name('directors.index')
			->middleware('permission:directors.index');

	Route::get('secretarys/','UserController@indexsecretary')->name('secretarys.index')
			->middleware('permission:secretarys.index');

	Route::get('psicologos/','UserController@indexpsicologos')->name('psicologos.index')
			->middleware('permission:psicologos.index');

	Route::get('patients/','UserController@indexpatients')->name('patients.index')
			->middleware('permission:patients.index');

	//Ver formulario de creacion
	Route::get('users/create','UserController@create')->name('users.create')
			->middleware('permission:users.create');

	Route::get('directors/create','UserController@createdirector')->name('directors.create')
			->middleware('permission:directors.create');

	Route::get('secretarys/create','UserController@createsecretary')->name('secretarys.create')
			->middleware('permission:secretarys.create');

	Route::get('psicologos/create','UserController@createpsicologo')->name('psicologos.create')
			->middleware('permission:psicologos.create');

	Route::get('patients/create','UserController@createpatient')->name('patients.create')
			->middleware('permission:patients.create');

	//Proceso guardado
	Route::post('users/store','UserController@store')->name('users.store')
			->middleware('permission:users.create');

	Route::post('directors/store','UserController@store')->name('directors.store')
			->middleware('permission:directors.create');

	Route::post('secretarys/store','UserController@store')->name('secretarys.store')
			->middleware('permission:secretarys.create');

	Route::post('psicologos/store','UserController@store')->name('psicologos.store')
			->middleware('permission:psicologos.create');

	Route::post('patients/store','UserController@store')->name('patients.store')
			->middleware('permission:patients.create');


	// actualizar
	Route::put('users/{user}','UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::put('directors/{user}','UserController@update')->name('directors.update')
			->middleware('permission:directors.edit');

	Route::put('secretarys/{user}','UserController@update')->name('secretarys.update')
			->middleware('permission:secretarys.edit');

	Route::put('psicologos/{user}','UserController@update')->name('psicologos.update')
			->middleware('permission:psicologos.edit');

	Route::put('patients/{user}','UserController@update')->name('patients.update')
			->middleware('permission:patients.edit');


	//Ver formulario de edicion
	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');

	Route::get('directors/{user}/edit','UserController@editdirector')->name('directors.edit')
			->middleware('permission:directors.edit');

	Route::get('secretarys/{user}/edit','UserController@editsecretaria')->name('secretarys.edit')
			->middleware('permission:secretarys.edit');

	Route::get('psicologos/{user}/edit','UserController@editpsicologo')->name('psicologos.edit')
			->middleware('permission:psicologos.edit');

	Route::get('patients/{user}/edit','UserController@editpaciente')->name('patients.edit')
			->middleware('permission:patients.edit');


	//Ver detalle			
	Route::get('users/{user}','UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::get('profile/{user}','UserController@showprofile')->name('users.showprofile')
			->middleware('permission:users.show');

	Route::get('directors/{user}','UserController@showdirector')->name('directors.show')
			->middleware('permission:directors.show');

	Route::get('secretarys/{user}','UserController@showsecretary')->name('secretarys.show')
			->middleware('permission:secretarys.show');

	Route::get('psicologos/{user}','UserController@showpsicologo')->name('psicologos.show')
			->middleware('permission:psicologos.show');

	Route::get('patients/{user}','UserController@showpaciente')->name('patients.show')
			->middleware('permission:patients.show');


	//Eliminar
	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::delete('directors/{user}','UserController@destroy')->name('directors.destroy')
			->middleware('permission:directors.destroy');

	Route::delete('secretarys/{user}','UserController@destroy')->name('secretarys.destroy')
			->middleware('permission:secretarys.destroy');

	Route::delete('psicologos/{user}','UserController@destroy')->name('psicologos.destroy')
			->middleware('permission:psicologos.destroy');

	Route::delete('patients/{user}','UserController@destroy')->name('patients.destroy')
			->middleware('permission:patients.destroy');

	// Sessions

	//Proceso guardado
	Route::post('sessions/store','SessionController@store')->name('sessions.store')
			->middleware('permission:sessions.create');

	//Visualizar listado
	Route::get('sessions/','SessionController@index')->name('sessions.index')
			->middleware('permission:sessions.index');

	Route::get('sessions/calendar','SessionController@indexcalendar')->name('sessions.calendar')
			->middleware('permission:sessions.calendar');

	//Ver formulario de creacion
	Route::get('sessions/create','SessionController@create')->name('sessions.create')
			->middleware('permission:sessions.create');

	// actualizar
	Route::put('sessions/{session}','SessionController@update')->name('sessions.update')
			->middleware('permission:sessions.edit');

	//Ver detalle			
	Route::get('sessions/{session}','SessionController@show')->name('sessions.show')
			->middleware('permission:sessions.show');

		//Ver ficha			
	Route::get('sessions/ficha/{session}','SessionController@ficha')->name('sessions.ficha')
			->middleware('permission:sessions.ficha');

	//Eliminar
	Route::delete('sessions/{session}','SessionController@destroy')->name('sessions.destroy')
			->middleware('permission:sessions.destroy');

	//Ver formulario de edicion
	Route::get('sessions/{session}/edit','SessionController@edit')->name('sessions.edit')
			->middleware('permission:sessions.edit');



	//Observaciones

	//Proceso guardado
	Route::post('observations/store','ObservationController@store')->name('observations.store')
			->middleware('permission:observations.create');

	//Visualizar listado
	Route::get('observations/','ObservationController@index')->name('observations.index')
			->middleware('permission:observations.index');

	//Ver formulario de creacion
	Route::get('observations/create/{observationid}','ObservationController@create')->name('observations.create')
			->middleware('permission:observations.create');

	// actualizar
	Route::put('observations/{observation}','ObservationController@update')->name('observations.update')
			->middleware('permission:observations.edit');

	//Ver detalle			
	Route::get('observations/{observations}','ObservationController@show')->name('observations.show')
			->middleware('permission:observations.show');

	//Eliminar
	Route::delete('observations/{observation}','ObservationController@destroy')->name('observations.destroy')
			->middleware('permission:observations.destroy');

	//Ver formulario de edicion
	Route::get('observations/{observation}/edit','ObservationController@edit')->name('observations.edit')
			->middleware('permission:observations.edit');


	//Activities

	//Proceso guardado
	Route::post('activities/store','ActivityController@store')->name('activities.store')
			->middleware('permission:activities.create');

	//Visualizar listado
	Route::get('activities/','ActivityController@index')->name('activities.index')
			->middleware('permission:activities.index');

	//Ver formulario de creacion
	Route::get('activities/create','ActivityController@create')->name('activities.create')
			->middleware('permission:activities.create');

	// actualizar
	Route::put('activities/{activity}','ActivityController@update')->name('activities.update')
			->middleware('permission:activities.edit');

	//Ver detalle			
	Route::get('activities/{activityid}','ActivityController@show')->name('activities.show')
			->middleware('permission:activities.show');

	//Eliminar
	Route::delete('activities/{activity}','ActivityController@destroy')->name('activities.destroy')
			->middleware('permission:activities.destroy');

	//Ver formulario de edicion
	Route::get('activities/{activity}/edit','ActivityController@edit')->name('activities.edit')
			->middleware('permission:activities.edit');


	//Historial

	//Proceso guardado
	Route::post('historials/store','HistorialController@store')->name('historials.store')
			->middleware('permission:historials.create');

	//Visualizar listado
	Route::get('historials/','HistorialController@index')->name('historials.index')
			->middleware('permission:historials.index');

	//Ver formulario de creacion
	Route::get('historials/create/{historialid}','HistorialController@create')->name('historials.create')
			->middleware('permission:historials.create');

	// actualizar
	Route::put('historials/{historialid}','HistorialController@update')->name('historials.update')
			->middleware('permission:historials.edit');

	//Ver detalle			
	Route::get('historials/{historialid}','HistorialController@show')->name('historials.show')
			->middleware('permission:historials.show');

	//Eliminar
	Route::delete('historials/{historialid}','HistorialController@destroy')->name('historials.destroy')
			->middleware('permission:historials.destroy');

	//Ver formulario de edicion
	Route::get('historials/{historialid}/edit','HistorialController@edit')->name('historials.edit')
			->middleware('permission:historials.edit');


});
Auth::routes();

