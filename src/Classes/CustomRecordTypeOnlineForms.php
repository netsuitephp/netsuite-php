<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordTypeOnlineForms {
	public $onlineFormName;
	public $isOnline;
	public $templateName;
	static $paramtypesmap = array(
		"onlineFormName" => "string",
		"isOnline" => "string",
		"templateName" => "string",
	);
}

