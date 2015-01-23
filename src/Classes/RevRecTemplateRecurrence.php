<?php

class RevRecTemplateRecurrence {
	public $incomeaccount;
	public $periodOffset;
	public $recamount;
	static $paramtypesmap = array(
		"incomeaccount" => "RecordRef",
		"periodOffset" => "integer",
		"recamount" => "string",
	);
}

