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

class FolderSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $group;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isTopLevel;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $numFiles;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $predecessor;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $private;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $size;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    static $paramtypesmap = array(
        "class" => "SearchMultiSelectField",
        "department" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "group" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isTopLevel" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "numFiles" => "SearchLongField",
        "owner" => "SearchMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "predecessor" => "SearchMultiSelectField",
        "private" => "SearchBooleanField",
        "size" => "SearchLongField",
        "subsidiary" => "SearchMultiSelectField",
    );
}
