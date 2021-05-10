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

class AccountingPeriodSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allLocked;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allowNonGLChanges;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $apLocked;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $arLocked;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $closed;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $closedOnDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isAdjust;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isQuarter;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isYear;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $payrollLocked;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $periodName;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    static $paramtypesmap = array(
        "allLocked" => "SearchColumnBooleanField[]",
        "allowNonGLChanges" => "SearchColumnBooleanField[]",
        "apLocked" => "SearchColumnBooleanField[]",
        "arLocked" => "SearchColumnBooleanField[]",
        "closed" => "SearchColumnBooleanField[]",
        "closedOnDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isAdjust" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isQuarter" => "SearchColumnBooleanField[]",
        "isYear" => "SearchColumnBooleanField[]",
        "parent" => "SearchColumnSelectField[]",
        "payrollLocked" => "SearchColumnBooleanField[]",
        "periodName" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
    );
}
