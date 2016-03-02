<?php

namespace Fungku\NetSuite\Classes;

class JobPercentCompleteOverride {
	public $period;
	public $percent;
	public $comments;
	static $paramtypesmap = array(
		"period" => "RecordRef",
		"percent" => "float",
		"comments" => "string",
	);
}

