<?php

class SearchColumnSelectCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef",
	);
}

