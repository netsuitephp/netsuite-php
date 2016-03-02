<?php

namespace Fungku\NetSuite\Classes;

class GetServerTimeResult {
	public $status;
	public $serverTime;
	static $paramtypesmap = array(
		"status" => "Status",
		"serverTime" => "dateTime",
	);
}

