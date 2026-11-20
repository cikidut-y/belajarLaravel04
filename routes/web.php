<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;

Route::get('/sapa', [SapaController::class, 'index']);

// Route::get('/product', [ProductController::class, 'getProduct']);
// Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Sendy Prayogo',
        'kelas'=> 'TSM-00',
        'nim' => '0123456789',
    ]);
});

Route::view('/contact', 'pages.contact');

// satu controller bisa memiliki beberapa method (perintah)
Route::get('/product', [ProductController::class, 'index']); //untuk menampilkan data 
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);


Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

Route::post('/product', [ProductController::class, 'store']);

// Route::get('/product', function (){
//     $product = [
//         [1,'Laptop', 10, 7500000],
//         [2,'Mouse', 25, 150000],
//         [3,'Keyboard', 15, 300000],
//         [4,'Monitor', 8, 1800000],
//     ];

//     return view('pages.product', [
//         'product' => $product,
//     ]);
// });