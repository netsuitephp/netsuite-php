<?php

class AccountingPeriodSearchRowBasic extends SearchRowBasic {
	public $allLocked;
	public $allowNonGLChanges;
	public $apLocked;
	public $arLocked;
	public $closed;
	public $closedOnDate;
	public $endDate;
	public $internalId;
	public $isAdjust;
	public $isInactive;
	public $isQuarter;
	public $isYear;
	public $parent;
	public $payrollLocked;
	public $periodName;
	public $startDate;
	static $paramtypesmap = array(
		"allLocked" => "SearchColumnBooleanField[]",
		"allowNonGLChanges" => "SearchColumnBooleanField[]",
		"apLocked" => "SearchColumnBooleanField[]",
		"arLocked" => "SearchColumnBooleanField[]",
		"closed" => "SearchColumnBooleanField[]",
		"closedOnDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isAdjust" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isQuarter" => "SearchColumnBooleanField[]",
		"isYear" => "SearchColumnBooleanField[]",
		"parent" => "SearchColumnSelectField[]",
		"payrollLocked" => "SearchColumnBooleanField[]",
		"periodName" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
	);
}

