<?php namespace Fungku\NetSuite\Classes;

class DeletedRecord {
	public $deletedDate;
	public $record;
	static $paramtypesmap = array(
		"deletedDate" => "dateTime",
		"record" => "BaseRef",
	);
}

