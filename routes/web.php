<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index-en');
});

Route::get('/home-ar', function () {
    return view('index-ar');
});

Route::get('/workspace', function () {
    return view('workspace');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about-ar', function () {
    return view('about-ar');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/marketing-plan', function () {
    return view('marketing-plan');
});

Route::get('/where-to-go', function () {
    return view('where-to-go');
});

Route::get('/market-research', function () {
    return view('market-research');
});

Route::get('/branding', function () {
    return view('branding');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/consulting', function () {
    return view('consulting');
});
Route::get('/emarketing', function () {
    return view('emarketing');
});

Route::get('/contact-ar', function () {
    return view('ar.contact');
});

Route::get('/workspace-ar', function () {
    return view('ar.workspace');
});

Route::get('/about-ar', function () {
    return view('ar.about');
});

Route::get('/blog-ar', function () {
    return view('ar.blog');
});

Route::get('/market-research-ar', function () {
    return view('ar.market-research');
});

Route::post('/contact-mail','ContactController@send');


Route::get('/where-to-go-ar', function () {
    return view('ar.where-to-go');
});


Route::get('/marketing-plan-ar', function () {
    return view('ar.marketing-plan');
});


Route::get('/branding-ar', function () {
    return view('ar.branding');
});


Route::get('/training-ar', function () {
    return view('ar.training');
});


Route::get('/consulting-ar', function () {
    return view('ar.consulting');
});

Route::get('/emarketing-ar', function () {
    return view('ar.emarketing');
});