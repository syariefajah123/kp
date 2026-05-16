<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
});

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

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
});

