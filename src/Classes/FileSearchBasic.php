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

class FileSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $availableWithoutLogin;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $created;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateViewed;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $documentSize;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $fileType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $folder;
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
    public $isAvailable;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isLink;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $modified;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $url;
    static $paramtypesmap = array(
        "availableWithoutLogin" => "SearchBooleanField",
        "created" => "SearchDateField",
        "dateViewed" => "SearchDateField",
        "description" => "SearchStringField",
        "documentSize" => "SearchLongField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fileType" => "SearchEnumMultiSelectField",
        "folder" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isAvailable" => "SearchBooleanField",
        "isLink" => "SearchBooleanField",
        "modified" => "SearchDateField",
        "name" => "SearchStringField",
        "owner" => "SearchMultiSelectField",
        "url" => "SearchStringField",
    );
}
