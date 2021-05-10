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

class FileSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableWithoutLogin;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $created;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateViewed;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $documentSize;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $fileType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $folder;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $hits;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $hostedPath;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isAvailable;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $modified;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $url;
    static $paramtypesmap = array(
        "availableWithoutLogin" => "SearchColumnBooleanField[]",
        "created" => "SearchColumnDateField[]",
        "dateViewed" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "documentSize" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fileType" => "SearchColumnEnumSelectField[]",
        "folder" => "SearchColumnSelectField[]",
        "hits" => "SearchColumnLongField[]",
        "hostedPath" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isAvailable" => "SearchColumnBooleanField[]",
        "modified" => "SearchColumnDateField[]",
        "name" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "url" => "SearchColumnStringField[]",
    );
}
