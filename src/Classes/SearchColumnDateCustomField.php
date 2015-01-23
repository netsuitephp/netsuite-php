<?php

class SearchColumnDateCustomField extends SearchColumnCustomField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
}

