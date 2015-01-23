<?php

class ItemFulfillmentPackage {
	public $packageWeight;
	public $packageDescr;
	public $packageTrackingNumber;
	static $paramtypesmap = array(
		"packageWeight" => "float",
		"packageDescr" => "string",
		"packageTrackingNumber" => "string",
	);
}

