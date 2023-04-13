<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    
     public function index()
    {
       
        $idnumber = Auth::user()->codigo;

       if (Auth::user()->rol == 'estudiante') {
  
        return view('admin.alumno.show',compact('idnumber'));
       }

       if (Auth::user()->rol == 'profesor') {
        $focus = DB::select(DB::raw('SELECT p.id AS pid FROM profesors p WHERE p.codigo = :codigo'), array('codigo'=>$idnumber));
        foreach ( $focus as $key) {$codigoprofesor = $key->pid;}

        $materias = DB::select(DB::raw('SELECT COUNT(DISTINCT m.id) AS total 
        FROM materias m 
        JOIN materia_profesors mp ON mp.materia_id = m.id
        WHERE mp.profesor_id = :id'), array('id'=> $codigoprofesor ));

        $cursos = DB::select(DB::raw('SELECT COUNT(DISTINCT g.id) AS total 
        FROM grupos g
        JOIN grupos_materias gm ON gm.grupo_id = g.id
        JOIN materia_profesors mp ON mp.id = gm.materia_profesors_id
        WHERE mp.profesor_id = :id'), array('id'=> $codigoprofesor));

        $alumnos = DB::select(DB::raw('SELECT COUNT(DISTINCT p.id) AS total
        FROM profesors  p
        JOIN grupo_alumnos ga ON ga.alumno_id = p.id
        JOIN grupos g ON g.id = ga.grupo_id
        JOIN grupos_materias gm ON gm.grupo_id = g.id
        JOIN materia_profesors mp ON mp.id = gm.materia_profesors_id
        WHERE mp.profesor_id = :id'), array('id'=> $codigoprofesor));

        return view('home',compact('materias','cursos','alumnos'));
       }

       if(Auth::user()->rol == 'admin'){
            return view('admin.grupo.index');
       }
        
    }
}
