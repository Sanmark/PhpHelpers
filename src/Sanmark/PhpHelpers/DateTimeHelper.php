<?php

namespace Sanmark\PhpHelpers
{
	class DateTimeHelper
	{

		public static function convertTextToFormattedDateTime ( $text , $format = "Y-m-d H:i:s" )
		{
			if ( ! NullHelper::isNullEmptyOrWhitespace ( $text ) )
			{
				$unixTime			 = strtotime ( $text ) ;
				$formattedDateTime	 = date ( $format , $unixTime ) ;

				return $formattedDateTime ;
			}

			return NULL ;
		}

		public static function dateTimeRefill ( $dateTimeForFormat )
		{

			$dateTime	 = preg_replace ( "/[A-Z, ]/" , '' , $dateTimeForFormat ) ;
			$dateTime	 = substr_replace ( $dateTime , 'T' , 10 , 0 ) ;
			return $dateTime ;
		}

		public static function dateRefill ( $dateTimeForFormat )
		{

			$dateTime = preg_replace ( "/[A-Z, ]/" , '' , $dateTimeForFormat ) ;
			return $dateTime ;
		}

		public static function dateDifferenceUntilToday ( $date )
		{
			$now		 = new \DateTime ( date ( 'Y-m-d' ) ) ;
			$dateGiven	 = new \DateTime ( self::convertTextToFormattedDateTime ( $date , "Y-m-d" ) ) ;

			$dateDifference = date_diff ( $dateGiven , $now ) ;

			return $dateDifference -> days ;
		}

		public static function isValidDateTime($date, $format = 'Y-m-d H:i:s')
		{
			$d = \DateTime::createFromFormat($format, $date);
			return $d && $d->format($format) == $date;
		}

		public static function nullIfInvalidDateTime($date, $format = 'Y-m-d H:i:s')
		{
			if(self::isValidDateTime($date, $format))
			{
				return $date;
			}

			return NULL;
		}
	}
}