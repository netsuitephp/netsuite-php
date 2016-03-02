<?php

namespace Fungku\NetSuite\Classes;

class CustomerStatusSearchBasic extends SearchRecordBasic {
	public $description;
	public $externalId;
	public $externalIdString;
	public $includeInLeadReports;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	public $probability;
	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"includeInLeadReports" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"probability" => "SearchDoubleField",
	);
}

