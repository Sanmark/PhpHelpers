<?php namespace Sanmark\PhpHelpers;

use Illuminate\Support\ServiceProvider;

class PhpHelpersServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->package('sanmark/php-helpers');

		$ArrayHelperLoader = \Illuminate\Foundation\AliasLoader::getInstance();
		$DateTimeHelperLoader = \Illuminate\Foundation\AliasLoader::getInstance();
		$NullHelperLoader = \Illuminate\Foundation\AliasLoader::getInstance();
		$StringHelperLoader = \Illuminate\Foundation\AliasLoader::getInstance();
		$NumberHelperLoader = \Illuminate\Foundation\AliasLoader::getInstance();
		$ObjectHelperLoader = \Illuminate\Foundation\AliasLoader::getInstance();

		$ArrayHelperLoader -> alias('Sanmark\PhpHelpers\ArrayHelper', 'Sanmark\PhpHelpers\Facades\ArrayHelperFacade');
		$DateTimeHelperLoader -> alias('Sanmark\PhpHelpers\DateTimeHelper', 'Sanmark\PhpHelpers\Facades\DateTimeHelperFacade');
		$NullHelperLoader -> alias('Sanmark\PhpHelpers\NullHelper', 'Sanmark\PhpHelpers\Facades\NullHelperFacade');
		$StringHelperLoader -> alias('Sanmark\PhpHelpers\StringHelper', 'Sanmark\PhpHelpers\Facades\StringHelperFacade');
		$NumberHelperLoader -> alias('Sanmark\PhpHelpers\NumberHelper', 'Sanmark\PhpHelpers\Facades\NumberHelperFacade');
		$ObjectHelperLoader -> alias('Sanmark\PhpHelpers\ObjectHelper', 'Sanmark\PhpHelpers\Facades\ObjectHelperFacade');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['Sanmark\PhpHelpers\ArrayHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\ArrayHelper;
		});

		$this->app['Sanmark\PhpHelpers\DateTimeHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\DateTimeHelper;
		});

		$this->app['Sanmark\PhpHelpers\NullHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\NullHelper;
		});

		$this->app['Sanmark\PhpHelpers\StringHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\StringHelper;
		});

		$this->app['Sanmark\PhpHelpers\NumberHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\NumberHelper;
		});

		$this->app['Sanmark\PhpHelpers\ObjectHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\ObjectHelper;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
