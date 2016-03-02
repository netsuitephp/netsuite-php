<?php

namespace Fungku\NetSuite\Classes;

class TimeSheetTimeGrid {
	public $sunday;
	public $monday;
	public $tuesday;
	public $wednesday;
	public $thursday;
	public $friday;
	public $saturday;
	static $paramtypesmap = array(
		"sunday" => "TimeEntry",
		"monday" => "TimeEntry",
		"tuesday" => "TimeEntry",
		"wednesday" => "TimeEntry",
		"thursday" => "TimeEntry",
		"friday" => "TimeEntry",
		"saturday" => "TimeEntry",
	);
}

