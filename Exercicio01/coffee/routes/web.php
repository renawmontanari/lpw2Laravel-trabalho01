<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return View("pages.index");
});

Route::get('/about', function () {
    return View("pages.about");
});

Route::get('/menu', function () {
    return View("pages.menu");
});

Route::get('/gallery', function () {
    return View("pages.gallery");
});

Route::get('/blog', function () {
    return View("pages.blog");
});
