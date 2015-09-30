<?php

namespace Sanmark\PhpHelpers
{

	class ImageHelper
	{

		public static function convertBlobToBlob ( $inputBlob , $expectedWidth , $fromFormat , $toFormat, $compressionQuality = 20 )
		{
			try
			{
				$im = new \Imagick() ;

				$im -> setformat ( $fromFormat ) ;
				$im -> readimageblob ( $inputBlob ) ;
				$im -> setformat ( $toFormat ) ;
				$im -> setimagecompressionquality ( $compressionQuality );
				$im -> resizeimage ( $expectedWidth , null , \imagick::FILTER_LANCZOS , 1 ) ;

				return $im -> getimageblob () ;
			} catch ( \ImagickException $ex )
			{
				return base64_decode (
					'iVBORw0KGgoAAAANSUhEUgAAAGQAAAA5CAMAAAD3' .
					'LH5PAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7O' .
					'HOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUw' .
					'AADqYAAAOpgAABdwnLpRPAAAAO1QTFRFp6enqKio' .
					'o6OjoaGhoqKipaWlubm509PT4uLi5ubm39/fzMzM' .
					'sLCwr6+v5eXl/////Pz81NTUpqamtra29/f3/v7+' .
					'5+fnrKys9PT0/f393t7e2NjYv7+/ra2t+Pj49vb2' .
					'q6ury8vLs7OzpKSkwcHBrq6u+fn55OTk29vb4eHh' .
					'urq6+vr66+vrqamp6urq2travr6+2dnZ6Ojo0tLS' .
					'tLS0yMjIoKCgwsLCwMDA7e3tvLy8ycnJ+/v79fX1' .
					'zc3NsrKyuLi48vLy8PDwxcXF1dXVxMTEqqqq4ODg' .
					'8fHxz8/P8/Pzvb296enpsbGx0NDQxAxeagAAAAFi' .
					'S0dEDxi6ANkAAAAJcEhZcwAAAEgAAABIAEbJaz4A' .
					'AAIkSURBVFjD7ZfbUtswEIa9WjlQoCyICOI0BROT' .
					'pMU45ZiWcgihLU2P7/84lTEYO8lMPI52phf+bzy6' .
					'0afd/bUrO06lSpVeBIl4EQKlQHQZKeCK2tLyq5XV' .
					'NXS4MCBer9OjNjaV4qGA2KqTTkTbjmKBuDsN8pJI' .
					'zLcpOEIBfJMyiDS1JAPFfbtLlIEsM0BAtszOGe35' .
					'9qsCuJ+HeO3AeihTEM0BkQd5SH2HwcRup5srfI/D' .
					'wyDf5Sx8wGFhcDt7mcv4nuUymrZyGKZt5Sjial6y' .
					'3X9K1geY2+3LDh0IguOT06P1s3OcG4cZC2UpjkQR' .
					'SJx/Q0DULgZR2ZSZLBQZvyB79LE0peBZ4k6nPyEv' .
					'RV2aq7TxmZMCeGUYmq5rOYrdV47yb5K20N2SLxSQ' .
					'Nl85EW4mzVRTvS2eKRDcDqW19EEwvE5b3M3a030B' .
					'cUeNc2tFArmSTgVNo05yqyA4JQqPB3YyZnpcbibc' .
					'+zEF8IsxNemrgZXyx0fWWcplZAquolFsOE1fpYXW' .
					'CvhtYk5T33Ef8OzZC9+VBZPBOA8xw2dbiWGYrvq+' .
					'WLD8Ef6YYMT79rCZ8cLP9mImM/Nzl6ZkMhZmV91f' .
					'C/VOwJOpQB73za/0xQImg+DOo1maoGhakqV/cQBX' .
					'ZwUyC9p0y5oM8LYYxJjh90NJk4HxlqcLyaPxHywV' .
					'C+DfgpHEClulHhsg9+vjUUHdN0aH9h/tkydywGdG' .
					'xFI8f7eVKv2X+gcemE+0Ih3JwgAAACV0RVh0ZGF0' .
					'ZTpjcmVhdGUAMjAxNS0wNi0yNFQxNTo1NjoxMCsw' .
					'NTowMKs8AZAAAAAldEVYdGRhdGU6bW9kaWZ5ADIw' .
					'MTUtMDYtMjRUMTU6NTY6MTArMDU6MDDaYbksAAAA' .
					'KHRFWHRzdmc6YmFzZS11cmkAZmlsZTovLy90bXAv' .
					'bWFnaWNrLXQzRnd5c3Z4bQzs5QAAAABJRU5ErkJg' .
					'gg=='
					) ;
			}
		}

		public function save ( $path , $inputBlob , $expectedWidth , $fromFormat , $toFormat , $compressionQuality = 20 )
		{
			$im = new \Imagick() ;

			$im -> setformat ( $fromFormat ) ;
			$im -> readimageblob ( $inputBlob ) ;
			$im -> setformat ( $toFormat ) ;
			$im -> setimagecompressionquality ( $compressionQuality ) ;
			$im -> resizeimage ( $expectedWidth , null , \imagick::FILTER_LANCZOS , 1 ) ;

			$im -> writeimage ( $path ) ;
		}

	}

}