<?php

namespace App\Http\Livewire\Grupo;

use App\Models\Grupo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
   public $idgrado;
   public $number;
   public $profeD;
   public $profeA;
   public $alumnoA;
   public $name;
   public $schedule;
   public $description;
   public $view = 'create';

    public function render()
    {
        return view('livewire.grupo.index',[
            'grupos'=> Grupo::orderBy('id','desc')->paginate(),
        ]);
    }

    public function store(){

        $this->validate([
            'number' =>'required',
            'name' =>'required',
            'schedule' =>'required',
            'description' =>'required',
          
        ]);
       
        $Grupo = Grupo::create([
            'number' => $this->number,
            'name' => $this->name,
            'schedule' => $this->schedule,
            'description' => $this->description,

        ]);


        $this->edit($Grupo->id);
        session()->flash('message', 'Curso ingresado correctamente');
        $this->default();
    }

    public function edit($id){

        $Grupo = Grupo::find($id);
        $this->idGrupo = $Grupo->id;
        $this->number = $Grupo->number;
        $this->name = $Grupo->name;
        $this->schedule = $Grupo->schedule;
        $this->description = $Grupo->description;

        $this->view = 'edit';
    }

    public function update(){

        $this->validate([
            'number' =>'required',
            'name' =>'required',
            'schedule' =>'required',
            'description' =>'required',
          
        ]);
        $update = Grupo::find($this->idGrupo);

        $update->update([
            'number' => $this->number,
            'name' => $this->name,
            'schedule' => $this->schedule,
            'description' => $this->description,

        ]);
        session()->flash('message', 'Curso actualizado correctamente');

        $this->default();
    }

    public function destroy($id){
        Grupo::destroy($id);
       
    }
    public function default(){
        $this->number ='';
        $this->name ='';
        $this->schedule ='';
        $this->description ='';
        $this->view = 'create';
    }

    public function view($id){
       // $grupo = Grupo::find($id);
        
        $this->alumnoA = DB::select(DB::raw('SELECT a.* FROM alumnos a 
                                            JOIN grupo_alumnos ga ON a.id = ga.alumno_id 
                                            JOIN grupos g ON g.id = ga.grupo_id 
                                            WHERE g.id = :id'), array('id'=>$id));

       
        $this->curso = Grupo::where('id', $id)->first();
        $this->profeA = DB::select(DB::raw(' SELECT mp.id, m.name AS materia, p.name AS profesor  FROM materia_profesors mp 
        LEFT JOIN materias m ON m.id = mp.materia_id 
        LEFT JOIN profesors p ON p.id = mp.profesor_id 
        WHERE mp.id IN
        (SELECT gm.materia_profesors_id FROM grupos_materias gm WHERE gm.grupo_id = :id)'), array('id' =>$id));
       

        $this->profeD = DB::select(DB::raw(' SELECT mp.id, m.name AS materia, p.name AS profesor  FROM materia_profesors mp 
        LEFT JOIN materias m ON m.id = mp.materia_id 
        LEFT JOIN profesors p ON p.id = mp.profesor_id 
        WHERE mp.id NOT IN
        (SELECT gm.materia_profesors_id FROM grupos_materias gm WHERE gm.grupo_id = :id)'), array('id' =>$id));
        $this->view = 'show';


    }

    public function addmateriaP($idmp, $idcurso){
        DB::insert('insert into grupos_materias (grupo_id, materia_profesors_id) values (?, ?)', [$idcurso, $idmp]);
        session()->flash('message', 'Materia agregada correctamente');
        $this->view = 'create';
    }

    public function elminarmateriaP($idmp, $idcurso){
        DB::select(db::raw('UPDATE grupos_materias SET estado = 1 WHERE grupo_id = :idgrupo AND materia_profesors_id = :idmp'), array(':idgrupo'=>$idcurso, ':idmp' =>$idmp));
       DB::delete('DELETE FROM grupos_materias WHERE estado = 1');
       session()->flash('message', 'Materia elimanada correctamente');
       $this->view = 'create';
    }

    public function eliminarAlumno($idalumno, $idcurso){
        DB::select(db::raw('UPDATE grupo_alumnos SET estado = 1 WHERE grupo_id = :idgrupo AND alumno_id = :idalumno'), array(':idgrupo'=>$idcurso, ':idalumno' =>$idalumno));
        DB::update('update alumnos set asignacion = 0 where id = ?', [$idalumno]);
       
        DB::delete('DELETE FROM grupo_alumnos WHERE estado = 1');
        session()->flash('message', 'Alumn@ elimand@ correctamente');
        $this->view = 'create';
    }
}
