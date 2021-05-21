<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class directorController extends Controller
{
    //index director
    public function indexdirector(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->to('login');
        }

        

        return view('Director.indexDirector');

    }
}
