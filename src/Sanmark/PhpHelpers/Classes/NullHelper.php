<?php

namespace Sanmark\PhpHelpers\Classes;

class NullHelper
{

	public function zeroIfNull ( $value )
	{
		if ( is_null ( $value ) )
		{
			return 0 ;
		}

		return $value ;
	}

	public function zeroIfEmptyString ( $string )
	{
		if ( $string == "" )
		{
			return 0 ;
		}
		return $string ;
	}

	public function isNullEmptyOrWhitespace ( $value )
	{
		if ( is_null ( $value ) )
		{
			return TRUE ;
		}

		if ( empty ( $value ) )
		{
			return TRUE ;
		}

		if ( strlen ( trim ( $value ) ) == 0 )
		{
			return TRUE ;
		}

		return FALSE ;
	}

	public function nullIfEmpty ( $value )
	{
		if ( empty ( $value ) )
		{
			return NULL ;
		}

		return $value ;
	}

	public function ifNullEmptyOrWhitespace ( $valueOne , $valueTwo )
	{
		if ( $this -> isNullEmptyOrWhitespace ( $valueOne ) )
		{
			return $valueTwo ;
		}

		return $valueOne ;
	}

}