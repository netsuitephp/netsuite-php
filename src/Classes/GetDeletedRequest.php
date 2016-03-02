<?php

namespace Fungku\NetSuite\Classes;

class GetDeletedRequest {
	public $getDeletedFilter;
	public $pageIndex;
	static $paramtypesmap = array(
		"getDeletedFilter" => "GetDeletedFilter",
		"pageIndex" => "integer",
	);
}

