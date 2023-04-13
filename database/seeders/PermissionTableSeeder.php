<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $user = User::create([
            'name'=>'Anthony Cotera',
            'email'=>'admin@atlas.com',
            'password'=>Hash::make(12345678),
        ]);

        Profesor::create([
            'name' => 'S/N',
            'number' => 'S/N',
            'telephone' => 'S/N',
            'last_name' => 'S/N',
            'email' => 'S/N',
            
        ]);

        $role = Role::create(['name' => 'Admin']);
        
        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

       $user->assignRole([$role->id]);*/
    }
}
