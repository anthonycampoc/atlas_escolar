<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $role1 = Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Profesor']);
        Role::create(['name'=>'Estudiante']);

        Permission::create([
            'name' =>'alumno-vista',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'alumno-create',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'alumno-edit',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'alumno-form',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);
        
        Permission::create([
            'name' =>'alumno-index',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);
      
        Permission::create([
            'name' =>'alumno-show',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);
       
        Permission::create([
            'name' =>'alumno-table',
            //'description'=>'Ver modulo profesores',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-create',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-edit',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-form',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-index',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-show',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-table',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'grupo-asignacion',
           // 'description'=>'Ver modulo curso',
        ])->syncRoles([$role1]);


        Permission::create([
            'name' =>'leccion-index',
            //'description'=>'Ver modulo leccion',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'materias-create',
           // 'description'=>'Ver modulo materias',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'materias-edit',
           // 'description'=>'Ver modulo materias',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'materias-form',
           // 'description'=>'Ver modulo materias',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'materias-index',
           // 'description'=>'Ver modulo materias',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'materias-table',
           // 'description'=>'Ver modulo materias',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'profesor-create',
            //'description'=>'Ver modulo profesor',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'profesor-edit',
            //'description'=>'Ver modulo profesor',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'profesor-form',
            //'description'=>'Ver modulo profesor',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'profesor-index',
            //'description'=>'Ver modulo profesor',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'profesor-show',
            //'description'=>'Ver modulo profesor',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'profesor-table',
            //'description'=>'Ver modulo profesor',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'role-create',
            //'description'=>'Crear Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'role-edit',
           // 'description'=>'edit Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'role-index',
           // 'description'=>'Editar Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'role-show',
           // 'description'=>'Editar Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'role-delete',
            //'description'=>'delete Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'user-create',
            //'description'=>'Crear Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'user-edit',
           // 'description'=>'edit Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'user-index',
           // 'description'=>'Editar Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'user-show',
           // 'description'=>'Editar Rol',
        ])->syncRoles([$role1]);

        Permission::create([
            'name' =>'user-delete',
            //'description'=>'delete Rol',
        ])->syncRoles([$role1]);

       
    }
}
