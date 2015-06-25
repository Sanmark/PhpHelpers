<?php

namespace Sanmark\PhpHelpers
{

	class BlobHelper
	{

		public static function getMimeType ( $blob )
		{
			$finfoMimeType = new \finfo ( FILEINFO_MIME_TYPE ) ;

			return $finfoMimeType -> buffer ( $blob ) ;
		}

		public static function getFormat ( $blob )
		{
			$mimeType			 = self::getMimeType ( $blob ) ;
			$mimeTypeExploded	 = explode ( '/' , $mimeType ) ;
			$format				 = $mimeTypeExploded[ 1 ] ;

			return $format ;
		}

	}

}