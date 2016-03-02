<?php

namespace Fungku\NetSuite\Classes;

class SalesTeamList {
	public $salesTeam;
	public $replaceAll;
	static $paramtypesmap = array(
		"salesTeam" => "CustomerSalesTeam[]",
		"replaceAll" => "boolean",
	);
}

