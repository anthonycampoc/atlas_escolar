<?php

namespace App\Http\Livewire\Grupo\Asignacion;

use App\Models\Grupo;
use App\Models\Leccion;
use App\Models\Materia;
use App\Models\Profesor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    
    public $alumnoA;
    public $materia_id;
    public $leccionesM;
    public $idl;
    public $cursoP;
    public $idprofe;
    public $foscusP;
    public $pid;
    public $lecciones;
    public $titulo;
    public $contenido;

    public $view = 'create';
  
    
    public function __construct()
    {
        $this->foscusP = DB::select(DB::raw('SELECT p.id AS pid FROM profesors p WHERE p.codigo = :codigo'), array('codigo'=>Auth::user()->codigo));
        foreach ($this->foscusP as $item) {

            $this->pid = $item->pid;
        }
    }
    public function render()
    {
        

        return view('livewire.grupo.asignacion.index',[
            'gruposA' => DB::select(DB::raw('SELECT DISTINCT g.* FROM grupos g 
            JOIN  grupos_materias gm ON gm.grupo_id = g.id
            JOIN materia_profesors mp ON mp.id = gm.materia_profesors_id 
            WHERE mp.profesor_id = :id'),array('id'=>$this->pid)),
        ]);
    }

    public function view($idgrupo){

        //dd($this->pid);

        $this->cursoP = Grupo::where('id', $idgrupo)->first();
        $this->alumnoA = DB::select(DB::raw('SELECT a.last_name AS apellido, a.name AS estudiante , a.status AS estado FROM alumnos a 
        JOIN grupo_alumnos ga ON a.id = ga.alumno_id 
        JOIN grupos g ON g.id = ga.grupo_id 
        WHERE g.id = :id'), array('id'=>$idgrupo));

        $this->MateriaA = DB::select(DB::raw(' SELECT m.id AS materiaId, m.name AS materia  FROM materia_profesors mp 
          LEFT JOIN materias m ON m.id = mp.materia_id 
          LEFT JOIN profesors p ON p.id = mp.profesor_id 
          WHERE mp.id IN
          (SELECT gm.materia_profesors_id FROM grupos_materias gm WHERE gm.grupo_id = :idgrupo AND mp.profesor_id  = :idprofesor)'), array('idgrupo'=>$idgrupo ,'idprofesor'=>$this->pid));
        
        $this->view = 'show';
    }

    public function lecciones($idM){
        $this->leccionesM = Materia::where('id', $idM)->first();

        $this->lecciones = DB::select(DB::raw('SELECT l.id AS idleccion, l.titulo AS nLeccion, L.contenido AS tarea, l.fecha_disponible AS FD FROM leccions l 
        JOIN materia_profesors mp ON mp.materia_id = l.materia_id AND mp.profesor_id = l.profesor_id
        LEFT JOIN materias m ON m.id = mp.materia_id
        LEFT JOIN profesors p ON p.id = mp.profesor_id
        WHERE l.materia_id = :idM AND l.profesor_id = :idP'), array('idM'=>$idM, 'idP'=>$this->pid));
        
        $this->view = 'leccion';
    }

    public function viewleccion($idM){
        $this->leccionesM = Materia::where('id', $idM)->first();
        
        $this->view = 'materiaA';
    }

    public function store($idmateria){
        $this->validate([
            'titulo'=> 'required',
            'contenido'=> 'required',
        ]);

        Leccion::create([
            'profesor_id'=> $this->idprofe = $this->pid,
            'materia_id'=>  $this->materia_id = $idmateria,
            'titulo'=> $this->titulo,
            'contenido'=> $this->contenido,
           ]);
           session()->flash('message', 'Leccion agregada correctamente');
           $this->default();
    }

    public function editleccion($leccion_id){
            $leccion = Leccion::find($leccion_id);
            $this->idl = $leccion->id;
            $this->titulo = $leccion->titulo;
            $this->contenido = $leccion->contenido;
            
            $this->view = 'materiaE';
         
            
    }

    public function updateleccion(){

        $leccionUpdate = Leccion::find($this->idl);
        $leccionUpdate->update([
            'titulo'=> $this->titulo,
            'contenido'=> $this->contenido,
        ]);
        session()->flash('message', 'Leccion actualizada correctamente');
        $this->default();
    }



    public function default(){

        $this->titulo ='';
        $this->contenido ='';
        $this->view = 'create';
    }
    
  

}
