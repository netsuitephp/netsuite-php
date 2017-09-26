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

class BillingAccountSearchRowBasic extends SearchRowBasic {
    public $billingSchedule;
    public $cashSaleForm;
    public $class;
    public $currency;
    public $customer;
    public $customerDefault;
    public $dateCreated;
    public $department;
    public $externalId;
    public $frequency;
    public $idNumber;
    public $inactive;
    public $internalId;
    public $invoiceForm;
    public $lastBillCycleDate;
    public $lastBillDate;
    public $location;
    public $memo;
    public $name;
    public $nextBillCycleDate;
    public $startDate;
    public $subsidiary;
    public $customFieldList;
    static $paramtypesmap = array(
        "billingSchedule" => "SearchColumnSelectField[]",
        "cashSaleForm" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "customerDefault" => "SearchColumnBooleanField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "frequency" => "SearchColumnEnumSelectField[]",
        "idNumber" => "SearchColumnStringField[]",
        "inactive" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "invoiceForm" => "SearchColumnSelectField[]",
        "lastBillCycleDate" => "SearchColumnDateField[]",
        "lastBillDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "nextBillCycleDate" => "SearchColumnDateField[]",
        "startDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
