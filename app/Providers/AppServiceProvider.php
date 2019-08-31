<?php

namespace celiacomendoza\Providers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Province;
use celiacomendoza\Recipes;
use celiacomendoza\Region;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer('auth.login', function ($view) {
            $provinces = Province::all();
            $view->with('provinces', $provinces);
        });

        view::composer('auth.register', function ($view) {
            $provinces = Province::all();
            $view->with('provinces', $provinces);
        });

        view::composer('web.parts._menu', function ($view) {
            $provinces = Province::all();
            $view->with('provinces', $provinces);
        });

        view::composer('auth.register', function ($view) {
            $regions = Region::all();
            $view->with('regions', $regions);
        });

//        asideHistorias
        view::composer('web.parts._asideHistorias', function ($view) {
            $lastPersonals = Blog::orderBy('created_at', 'DESC')
                ->where('type', 'Personal')
                ->take(5)
                ->get();

            $randomCommerce = Commerce::where('logo', '!=', NULL)
                ->orderByRaw("RAND()")
                ->first();


            $view->with([
                'lastPersonals' => $lastPersonals,
                'randomCommerce' => $randomCommerce
            ]);
        });

        //asideRecetas
        view::composer('web.parts._asideRecipe', function ($view) {
            $lastRecipes = Recipes::orderBy('created_at', 'DESC')
                ->take(4)
                ->get();

            $randomCommerce = Commerce::where('logo', '!=', NULL)
                ->orderByRaw("RAND()")
                ->first();


            $view->with([
                'lastRecipes' => $lastRecipes,
                'randomCommerce' => $randomCommerce
            ]);
        });

//        asideBlog
        view::composer('web.parts._asideBlog', function ($view) {
            $lastPosts = Blog::orderBy('created_at', 'DESC')
                ->where('type', 'Blog')
                ->take(5)
                ->get();

            $randomCommerce = Commerce::where('logo', '!=', NULL)
                ->orderByRaw("RAND()")
                ->first();

            $view->with([
                'lastPosts' => $lastPosts,
                'randomCommerce' => $randomCommerce
            ]);
        });
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
