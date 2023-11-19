<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::select(['id','nama','role','email'])
                    // ->with(['profil:user_id,nama_lengkap,alamat,no_hp,tgl_lahir'])
                    ->with(['profil:user_id,nama_lengkap,no_hp,alamat,tgl_lahir'])
                    ->get();
        return view('user.index', [
            'users' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        return Redirect::route('user.index')->with('success', 'data berhasil ditambahkan');
    }

    function show($id)
    {
        $user = User::find($id)->profil;
        return view('user.show', [
            'profil' => $user
        ]);
    }

    public function edit(string $id)
    {
        $user = User::where('id', $id)->select('id','nama','email','role')
                        ->withOnly('profil:user_id,nama_lengkap,alamat,no_hp,tgl_lahir')
                        ->firstOrFail();
        return view('user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role
        ]);

        $user->profil()->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        if (Auth::user()->role == 'atasan') {
            return Redirect::route('user.show', [$user->id])->with('success', 'data berhasil diupdate');
        }

        return Redirect::route('user.index')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect::route('user.index')->with('success', 'data berhasil dihapus');
    }
}
