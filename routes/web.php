<?php

use App\Service;
use App\Menu;
use App\About;
use App\Home;
use App\Portfolio;
use App\Page;
use App\Slider;

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

Auth::routes();



Route::get('/', function () {

    $services = Service::all();
    $pages = Page::all();
    $home_page_text = Home::first()->description;
    $slider = Slider::latest()->first();
    return view('index-en', compact('services', 'pages', 'home_page_text', 'slider'));
});

Route::get('/home-ar', function () {
    $ser = Service::all();
    return view('index-ar', compact('ser'));
});

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/portfolio', function () {
    $portfolio = Portfolio::all();
    return view('portfolio', compact('portfolio'));
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/about', function () {
    $about_us_text = About::first()->description;
    return view('about', compact('about_us_text'));
});


Route::get('/maintenance_form', function () {
    return view('maintenance_form');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about-ar', function () {
    return view('about-ar');
});
Route::get('/careers-ar', function () {
    return view('ar.careers');
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

Route::get('/clients-ar', function () {
    return view('ar.clients');
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

Route::post('/send-mail', 'ContactController@send');
Route::post('/maintenance-mail', 'ContactController@maintenance');
Route::post('/careers-mail', 'ContactController@careers');


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
Route::get('/test', function () {
    return view('layouts.master-email');
});

Route::get('/consulting-ar', function () {
    return view('ar.consulting');
});

Route::get('/emarketing-ar', function () {
    return view('ar.emarketing');
});

Route::get('pages/{id}', function ($id) {
    $page = Page::find($id);
    return view('page-layout', compact('page'));
});
Route::get('services/{id}', function ($id) {
    $ser = Service::find($id);
    return view('service-layout', compact('ser'));
});

Route::get('services_ar/{id}', function ($id) {
    $ser = Service::find($id);
    return view('service-layout-ar', compact('ser'));
});

Route::get('admin', 'AdminController@index')->middleware('auth');
Route::post('admin/slider', 'AdminController@add_slider')->middleware('auth');
Route::post('portfolio/portfolio', 'AdminController@add_portfolio')->middleware('auth');
Route::delete('admin/del-slider/{id}', 'AdminController@delete_slider')->middleware('auth');
Route::delete('admin/delete-portfolio/{id}', 'AdminController@delete_portfolio')->middleware('auth');
Route::get('admin/delete-slider', function () {
    return view('admin.delete-slider');
})->middleware('auth');
Route::get('admin/delete-portfolio', function () {
    $portfolio = Portfolio::all();
    return view('admin.delete-portfolio', compact('portfolio'));
})->middleware('auth');
Route::get('admin/add-slider', function () {
    return view('admin.add-slider');
})->middleware('auth');
Route::get('admin/add-portfolio', function () {
    return view('admin.add-portfolio');
})->middleware('auth');
Route::get('admin/page', 'AdminController@show')->middleware('auth');

Route::get('admin/service', 'AdminController@show_service')->middleware('auth');
Route::get('admin/create-page', function () {
    return view('admin.create-page');
})->middleware('auth');
Route::get('admin/create-service', function () {
    return view('admin.create-service');
})->middleware('auth');

Route::post('sub-menu', 'AdminController@submenu')->middleware('auth');
Route::post('main-menu', 'AdminController@mainmenu')->middleware('auth');
Route::post('admin', 'AdminController@store_page')->middleware('auth');
Route::post('admin/store-service', 'AdminController@store_service')->middleware('auth');

Route::delete('admin/{id}', 'AdminController@destroy_page')->middleware('auth');
Route::delete('admin/service/{id}', 'AdminController@destroy_service')->middleware('auth');

Route::get('admin/{id}/edit', 'AdminController@edit')->middleware('auth');
Route::get('admin/service/{id}/edit', 'AdminController@edit_service')->middleware('auth');
Route::get('admin/{id}/edit_menu', 'AdminController@edit_menu')->middleware('auth');

Route::post('admin/{id}', 'AdminController@update')->middleware('auth');
Route::post('admin/service/{id}', 'AdminController@update_service')->middleware('auth');
Route::post('admin_edit/{id}', 'AdminController@updatemenu')->middleware('auth');

Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
})->middleware('auth');
Route::get('admin/menu', function () {
    $cat = Menu::all();
    return view('admin.menu', compact('cat'));
})->middleware('auth');
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
})->middleware('auth');
Route::delete('admin/delete-menu/{id}', 'AdminController@del')->middleware('auth');
Route::delete('admin/submenu_edit', 'AdminController@editsub')->middleware('auth');


Route::get('admin/home-text', function () {
    $description = (Home::first()->description);
    return view('admin.home-text', compact('description'));
})->middleware('auth');


Route::get('admin/aboutus-text', function () {
    $description = (About::first()->description);
    return view('admin.aboutus-text', compact('description'));
})->middleware('auth');

Route::post('home-text', 'AdminController@hometext')->middleware('auth');
Route::post('aboutus-text', 'AdminController@aboutustext')->middleware('auth');
