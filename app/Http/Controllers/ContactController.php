<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // VALIDASI
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'nullable',
            'perusahaan' => 'nullable',
            'pesan' => 'required',
        ]);

        // FORMAT PESAN WHATSAPP
        $message =
            "Halo PT Luck Packaging Indonesia%0A%0A" .

            "*Pesan Baru dari Website*%0A%0A" .

            "Nama: {$request->nama}%0A" .
            "Email: {$request->email}%0A" .
            "Telepon: {$request->telepon}%0A" .
            "Perusahaan: {$request->perusahaan}%0A%0A" .

            "Pesan:%0A{$request->pesan}";

        // REDIRECT KE WHATSAPP
        return redirect(
            "https://wa.me/6282151177722?text=$message"
        );
    }
}