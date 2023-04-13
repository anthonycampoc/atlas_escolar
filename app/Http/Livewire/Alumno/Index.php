<?php

namespace App\Http\Livewire\Alumno;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Grupo;
use App\Models\Materia;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $idalumno;
    public $alumnoM;
    public $focusA;
    public  $idalumnado;
    public $cursoM;
    public $name;
    public $codigo;
    public $number;
    public $last_name;
    public $telephone;
    public $email;
    public $password;
    public $view = 'create';
    public function __construct()
    {
        $rand = mt_rand(5000,6000);
        $this->codigo = $rand;
        $this->rol = 3;

        $this->password = '$2y$10$gJnzy3OSLbHk0ZNKFhxzx.KpB.hHurTKCNx1wjcUwTkRQarH5cL6K';
    }
    public function render()
    {
        return view('livewire.alumno.index',[
            'materias' => Materia::all(),
            'alumnos' =>Alumno::orderBy('id','desc')->paginate(),
        ]);

    }

    public function store(){

        $this->validate([
            'name' =>'required',
            'number' =>'required',
            'telephone' =>'required',
            'last_name' =>'required',
            'email' =>'required|email|unique:alumnos,email',
        ]);

     
       
         Alumno::create([
            'codigo' =>$this->codigo,
            'name' => $this->name,
            'number' => $this->number,
            'telephone' => $this->telephone,
            'last_name' => $this->last_name,
            'email' => $this->email,

        ]);

        $focusA = Alumno::orderBy('id','desc')->first();

        $this->idalumno = $focusA->id;
        $this->codigo = $focusA->codigo;
        $this->name = $focusA->name;
        $this->number = $focusA->number;
        $this->last_name = $focusA->last_name;
        $this->telephone = $focusA->telephone;
        $this->email = $focusA->email;
        $this->view = 'usuarioA';
       /* $this->edit($Alumno->id);
        $this->default();*/
    }

    public function addusuario(){

             $user =  User::create([
            'codigo'=> $this->codigo,
            'rol' =>'estudiante',
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> $this->password,
        ]);

        $user->assignRole($this->rol);
        session()->flash('message', 'Alumno ingresado correctamente');
        $this->default();
    }

    public function edit($id){

        
        $this->cursoM = Grupo::all(); 
        $this->idalumnado = Alumno::where('id', $id)->first();
        $Alumno = Alumno::find($id);
        $this->idalumno = $Alumno->id;
        $this->name = $Alumno->name;
        $this->number = $Alumno->number;
        $this->last_name = $Alumno->last_name;
        $this->telephone = $Alumno->telephone;
        $this->email = $Alumno->email;
        $this->view = 'edit';
    }

    public function update(){

        $this->validate([
            'name' =>'required',
            'number' =>'required',
            'telephone' =>'required',
            'email' =>'required',
            
        ]);
        $update = Alumno::find($this->idalumno);

        $update->update([
            'name' => $this->name,
            'number' => $this->number,
            'last_name' => $this->last_name,
            'telephone' => $this->telephone,

        ]);

        session()->flash('message', 'Usuario actualizado correctamente');
        $this->default();
    }

    public function destroy($id){
        
        Alumno::destroy($id);  
    }

    public function view($id){

      $this->alumnoM = Alumno::find($id);  $this->view = 'show';
    }

    public function addmateriaA($idcursoA, $idalumnoA){
       
        DB::insert('insert into grupo_alumnos (grupo_id, alumno_id) values (?, ?)', [$idcursoA, $idalumnoA]);
        DB::update('update alumnos set asignacion = 1 where id = ?', [$idalumnoA]);
        $this->view = 'create';
        session()->flash('message', 'Asignacion de materia finalizada');
    }
    public function default(){
        $this->name ='';
        $this->number ='';
        $this->last_name ='';
        $this->telephone ='';
        $this->email ='';
        $this->view = 'create';
    }
}
