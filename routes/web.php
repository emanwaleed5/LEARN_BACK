<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/contact-us', function () {
    return 'contact-us';
});

