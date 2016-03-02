<?php

namespace Fungku\NetSuite\Classes;

class AccountTranslationList {
	public $translation;
	public $replaceAll;
	static $paramtypesmap = array(
		"translation" => "ClassTranslation[]",
		"replaceAll" => "boolean",
	);
}

