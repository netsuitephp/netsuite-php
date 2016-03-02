<?php

namespace Fungku\NetSuite\Classes;

class InvoiceTimeList {
	public $time;
	public $replaceAll;
	static $paramtypesmap = array(
		"time" => "InvoiceTime[]",
		"replaceAll" => "boolean",
	);
}

