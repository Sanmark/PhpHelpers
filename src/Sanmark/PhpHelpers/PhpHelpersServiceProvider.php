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


		$ArrayHelperLoader -> alias('Sanmark\PhpHelpers\ArrayHelper', 'Sanmark\PhpHelpers\Facades\ArrayHelperFacade');
		$DateTimeHelperLoader -> alias('Sanmark\PhpHelpers\DateTimeHelper', 'Sanmark\PhpHelpers\Facades\DateTimeHelperFacade');
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
