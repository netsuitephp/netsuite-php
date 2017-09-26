<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

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
    public $nextApproverJoin;
    public $opportunityJoin;
    public $paidTransactionJoin;
    public $partnerJoin;
    public $payingTransactionJoin;
    public $payrollItemJoin;
    public $projectTaskJoin;
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
    public $taxDetailJoin;
    public $taxItemJoin;
    public $timeJoin;
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
        "nextApproverJoin" => "EntitySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "paidTransactionJoin" => "TransactionSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "payingTransactionJoin" => "TransactionSearchRowBasic",
        "payrollItemJoin" => "PayrollItemSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
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
        "taxDetailJoin" => "TaxDetailSearchRowBasic",
        "taxItemJoin" => "SalesTaxItemSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "toLocationJoin" => "LocationSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "vendorLineJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
