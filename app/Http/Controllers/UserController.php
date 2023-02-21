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
        $varusers = User::all(['name', 'last_name', 'email', 'phone']);

        return $varusers;
    }
    public function show_user()
    {
        return view('perfilPersonal.perfil_personal');
    }

    public function editarUsuario()
    {
        $authenticatedUser = Auth::user();
        return view('perfilPersonal.EditarPerfil', compact('authenticatedUser'));
    }

    public function updateProfile(Request $request)
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

        return redirect()->route('Personal-Profile')->with('success', 'Información actualizada con éxito');
    }

    public function updateProfileImage(Request $request)
    {
        $user = $request->user();

        // Validar la imagen
        $request->validate([
            'profile_image' => 'image|max:2048',
        ]);

        // Procesar la imagen
        $image = $request->file('profile_image');
        $imageName = $image->getClientOriginalName();

        // Mover la imagen a la carpeta "public/img/profile_images"
        $image->move(public_path('img/profile_images'), $imageName);

        // Guardar el nombre de la imagen en la base de datos
        $user->update([
            'profile_image' => $imageName,
        ]);

        return redirect()->route('Personal-Profile');
    }
}
