<?php
namespace ProjectName\BundleName\Services;
/**
 * 
 * Symfony service-It's provides some PHP Date functions usage in Twig templates.
 * 
 */
 class TwigPhpDate{
	 private $date;
	 /**
	  * set $date in PHP date format
	  */ 
	 public function setDate($date){
		 $this->date=$date;
	 }
	 
	 /**
	  * get $date value
	  */ 
	 public function getDate(){
		 return $this->date;
	 }
	 
	/**
	 * get months
	 */ 
	public function getMonths($lang='fr'){
		if($lang)
		$months = array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
		else
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
		return $months;
	}
	
	/**
	 * get the Month and the Year of the date set with setDate method
	 */ 
	public function getMonthYear(){
		$deb  = getdate(strtotime($this->date));
		return array("month"=>$deb['month'],"annee"=>$deb['year']);
	}

	/**
	 * get today Month and Year 
	 */	
	public function getTodayMonthYear(){
	$today = getdate();
	return array("mois"=>$today['month'],"annee"=>$today['year']);
	}
	 
	 /**
	  * PHP date function
	  */ 
	 public function tooldate($format,$timestamp){
		return date($format, $timestamp);
	 }
	 
	 /**
	  * PHP mktime function
	  */ 
	 public function toolmktime($hour,$minute,$second,$month,$day,$year){
		 return mktime ($hour,$minute,$second,$month ,$day,$year);
	 }
	 /**
	  * PHP rand function
	  */ 
	 public function toolrand($min,$max){
		 return rand($min,$max);
	 }
 }
