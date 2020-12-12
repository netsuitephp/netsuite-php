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

class NoteSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $author;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $direction;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $note;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $noteDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $noteType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "author" => "SearchColumnSelectField[]",
        "direction" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "note" => "SearchColumnStringField[]",
        "noteDate" => "SearchColumnDateField[]",
        "noteType" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
