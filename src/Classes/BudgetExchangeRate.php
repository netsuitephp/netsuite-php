<?php

class BudgetExchangeRate {
	public $period;
	public $fromSubsidiary;
	public $toSubsidiary;
	public $currentRate;
	public $averageRate;
	public $historicalRate;
	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
		"currentRate" => "float",
		"averageRate" => "float",
		"historicalRate" => "float",
	);
}

