<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroyUser($id)
    {
        User::destroy($id);
        return redirect()->route('admin.users');
    }

    public function userUpdateForm($id)
    {
        $user = User::where('id', intval($id))->first();
        $empresas = Empresa::all();

        return view('admin.userUpdateForm', compact('user', 'empresas'));
    }
    public function userUpdate(Request $request)
    {
        $user = User::where('id', intval($request->id))->first();

        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->edad = $request->edad;
        $user->direccion = $request->direccion;
        $user->ciudad = $request->ciudad;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->rol = $request->rol;
        $user->empresa_id = $request->empresa;

        $user->save();

        return redirect()->route('admin.users');
    }

    public function userCreateForm()
    {
        $empresas = Empresa::all();

        return view('admin.userNewForm', compact('empresas'));
    }

    public function storeUser(Request $request): RedirectResponse
    {

        $user = User::create([

            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        $user->nombre = $request->name;
        $user->apellidos = $request->apellidos;
        $user->edad = $request->edad;
        $user->direccion = $request->direccion;
        $user->ciudad = $request->ciudad;
        $user->telefono = $request->telefono;
        $user->rol = $request->rol;
        if ($request->rol === "asistente") {
            $user->empresa_id = 7;
        } else if ($request->rol === "admin") {
            $user->empresa_id = 6;
        }

        $user->save();

        return redirect(route('admin.users'));
    }
}
