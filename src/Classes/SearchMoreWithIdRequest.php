<?php

namespace Fungku\NetSuite\Classes;

class SearchMoreWithIdRequest {
	public $searchId;
	public $pageIndex;
	static $paramtypesmap = array(
		"searchId" => "string",
		"pageIndex" => "integer",
	);
}

