<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:profesor-edit');

    }
   
    public function index(){

        return view('admin.profesor.index');
    }
}
