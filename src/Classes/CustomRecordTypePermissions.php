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

class CustomRecordTypePermissions {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $permittedRole;
    /**
     * @var \NetSuite\Classes\CustomRecordTypePermissionsPermittedLevel
     */
    public $permittedLevel;
    /**
     * @var \NetSuite\Classes\CustomRecordTypePermissionsRestriction
     */
    public $restriction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultForm;
    /**
     * @var boolean
     */
    public $restrictForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $searchForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $searchResults;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $listView;
    /**
     * @var boolean
     */
    public $listViewRestricted;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $dashboardView;
    /**
     * @var boolean
     */
    public $restrictDashboardView;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $sublistView;
    /**
     * @var boolean
     */
    public $restrictSublistView;
    static $paramtypesmap = array(
        "permittedRole" => "RecordRef",
        "permittedLevel" => "CustomRecordTypePermissionsPermittedLevel",
        "restriction" => "CustomRecordTypePermissionsRestriction",
        "defaultForm" => "RecordRef",
        "restrictForm" => "boolean",
        "searchForm" => "RecordRef",
        "searchResults" => "RecordRef",
        "listView" => "RecordRef",
        "listViewRestricted" => "boolean",
        "dashboardView" => "RecordRef",
        "restrictDashboardView" => "boolean",
        "sublistView" => "RecordRef",
        "restrictSublistView" => "boolean",
    );
}
