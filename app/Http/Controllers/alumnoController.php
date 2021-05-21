<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnoController extends Controller
{
    //
     //index director
     public function indexdirector(Request $request)
     {
         if (!Auth::check()) {
             return redirect()->to('login');
         }
 
         
 
         return view('Alumno.indexAlumno');
 
     }
}
