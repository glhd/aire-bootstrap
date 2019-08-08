<?php

namespace Galahad\AireBootstrap;

use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Support\ServiceProvider;

class AireBootstrapServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/aire-bootstrap.php', 'aire-bootstrap');

        $config = $this->app['config'];
        $config->set('aire.default_classes', $config->get('aire-bootstrap.default_classes'));
        $config->set('aire.validation_classes', $config->get('aire-bootstrap.validation_classes'));
    }

    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'aire-bootstrap');

        Aire::setTheme('aire-bootstrap');
    }
}
