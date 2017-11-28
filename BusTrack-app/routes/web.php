<?php
Route::get('/', function () {
    return view('index');
})->name('inicio');


Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('rutas', function () {
    return view('mapa');
})->name('rutas');

Route::get('quienesSomos', function () {
    return view('quienesSomos');
})->name('quienesSomos');