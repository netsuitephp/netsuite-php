<?php

class RevRecScheduleRecurrence {
	public $incomeaccount;
	public $periodOffset;
	public $recamount;
	static $paramtypesmap = array(
		"incomeaccount" => "RecordRef",
		"periodOffset" => "integer",
		"recamount" => "string",
	);
}

