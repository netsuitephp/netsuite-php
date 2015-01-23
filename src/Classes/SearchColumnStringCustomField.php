<?php

class SearchColumnStringCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}

