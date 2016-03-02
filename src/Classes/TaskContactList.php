<?php

namespace Fungku\NetSuite\Classes;

class TaskContactList {
	public $contact;
	public $replaceAll;
	static $paramtypesmap = array(
		"contact" => "TaskContact[]",
		"replaceAll" => "boolean",
	);
}

