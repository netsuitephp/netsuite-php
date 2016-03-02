<?php

namespace Fungku\NetSuite\Classes;

class GetSelectValueResult {
	public $status;
	public $totalRecords;
	public $totalPages;
	public $baseRefList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"totalPages" => "integer",
		"baseRefList" => "BaseRefList",
	);
}

