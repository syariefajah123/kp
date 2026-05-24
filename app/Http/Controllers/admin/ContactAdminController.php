<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    // Daftar semua pesan
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);
        return view('admin.contacts.index', compact('contacts'));
    }

    // Detail satu pesan (otomatis tandai sudah dibaca)
    public function show(Contact $contact)
    {
        $contact->update(['is_read' => true]);
        return view('admin.contacts.show', compact('contact'));
    }

    // Hapus pesan
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Pesan berhasil dihapus.');
    }

    // Tandai semua sudah dibaca
    public function markAllRead()
    {
        Contact::where('is_read', false)->update(['is_read' => true]);
        return back()->with('success', 'Semua pesan ditandai sudah dibaca.');
    }
}
