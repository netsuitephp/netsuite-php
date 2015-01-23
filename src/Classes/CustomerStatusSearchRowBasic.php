<?php

class CustomerStatusSearchRowBasic extends SearchRowBasic {
	public $description;
	public $externalId;
	public $includeInLeadReports;
	public $internalId;
	public $isInactive;
	public $name;
	public $probability;
	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"includeInLeadReports" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"probability" => "SearchColumnStringField[]",
	);
}

