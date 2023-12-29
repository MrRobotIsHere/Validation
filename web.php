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










Route::get('/home', function () {
    return view('page.home');
})->name('home');

Route::get('/login', function () {
    return view('page.login');
})->name('login');





Route::post('/login', function ()
{
    $validated = request()->validate(
        [
            'email'    => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8', 'max:64']
        ]
    );

    dd($validated);

})->name('login.post');

Route::get('/register', function () {
    return view('page.register');
})->name('register');

Route::post('/register', function () {
    $validated = request()->validate(
        ['name'     => ['required', 'string', 'min:3', 'max:32'],
            'email'    => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8', 'max:64', 'confirmed']
        ]
    );

    dd($validated);

})->name('register.post');

Route::get('/profile', function () {
    return view('page.profile');
});


