<?php

class BillingSchedule extends Record {
	public $scheduleType;
	public $name;
	public $project;
	public $initialAmount;
	public $initialTerms;
	public $frequency;
	public $recurrenceDowMaskList;
	public $yearMode;
	public $yearDowim;
	public $yearDow;
	public $yearDowimMonth;
	public $yearMonth;
	public $yearDom;
	public $monthMode;
	public $monthDowim;
	public $monthDow;
	public $monthDom;
	public $dayPeriod;
	public $repeatEvery;
	public $billForActuals;
	public $numberRemaining;
	public $inArrears;
	public $recurrenceTerms;
	public $isPublic;
	public $applyToSubtotal;
	public $transaction;
	public $isInactive;
	public $seriesStartDate;
	public $recurrenceList;
	public $milestoneList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"scheduleType" => "BillingScheduleType",
		"name" => "string",
		"project" => "RecordRef",
		"initialAmount" => "string",
		"initialTerms" => "RecordRef",
		"frequency" => "BillingScheduleFrequency",
		"recurrenceDowMaskList" => "RecurrenceDowMaskList",
		"yearMode" => "BillingScheduleRecurrenceMode",
		"yearDowim" => "BillingScheduleYearDowim",
		"yearDow" => "BillingScheduleYearDow",
		"yearDowimMonth" => "BillingScheduleYearDowimMonth",
		"yearMonth" => "BillingScheduleYearMonth",
		"yearDom" => "integer",
		"monthMode" => "BillingScheduleRecurrenceMode",
		"monthDowim" => "BillingScheduleMonthDowim",
		"monthDow" => "BillingScheduleMonthDow",
		"monthDom" => "integer",
		"dayPeriod" => "integer",
		"repeatEvery" => "BillingScheduleRepeatEvery",
		"billForActuals" => "boolean",
		"numberRemaining" => "integer",
		"inArrears" => "boolean",
		"recurrenceTerms" => "RecordRef",
		"isPublic" => "boolean",
		"applyToSubtotal" => "boolean",
		"transaction" => "RecordRef",
		"isInactive" => "boolean",
		"seriesStartDate" => "dateTime",
		"recurrenceList" => "BillingScheduleRecurrenceList",
		"milestoneList" => "BillingScheduleMilestoneList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

