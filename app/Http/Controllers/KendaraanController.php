<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $kendaraan = kendaraan::latest()->get();
        return view('kendaraan.index',[
            'kendaraans' => $kendaraan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKendaraanRequest $request)
    {
        Kendaraan::create([
            'nama_kendaraan' => $request->nama_kendaraan,
            'konsumsi_bbm' => $request->konsumsi_bbm,
            'jadwal_service' => $request->jadwal_service,
        ]);

        return redirect::route('kendaraan.index')->with('success', 'Data kendaraan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {   
        $data = $kendaraan->select('id','nama_kendaraan', 'konsumsi_bbm','jadwal_service')->firstOrFail();
        return view('kendaraan.edit',[
            'kendaraan' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKendaraanRequest $request, kendaraan $kendaraan)
    {
        $kendaraan->update([
            'nama_kendaraan' => $request->nama_kendaraan,
            'konsumsi_bbm' => $request->konsumsi_bbm,
            'jadwal_service' => $request->jadwal_service,
        ]);
        return redirect::route('kendaraan.index')->with('success', 'Data kendaraan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kendaraan $kendaraan)
    {
        $kendaraan->delete($kendaraan->nama_kendaraan);
        return redirect::route('kendaraan.index')->with('success', 'Data kendaraan berhasil dihapus');
    }
}
