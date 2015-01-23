<?php

class SearchColumnMultiSelectCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
	);
}

