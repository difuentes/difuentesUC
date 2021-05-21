<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class docenteController extends Controller
{
    //
     //index director
     public function indexdocente(Request $request)
     {
         if (!Auth::check()) {
             return redirect()->to('login');
         }
 
         
 
         return view('Docente.indexDocente');
 
     }
}
