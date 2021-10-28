<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function __invoke($id = 'estudiante anónimo')
    {
        // return "<p>Hello $id</p>";
        // return view ('estudiante.index',['id'=>$id]);
        return view ('estudiante.index',compact('id'));
    }
}
