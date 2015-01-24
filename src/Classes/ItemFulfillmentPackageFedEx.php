<?php namespace Fungku\NetSuite\Classes;

class ItemFulfillmentPackageFedEx {
	public $packageWeightFedEx;
	public $dryIceWeightFedEx;
	public $packageTrackingNumberFedEx;
	public $packagingFedEx;
	public $admPackageTypeFedEx;
	public $isNonStandardContainerFedEx;
	public $isAlcoholFedEx;
	public $isNonHazLithiumFedEx;
	public $insuredValueFedEx;
	public $useInsuredValueFedEx;
	public $reference1FedEx;
	public $priorityAlertTypeFedEx;
	public $priorityAlertContentFedEx;
	public $packageLengthFedEx;
	public $packageWidthFedEx;
	public $packageHeightFedEx;
	public $useCodFedEx;
	public $codAmountFedEx;
	public $codMethodFedEx;
	public $codFreightTypeFedEx;
	public $deliveryConfFedEx;
	public $signatureOptionsFedEx;
	public $signatureReleaseFedEx;
	public $authorizationNumberFedEx;
	static $paramtypesmap = array(
		"packageWeightFedEx" => "float",
		"dryIceWeightFedEx" => "float",
		"packageTrackingNumberFedEx" => "string",
		"packagingFedEx" => "ItemFulfillmentPackageFedExPackagingFedEx",
		"admPackageTypeFedEx" => "ItemFulfillmentPackageFedExAdmPackageTypeFedEx",
		"isNonStandardContainerFedEx" => "boolean",
		"isAlcoholFedEx" => "boolean",
		"isNonHazLithiumFedEx" => "boolean",
		"insuredValueFedEx" => "float",
		"useInsuredValueFedEx" => "boolean",
		"reference1FedEx" => "string",
		"priorityAlertTypeFedEx" => "ItemFulfillmentPackageFedExPriorityAlertTypeFedEx",
		"priorityAlertContentFedEx" => "string",
		"packageLengthFedEx" => "integer",
		"packageWidthFedEx" => "integer",
		"packageHeightFedEx" => "integer",
		"useCodFedEx" => "boolean",
		"codAmountFedEx" => "float",
		"codMethodFedEx" => "ItemFulfillmentPackageFedExCodMethodFedEx",
		"codFreightTypeFedEx" => "ItemFulfillmentPackageFedExCodFreightTypeFedEx",
		"deliveryConfFedEx" => "ItemFulfillmentPackageFedExDeliveryConfFedEx",
		"signatureOptionsFedEx" => "ItemFulfillmentPackageFedExSignatureOptionsFedEx",
		"signatureReleaseFedEx" => "string",
		"authorizationNumberFedEx" => "string",
	);
}

