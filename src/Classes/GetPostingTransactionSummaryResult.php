<?php namespace Fungku\NetSuite\Classes;

class GetPostingTransactionSummaryResult {
	public $status;
	public $totalRecords;
	public $pageSize;
	public $totalPages;
	public $pageIndex;
	public $postingTransactionSummaryList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"postingTransactionSummaryList" => "PostingTransactionSummaryList",
	);
}

