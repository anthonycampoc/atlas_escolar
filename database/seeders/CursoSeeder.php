<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = [
            '1 B contabilidad',
            '2 B contabilidad',
            '3 B contabilidad',
            '1 A contabilidad',
            '2 A contabilidad',
            '3 A contabilidad',
            '1 B informatica',
            '2 B informatica',
            '3 B informatica',
            '1 A informatica',
            '2 A informatica',
            '3 A informatica',
        ];

        foreach ($cursos as $curso) {
            Grupo::create([
                
                'name'=> $curso,
                
        ]);
        }
    }
}
