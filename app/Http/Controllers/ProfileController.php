<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\StoreProfilRequest;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{   

    function store(StoreProfilRequest $request ,User $user) {

       Profil::create([
        'nama_lengkap' => $request->nama_lengkap,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'tgl_lahir' => $request->tgl_lahir
       ]);

       return Redirect::route('user.show', ['id' => $user->id])->with('success', 'data berhasil Diubah');

    }

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

        return Redirect('/login')->with('status', 'Logout Berhasil');
    }
}
