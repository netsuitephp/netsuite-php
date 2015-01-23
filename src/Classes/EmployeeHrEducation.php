<?php

class EmployeeHrEducation {
	public $education;
	public $degree;
	public $degreeDate;
	static $paramtypesmap = array(
		"education" => "RecordRef",
		"degree" => "string",
		"degreeDate" => "dateTime",
	);
}

