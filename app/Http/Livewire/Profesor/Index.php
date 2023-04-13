<?php

namespace App\Http\Livewire\Profesor;

use App\Models\Materia;
use App\Models\materia_profesor;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $id;
    public $name;
    public $number;
    public $idmateria,$idprofesor;
    public $materiaAsig;
    public $materiad;
    public $last_name;
    public $codigo;
    public $telephone;
    public $email;
    public $password;
    public $view = 'create';


    public function __construct()
    {
        $rand = mt_rand(5000,6000);
        $this->codigo = $rand;
        $this->rol = 2;
        $this->password = '$2y$10$gJnzy3OSLbHk0ZNKFhxzx.KpB.hHurTKCNx1wjcUwTkRQarH5cL6K';
    }

    public function render()
    {
        return view('livewire.profesor.index',[
            'profesores' =>Profesor::orderBy('id','desc')->paginate(3),
        ]);

    }

    public function store(){

        $this->validate([
            'name' =>'required',
            'number' =>'required',
            'telephone' =>'required',
            'last_name' =>'required',
            'email' =>'required|email|unique:users,email',
        ]);


       
        Profesor::create([
            'codigo' => $this->codigo,
            'name' => $this->name,
            'number' => $this->number,
            'telephone' => $this->telephone,
            'last_name' => $this->last_name,
            'email' => $this->email,

        ]);

        $profesorF = Profesor::orderBy('id','desc')->first();
        $this->idalumno = $profesorF ->id;
        $this->codigo = $profesorF ->codigo;
        $this->name = $profesorF ->name;
        $this->number = $profesorF ->number;
        $this->last_name = $profesorF ->last_name;
        $this->telephone = $profesorF ->telephone;
        $this->email = $profesorF ->email;
        $this->view = 'profesorU';

        session()->flash('message', 'Profesor registrado correctamente');
        /*$this->edit($profesor->id);
        $this->default();*/
    }

    public function addusuario(){

        $user =  User::create([
       'codigo'=> $this->codigo,
       'rol' =>'profesor',
       'name'=> $this->name,
       'email'=> $this->email,
       'password'=> $this->password,
        ]);

        $user->assignRole($this->rol);
        session()->flash('message', 'Usuario ingresado correctamente');
        $this->default();
    }

    public function edit($id){

        $profesor = Profesor::find($id);
        $this->id = $profesor->id;
        $this->name = $profesor->name;
        $this->number = $profesor->number;
        $this->last_name = $profesor->last_name;
        $this->telephone = $profesor->telephone;
        $this->email = $profesor->email;
        $this->view = 'edit';
    }

    public function view($id){
        
      
      
        //$profesor = Profesor::find($id);
        $this->nombre = Profesor::where('id', $id)->first();
        $this->materiaAsig = 
        DB::select(DB::raw('SELECT m.* FROM materias m WHERE m.id  IN
                            (SELECT mp.materia_id FROM materia_profesors mp 
                            WHERE mp.profesor_id =:id)'),array('id'=>$id));
        $this->materiad = 
        DB::select(DB::raw('SELECT m.* FROM materias m WHERE m.id NOT IN
                            (SELECT mp.materia_id FROM materia_profesors mp
                            WHERE mp.profesor_id =:id)'),array('id'=>$id));
        $this->view = 'show';

    }

    public function update(){

        $this->validate([
            'name' =>'required',
            'number' =>'required',
            'telephone' =>'required',
            'email' =>'required',
            
        ]);
        $update = Profesor::find($this->id);

        $update->update([
            'name' => $this->name,
            'number' => $this->number,
            'last_name' => $this->last_name,
            'telephone' => $this->telephone,

        ]);
        session()->flash('message', 'Profesor actualizado correctamente');
        $this->default();
    }

    public function destroy($id){
       // Profesor::destroy($id);

        DB::delete('DELETE p, mp FROM profesors p JOIN materia_profesors mp ON mp.profesor_id = p.id WHERE p.id = ?', [$id]);
        session()->flash('message', 'Profesor registrado correctamente');
        User::destroy($id);

        
    }

    public function addmateria($idmateria,$idprofesor){

       
        materia_profesor::create([
            'materia_id' => $idmateria,
            'profesor_id' => $idprofesor,
        ]);
      
        $this->view = 'create';

        session()->flash('message', 'MATERIA AGREGADA CORRECTAMENTE');
    }

    public function eliminarMateria($idmateria,$idprofesor){
       
        DB::select(DB::raw('UPDATE materia_profesors SET estado = 1 
        WHERE materia_id = :idmateria AND profesor_id = :idprofesor'),
        array('idmateria'=>$idmateria, 'idprofesor'=>$idprofesor));

        DB::delete('DELETE FROM materia_profesors WHERE estado = 1');

       $this->view = 'create';
       session()->flash('message', 'MATERIA ELIMINADA CORRECTAMENTE');
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
