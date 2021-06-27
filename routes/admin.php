<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return 'admin page';
});

Route::prefix('admin')->group(function () {





    
});
