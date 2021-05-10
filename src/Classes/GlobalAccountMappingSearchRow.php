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
