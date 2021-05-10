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

class EmployeeAccruedTime {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payrollItem;
    /**
     * @var float
     */
    public $accruedHours;
    /**
     * @var float
     */
    public $accrualRate;
    /**
     * @var float
     */
    public $monetaryRate;
    /**
     * @var boolean
     */
    public $resetAccruedHoursAtYearEnd;
    /**
     * @var \NetSuite\Classes\EmployeeAccruedTimeAccrualMethod
     */
    public $accrualMethod;
    /**
     * @var float
     */
    public $maximumAccruedHours;
    /**
     * @var boolean
     */
    public $inactive;
    /**
     * @var string
     */
    public $effectiveDate;
    /**
     * @var string
     */
    public $expirationDate;
    static $paramtypesmap = array(
        "payrollItem" => "RecordRef",
        "accruedHours" => "float",
        "accrualRate" => "float",
        "monetaryRate" => "float",
        "resetAccruedHoursAtYearEnd" => "boolean",
        "accrualMethod" => "EmployeeAccruedTimeAccrualMethod",
        "maximumAccruedHours" => "float",
        "inactive" => "boolean",
        "effectiveDate" => "dateTime",
        "expirationDate" => "dateTime",
    );
}
