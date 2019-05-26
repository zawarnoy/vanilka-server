<?php

namespace App\Providers;


use App\Services\OrderEntityService;
use Illuminate\Support\ServiceProvider;

class OrderEntityServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(OrderEntityService::class, function ($app) {
            return new OrderEntityService();
        });
    }
}