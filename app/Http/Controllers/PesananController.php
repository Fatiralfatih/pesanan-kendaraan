<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesananRequest;
use App\Models\Atasan;
use App\Models\kendaraan;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PesananController extends Controller
{
    public function index()
    {
        $kendaraan = kendaraan::latest()->get();
        $user = User::where('role', 'atasan')->get();
        return view('pesanan.index', [
            'kendaraans' => $kendaraan,
            'user' => $user
        ]);
    }

    public function store(StorePesananRequest $request)
    {
        $pesanan = Pesanan::create([
            'admin_id' => Auth::user()->id,
            'kendaraan_id' => $request->kendaraan_id,
            'driver' => $request->driver,
            'pegawai' => $request->pegawai,
        ]);

        foreach ($request->atasan_id as $atasan) {
            $pesanan->atasan()->attach([
                $atasan => ['confirmed' => false],
            ]);
        }

        return Redirect::route('pesanan.index')->with('success', 'Berhasil dipesan, silahkan tunggu konfirmasi atasan');
    }

    function show()
    {
        $pesanan = Pesanan::select(['id', 'admin_id', 'kendaraan_id', 'driver', 'pegawai'])->with('atasan')->get();
        return view('pesanan.show', [
            'pesanans' => $pesanan
        ]);
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->atasan()->detach([$pesanan->atasan_id]);
        $pesanan->delete();

        return 'berhasil';
    }
}
