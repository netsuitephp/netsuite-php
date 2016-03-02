<?php

namespace Fungku\NetSuite\Classes;

class Status {
	public $statusDetail;
	public $isSuccess;
	static $paramtypesmap = array(
		"statusDetail" => "StatusDetail[]",
		"isSuccess" => "boolean",
	);
}

