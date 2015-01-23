<?php

class SearchColumnDateField extends SearchColumnField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
}

