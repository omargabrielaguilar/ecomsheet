<?php

use App\Livewire\Product;
use App\Livewire\StoreFront;
use Illuminate\Support\Facades\Route;

Route::get('/', StoreFront::class)->name('home');
Route::get('/product/{productId}', Product::class)->name('product');
