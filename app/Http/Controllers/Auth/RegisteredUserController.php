<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    public function create(): View
    {   
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->profil()->create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/')->with('success', 'Daftar Berhasil');
    }
}
