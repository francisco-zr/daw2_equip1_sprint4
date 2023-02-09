<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function users()
    {
        $authenticatedUser = Auth::user();
        return view('perfilPersonal.PerfilPersonal', compact('authenticatedUser'));
    }

    public function editarUsuario()
    {
        $authenticatedUser = Auth::user();
        return view('perfilPersonal.EditarPerfil', compact('authenticatedUser'));
    }
}
