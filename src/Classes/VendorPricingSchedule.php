<?php

namespace Fungku\NetSuite\Classes;

class VendorPricingSchedule {
	public $scheduleName;
	public $scheduleDiscount;
	static $paramtypesmap = array(
		"scheduleName" => "string",
		"scheduleDiscount" => "float",
	);
}

