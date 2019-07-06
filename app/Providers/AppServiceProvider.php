<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layouts.master-en', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cat', $categories);
        });

        view()->composer('layouts.master-ar', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cat', $categories);
        });


        view()->composer('admin.menu', function ($view) {
            $categories = \App\Menu::all();

            $view->with('cate', $categories);
        });

        view()->composer('admin.menu_edit', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });

        view()->composer('menu.create', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate1', $categories)->with('cate2', $categories2);
        });

        view()->composer('admin.create-page', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });
        view()->composer('admin.create-service', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });


        view()->composer('menu.delete', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });

        view()->composer('admin.edit', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });
        view()->composer('admin.edit-service', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });



        view()->composer('admin.delete-menu', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });

        view()->composer('admin.delete-slider', function ($view) {
            $slide = \App\Slider::all();
            $view->with('slide', $slide);
        });

        view()->composer('partials.header', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cat', $categories);
        });

        view()->composer('partials.header-ar', function ($view) {
            $categories = \App\Menu::all();
            $view->with('cat', $categories);
        });


        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
