<?php

use Illuminate\Support\Facades\requestlokercontroller;

Route::get('/',[App\Http\Controllers\requestlokercontroller::class, 'index']);

Route::get('/', function () {
    return view('requestloker');
});
