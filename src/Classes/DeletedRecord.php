<?php

class DeletedRecord {
	public $deletedDate;
	public $record;
	static $paramtypesmap = array(
		"deletedDate" => "dateTime",
		"record" => "BaseRef",
	);
}

