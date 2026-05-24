<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // VALIDASI
        $request->validate([
            'nama'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'telepon'    => 'nullable|string|max:20',
            'perusahaan' => 'nullable|string|max:255',
            'pesan'      => 'required|string',
        ]);

        // SIMPAN KE DATABASE
        Contact::create([
            'nama'       => $request->nama,
            'email'      => $request->email,
            'telepon'    => $request->telepon,
            'perusahaan' => $request->perusahaan,
            'pesan'      => $request->pesan,
            'is_read'    => false,
        ]);

        // REDIRECT BALIK KE HALAMAN CONTACT DENGAN PESAN SUKSES
        return redirect()->route('contact')
            ->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
