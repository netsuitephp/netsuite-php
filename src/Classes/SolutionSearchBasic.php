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

class SolutionSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $abstract;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $caseCount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $code;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
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
     * @var \NetSuite\Classes\SearchStringField
     */
    public $find;
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
    public $isOnline;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $topic;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "abstract" => "SearchStringField",
        "assigned" => "SearchMultiSelectField",
        "caseCount" => "SearchLongField",
        "code" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "find" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isOnline" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "number" => "SearchLongField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "topic" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
