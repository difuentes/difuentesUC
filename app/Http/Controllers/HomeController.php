<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->to('login');
          }
  
          $rol_id = Auth::user()->perfil_id;
          
          
          switch ($rol_id) {
              case 1:
                  return redirect()->route('admindocente.index');
                  break;
              case 2:
                  return redirect()->route('admindirector.index');
                  break;
              case 3:
                  return redirect()->route('admindalumno.index');
                  break;
             
              default:
                  return redirect()->to('login');
                  break;
          }
    }
}
