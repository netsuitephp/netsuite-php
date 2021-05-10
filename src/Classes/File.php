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

class File extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\FileAttachFrom
     */
    public $attachFrom;
    /**
     * @var string
     */
    public $mediaTypeName;
    /**
     * @var \NetSuite\Classes\MediaType
     */
    public $fileType;
    /**
     * @var \NetSuite\Classes\base64Binary
     */
    public $content;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $folder;
    /**
     * @var float
     */
    public $fileSize;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $mediaFile;
    /**
     * @var \NetSuite\Classes\TextFileEncoding
     */
    public $textFileEncoding;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\FileEncoding
     */
    public $encoding;
    /**
     * @var string
     */
    public $altTagCaption;
    /**
     * @var boolean
     */
    public $isOnline;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $class;
    /**
     * @var boolean
     */
    public $bundleable;
    /**
     * @var string
     */
    public $department;
    /**
     * @var boolean
     */
    public $hideInBundle;
    /**
     * @var boolean
     */
    public $isPrivate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $caption;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $storeDisplayThumbnail;
    /**
     * @var string
     */
    public $siteDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\FileSiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "attachFrom" => "FileAttachFrom",
        "mediaTypeName" => "string",
        "fileType" => "MediaType",
        "content" => "base64Binary",
        "folder" => "RecordRef",
        "fileSize" => "float",
        "url" => "string",
        "urlComponent" => "string",
        "mediaFile" => "RecordRef",
        "textFileEncoding" => "TextFileEncoding",
        "description" => "string",
        "encoding" => "FileEncoding",
        "altTagCaption" => "string",
        "isOnline" => "boolean",
        "isInactive" => "boolean",
        "class" => "string",
        "bundleable" => "boolean",
        "department" => "string",
        "hideInBundle" => "boolean",
        "isPrivate" => "boolean",
        "owner" => "RecordRef",
        "caption" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "siteDescription" => "string",
        "featuredDescription" => "string",
        "lastModifiedDate" => "dateTime",
        "createdDate" => "dateTime",
        "siteCategoryList" => "FileSiteCategoryList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
