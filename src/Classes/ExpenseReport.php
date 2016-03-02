<?php

namespace Fungku\NetSuite\Classes;

class ExpenseReport extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $status;
	public $customForm;
	public $account;
	public $entity;
	public $subsidiary;
	public $tranId;
	public $postingPeriod;
	public $tranDate;
	public $dueDate;
	public $approvalStatus;
	public $total;
	public $nextApprover;
	public $advance;
	public $tax1Amt;
	public $amount;
	public $memo;
	public $complete;
	public $supervisorApproval;
	public $accountingApproval;
	public $useMultiCurrency;
	public $tax2Amt;
	public $department;
	public $class;
	public $location;
	public $expenseList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"customForm" => "RecordRef",
		"account" => "RecordRef",
		"entity" => "RecordRef",
		"subsidiary" => "RecordRef",
		"tranId" => "string",
		"postingPeriod" => "RecordRef",
		"tranDate" => "dateTime",
		"dueDate" => "dateTime",
		"approvalStatus" => "RecordRef",
		"total" => "float",
		"nextApprover" => "RecordRef",
		"advance" => "float",
		"tax1Amt" => "float",
		"amount" => "float",
		"memo" => "string",
		"complete" => "boolean",
		"supervisorApproval" => "boolean",
		"accountingApproval" => "boolean",
		"useMultiCurrency" => "boolean",
		"tax2Amt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"expenseList" => "ExpenseReportExpenseList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

