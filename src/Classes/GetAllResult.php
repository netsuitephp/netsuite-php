<?php

namespace Fungku\NetSuite\Classes;

class GetAllResult {
	public $status;
	public $totalRecords;
	public $recordList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordList" => "RecordList",
	);
}

