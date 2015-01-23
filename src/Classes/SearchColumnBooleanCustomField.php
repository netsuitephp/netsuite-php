<?php

class SearchColumnBooleanCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
}

