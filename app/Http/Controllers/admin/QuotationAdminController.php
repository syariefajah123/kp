<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationAdminController extends Controller
{
    public function index()
    {
        $quotations = Quotation::latest()->paginate(15);
        return view('admin.quotations.index', compact('quotations'));
    }

    public function show(Quotation $quotation)
    {
        $quotation->update(['is_read' => true]);
        return view('admin.quotations.show', compact('quotation'));
    }

    public function updateStatus(Request $request, Quotation $quotation)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai',
        ]);
        $quotation->update(['status' => $request->status]);
        return back()->with('success', 'Status quotation diperbarui.');
    }

    public function destroy(Quotation $quotation)
    {
        $quotation->delete();
        return redirect()->route('admin.quotations.index')
            ->with('success', 'Quotation berhasil dihapus.');
    }
}
