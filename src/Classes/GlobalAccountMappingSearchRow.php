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

class GlobalAccountMappingSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\GlobalAccountMappingSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\ClassificationSearchRowBasic
     */
    public $classJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\AccountSearchRowBasic
     */
    public $destinationAccountJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\AccountSearchRowBasic
     */
    public $sourceAccountJoin;
    /**
     * @var \NetSuite\Classes\SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "GlobalAccountMappingSearchRowBasic",
        "classJoin" => "ClassificationSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "destinationAccountJoin" => "AccountSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "sourceAccountJoin" => "AccountSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
