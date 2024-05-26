<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Detail_ProdukController;
use App\Http\Controllers\Produk_Furniture;
use Illuminate\Support\Facades\Route;

//Produk Routes 
Route::get('Produk_furniture', [Produk_Furniture::class, 'Produk']);

//Detail Routes 
Route::get('Detail_Produk', [Detail_ProdukController::class, 'Detail']);

//Contact Routes 
Route::get('Contact_Furniture', [ContactController::class, 'Contact']);