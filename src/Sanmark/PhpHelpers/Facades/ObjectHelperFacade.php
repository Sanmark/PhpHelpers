<?php

namespace Sanmark\PhpHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class ObjectHelperFacade extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'Sanmark\PhpHelpers\ObjectHelper';
	}
}