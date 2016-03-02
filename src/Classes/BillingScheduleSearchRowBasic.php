<?php

namespace Fungku\NetSuite\Classes;

class BillingScheduleSearchRowBasic extends SearchRowBasic {
	public $applyToSubtotal;
	public $externalId;
	public $frequency;
	public $inArrears;
	public $initialAmount;
	public $initialTerms;
	public $internalId;
	public $isInactive;
	public $isPublic;
	public $name;
	public $recurrenceCount;
	public $recurrencePattern;
	public $recurrenceTerms;
	public $repeatEvery;
	public $type;
	static $paramtypesmap = array(
		"applyToSubtotal" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnStringField[]",
		"frequency" => "SearchColumnEnumSelectField[]",
		"inArrears" => "SearchColumnBooleanField[]",
		"initialAmount" => "SearchColumnStringField[]",
		"initialTerms" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPublic" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"recurrenceCount" => "SearchColumnLongField[]",
		"recurrencePattern" => "SearchColumnEnumSelectField[]",
		"recurrenceTerms" => "SearchColumnStringField[]",
		"repeatEvery" => "SearchColumnLongField[]",
		"type" => "SearchColumnEnumSelectField[]",
	);
}

