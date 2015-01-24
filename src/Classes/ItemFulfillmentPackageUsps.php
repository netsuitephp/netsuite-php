<?php namespace Fungku\NetSuite\Classes;

class ItemFulfillmentPackageUsps {
	public $packageWeightUsps;
	public $packageDescrUsps;
	public $packageTrackingNumberUsps;
	public $packagingUsps;
	public $useInsuredValueUsps;
	public $insuredValueUsps;
	public $reference1Usps;
	public $reference2Usps;
	public $packageLengthUsps;
	public $packageWidthUsps;
	public $packageHeightUsps;
	public $deliveryConfUsps;
	static $paramtypesmap = array(
		"packageWeightUsps" => "float",
		"packageDescrUsps" => "string",
		"packageTrackingNumberUsps" => "string",
		"packagingUsps" => "ItemFulfillmentPackageUspsPackagingUsps",
		"useInsuredValueUsps" => "boolean",
		"insuredValueUsps" => "float",
		"reference1Usps" => "string",
		"reference2Usps" => "string",
		"packageLengthUsps" => "integer",
		"packageWidthUsps" => "integer",
		"packageHeightUsps" => "integer",
		"deliveryConfUsps" => "ItemFulfillmentPackageUspsDeliveryConfUsps",
	);
}

