<?php

namespace App\Http\Livewire\Alumno\Vista;

use App\Models\Grupo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Persanalizado extends Component
{
    public $idgrado;
    public $l;
    public $Cursoid;
    public $materiaH;
    public $UserAlumno;
  
    public $view = 'white';
    public function render()
    {
       $this->UserAlumno =  DB::select(DB::raw('SELECT g.id AS idcurso FROM grupos g
        JOIN grupo_alumnos ga ON ga.grupo_id = g.id
                JOIN alumnos a ON a.id = ga.alumno_id
                WHERE a.codigo = :id'), array('id'=>$this->idgrado));
        
        foreach ($this->UserAlumno as $item) {$this->Cursoid = $item->idcurso;}

        return view('livewire.alumno.vista.persanalizado',[
            'companero'=> DB::select(DB::raw('SELECT a.* FROM alumnos a 
            JOIN grupo_alumnos ga ON a.id = ga.alumno_id 
            JOIN grupos g ON g.id = ga.grupo_id 
            WHERE g.id = :id'), array('id'=>$this->Cursoid)),

            'Prof_materias' =>DB::select(DB::raw(' SELECT mp.id, m.name AS materia, p.name AS profesor, p.id AS profesorId, m.id AS materiaID, p.last_name AS apellido, p.telephone AS telefono, p.email AS correo  FROM materia_profesors mp 
            LEFT JOIN materias m ON m.id = mp.materia_id 
            LEFT JOIN profesors p ON p.id = mp.profesor_id 
            WHERE mp.id IN
            (SELECT gm.materia_profesors_id FROM grupos_materias gm WHERE gm.grupo_id = :id)'), array('id' =>$this->Cursoid)),

            'personalizado' =>Grupo::where('id', $this->Cursoid)->first(),
        ]);
    }

    public function leccionesA($materiaID, $profesorId){
        //dd($materiaID, $profesorId);

        $this->l = DB::select(DB::raw('SELECT m.name AS nombreMateria, l.id AS leccionesid, l.titulo AS nombreLeccion, L.contenido AS contenidoLeccion, l.fecha_disponible AS fechaLeccion FROM leccions l 
        JOIN materia_profesors mp ON mp.materia_id = l.materia_id AND mp.profesor_id = l.profesor_id
        LEFT JOIN materias m ON m.id = mp.materia_id
        LEFT JOIN profesors p ON p.id = mp.profesor_id
        WHERE l.materia_id = :idM AND l.profesor_id = :idP'), array('idM'=>$materiaID, 'idP'=>$profesorId));


        $this->materiaH = DB::select(DB::raw('SELECT m.name AS nombreMateria  FROM leccions l 
        JOIN materia_profesors mp ON mp.materia_id = l.materia_id AND mp.profesor_id = l.profesor_id
        LEFT JOIN materias m ON m.id = mp.materia_id
        LEFT JOIN profesors p ON p.id = mp.profesor_id
        WHERE l.materia_id = :idM AND l.profesor_id = :idP LIMIT 1'), array('idM'=>$materiaID, 'idP'=>$profesorId));
       
       $this->view = 'l';
    }
}
