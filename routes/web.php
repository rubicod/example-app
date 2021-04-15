<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/accueil');
})->name('home');

Route::get('/about-us', function() {
    return view('pages/about');
})->name('about');



?>