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
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class TransactionSearch extends SearchRecord {
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
    public $bomJoin;
    public $bomRevisionJoin;
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
    public $headerBillingAccountJoin;
    public $installmentJoin;
    public $inventoryDetailJoin;
    public $itemJoin;
    public $itemNumberJoin;
    public $jobJoin;
    public $jobMainJoin;
    public $leadSourceJoin;
    public $lineBillingAccountJoin;
    public $lineFileJoin;
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
    public $taxCodeJoin;
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
        "basic" => "TransactionSearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "accountingPeriodJoin" => "AccountingPeriodSearchBasic",
        "accountingTransactionJoin" => "AccountingTransactionSearchBasic",
        "advanceToApplyAccountJoin" => "AccountSearchBasic",
        "appliedToTransactionJoin" => "TransactionSearchBasic",
        "applyingTransactionJoin" => "TransactionSearchBasic",
        "billingAddressJoin" => "AddressSearchBasic",
        "billingTransactionJoin" => "TransactionSearchBasic",
        "binNumberJoin" => "BinSearchBasic",
        "bomJoin" => "BomSearchBasic",
        "bomRevisionJoin" => "BomRevisionSearchBasic",
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
        "headerBillingAccountJoin" => "BillingAccountSearchBasic",
        "installmentJoin" => "InstallmentSearchBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "itemNumberJoin" => "InventoryNumberSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "jobMainJoin" => "JobSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "lineBillingAccountJoin" => "BillingAccountSearchBasic",
        "lineFileJoin" => "FileSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "nextApproverJoin" => "EntitySearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "paidTransactionJoin" => "TransactionSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "payingTransactionJoin" => "TransactionSearchBasic",
        "payrollItemJoin" => "PayrollItemSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "purchaseOrderJoin" => "TransactionSearchBasic",
        "requestorJoin" => "EmployeeSearchBasic",
        "revCommittingTransactionJoin" => "TransactionSearchBasic",
        "revisionJoin" => "ItemRevisionSearchBasic",
        "revRecScheduleJoin" => "RevRecScheduleSearchBasic",
        "rgPostingTransactionJoin" => "TransactionSearchBasic",
        "salesOrderJoin" => "TransactionSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "shippingAddressJoin" => "AddressSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "taxCodeJoin" => "SalesTaxItemSearchBasic",
        "taxDetailJoin" => "TaxDetailSearchBasic",
        "taxItemJoin" => "SalesTaxItemSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "toLocationJoin" => "LocationSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "vendorLineJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
