<?php

namespace Sanmark\PhpHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class BooleanHelperFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'Sanmark\PhpHelpers\BooleanHelper';
	}
}
