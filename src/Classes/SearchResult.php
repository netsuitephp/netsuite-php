<?php namespace Fungku\NetSuite\Classes;

class SearchResult {
	public $status;
	public $totalRecords;
	public $pageSize;
	public $totalPages;
	public $pageIndex;
	public $searchId;
	public $recordList;
	public $searchRowList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"searchId" => "string",
		"recordList" => "RecordList",
		"searchRowList" => "SearchRowList",
	);
}

