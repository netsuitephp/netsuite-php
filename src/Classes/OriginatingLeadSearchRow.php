<?php

class OriginatingLeadSearchRow extends SearchRow {
	public $basic;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "OriginatingLeadSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

