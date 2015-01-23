<?php

class WinLossReasonSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "WinLossReasonSearch",
		"columns" => "WinLossReasonSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

