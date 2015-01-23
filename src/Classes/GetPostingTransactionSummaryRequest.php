<?php

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

