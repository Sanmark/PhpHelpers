<?php

namespace Sanmark\PhpHelpers
{
	class StringHelper
	{
		public function removeWhiteSpaces ( $string )
		{

			$leftRightTrim		 = ltrim ( $string , ' ' ) ;
			$leftRightTrim		 = rtrim ( $leftRightTrim , ' ' ) ;
			$spacesRemovedString = preg_replace ( '!\s+!' , ' ' , $leftRightTrim ) ;

			return $spacesRemovedString ;
		}
	}
}