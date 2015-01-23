<?php

class TaskContact {
	public $company;
	public $contact;
	static $paramtypesmap = array(
		"company" => "RecordRef",
		"contact" => "RecordRef",
	);
}

