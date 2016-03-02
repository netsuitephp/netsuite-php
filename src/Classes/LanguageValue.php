<?php

namespace Fungku\NetSuite\Classes;

class LanguageValue {
	public $locale;
	public $value;
	static $paramtypesmap = array(
		"locale" => "Language",
		"value" => "string",
	);
}

