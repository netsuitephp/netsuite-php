<?php namespace Fungku\NetSuite\Classes;

class GetSavedSearchResult {
	public $status;
	public $totalRecords;
	public $recordRefList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordRefList" => "RecordRefList",
	);
}

