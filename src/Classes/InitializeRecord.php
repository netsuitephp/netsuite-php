<?php

namespace Fungku\NetSuite\Classes;

class InitializeRecord {
	public $type;
	public $reference;
	public $auxReference;
	public $referenceList;
	static $paramtypesmap = array(
		"type" => "InitializeType",
		"reference" => "InitializeRef",
		"auxReference" => "InitializeAuxRef",
		"referenceList" => "InitializeRefList",
	);
}

