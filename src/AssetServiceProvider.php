<?php

namespace IAMProperty\SharedAssets;

use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->publishes([
            __DIR__.'/../resources/assets/brand-logos' => public_path('img/brand-logos')
        ], ['assets', 'logos']);
    }
}
