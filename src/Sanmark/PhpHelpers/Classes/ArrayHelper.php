<?php

namespace Sanmark\PhpHelpers\Classes;

class ArrayHelper
{

	public function getValueIfKeyExistsOrNull ( $array , $key )
	{
		if ( isset ( $array[ $key ] ) )
		{
			return $array[ $key ] ;
		}

		return NULL ;
	}

	public function getValuesIfKeysExist ( $values , $keys )
	{
		$filteredValues = NULL ;

		foreach ( $keys as $key )
		{
			if ( array_key_exists ( $key , $values ) )
			{
				$filteredValues[ $key ] = $values[ $key ] ;
			}
		}

		return $filteredValues ;
	}

	public function pruneEmptyElements ( $array )
	{
		$prunedArray = NULL ;

		foreach ( $array as $key => $value )
		{
			if ( ! is_null ( $value ) && strlen ( $value ) > 0 )
			{
				$prunedArray[ $key ] = $value ;
			}
		}

		return $prunedArray ;
	}

	public function AddSameKeyElements ( $firstArray , $secondArray )
	{
		$output = [ ] ;

		foreach ( $firstArray as $firstArrayKey => $firstArrayValue )
		{
			$value = $firstArrayValue ;
			unset ( $firstArray[ $firstArrayKey ] ) ;

			if ( array_key_exists ( $firstArrayKey , $secondArray ) )
			{
				$value += $secondArray[ $firstArrayKey ] ;
				unset ( $secondArray[ $firstArrayKey ] ) ;
			}

			$output[ $firstArrayKey ] = $value ;
		}

		foreach ( $secondArray as $secondArrayKey => $secondArrayValue )
		{
			$output[ $secondArrayKey ] = $secondArrayValue ;
		}

		return $output ;
	}

	public function areAllElementsEmpty ( $array )
	{
		foreach ( $array as $element )
		{
			if ( ! NullHelper::isNullEmptyOrWhitespace ( $element ) )
			{
				return FALSE ;
			}
		}

		return TRUE ;
	}

	public function areAllElementsFilled ( $array )
	{
		foreach ( $array as $element )
		{
			if ( NullHelper::isNullEmptyOrWhitespace ( $element ) )
			{
				return FALSE ;
			}
		}

		return TRUE ;
	}

	public function hasAtLeastOneElementWithValue ( array $array , array $except = NULL )
	{
		if ( ! is_null ( $except ) )
		{
			$arrayWithoutExceptElements = $this -> without ( $array , $except ) ;
		} else
		{
			$arrayWithoutExceptElements = $array ;
		}

		foreach ( $arrayWithoutExceptElements as $key => $value )
		{
			if ( ! NullHelper::isNullEmptyOrWhitespace ( $value ) )
			{
				return TRUE ;
			}
		}

		return FALSE ;
	}

	public function without ( array $array , array $excepts )
	{
		foreach ( $excepts as $except )
		{
			unset ( $array[ $except ] ) ;
		}

		return $array ;
	}

	public function withoutRecursive ( array $array , array $excepts )
	{
		$array = $this -> without ( $array , $excepts ) ;

		foreach ( $array as $key => $value )
		{
			if ( is_array ( $value ) )
			{
				$array[ $key ] = $this -> withoutRecursive ( $value , $excepts ) ;
			}
		}

		return $array ;
	}

	public function hasAtLeastOneElementWithValueInAtLeastOneChildArrayRecursive ( array $array )
	{
		foreach ( $array as $value )
		{
			if ( ! is_array ( $value ) && ! NullHelper::isNullEmptyOrWhitespace ( $value ) )
			{
				return TRUE ;
			} elseif ( is_array ( $value ) && $this -> hasAtLeastOneElementWithValueInAtLeastOneChildArrayRecursive ( $value ) )
			{
				return TRUE ;
			}
		}

		return FALSE ;
	}

	public function areAllElementsHasValue ( $array )
	{
		foreach ( $array as $element )
		{
			if ( $element == '' || $element == NULL )
			{
				return FALSE ;
			}
		}

		return TRUE;
	}

	public function removeWhiteSpacesInValuesRecursive ( $array )
	{
		$processedArray = [ ] ;

		foreach ( $array as $key => $value )
		{
			if ( is_array ( $value ) )
			{
				$processedArray[ $key ] = $this -> removeWhiteSpacesInValuesRecursive ( $value ) ;
			} else
			{
				$processedArray[ $key ] = StringHelper::removeWhiteSpaces ( $value ) ;
			}
		}

		return $processedArray ;
	}

}