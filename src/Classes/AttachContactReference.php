<?php

class AttachContactReference extends AttachReference {
	public $contact;
	public $contactRole;
	static $paramtypesmap = array(
		"contact" => "RecordRef",
		"contactRole" => "RecordRef",
	);
}

