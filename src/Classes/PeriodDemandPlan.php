<?php namespace Fungku\NetSuite\Classes;

class PeriodDemandPlan {
	public $quantity;
	public $dayOfTheWeek;
	static $paramtypesmap = array(
		"quantity" => "float",
		"dayOfTheWeek" => "DayOfTheWeek",
	);
}

