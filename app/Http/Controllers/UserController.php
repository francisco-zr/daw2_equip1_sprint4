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
        $user = DB::table('users')
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->select('users.*', 'companies.name')
            ->get();
        return view('perfilPersonal.PerfilPersonal', compact('user', 'authenticatedUser'));
    }
}
