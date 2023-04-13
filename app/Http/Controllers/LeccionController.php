<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:leccion-index');

    }

    public function index(){
        return view('admin.leccion.index');
    }
}
