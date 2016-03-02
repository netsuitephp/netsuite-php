<?php

namespace Fungku\NetSuite\Classes;

class AccountingPeriod extends Record {
	public $periodName;
	public $parent;
	public $startDate;
	public $endDate;
	public $fiscalCalendar;
	public $closedOnDate;
	public $isAdjust;
	public $fiscalCalendarsList;
	public $isQuarter;
	public $isYear;
	public $closed;
	public $apLocked;
	public $arLocked;
	public $payrollLocked;
	public $allLocked;
	public $allowNonGLChanges;
	public $internalId;
	static $paramtypesmap = array(
		"periodName" => "string",
		"parent" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"fiscalCalendar" => "RecordRef",
		"closedOnDate" => "dateTime",
		"isAdjust" => "boolean",
		"fiscalCalendarsList" => "AccountingPeriodFiscalCalendarsList",
		"isQuarter" => "boolean",
		"isYear" => "boolean",
		"closed" => "boolean",
		"apLocked" => "boolean",
		"arLocked" => "boolean",
		"payrollLocked" => "boolean",
		"allLocked" => "boolean",
		"allowNonGLChanges" => "boolean",
		"internalId" => "string",
	);
}

