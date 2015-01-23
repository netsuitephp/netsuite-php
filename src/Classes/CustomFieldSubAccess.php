<?php

class CustomFieldSubAccess {
	public $sub;
	public $accessLevel;
	public $searchLevel;
	static $paramtypesmap = array(
		"sub" => "RecordRef",
		"accessLevel" => "CustomizationAccessLevel",
		"searchLevel" => "CustomizationSearchLevel",
	);
}

