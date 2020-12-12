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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class TransactionSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\AccountSearchRowBasic
     */
    public $accountJoin;
    /**
     * @var \NetSuite\Classes\AccountingPeriodSearchRowBasic
     */
    public $accountingPeriodJoin;
    /**
     * @var \NetSuite\Classes\AccountingTransactionSearchRowBasic
     */
    public $accountingTransactionJoin;
    /**
     * @var \NetSuite\Classes\AccountSearchRowBasic
     */
    public $advanceToApplyAccountJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $appliedToTransactionJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $applyingTransactionJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $assemblyJoin;
    /**
     * @var \NetSuite\Classes\AddressSearchRowBasic
     */
    public $billingAddressJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $billingTransactionJoin;
    /**
     * @var \NetSuite\Classes\BinSearchRowBasic
     */
    public $binNumberJoin;
    /**
     * @var \NetSuite\Classes\BomSearchRowBasic
     */
    public $bomJoin;
    /**
     * @var \NetSuite\Classes\BomRevisionSearchRowBasic
     */
    public $bomRevisionJoin;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\ClassificationSearchRowBasic
     */
    public $classJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $cogsPurchaseJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $cogsSaleJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $createdFromJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerMainJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $depositTransactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\ExpenseCategorySearchRowBasic
     */
    public $expenseCategoryJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $fromLocationJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $fulfillingTransactionJoin;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchRowBasic
     */
    public $headerBillingAccountJoin;
    /**
     * @var \NetSuite\Classes\InstallmentSearchRowBasic
     */
    public $installmentJoin;
    /**
     * @var \NetSuite\Classes\InventoryDetailSearchRowBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\InventoryNumberSearchRowBasic
     */
    public $itemNumberJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobMainJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchRowBasic
     */
    public $leadSourceJoin;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchRowBasic
     */
    public $lineBillingAccountJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $lineFileJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\ManufacturingOperationTaskSearchRowBasic
     */
    public $manufacturingOperationTaskJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\EntitySearchRowBasic
     */
    public $nextApproverJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $outsourcingVendorJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $paidTransactionJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $payingTransactionJoin;
    /**
     * @var \NetSuite\Classes\PaymentInstrumentSearchRowBasic
     */
    public $paymentInstrumentJoin;
    /**
     * @var \NetSuite\Classes\PaymentOptionSearchRowBasic
     */
    public $paymentOptionJoin;
    /**
     * @var \NetSuite\Classes\PayrollItemSearchRowBasic
     */
    public $payrollItemJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $requestorJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $revCommittingTransactionJoin;
    /**
     * @var \NetSuite\Classes\ItemRevisionSearchRowBasic
     */
    public $revisionJoin;
    /**
     * @var \NetSuite\Classes\RevRecScheduleSearchRowBasic
     */
    public $revRecScheduleJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $rgPostingTransactionJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $salesOrderJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $salesRepJoin;
    /**
     * @var \NetSuite\Classes\AddressSearchRowBasic
     */
    public $shippingAddressJoin;
    /**
     * @var \NetSuite\Classes\SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\SalesTaxItemSearchRowBasic
     */
    public $taxCodeJoin;
    /**
     * @var \NetSuite\Classes\TaxDetailSearchRowBasic
     */
    public $taxDetailJoin;
    /**
     * @var \NetSuite\Classes\SalesTaxItemSearchRowBasic
     */
    public $taxItemJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $toLocationJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorLineJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "TransactionSearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "accountingPeriodJoin" => "AccountingPeriodSearchRowBasic",
        "accountingTransactionJoin" => "AccountingTransactionSearchRowBasic",
        "advanceToApplyAccountJoin" => "AccountSearchRowBasic",
        "appliedToTransactionJoin" => "TransactionSearchRowBasic",
        "applyingTransactionJoin" => "TransactionSearchRowBasic",
        "assemblyJoin" => "ItemSearchRowBasic",
        "billingAddressJoin" => "AddressSearchRowBasic",
        "billingTransactionJoin" => "TransactionSearchRowBasic",
        "binNumberJoin" => "BinSearchRowBasic",
        "bomJoin" => "BomSearchRowBasic",
        "bomRevisionJoin" => "BomRevisionSearchRowBasic",
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
        "headerBillingAccountJoin" => "BillingAccountSearchRowBasic",
        "installmentJoin" => "InstallmentSearchRowBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "itemNumberJoin" => "InventoryNumberSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "jobMainJoin" => "JobSearchRowBasic",
        "leadSourceJoin" => "CampaignSearchRowBasic",
        "lineBillingAccountJoin" => "BillingAccountSearchRowBasic",
        "lineFileJoin" => "FileSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "nextApproverJoin" => "EntitySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "outsourcingVendorJoin" => "VendorSearchRowBasic",
        "paidTransactionJoin" => "TransactionSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "payingTransactionJoin" => "TransactionSearchRowBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchRowBasic",
        "paymentOptionJoin" => "PaymentOptionSearchRowBasic",
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
        "taxCodeJoin" => "SalesTaxItemSearchRowBasic",
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
