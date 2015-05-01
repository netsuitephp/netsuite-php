<?php namespace Fungku\NetSuite\Classes;

class TransactionSearchRow extends SearchRow {
	public $basic;
	public $accountJoin;
	public $accountingPeriodJoin;
	public $accountingTransactionJoin;
	public $advanceToApplyAccountJoin;
	public $appliedToTransactionJoin;
	public $applyingTransactionJoin;
	public $billingAddressJoin;
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
	public $shippingAddressJoin;
	public $subsidiaryJoin;
	public $taskJoin;
	public $toLocationJoin;
	public $userJoin;
	public $userNotesJoin;
	public $vendorJoin;
	public $vendorLineJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "TransactionSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"accountingPeriodJoin" => "AccountingPeriodSearchRowBasic",
		"accountingTransactionJoin" => "AccountingTransactionSearchRowBasic",
		"advanceToApplyAccountJoin" => "AccountSearchRowBasic",
		"appliedToTransactionJoin" => "TransactionSearchRowBasic",
		"applyingTransactionJoin" => "TransactionSearchRowBasic",
		"billingAddressJoin" => "AddressSearchRowBasic",
		"billingTransactionJoin" => "TransactionSearchRowBasic",
		"binNumberJoin" => "BinSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"cogsPurchaseJoin" => "TransactionSearchRowBasic",
		"cogsSaleJoin" => "TransactionSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"createdFromJoin" => "TransactionSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"customerMainJoin" => "CustomerSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"depositTransactionJoin" => "TransactionSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"expenseCategoryJoin" => "ExpenseCategorySearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"fromLocationJoin" => "LocationSearchRowBasic",
		"fulfillingTransactionJoin" => "TransactionSearchRowBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"itemNumberJoin" => "InventoryNumberSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"jobMainJoin" => "JobSearchRowBasic",
		"leadSourceJoin" => "CampaignSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"paidTransactionJoin" => "TransactionSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"payingTransactionJoin" => "TransactionSearchRowBasic",
		"payrollItemJoin" => "PayrollItemSearchRowBasic",
		"purchaseOrderJoin" => "TransactionSearchRowBasic",
		"requestorJoin" => "EmployeeSearchRowBasic",
		"revCommittingTransactionJoin" => "TransactionSearchRowBasic",
		"revisionJoin" => "ItemRevisionSearchRowBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
		"rgPostingTransactionJoin" => "TransactionSearchRowBasic",
		"salesOrderJoin" => "TransactionSearchRowBasic",
		"salesRepJoin" => "EmployeeSearchRowBasic",
		"shippingAddressJoin" => "AddressSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"toLocationJoin" => "LocationSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"vendorLineJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

