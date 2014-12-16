<?php

namespace Sanmark\PhpHelpers\Classes;

class BooleanHelper
{
	public function getTrueFalseOrNull($value)
	{
		if(is_string($value) && strlen($value)==0)
		{
			$value = 'null';
		}

		return filter_var ( $value , FILTER_VALIDATE_BOOLEAN , FILTER_NULL_ON_FAILURE );
	}
}
