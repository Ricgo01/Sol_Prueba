<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // Ejecuta una consulta simple para obtener la versión de PostgreSQL
    $dbVersion = DB::selectOne('SELECT version() as version')->version;
    return view('welcome', compact('dbVersion'));
});
