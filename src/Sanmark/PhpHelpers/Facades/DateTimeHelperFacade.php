<?php

namespace Sanmark\PhpHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class DateTimeHelperFacade extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'Sanmark\PhpHelpers\DateTimeHelper';
	}
}