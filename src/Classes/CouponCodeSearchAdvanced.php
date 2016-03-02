<?php

namespace Fungku\NetSuite\Classes;

class CouponCodeSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchScriptId;
	public $savedSearchId;
	static $paramtypesmap = array(
		"criteria" => "CouponCodeSearch",
		"columns" => "CouponCodeSearchRow",
		"savedSearchScriptId" => "string",
		"savedSearchId" => "string",
	);
}

