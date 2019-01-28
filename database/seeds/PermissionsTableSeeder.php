<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        $permisos = [
            
            //Usuarios
            	['1','Navegar usuarios','users.index','Lista y navega todos los usuarios del sistema'],
            	['2','Crear Usuario','users.create','Crea detalle cada usuario del sistema'],
            	['3','Ver de Usuario','users.show','Ver detalle cada usuario del sistema'],
            	['4','Edición de usuarios','users.edit','Editar detalle de cada usuario del sistema'],
            	['5','Eliminar Usuarios','users.destroy','Eliminar a cada usuario del sistema'],

                // Secretaria

                ['6','Navegar secretarios','secretarys.index','Lista y navega todos los secretarios del sistema'],
                ['7','Crear secretarios','secretarys.create','Crea detalle cada secretarios del sistema'],
                ['8','Ver de secretarios','secretarys.show','Ver detalle cada secretarios del sistema'],
                ['9','Edición de secretarios','secretarys.edit','Editar detalle de cada secretarios del sistema'],
                ['10','Eliminar secretarios','secretarys.destroy','Eliminar a cada secretarios del sistema'],

                // Directores

                ['11','Navegar Directores','directors.index','Lista y navega todos los Directores del sistema'],
                ['12','Crear Directores','directors.create','Crea detalle cada Directores del sistema'],
                ['13','Ver de Directores','directors.show','Ver detalle cada Directores del sistema'],
                ['14','Edición de Directores','directors.edit','Editar detalle de cada Directores del sistema'],
                ['15','Eliminar Directores','directors.destroy','Eliminar a cada Directores del sistema'],
                
                // Psicologos

                ['16','Navegar psicologos','psicologos.index','Lista y navega todos los psicologos del sistema'],
                ['17','Crear psicologos','psicologos.create','Crea detalle cada psicologos del sistema'],
                ['18','Ver de psicologos','psicologos.show','Ver detalle cada psicologos del sistema'],
                ['19','Edición de psicologos','psicologos.edit','Editar detalle de cada psicologos del sistema'],
                ['20','Eliminar psicologos','psicologos.destroy','Eliminar a cada psicologos del sistema'],

                // Pacientes

                ['21','Navegar pacientes','patients.index','Lista y navega todos los paciente del sistema'],
                ['22','Crear pacientes','patients.create','Crea detalle cada paciente del sistema'],
                ['23','Ver de pacientes','patients.show','Ver detalle cada paciente del sistema'],
                ['24','Edición de pacientes','patients.edit','Editar detalle de cada paciente del sistema'],
                ['25','Eliminar pacientes','patients.destroy','Eliminar a cada paciente del sistema'],

            //ROLES

            	['26','Navegar rol','roles.index','Lista y navega todos los rol del sistema'],
            	['27','Crear rol','roles.create','Ver detalle cada rol del sistema'],
            	['28','Ver de rol','roles.show','Ver detalle cada rol del sistema'],
            	['29','Edición de rol','roles.edit','Editar Cualquier rol del sistema'],
            	['30','Eliminar rol','roles.destroy','Eliminar cualquier rol del sistema'],

            //INSTITUCIONES

            	['31','Navegar establecimientos','institutions.index','Lista y navega todos los establecimientos del sistema'],
            	['32','Crear establecimientos','institutions.create','Ver detalle cada establecimientos del sistema'],
            	['33','Ver de establecimientos','institutions.show','Ver detalle cada establecimientos del sistema'],
            	['34','Edición de establecimientos','institutions.edit','Editar Cualquier establecimientos del sistema'],
            	['35','Eliminar establecimientos','institutions.destroy','Eliminar cualquier establecimientos del sistema'],

             //Sesiones

            	['36','Navegar sesiones','sessions.index','Lista y navega todos los sesiones del sistema'],
            	['37','Crear sesiones','sessions.create','Ver detalle cada sesiones del sistema'],
            	['38','Ver de sesiones','sessions.show','Ver detalle cada sesiones del sistema'],
            	['39','Edición de sesiones','sessions.edit','Editar Cualquier sesiones del sistema'],
            	['40','Eliminar sesiones','sessions.destroy','Eliminar cualquier sesiones del sistema'],

             //observaciones

                ['41','Navegar observaciones','observations.index','Lista y navega todos los observaciones del sistema'],
                ['42','Crear observaciones','observations.create','Ver detalle cada observaciones del sistema'],
                ['43','Ver de observaciones','observations.show','Ver detalle cada observaciones del sistema'],
                ['44','Edición de observaciones','observations.edit','Editar Cualquier observaciones del sistema'],
                ['45','Eliminar observaciones','observations.destroy','Eliminar cualquier observaciones del sistema'],

            //Actividades

                ['46','Navegar actividades','activities.index','Lista y navega todos los actividades del sistema'],
                ['47','Crear actividades','activities.create','Ver detalle cada actividades del sistema'],
                ['48','Ver de actividades','activities.show','Ver detalle cada actividades del sistema'],
                ['49','Edición de actividades','activities.edit','Editar Cualquier actividades del sistema'],
                ['50','Eliminar actividades','activities.destroy','Eliminar cualquier actividades del sistema'],

             //Historial

                ['51','Navegar historial','historials.index','Lista y navega todos los historiales del sistema'],
                ['52','Crear historial','historials.create','Ver detalle cada historiales del sistema'],
                ['53','Ver de historial','historials.show','Ver detalle cada historiales del sistema'],
                ['54','Edición de historial','historials.edit','Editar Cualquier historiales del sistema'],
                ['55','Eliminar historial','historials.destroy','Eliminar cualquier historiales del sistema'],

            //otros
                ['56','Acceso Directo','accesodirecto','Muestra los Accesos directos del Home'],
                ['57','Calendario','sessions.calendar','Muestra el calendario'],
                ['58','Ver Reportes','reports.index','Muestra los reportes'],
                ['59','Ver Reportes Generales','reports.general','Ver Reportes Especificos'],
                ['60','Ver Reportes Generales','reports.specific','Ver Reportes Generales'],


        ];
        $permisos = array_map(function($permiso) use ($now){
           return [
           		'name' => $permiso[1],
           		'slug' => $permiso[2],
           		'description' => $permiso[3],
           		'updated_at' => $now,
               	'created_at' => $now,

           ];
        }, $permisos);
        DB::table('permissions')->insert($permisos);


         $now = \Carbon\Carbon::now();
        $roles_d = [

            //Secretaria
                ['1','6','3'],
                ['2','7','3'],
                ['3','8','3'],
                ['4','9','3'],
                ['5','11','3'],
                ['6','13','3'],
                ['7','16','3'],
                ['8','17','3'],
                ['9','18','3'],
                ['10','19','3'],
                ['11','21','3'],
                ['12','22','3'],
                ['13','23','3'],
                ['14','24','3'],
                ['15','31','3'],
                ['16','33','3'],
                ['17','36','3'],
                ['18','38','3'],
                ['19','39','3'],
                ['20','51','3'],
                ['21','52','3'],
                ['22','53','3'],
                ['23','56','3'],
                ['24','57','3'],
                ['25','58','3'],
                ['26','59','3'],
                ['27','60','3'],

            //Psicologo
                ['28','6','5'],
                ['29','8','5'],
                ['30','11','5'],
                ['31','16','5'],
                ['32','18','5'],
                ['33','21','5'],
                ['34','23','5'],
                ['35','24','5'],
                ['36','31','5'],
                ['37','33','5'],
                ['38','36','5'],
                ['39','37','5'],
                ['40','38','5'],
                ['41','39','5'],
                ['42','41','5'],
                ['43','42','5'],
                ['44','43','5'],
                ['45','44','5'],
                ['46','45','5'],
                ['47','46','5'],
                ['48','47','5'],
                ['49','48','5'],
                ['50','49','5'],
                ['51','51','5'],
                ['52','52','5'],
                ['53','53','5'],
                ['54','54','5'],
                ['55','56','5'],
                ['56','57','5'],
                ['57','58','5'],
                ['58','59','5'],
                ['59','60','5'],


            //Director

                ['60','6','4'],
                ['61','7','4'],
                ['62','8','4'],
                ['63','9','4'],
                ['64','11','4'],
                ['65','13','4'],
                ['66','16','4'],
                ['67','17','4'],
                ['68','18','4'],
                ['69','19','4'],
                ['70','20','4'],
                ['71','21','4'],
                ['72','22','4'],
                ['73','23','4'],
                ['74','24','4'],
                ['75','31','4'],
                ['76','33','4'],
                ['77','36','4'],
                ['78','37','4'],
                ['79','51','4'],
                ['80','52','4'],
                ['81','56','4'],
                ['82','57','4'],
                ['83','58','4'],
                ['84','59','4'],
                ['85','60','4'],


        ];
        $roles_d = array_map(function($roles_) use ($now){
           return [
                'permission_id' => $roles_[1],
                'role_id' => $roles_[2],
                'updated_at' => $now,
                'created_at' => $now,

           ];
        }, $roles_d);
        DB::table('permission_role')->insert($roles_d);

        // dar permiso a los admins 
        
        $now = \Carbon\Carbon::now();
        $roles_users = [

                ['1','1','501'],
                ['2','1','502'],

        ];
        $roles_users = array_map(function($roles_user) use ($now){
           return [
                'role_id' => $roles_user[1],
                'user_id' => $roles_user[2],
                'updated_at' => $now,
                'created_at' => $now,

           ];
        }, $roles_users);
        DB::table('role_user')->insert($roles_users);



        factory(App\Historial::class,500)->create();
        factory(App\Activity::class,200)->create();
        factory(App\Expresion::class,200)->create();
    }

    }
   