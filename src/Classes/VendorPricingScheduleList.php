<?php

namespace Fungku\NetSuite\Classes;

class VendorPricingScheduleList {
	public $pricingSchedule;
	public $replaceAll;
	static $paramtypesmap = array(
		"pricingSchedule" => "VendorPricingSchedule[]",
		"replaceAll" => "boolean",
	);
}

