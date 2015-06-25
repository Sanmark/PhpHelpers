<?php

namespace Sanmark\PhpHelpers
{

	class Base64Helper
	{

		public static function getStringWithoutTypeHint ( $base64StringWithTypeHint )
		{
			$base64StringWithTypeHintExploded	 = explode ( ',' , $base64StringWithTypeHint ) ;
			$base64StringWithoutTypeHint		 = $base64StringWithTypeHintExploded[ 1 ] ;

			return $base64StringWithoutTypeHint ;
		}

	}

}