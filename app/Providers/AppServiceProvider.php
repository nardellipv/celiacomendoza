<?php

namespace celiacomendoza\Providers;

use celiacomendoza\Blog;
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
        view::composer('web.parts._asideBlog', function ($view) {
            $lastPosts = Blog::orderBy('created_at', 'DESC')
                ->take(5)
                ->get();

            $view->with('lastPosts', $lastPosts);
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
