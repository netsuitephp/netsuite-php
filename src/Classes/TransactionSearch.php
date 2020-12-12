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

class TransactionSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\AccountSearchBasic
     */
    public $accountJoin;
    /**
     * @var \NetSuite\Classes\AccountingPeriodSearchBasic
     */
    public $accountingPeriodJoin;
    /**
     * @var \NetSuite\Classes\AccountingTransactionSearchBasic
     */
    public $accountingTransactionJoin;
    /**
     * @var \NetSuite\Classes\AccountSearchBasic
     */
    public $advanceToApplyAccountJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $appliedToTransactionJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $applyingTransactionJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $assemblyJoin;
    /**
     * @var \NetSuite\Classes\AddressSearchBasic
     */
    public $billingAddressJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $billingTransactionJoin;
    /**
     * @var \NetSuite\Classes\BinSearchBasic
     */
    public $binNumberJoin;
    /**
     * @var \NetSuite\Classes\BomSearchBasic
     */
    public $bomJoin;
    /**
     * @var \NetSuite\Classes\BomRevisionSearchBasic
     */
    public $bomRevisionJoin;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\ClassificationSearchBasic
     */
    public $classJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $cogsPurchaseJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $cogsSaleJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $createdFromJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerMainJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $depositTransactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\ExpenseCategorySearchBasic
     */
    public $expenseCategoryJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $fromLocationJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $fulfillingTransactionJoin;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchBasic
     */
    public $headerBillingAccountJoin;
    /**
     * @var \NetSuite\Classes\InstallmentSearchBasic
     */
    public $installmentJoin;
    /**
     * @var \NetSuite\Classes\InventoryDetailSearchBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\InventoryNumberSearchBasic
     */
    public $itemNumberJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobMainJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchBasic
     */
    public $leadSourceJoin;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchBasic
     */
    public $lineBillingAccountJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $lineFileJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\ManufacturingOperationTaskSearchBasic
     */
    public $manufacturingOperationTaskJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\EntitySearchBasic
     */
    public $nextApproverJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $outsourcingVendorJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $paidTransactionJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $payingTransactionJoin;
    /**
     * @var \NetSuite\Classes\PaymentInstrumentSearchBasic
     */
    public $paymentInstrumentJoin;
    /**
     * @var \NetSuite\Classes\PaymentOptionSearchBasic
     */
    public $paymentOptionJoin;
    /**
     * @var \NetSuite\Classes\PayrollItemSearchBasic
     */
    public $payrollItemJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $requestorJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $revCommittingTransactionJoin;
    /**
     * @var \NetSuite\Classes\ItemRevisionSearchBasic
     */
    public $revisionJoin;
    /**
     * @var \NetSuite\Classes\RevRecScheduleSearchBasic
     */
    public $revRecScheduleJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $rgPostingTransactionJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $salesOrderJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $salesRepJoin;
    /**
     * @var \NetSuite\Classes\AddressSearchBasic
     */
    public $shippingAddressJoin;
    /**
     * @var \NetSuite\Classes\SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\SalesTaxItemSearchBasic
     */
    public $taxCodeJoin;
    /**
     * @var \NetSuite\Classes\TaxDetailSearchBasic
     */
    public $taxDetailJoin;
    /**
     * @var \NetSuite\Classes\SalesTaxItemSearchBasic
     */
    public $taxItemJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $toLocationJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorLineJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "TransactionSearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "accountingPeriodJoin" => "AccountingPeriodSearchBasic",
        "accountingTransactionJoin" => "AccountingTransactionSearchBasic",
        "advanceToApplyAccountJoin" => "AccountSearchBasic",
        "appliedToTransactionJoin" => "TransactionSearchBasic",
        "applyingTransactionJoin" => "TransactionSearchBasic",
        "assemblyJoin" => "ItemSearchBasic",
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
        "outsourcingVendorJoin" => "VendorSearchBasic",
        "paidTransactionJoin" => "TransactionSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "payingTransactionJoin" => "TransactionSearchBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchBasic",
        "paymentOptionJoin" => "PaymentOptionSearchBasic",
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
