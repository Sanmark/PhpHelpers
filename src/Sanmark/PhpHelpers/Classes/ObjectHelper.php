<?php

namespace Sanmark\PhpHelpers\Classes;

class ObjectHelper
{

	public static function nullIfNonObject ( $object , $property )
	{
		if ( is_object ( $object ) )
		{
			return $object -> $property ;
		}

		return NULL ;
	}

}