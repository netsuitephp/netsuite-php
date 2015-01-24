<?php namespace Fungku\NetSuite\Classes;

class ItemFulfillmentPackageUps {
	public $packageWeightUps;
	public $packageDescrUps;
	public $packageTrackingNumberUps;
	public $packagingUps;
	public $useInsuredValueUps;
	public $insuredValueUps;
	public $reference1Ups;
	public $reference2Ups;
	public $packageLengthUps;
	public $packageWidthUps;
	public $packageHeightUps;
	public $additionalHandlingUps;
	public $useCodUps;
	public $codAmountUps;
	public $codMethodUps;
	public $deliveryConfUps;
	static $paramtypesmap = array(
		"packageWeightUps" => "float",
		"packageDescrUps" => "string",
		"packageTrackingNumberUps" => "string",
		"packagingUps" => "ItemFulfillmentPackageUpsPackagingUps",
		"useInsuredValueUps" => "boolean",
		"insuredValueUps" => "float",
		"reference1Ups" => "string",
		"reference2Ups" => "string",
		"packageLengthUps" => "integer",
		"packageWidthUps" => "integer",
		"packageHeightUps" => "integer",
		"additionalHandlingUps" => "boolean",
		"useCodUps" => "boolean",
		"codAmountUps" => "float",
		"codMethodUps" => "ItemFulfillmentPackageUpsCodMethodUps",
		"deliveryConfUps" => "ItemFulfillmentPackageUpsDeliveryConfUps",
	);
}

