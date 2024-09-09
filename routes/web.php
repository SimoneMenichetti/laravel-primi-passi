<?php

use Illuminate\Support\Facades\Route;

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

// HOME

Route::get('/', function () {

    $user = [
        'name' => 'Pinco',
        'surname' => 'Pallo',
        'age' => '29',
    ];

    $gifts = [];
    $title = 'Hello Laravel World';
    return view('Home', compact('title', 'gifts', 'user'));
    // utilizzo la funzione per dare un nome alla rotta
})->name('home');

// ABOUT

Route::get('/about', function () {

    $title = 'Informazioni su Laravel';
    return view('about', compact('title'));
    // utilizzo la funzione per dare un nome alla rotta
})->name('about');

// CONTACT

Route::get('/contact', function () {

    $title = 'Contattaci e scopri i nostri corsi';
    return view('contact', compact('title'));
    // utilizzo la funzione per dare un nome alla rotta
})->name('contact');
