<?php

namespace Sanmark\PhpHelpers
{
	class StringHelper
	{
		public static function removeWhiteSpaces ( $string )
		{

			$leftRightTrim		 = ltrim ( $string , ' ' ) ;
			$leftRightTrim		 = rtrim ( $leftRightTrim , ' ' ) ;
			$spacesRemovedString = preg_replace ( '!\s+!' , ' ' , $leftRightTrim ) ;

			return $spacesRemovedString ;
		}

		public static function genRandom ( $length = 10 )
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ;

			$charactersLength = strlen ( $characters ) ;

			$randomString = '' ;

			for ( $i = 0 ; $i < $length ; $i ++ )
			{
				$randomString .= $characters[ rand ( 0 , $charactersLength - 1 ) ] ;
			}

			return $randomString ;
		}
	}
}