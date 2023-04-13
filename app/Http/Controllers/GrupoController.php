<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:grupo-index')->only(['index']);
        $this->middleware('can:grupo-asignacion')->only(['show']);
    }

    public function index(){
        return view('admin.grupo.index');
    }

    public function show(){
        return view('admin.grupo.asignacion.index');
    }
}
