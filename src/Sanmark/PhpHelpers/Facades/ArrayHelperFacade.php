<?php

namespace Sanmark\PhpHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class ArrayHelperFacade extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'Sanmark\PhpHelpers\ArrayHelper';
	}
}