<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\QuotationAdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PortfolioController;


/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/quotation', function () {
    return view('pages.quotation');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', function () {
    return view('pages.produk');
});

Route::get('/packaging', function () {
    return view('pages.packaging');
});


Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

/* CONTACT */
Route::get('/hubungi-kami', function () {
    return view('pages.contact');
})->name('contact');

/* CORPORATE */
Route::get('/corporate', function () {
    return view('pages.corporate');
});

/* SEND CONTACT */
Route::post('/contact-send', [ContactController::class, 'send'])
    ->name('contact.send');

Route::get('/solusi-umkm', function () {
    return view('pages.solusi-umkm');
});    
Route::get('/katalog', function () {
    return view('pages.katalog');
});


Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
});

// ---- ADMIN ROUTES (dilindungi middleware auth + admin) ----
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Pesan masuk (Contact)
    Route::get('/contacts', [ContactAdminController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactAdminController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [ContactAdminController::class, 'destroy'])->name('contacts.destroy');
    Route::post('/contacts/mark-all-read', [ContactAdminController::class, 'markAllRead'])->name('contacts.markAllRead');

    // Quotation
    Route::get('/quotations', [QuotationAdminController::class, 'index'])->name('quotations.index');
    Route::get('/quotations/{quotation}', [QuotationAdminController::class, 'show'])->name('quotations.show');
    Route::patch('/quotations/{quotation}/status', [QuotationAdminController::class, 'updateStatus'])->name('quotations.updateStatus');
    Route::delete('/quotations/{quotation}', [QuotationAdminController::class, 'destroy'])->name('quotations.destroy');

    // Produk (CRUD)
    Route::resource('products', ProductController::class);

    // Portfolio (CRUD)
    Route::resource('portfolios', PortfolioController::class);
});

