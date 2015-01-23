<?php

class ItemAccountingBookDetail {
	public $accountingBook;
	public $revRecSchedule;
	public $sameAsPrimaryRevRec;
	public $amortizationTemplate;
	public $sameAsPrimaryAmortization;
	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"sameAsPrimaryRevRec" => "boolean",
		"amortizationTemplate" => "RecordRef",
		"sameAsPrimaryAmortization" => "boolean",
	);
}

