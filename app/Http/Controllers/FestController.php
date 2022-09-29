<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarFestival;

class FestController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'pimpinan' => 'required',
            'wa' => 'required',
            'band' => 'required',
            'jumlah' => 'required',
            'alamat' => 'required',
            'vocal' => 'required',
            'drum' => 'required',
            'guitar' => 'required',
            'bass' => 'required',
            'keyboard' => 'required',
            'other' => 'required',
        ]);

        $daftar_festival = new DaftarFestival;
        $daftar_festival->pimpinan = $request->pimpinan;
        $daftar_festival->wa = $request->wa;
        $daftar_festival->band = $request->band;
        $daftar_festival->jumlah = $request->jumlah;
        $daftar_festival->alamat = $request->alamat;
        $daftar_festival->vocal = $request->vocal;
        $daftar_festival->drum = $request->drum;
        $daftar_festival->guitar = $request->guitar;
        $daftar_festival->bass = $request->bass;
        $daftar_festival->keyboard = $request->keyboard;
        $daftar_festival->other = $request->other;
        $daftar_festival->save();

        return back()->with('success', 'Terima kasih. Pendaftaran Anda telah kami terima');
    }
}
