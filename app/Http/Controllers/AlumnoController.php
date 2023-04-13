<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:alumno-index')->only(['index']);
        $this->middleware('can:alumno-edit')->only(['show']);

    }
    public function index(){
        return view('admin.alumno.index');
    }

    public function show($id){
        
          return view('admin.alumno.show', compact('id'));
    }
}
