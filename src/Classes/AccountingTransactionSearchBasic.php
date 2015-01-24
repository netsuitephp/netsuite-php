<?php namespace Fungku\NetSuite\Classes;

class AccountingTransactionSearchBasic extends SearchRecordBasic {
	public $account;
	public $accountingBook;
	public $accountType;
	public $altSalesAmount;
	public $altSalesNetAmount;
	public $amount;
	public $bookSpecificTransaction;
	public $catchUpPeriod;
	public $creditAmount;
	public $debitAmount;
	public $deferRevRec;
	public $exchangeRate;
	public $grossAmount;
	public $internalId;
	public $internalIdNumber;
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
	public $type;
	public $vsoeAllocation;
	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"accountingBook" => "SearchMultiSelectField",
		"accountType" => "SearchMultiSelectField",
		"altSalesAmount" => "SearchDoubleField",
		"altSalesNetAmount" => "SearchDoubleField",
		"amount" => "SearchDoubleField",
		"bookSpecificTransaction" => "SearchBooleanField",
		"catchUpPeriod" => "SearchMultiSelectField",
		"creditAmount" => "SearchDoubleField",
		"debitAmount" => "SearchDoubleField",
		"deferRevRec" => "SearchBooleanField",
		"exchangeRate" => "SearchDoubleField",
		"grossAmount" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"multiSubsidiary" => "SearchBooleanField",
		"netAmount" => "SearchDoubleField",
		"quantityRevCommitted" => "SearchDoubleField",
		"recognizedRevenue" => "SearchDoubleField",
		"revCommitStatus" => "SearchEnumMultiSelectField",
		"revenueStatus" => "SearchEnumMultiSelectField",
		"revRecEndDate" => "SearchDateField",
		"revRecOnRevCommitment" => "SearchBooleanField",
		"revRecStartDate" => "SearchDateField",
		"subsidiary" => "SearchMultiSelectField",
		"tranIsVsoeBundle" => "SearchBooleanField",
		"type" => "SearchEnumMultiSelectField",
		"vsoeAllocation" => "SearchDoubleField",
	);
}

