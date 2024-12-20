<?php

use Illuminate\Support\Facades\Route;
use App\Models\Gallery;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


 // Rute untuk halaman About
Route::get('/about', function () {
    return view('about'); // Menampilkan view 'about.blade.php'
});



 // Rute untuk halaman Divisi
 Route::get('/divissions', function () {
    return view('divissions'); // Menampilkan view 'about.blade.php'
});

 // Rute untuk halaman contact
 Route::get('/contact', function () {
    return view('contact'); // Menampilkan view 'about.blade.php'
});


 // Rute untuk halaman contact
 Route::get('/galerry', function () {
    return view('galerry'); // Menampilkan view 'about.blade.php'
});



Route::get('/gallery/{gallery}/download', function (Gallery $gallery) {
    // Ambil nama asli file
    $fileName = basename($gallery->image_path);
    
    // Path file yang sebenarnya
    $filePath = storage_path('app/public/' . $gallery->image_path);

    // Cek apakah file ada
    if (file_exists($filePath)) {
        return response()->download($filePath, $fileName); // Gunakan nama file asli
    } else {
        abort(404, 'File not found');
    }
})->name('gallery.download');
