<?php

namespace celiacomendoza\Providers;

use celiacomendoza\Commerce;
use celiacomendoza\Message;
use celiacomendoza\Policies\CommercePolicy;
use celiacomendoza\Policies\MessagePolicy;
use celiacomendoza\Policies\ProductPolicy;
use celiacomendoza\Product;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//        'celiacomendoza\Model' => 'celiacomendoza\Policies\ModelPolicy',
        Product::class => ProductPolicy::class,
        Message::class => MessagePolicy::class,
        Commerce::class => CommercePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
