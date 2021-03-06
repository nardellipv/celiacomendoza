<?php

namespace celiacomendoza\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        view::composer(['layouts.company','layouts.main','web.parts._cart'], 'celiacomendoza\Http\CounterView\CounterCart');
        view::composer(['web.parts.adminClient._menu'], 'celiacomendoza\Http\CounterView\CounterAside');
        view::composer(['admin.parts._widget'], 'celiacomendoza\Http\CounterView\CounterAdmin');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
