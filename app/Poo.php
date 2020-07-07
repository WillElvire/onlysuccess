<?php

Class FlexPack{

	private $today;
	private $weeks_after;
	private $final_date;
	private $weeks_nbr;
	private $days_nbr;
	private $today_in_second;
	private $weeks_after_in_second;

	public function __construct( $days_nbr = null, $weeks_nbr = null, $hours_nbr = null, $today = null, $weeks_after = null){ 
		$this->weeks_nbr = $weeks_nbr;
		$this->days_nbr = $days_nbr;
		$this->hours_nbr = $hours_nbr;
		$this->today = date('Y-m-d');
		$this->weeks_after = date('Y-m-d', strtotime('+'.$weeks_nbr.' week '.$days_nbr.' days '.$hours_nbr.' hours'));

	}

	public function multifunction(){

		$this->today_in_second = mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y"));

		$day = substr($this->weeks_after, -2);
		$month = substr($this->weeks_after, -5 ,-3);
		$year = substr($this->weeks_after, 0 ,4);

		$this->weeks_after_in_second = mktime(date("H"), date("i"), date("s"),  $month , $day, $year);
	}


	public function Totalresult(){

		$dates = range($this->today_in_second, $this->weeks_after_in_second,86400);

		$i = 0;

		foreach($dates as $value){ 
			if(date('N',$value) == 1 || date('N',$value) == 7) { 
				$i++; 
			}
		}
		
		$this->final_date = date('d-m-Y', strtotime('+'.$this->weeks_nbr.' week '.($i+$this->days_nbr).' days '.$this->hours_nbr.' hours'));

		

		echo "la date est le ".$this->final_date."<br />";


	}



}

$Ekaza = new FlexPack(0,0,4);
$Ekaza->multifunction();
$Ekaza->Totalresult();