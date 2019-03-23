<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function show($nama)
    {
        $nama  = $nama;
        return view('kamar.index', ['nama'=>$nama]);
    }
    public function proses(Request $request)
    {
        $p      = $request->panjang;
        $l      = $request->lebar;
        $hitung = $p * $l;
        // return redirect('luas-kamar')->with('hitung',$hitung);
        return view('kamar.hasil', ['hasil'=>$hitung, 'p'=>$p, 'l'=>$l]);
    }
}
