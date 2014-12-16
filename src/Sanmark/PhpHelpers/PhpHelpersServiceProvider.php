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

		$aliasLoader = \Illuminate\Foundation\AliasLoader::getInstance();

		$aliasLoader -> alias('Sanmark\PhpHelpers\ArrayHelper', 'Sanmark\PhpHelpers\Facades\ArrayHelperFacade');
		$aliasLoader -> alias('Sanmark\PhpHelpers\BooleanHelper', 'Sanmark\PhpHelpers\Facades\BooleanHelperFacade');
		$aliasLoader -> alias('Sanmark\PhpHelpers\DateTimeHelper', 'Sanmark\PhpHelpers\Facades\DateTimeHelperFacade');
		$aliasLoader -> alias('Sanmark\PhpHelpers\NullHelper', 'Sanmark\PhpHelpers\Facades\NullHelperFacade');
		$aliasLoader -> alias('Sanmark\PhpHelpers\NumberHelper', 'Sanmark\PhpHelpers\Facades\NumberHelperFacade');
		$aliasLoader -> alias('Sanmark\PhpHelpers\ObjectHelper', 'Sanmark\PhpHelpers\Facades\ObjectHelperFacade');
		$aliasLoader -> alias('Sanmark\PhpHelpers\StringHelper', 'Sanmark\PhpHelpers\Facades\StringHelperFacade');
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

		$this->app['Sanmark\PhpHelpers\BooleanHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\BooleanHelper;
		});

		$this->app['Sanmark\PhpHelpers\DateTimeHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\DateTimeHelper;
		});

		$this->app['Sanmark\PhpHelpers\NullHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\NullHelper;
		});

		$this->app['Sanmark\PhpHelpers\NumberHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\NumberHelper;
		});

		$this->app['Sanmark\PhpHelpers\ObjectHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\ObjectHelper;
		});

		$this->app['Sanmark\PhpHelpers\StringHelper'] = $this -> app -> share( function ($app)
		{
			return new Classes\StringHelper;
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
