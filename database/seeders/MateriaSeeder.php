<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias = [
            'Tributacion',
            'Emprendimiento 1',
            'Educacion para la ciudadania 1',
            'Ingles 1',
            'Matematicas',
            'Quimica 1',
            'Historia 1',
            'lengua y literatura',
            'Filosofia 1',
            'Biologia 1',
            'Fisica 1',
            'Educacion Fisica 1',
            'Aplicaciones Informaticas',
            'Matematica 1',
            'Sistema operativos',
            'Programacion Orientada a objetos',
            'Contabilidad',
            'tributacion 2',
            'lengua y literatura 2',
            'Programacion Avanzada 1',
            'Emprendimiento 1',
            'Educacion para la ciudadania 1',
            'Ingles 2',
            'Quimica 2',
            'Historia 2',
            'Filosofia 2',
            'Biologia 2',
            'Fisica 2',
            'Educacion Fisica 2',
            'Matematica 2',
        ];

        foreach ($materias as $materia) {
            Materia::create(['name'=> $materia]);
        }
    }
}
