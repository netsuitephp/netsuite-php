<?php namespace Fungku\NetSuite\Classes;

class GetDeletedResult {
	public $status;
	public $deletedRecordList;
	static $paramtypesmap = array(
		"status" => "Status",
		"deletedRecordList" => "DeletedRecordList",
	);
}

