<?php namespace Fungku\NetSuite\Classes;

class BillingScheduleRecurrence {
	public $recurrenceId;
	public $count;
	public $units;
	public $relativeToPrevious;
	public $recurrenceDate;
	public $amount;
	public $paymentTerms;
	static $paramtypesmap = array(
		"recurrenceId" => "integer",
		"count" => "integer",
		"units" => "BillingScheduleRecurrenceRecurrenceUnits",
		"relativeToPrevious" => "boolean",
		"recurrenceDate" => "dateTime",
		"amount" => "float",
		"paymentTerms" => "RecordRef",
	);
}

