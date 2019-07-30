<?php

namespace Galahad\AireBootstrap\Tests;

use Galahad\AireBootstrap\AireBootstrapServiceProvider;

abstract class TestCase extends \Galahad\Aire\Tests\TestCase
{
	protected function getPackageProviders($app)
	{
		return array_merge(parent::getPackageProviders($app), [
			AireBootstrapServiceProvider::class,
		]);
	}
}
