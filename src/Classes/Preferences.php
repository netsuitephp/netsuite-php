<?php

namespace Fungku\NetSuite\Classes;

class Preferences {
	public $warningAsError;
	public $disableMandatoryCustomFieldValidation;
	public $disableSystemNotesForCustomFields;
	public $ignoreReadOnlyFields;
	static $paramtypesmap = array(
		"warningAsError" => "boolean",
		"disableMandatoryCustomFieldValidation" => "boolean",
		"disableSystemNotesForCustomFields" => "boolean",
		"ignoreReadOnlyFields" => "boolean",
	);
}

