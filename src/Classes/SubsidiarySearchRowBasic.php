<?php

namespace Fungku\NetSuite\Classes;

class SubsidiarySearchRowBasic extends SearchRowBasic {
	public $accountingBook;
	public $accountingBookCurrency;
	public $address1;
	public $address2;
	public $address3;
	public $anonymousCustomerInboundEmail;
	public $anonymousCustomerOnlineForms;
	public $caseAssignmentTemplate;
	public $caseAutomaticClosureTemplate;
	public $caseCopyEmployeeTemplate;
	public $caseCreationTemplate;
	public $caseEscalationTemplate;
	public $caseUpdateTemplate;
	public $city;
	public $companyNameForSupportMessages;
	public $country;
	public $currency;
	public $email;
	public $employeeCaseUpdateTemplate;
	public $externalId;
	public $fax;
	public $internalId;
	public $isElimination;
	public $isInactive;
	public $legalName;
	public $mainSupportEmailAddress;
	public $name;
	public $nameNoHierarchy;
	public $phone;
	public $purchaseOrderAmount;
	public $purchaseOrderQuantity;
	public $purchaseOrderQuantityDiff;
	public $receiptAmount;
	public $receiptQuantity;
	public $receiptQuantityDiff;
	public $state;
	public $taxIdNum;
	public $tranPrefix;
	public $url;
	public $zip;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"accountingBookCurrency" => "SearchColumnSelectField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"anonymousCustomerInboundEmail" => "SearchColumnStringField[]",
		"anonymousCustomerOnlineForms" => "SearchColumnStringField[]",
		"caseAssignmentTemplate" => "SearchColumnStringField[]",
		"caseAutomaticClosureTemplate" => "SearchColumnStringField[]",
		"caseCopyEmployeeTemplate" => "SearchColumnStringField[]",
		"caseCreationTemplate" => "SearchColumnStringField[]",
		"caseEscalationTemplate" => "SearchColumnStringField[]",
		"caseUpdateTemplate" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"companyNameForSupportMessages" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"currency" => "SearchColumnSelectField[]",
		"email" => "SearchColumnStringField[]",
		"employeeCaseUpdateTemplate" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"fax" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isElimination" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"legalName" => "SearchColumnStringField[]",
		"mainSupportEmailAddress" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"phone" => "SearchColumnStringField[]",
		"purchaseOrderAmount" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantity" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
		"receiptAmount" => "SearchColumnDoubleField[]",
		"receiptQuantity" => "SearchColumnDoubleField[]",
		"receiptQuantityDiff" => "SearchColumnDoubleField[]",
		"state" => "SearchColumnStringField[]",
		"taxIdNum" => "SearchColumnStringField[]",
		"tranPrefix" => "SearchColumnStringField[]",
		"url" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

