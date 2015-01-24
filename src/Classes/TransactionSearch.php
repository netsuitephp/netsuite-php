<?php namespace Fungku\NetSuite\Classes;

class TransactionSearch extends SearchRecord {
	public $basic;
	public $accountJoin;
	public $accountingPeriodJoin;
	public $accountingTransactionJoin;
	public $appliedToTransactionJoin;
	public $applyingTransactionJoin;
	public $billingTransactionJoin;
	public $binNumberJoin;
	public $callJoin;
	public $caseJoin;
	public $classJoin;
	public $cogsPurchaseJoin;
	public $cogsSaleJoin;
	public $contactPrimaryJoin;
	public $createdFromJoin;
	public $customerJoin;
	public $customerMainJoin;
	public $departmentJoin;
	public $depositTransactionJoin;
	public $employeeJoin;
	public $eventJoin;
	public $expenseCategoryJoin;
	public $fileJoin;
	public $fromLocationJoin;
	public $fulfillingTransactionJoin;
	public $inventoryDetailJoin;
	public $itemJoin;
	public $itemNumberJoin;
	public $jobJoin;
	public $jobMainJoin;
	public $leadSourceJoin;
	public $locationJoin;
	public $manufacturingOperationTaskJoin;
	public $messagesJoin;
	public $opportunityJoin;
	public $paidTransactionJoin;
	public $partnerJoin;
	public $payingTransactionJoin;
	public $payrollItemJoin;
	public $purchaseOrderJoin;
	public $requestorJoin;
	public $revCommittingTransactionJoin;
	public $revisionJoin;
	public $revRecScheduleJoin;
	public $rgPostingTransactionJoin;
	public $salesOrderJoin;
	public $salesRepJoin;
	public $subsidiaryJoin;
	public $taskJoin;
	public $toLocationJoin;
	public $userJoin;
	public $userNotesJoin;
	public $vendorJoin;
	public $vendorLineJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "TransactionSearchBasic",
		"accountJoin" => "AccountSearchBasic",
		"accountingPeriodJoin" => "AccountingPeriodSearchBasic",
		"accountingTransactionJoin" => "AccountingTransactionSearchBasic",
		"appliedToTransactionJoin" => "TransactionSearchBasic",
		"applyingTransactionJoin" => "TransactionSearchBasic",
		"billingTransactionJoin" => "TransactionSearchBasic",
		"binNumberJoin" => "BinSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"cogsPurchaseJoin" => "TransactionSearchBasic",
		"cogsSaleJoin" => "TransactionSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"createdFromJoin" => "TransactionSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"customerMainJoin" => "CustomerSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"depositTransactionJoin" => "TransactionSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"expenseCategoryJoin" => "ExpenseCategorySearchBasic",
		"fileJoin" => "FileSearchBasic",
		"fromLocationJoin" => "LocationSearchBasic",
		"fulfillingTransactionJoin" => "TransactionSearchBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"itemNumberJoin" => "InventoryNumberSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"jobMainJoin" => "JobSearchBasic",
		"leadSourceJoin" => "CampaignSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"paidTransactionJoin" => "TransactionSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"payingTransactionJoin" => "TransactionSearchBasic",
		"payrollItemJoin" => "PayrollItemSearchBasic",
		"purchaseOrderJoin" => "TransactionSearchBasic",
		"requestorJoin" => "EmployeeSearchBasic",
		"revCommittingTransactionJoin" => "TransactionSearchBasic",
		"revisionJoin" => "ItemRevisionSearchBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchBasic",
		"rgPostingTransactionJoin" => "TransactionSearchBasic",
		"salesOrderJoin" => "TransactionSearchBasic",
		"salesRepJoin" => "EmployeeSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"toLocationJoin" => "LocationSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"vendorLineJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

