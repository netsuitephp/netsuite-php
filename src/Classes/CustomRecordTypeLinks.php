<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordTypeLinks {
	public $linkCenter;
	public $linkSection;
	public $linkLabel;
	static $paramtypesmap = array(
		"linkCenter" => "RecordRef",
		"linkSection" => "RecordRef",
		"linkLabel" => "string",
	);
}

