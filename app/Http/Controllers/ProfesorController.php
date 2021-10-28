<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function __invoke()
    {
        // return "<p>Hello $id</p>";
        // return view ('estudiante.index',['id'=>$id]);
        return view ('profesor.index');
    }
}
