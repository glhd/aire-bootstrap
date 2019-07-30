<?php

namespace Galahad\AireBootstrap;

use Galahad\Aire\Elements\Attributes\ClassNames;
use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Support\ServiceProvider;

class AireBootstrapServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->mergeConfigFrom(dirname(__DIR__).'/config/aire-bootstrap.php', 'aire-bootstrap');
	}
	
	public function boot()
	{
		$this->loadViewsFrom(dirname(__DIR__).'/views', 'aire-bootstrap');
		
		Aire::setTheme('aire-bootstrap');
		
		ClassNames::setDefaultClasses($this->app['config']->get('aire-bootstrap.default_classes', []));
		ClassNames::setValidationClasses($this->app['config']->get('aire-bootstrap.validation_classes', []));
	}
}
