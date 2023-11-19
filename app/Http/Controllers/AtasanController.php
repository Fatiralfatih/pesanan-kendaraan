<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AtasanController extends Controller
{
    
    public function index()
    {   
        $pesanan = Auth::user()->pesananPivot;
        return view('atasan.pesanan-atasan',[
            'pesanans' => $pesanan
        ]);
    }

    function acc($id) {
        Auth::user()->pesananPivot()->updateExistingPivot($id, [
            'confirmed' => true
        ]);
        return redirect::route('pesanan-atasan.index')->with('success', 'pesanan Berhasil dikonfirmasi');
    }

    function reject($id) {
        Auth::user()->pesananPivot()->updateExistingPivot($id, [
            'confirmed' => false
        ]);
        
    }
}
