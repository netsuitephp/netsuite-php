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

class BomRevision extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billOfMaterials;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $effectiveStartDate;
    /**
     * @var string
     */
    public $effectiveEndDate;
    /**
     * @var \NetSuite\Classes\BomRevisionComponentList
     */
    public $componentList;
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
        "createdDate" => "dateTime",
        "billOfMaterials" => "RecordRef",
        "memo" => "string",
        "isInactive" => "boolean",
        "effectiveStartDate" => "dateTime",
        "effectiveEndDate" => "dateTime",
        "componentList" => "BomRevisionComponentList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
