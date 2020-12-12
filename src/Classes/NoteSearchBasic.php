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

class NoteSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $author;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $direction;
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
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $note;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $noteDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $noteType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "author" => "SearchMultiSelectField",
        "direction" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "note" => "SearchStringField",
        "noteDate" => "SearchDateField",
        "noteType" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
