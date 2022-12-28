<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends AdminController
{
    public function allUsers(){
        $users = User::all();
        return view('admin.users.index',compact('users')); //compact('users')
    }

    protected function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:8|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(),
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin' => $request->input('admin') ? true : false,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Alert::toast('Utilisateur enregistré!', 'success');
            return redirect()->route('users.index');
        }
        Alert::toast('Impossible d\'enregistrer l\'utilisateur!', 'error');
    }

    public function form(){
        return view('admin.users.create');
    }

    public function editForm($id){
        $user = User::findOrFail($id);
        return view('admin.users.update', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        if ($user) {
            $request->validate([
                'name' => ['required','string','max:255','min:8'],
                'email' => ['required','string','email','max:255', Rule::unique('users')->ignore($user->id, 'id')],
                'password' => Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(),
            ]);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'admin' => $request->input('admin') ? true : false,
                'password' => Hash::make($request->password),
            ]);

            Alert::success('Allright','Utilisateur mis à jour!');
            return redirect()->route('users.index');
        }
        Alert::toast('Impossible de modifier l\'utilisateur!', 'error');
    }

    public function delete(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();
        Alert::toast('Utilisateur supprimé!', 'success');
        return redirect()->route('users.index');
    }
    
}
