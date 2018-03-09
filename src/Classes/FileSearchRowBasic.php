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

class FileSearchRowBasic extends SearchRowBasic {
    public $availableWithoutLogin;
    public $created;
    public $dateViewed;
    public $description;
    public $documentSize;
    public $externalId;
    public $fileType;
    public $folder;
    public $hits;
    public $hostedPath;
    public $internalId;
    public $isAvailable;
    public $modified;
    public $name;
    public $owner;
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
