<?php

class PromotionCodeSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchScriptId;
	public $savedSearchId;
	static $paramtypesmap = array(
		"criteria" => "PromotionCodeSearch",
		"columns" => "PromotionCodeSearchRow",
		"savedSearchScriptId" => "string",
		"savedSearchId" => "string",
	);
}

