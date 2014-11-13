<?php

namespace Sanmark\PhpHelpers\Classes;

class DateTimeHelper
{

	public function convertTextToFormattedDateTime ( $text , $format = "Y-m-d H:i:s" )
	{
		if ( ! NullHelper::isNullEmptyOrWhitespace ( $text ) )
		{
			$unixTime			 = strtotime ( $text ) ;
			$formattedDateTime	 = date ( $format , $unixTime ) ;

			return $formattedDateTime ;
		}

		return NULL ;
	}

	public function dateTimeRefill ( $dateTimeForFormat )
	{

		$dateTime	 = preg_replace ( "/[A-Z, ]/" , '' , $dateTimeForFormat ) ;
		$dateTime	 = substr_replace ( $dateTime , 'T' , 10 , 0 ) ;
		return $dateTime ;
	}

	public function dateRefill ( $dateTimeForFormat )
	{

		$dateTime = preg_replace ( "/[A-Z, ]/" , '' , $dateTimeForFormat ) ;
		return $dateTime ;
	}

	public function dateDifferenceUntilToday ( $date )
	{
		$now		 = new \DateTime ( date ( 'Y-m-d' ) ) ;
		$dateGiven	 = new \DateTime ( $this -> convertTextToFormattedDateTime ( $date , "Y-m-d" ) ) ;

		$dateDifference = date_diff ( $dateGiven , $now ) ;

		return $dateDifference -> days ;
	}

}