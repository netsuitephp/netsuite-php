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

class CustomSegment extends Record {
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $scriptId;
    /**
     * @var string
     */
    public $recordScriptId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $recordType;
    /**
     * @var \NetSuite\Classes\CustomizationFieldType
     */
    public $fieldType;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $showInList;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $filteredByList;
    /**
     * @var boolean
     */
    public $hasGLImpact;
    /**
     * @var string
     */
    public $help;
    /**
     * @var string
     */
    public $description;
    /**
     * @var boolean
     */
    public $isMandatory;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultSelection;
    /**
     * @var string
     */
    public $internalId;
    static $paramtypesmap = array(
        "label" => "string",
        "scriptId" => "string",
        "recordScriptId" => "string",
        "recordType" => "RecordRef",
        "fieldType" => "CustomizationFieldType",
        "isInactive" => "boolean",
        "showInList" => "boolean",
        "filteredByList" => "RecordRefList",
        "hasGLImpact" => "boolean",
        "help" => "string",
        "description" => "string",
        "isMandatory" => "boolean",
        "defaultSelection" => "RecordRef",
        "internalId" => "string",
    );
}
