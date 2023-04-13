<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:materias-index');

    }
    
    public function index(){
        return view('admin.materias.index');
    }
}
