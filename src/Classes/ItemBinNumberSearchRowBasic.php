<?php

namespace Fungku\NetSuite\Classes;

class ItemBinNumberSearchRowBasic extends SearchRowBasic {
	public $binNumber;
	public $location;
	public $quantityAvailable;
	public $quantityOnHand;
	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
}

