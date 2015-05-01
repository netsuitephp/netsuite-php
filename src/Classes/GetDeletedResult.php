<?php namespace Fungku\NetSuite\Classes;

class GetDeletedResult {
	public $status;
	public $totalRecords;
	public $pageSize;
	public $totalPages;
	public $pageIndex;
	public $deletedRecordList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"deletedRecordList" => "DeletedRecordList",
	);
}

