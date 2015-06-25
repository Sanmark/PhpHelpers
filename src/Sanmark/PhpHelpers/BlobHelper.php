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

	}

}