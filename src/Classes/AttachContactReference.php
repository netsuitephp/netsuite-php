<?php

namespace Fungku\NetSuite\Classes;

class AttachContactReference extends AttachReference {
	public $contact;
	public $contactRole;
	static $paramtypesmap = array(
		"contact" => "RecordRef",
		"contactRole" => "RecordRef",
	);
}

