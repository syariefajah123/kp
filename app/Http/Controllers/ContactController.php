<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'pesan' => 'required',

        ]);

        Inquiry::create([

            'nama' => $request->nama,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'produk' => $request->produk,
            'pesan' => $request->pesan,
            'status' => 'baru',

        ]);

        return back()->with('success',
            'Pesan berhasil dikirim!');
    }
}