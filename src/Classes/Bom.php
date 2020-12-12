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

class Bom extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $name;
    /**
     * @var boolean
     */
    public $usedOnAssembly;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $useComponentYield;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $legacyBomForAssembly;
    /**
     * @var boolean
     */
    public $availableForAllAssemblies;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $restrictToAssembliesList;
    /**
     * @var boolean
     */
    public $availableForAllLocations;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $restrictToLocationsList;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "name" => "string",
        "usedOnAssembly" => "boolean",
        "createdDate" => "dateTime",
        "isInactive" => "boolean",
        "useComponentYield" => "boolean",
        "memo" => "string",
        "legacyBomForAssembly" => "RecordRef",
        "availableForAllAssemblies" => "boolean",
        "restrictToAssembliesList" => "RecordRefList",
        "availableForAllLocations" => "boolean",
        "restrictToLocationsList" => "RecordRefList",
        "subsidiaryList" => "RecordRefList",
        "includeChildren" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
