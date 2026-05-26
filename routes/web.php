<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Product;


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

    $products = Product::where('is_active', true)
        ->latest()
        ->get();

    return view('pages.produk', compact('products'));

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

    $products = Product::where('is_active', true)
        ->latest()
        ->get();

    return view('pages.katalog', compact('products'));

});

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
});

Route::post('/contact-send',
    [ContactController::class, 'send']
)->name('contact.send');

