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

		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$loader->alias('Sanmark\PhpHelpers\ArrayHelper', 'Sanmark\PhpHelpers\Facades\ArrayHelperFacade');
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
