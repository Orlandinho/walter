<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    Artisan::call('storage:link');
    sleep(0.5);
    return Inertia::render('Walter');
})->name('home');

Route::get('/baixo_giannini', function () {
    return Inertia::render('Baixo1');
})->name('baixo 1');

Route::get('/baixo_california', function () {
    return Inertia::render('Baixo2');
})->name('baixo 2');

Route::get('/guitarra', function () {
    return Inertia::render('Guitarra');
})->name('guitarra');

Route::get('/teclado', function () {
    return Inertia::render('Teclado');
})->name('teclado');

/*Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';*/
