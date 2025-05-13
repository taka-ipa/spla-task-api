<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/sanctum/csrf-cookie', function (Request $request) {
    return response()->json(['csrf_token' => csrf_token()]);
});

require __DIR__.'/auth.php';
