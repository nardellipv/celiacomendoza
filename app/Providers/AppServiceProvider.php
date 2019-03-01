<?php

namespace celiacomendoza\Providers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
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
        view::composer('auth.login', function ($view){
           $regions = Region::all();
           $view->with('regions', $regions);
        });

        view::composer('auth.register', function ($view){
            $regions = Region::all();
            $view->with('regions', $regions);
        });

        view::composer('web.parts._asideBlog', function ($view) {

            $lastPosts = Blog::orderBy('created_at', 'DESC')
                ->take(5)
                ->get();

            $randomCommerce = Commerce::where('logo','!=', NULL)
                ->orderByRaw("RAND()")
                ->first();

            $view->with([
                'lastPosts'=> $lastPosts,
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
