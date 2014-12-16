<?php

namespace Sanmark\PhpHelpers\Classes;

class BooleanHelper
{
	public function getTrueFalseOrNull($value)
	{
		if(is_null($value) || (is_string($value) && strlen($value)==0))
		{
			return null;
		}

		return filter_var ( $value , FILTER_VALIDATE_BOOLEAN , FILTER_NULL_ON_FAILURE );
	}
}
