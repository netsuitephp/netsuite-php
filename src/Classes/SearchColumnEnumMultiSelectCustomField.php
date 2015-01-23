<?php

class SearchColumnEnumMultiSelectCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "string[]",
	);
}

