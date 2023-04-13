<?php

namespace Database\Seeders;

use App\Models\Profesor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
            'name'=>'Anthony Cotera',
            'email'=>'admin@atlas.com',
            'rol'=>'profesor',
            'password'=>bcrypt('admin'),
        ])->assignRole('Admin');

        Profesor::create([
            'name' => 'S/N',
            'codigo' => '1',
            'number' => 'S/N',
            'telephone' => 'S/N',
            'last_name' => 'S/N',
            'email' => 'S/N',
            
        ]);
    }
}
