<?php

class PartnerSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "PartnerSearch",
		"columns" => "PartnerSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

