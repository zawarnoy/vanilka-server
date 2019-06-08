<?php

namespace App\Providers;


use App\Services\GalleryHandleService;
use App\Services\OrderEntityService;
use App\Services\ShowcaseHandleService;
use Illuminate\Support\ServiceProvider;

class OrderEntityServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(OrderEntityService::class, function ($app) {
            return new OrderEntityService();
        });

        $this->app->bind(GalleryHandleService::class, function ($app) {
            return new GalleryHandleService();
        });

        $this->app->bind(ShowcaseHandleService::class, function ($app) {
            return new ShowcaseHandleService();
        });
    }
}