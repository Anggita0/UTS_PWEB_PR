<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

// Landing Page
Route::get('/', function () {
    return view('landing'); // Ganti dengan nama view landing page Anda
})->name('landing');

// Halaman Registrasi
Route::get('/register', function () {
    return view('register');
})->name('register');

// Proses Registrasi
Route::post('/register', function (Request $request) {
    // Simpan email di session, tanpa validasi
    session(['user' => $request->email]);
    return redirect()->route('homepage'); // Alihkan ke halaman login
})->name('register.post');

// Halaman Login
Route::get('/login', function () {
    return view('login'); 
})->name('login');


// Proses Login
Route::post('/login', function (Request $request) {
    // Simpan email di session, tanpa validasi
    session(['user' => $request->email]);
    return redirect()->route('homepage'); // Alihkan ke homepage
})->name('login.post');

// Halaman Homepage
Route::get('/homepage', function () {
    // Menggunakan Faker untuk membuat data dummy
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
        ];
    }
    return view('homepage', ['contacts' => $contacts]);
})->name('homepage');
