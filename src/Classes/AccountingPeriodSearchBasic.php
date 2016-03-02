<?php

namespace Fungku\NetSuite\Classes;

class AccountingPeriodSearchBasic extends SearchRecordBasic {
	public $allLocked;
	public $allowNonGlChanges;
	public $apLocked;
	public $arLocked;
	public $closed;
	public $closedOnDate;
	public $endDate;
	public $internalId;
	public $internalIdNumber;
	public $isAdjust;
	public $isInactive;
	public $isQuarter;
	public $isYear;
	public $parent;
	public $payrollLocked;
	public $periodName;
	public $startDate;
	static $paramtypesmap = array(
		"allLocked" => "SearchBooleanField",
		"allowNonGlChanges" => "SearchBooleanField",
		"apLocked" => "SearchBooleanField",
		"arLocked" => "SearchBooleanField",
		"closed" => "SearchBooleanField",
		"closedOnDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isAdjust" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isQuarter" => "SearchBooleanField",
		"isYear" => "SearchBooleanField",
		"parent" => "SearchMultiSelectField",
		"payrollLocked" => "SearchBooleanField",
		"periodName" => "SearchStringField",
		"startDate" => "SearchDateField",
	);
}

