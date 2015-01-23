<?php

class BillingScheduleSearchBasic extends SearchRecordBasic {
	public $applyToSubtotal;
	public $externalId;
	public $externalIdString;
	public $frequency;
	public $inArrears;
	public $initialAmount;
	public $initialTerms;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isPublic;
	public $name;
	public $recurrenceCount;
	public $recurrenceTerms;
	public $repeatEvery;
	public $type;
	static $paramtypesmap = array(
		"applyToSubtotal" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"frequency" => "SearchEnumMultiSelectField",
		"inArrears" => "SearchBooleanField",
		"initialAmount" => "SearchDoubleField",
		"initialTerms" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isPublic" => "SearchBooleanField",
		"name" => "SearchStringField",
		"recurrenceCount" => "SearchLongField",
		"recurrenceTerms" => "SearchMultiSelectField",
		"repeatEvery" => "SearchLongField",
		"type" => "SearchEnumMultiSelectField",
	);
}

