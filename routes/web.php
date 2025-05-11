<?php

use Illuminate\Support\Facades\Route;

Route::get('/adminn', function () {
    return view('admin.dashboard');
});
