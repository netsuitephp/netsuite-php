<?php

namespace Fungku\NetSuite\Classes;

class TransferOrder extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $shippingCost;
	public $subTotal;
	public $status;
	public $shippingAddress;
	public $shipIsResidential;
	public $shipAddressList;
	public $fob;
	public $tranDate;
	public $tranId;
	public $source;
	public $orderStatus;
	public $subsidiary;
	public $employee;
	public $firmed;
	public $department;
	public $class;
	public $location;
	public $transferLocation;
	public $memo;
	public $shipDate;
	public $shipMethod;
	public $trackingNumbers;
	public $linkedTrackingNumbers;
	public $shipComplete;
	public $altShippingCost;
	public $shippingTax1Rate;
	public $shippingTax2Rate;
	public $handlingTax1Rate;
	public $handlingTax2Rate;
	public $shippingTaxCode;
	public $handlingTaxCode;
	public $total;
	public $itemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"shippingCost" => "float",
		"subTotal" => "float",
		"status" => "string",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"orderStatus" => "TransferOrderOrderStatus",
		"subsidiary" => "RecordRef",
		"employee" => "RecordRef",
		"firmed" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"transferLocation" => "RecordRef",
		"memo" => "string",
		"shipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"shipComplete" => "boolean",
		"altShippingCost" => "float",
		"shippingTax1Rate" => "float",
		"shippingTax2Rate" => "float",
		"handlingTax1Rate" => "float",
		"handlingTax2Rate" => "float",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"total" => "float",
		"itemList" => "TransferOrderItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

