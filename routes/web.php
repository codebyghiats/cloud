<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/produk');
});

use App\Http\Controllers\ProdukController;

Route::resource('produk', ProdukController::class);

