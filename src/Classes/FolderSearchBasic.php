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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class FolderSearchBasic extends SearchRecordBasic {
    public $class;
    public $department;
    public $description;
    public $externalId;
    public $externalIdString;
    public $group;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $isTopLevel;
    public $lastModifiedDate;
    public $location;
    public $name;
    public $numFiles;
    public $owner;
    public $parent;
    public $predecessor;
    public $private;
    public $size;
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
