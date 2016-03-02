<?php

namespace Fungku\NetSuite\Classes;

class ItemAvailabilityFilter {
	public $item;
	public $lastQtyAvailableChange;
	static $paramtypesmap = array(
		"item" => "RecordRefList",
		"lastQtyAvailableChange" => "dateTime",
	);
}

