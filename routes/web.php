<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PorscheController;

Route::get('/', function () {
    return redirect()->route('porsche.index');
});

Route::resource('porsche', PorscheController::class);