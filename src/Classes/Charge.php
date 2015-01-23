<?php

class Charge extends Record {
	public $customForm;
	public $salesOrder;
	public $billTo;
	public $stage;
	public $chargeDate;
	public $use;
	public $chargeType;
	public $projectTask;
	public $description;
	public $createdDate;
	public $timeRecord;
	public $rate;
	public $quantity;
	public $amount;
	public $billingItem;
	public $currency;
	public $transaction;
	public $transactionLine;
	public $class;
	public $department;
	public $location;
	public $salesOrderLine;
	public $invoice;
	public $invoiceLine;
	public $rule;
	public $runId;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"salesOrder" => "RecordRef",
		"billTo" => "RecordRef",
		"stage" => "ChargeStage",
		"chargeDate" => "dateTime",
		"use" => "ChargeUse",
		"chargeType" => "RecordRef",
		"projectTask" => "RecordRef",
		"description" => "string",
		"createdDate" => "dateTime",
		"timeRecord" => "RecordRef",
		"rate" => "string",
		"quantity" => "float",
		"amount" => "float",
		"billingItem" => "RecordRef",
		"currency" => "RecordRef",
		"transaction" => "RecordRef",
		"transactionLine" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"salesOrderLine" => "RecordRef",
		"invoice" => "RecordRef",
		"invoiceLine" => "RecordRef",
		"rule" => "RecordRef",
		"runId" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}

