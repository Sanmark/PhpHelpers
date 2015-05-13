<?php
	
namespace Sanmark\PhpHelpers {
	class FileHelper {
		public static function getMimeType($path) {
			if(file_exists ($path)) {
		 		$finfo = finfo_open ( FILEINFO_MIME_TYPE ) ;
				$type = finfo_file ( $finfo , $path ) ;
				finfo_close ( $finfo ) ;
				return $type;
			}
			 
			return null;
		}
	}
}