<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Quotation;
use App\Models\Product;
use App\Models\Portfolio;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            // Notifikasi - pesan & quotation belum dibaca
            'unread_contacts'    => Contact::where('is_read', false)->count(),
            'unread_quotations'  => Quotation::where('is_read', false)->count(),

            // Statistik umum
            'total_contacts'     => Contact::count(),
            'total_quotations'   => Quotation::count(),
            'total_products'     => Product::count(),
            'total_portfolios'   => Portfolio::count(),

            // Quotation per status
            'quotation_pending'  => Quotation::where('status', 'pending')->count(),
            'quotation_diproses' => Quotation::where('status', 'diproses')->count(),
            'quotation_selesai'  => Quotation::where('status', 'selesai')->count(),

            // Pesan & quotation terbaru
            'recent_contacts'    => Contact::latest()->take(5)->get(),
            'recent_quotations'  => Quotation::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', $data);
    }
}
