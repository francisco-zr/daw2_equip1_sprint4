<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function userList()
    {
        return view('users.list_of_users');
    }
    public function userListing()
    {
<<<<<<< HEAD
        $varusers = User::all(['name','last_name','email','phone']);
        
        return $varusers;
=======
>>>>>>> 3d06fe8 (Pagina de perfil personal en vue (no esta acabada))
    }
    public function users()
    {
        $authenticatedUser = Auth::user();
        return view('perfilPersonal.PerfilPersonal', compact('authenticatedUser'));
    }
    public function show_user()
    {
        return view('perfilPersonal.perfil_personal');
    }

    public function updateUserInfo(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->nick_name = $request->input('nick_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();
    
        return redirect()->route('Personal-Profile')->with('success', 'Información actualizada con éxito');
    }
    


    public function editarUsuario()
    {
        $authenticatedUser = Auth::user();
        return view('perfilPersonal.EditarPerfil', compact('authenticatedUser'));
    }

    /*public function updateProfile(Request $request)
    {
        $authenticatedUser = Auth::user();
        $updatedUser = User::find($authenticatedUser->id);

        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'nick_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $updatedUser->name = $request->input('name');
        $updatedUser->last_name = $request->input('last_name');
        $updatedUser->nick_name = $request->input('nick_name');
        $updatedUser->email = $request->input('email');
        $updatedUser->phone = $request->input('phone');

        $updatedUser->save();

        return redirect()->route('Editar-Perfil')->with('success', 'Información actualizada con éxito');
    }
    */
}
