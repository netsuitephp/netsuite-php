<?php

class AccountingTransactionSearchRowBasic extends SearchRowBasic {
	public $account;
	public $accountingBook;
	public $accountType;
	public $altSalesAmount;
	public $altSalesNetAmount;
	public $amount;
	public $baseCurrency;
	public $catchUpPeriod;
	public $creditAmount;
	public $dateCreated;
	public $debitAmount;
	public $deferRevRec;
	public $exchangeRate;
	public $fxAmount;
	public $grossAmount;
	public $internalId;
	public $lastModifiedDate;
	public $multiSubsidiary;
	public $netAmount;
	public $quantityRevCommitted;
	public $recognizedRevenue;
	public $revCommitStatus;
	public $revenueStatus;
	public $revRecEndDate;
	public $revRecOnRevCommitment;
	public $revRecStartDate;
	public $subsidiary;
	public $tranIsVsoeBundle;
	public $vsoeAllocation;
	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"accountingBook" => "SearchColumnSelectField[]",
		"accountType" => "SearchColumnStringField[]",
		"altSalesAmount" => "SearchColumnDoubleField[]",
		"altSalesNetAmount" => "SearchColumnDoubleField[]",
		"amount" => "SearchColumnDoubleField[]",
		"baseCurrency" => "SearchColumnStringField[]",
		"catchUpPeriod" => "SearchColumnStringField[]",
		"creditAmount" => "SearchColumnDoubleField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"debitAmount" => "SearchColumnDoubleField[]",
		"deferRevRec" => "SearchColumnBooleanField[]",
		"exchangeRate" => "SearchColumnDoubleField[]",
		"fxAmount" => "SearchColumnDoubleField[]",
		"grossAmount" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"multiSubsidiary" => "SearchColumnBooleanField[]",
		"netAmount" => "SearchColumnDoubleField[]",
		"quantityRevCommitted" => "SearchColumnDoubleField[]",
		"recognizedRevenue" => "SearchColumnDoubleField[]",
		"revCommitStatus" => "SearchColumnEnumSelectField[]",
		"revenueStatus" => "SearchColumnEnumSelectField[]",
		"revRecEndDate" => "SearchColumnDateField[]",
		"revRecOnRevCommitment" => "SearchColumnBooleanField[]",
		"revRecStartDate" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"tranIsVsoeBundle" => "SearchColumnBooleanField[]",
		"vsoeAllocation" => "SearchColumnDoubleField[]",
	);
}

