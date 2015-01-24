<?php namespace Fungku\NetSuite\Classes;

class CalendarEventResource {
	public $resource;
	public $location;
	static $paramtypesmap = array(
		"resource" => "RecordRef",
		"location" => "string",
	);
}

