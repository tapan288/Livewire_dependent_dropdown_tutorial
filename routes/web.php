<?php

use Illuminate\Support\Facades\Route;


Route::get('/dependent_dropdown', function () {
    return view('backend.dependent_dropdown');
});
