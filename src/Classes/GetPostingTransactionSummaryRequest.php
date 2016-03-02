<?php

namespace Fungku\NetSuite\Classes;

class GetPostingTransactionSummaryRequest {
	public $fields;
	public $filters;
	public $pageIndex;
	static $paramtypesmap = array(
		"fields" => "PostingTransactionSummaryField",
		"filters" => "PostingTransactionSummaryFilter",
		"pageIndex" => "integer",
	);
}

