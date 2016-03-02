<?php

namespace Fungku\NetSuite\Classes;

class JournalEntryLineList {
	public $line;
	public $replaceAll;
	static $paramtypesmap = array(
		"line" => "JournalEntryLine[]",
		"replaceAll" => "boolean",
	);
}

