<?php namespace Fungku\NetSuite\Classes;

class ServiceItemTaskTemplates {
	public $taskName;
	public $taskStartOffset;
	public $taskDuration;
	static $paramtypesmap = array(
		"taskName" => "string",
		"taskStartOffset" => "integer",
		"taskDuration" => "Duration",
	);
}

