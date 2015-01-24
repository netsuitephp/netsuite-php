<?php namespace Fungku\NetSuite\Classes;

class CreditMemoSalesTeam {
	public $employee;
	public $salesRole;
	public $isPrimary;
	public $contribution;
	static $paramtypesmap = array(
		"employee" => "RecordRef",
		"salesRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}

