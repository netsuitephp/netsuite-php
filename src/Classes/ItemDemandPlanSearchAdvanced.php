<?php

class ItemDemandPlanSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "ItemDemandPlanSearch",
		"columns" => "ItemDemandPlanSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

