<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return '/login usuario';
});

Route::get('/logout', function () {
    return '/logout usario';
});

Route::get('/catalog', function () {
    return '/listado peliculas';
});

Route::get('catalog/show/{id}', function ($id) {
    return '/listado detalle pelicula :'. $id;
});

Route::get('catalog/create', function () {
    return '/añadir pelicula';
});

Route::get('catalog/edit/{id}', function ($id) {
    return 'modificar pelicula:'. $id;
});