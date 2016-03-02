<?php

namespace Fungku\NetSuite\Classes;

class Duration {
	public $timeSpan;
	public $unit;
	static $paramtypesmap = array(
		"timeSpan" => "float",
		"unit" => "DurationUnit",
	);
}

