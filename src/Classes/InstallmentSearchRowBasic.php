<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class InstallmentSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amountPaid;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amountRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysOverdue;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dueDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxAmountPaid;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxAmountRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $installmentNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "amount" => "SearchColumnDoubleField[]",
        "amountPaid" => "SearchColumnDoubleField[]",
        "amountRemaining" => "SearchColumnDoubleField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "dueDate" => "SearchColumnDateField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "fxAmountPaid" => "SearchColumnDoubleField[]",
        "fxAmountRemaining" => "SearchColumnDoubleField[]",
        "installmentNumber" => "SearchColumnLongField[]",
        "status" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
