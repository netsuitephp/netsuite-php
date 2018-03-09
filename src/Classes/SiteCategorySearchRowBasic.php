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

class SiteCategorySearchRowBasic extends SearchRowBasic {
    public $dateViewed;
    public $description;
    public $excludeFromSitemap;
    public $externalId;
    public $fullName;
    public $hidden;
    public $hits;
    public $internalId;
    public $longDescription;
    public $name;
    public $pageTitle;
    public $sitemapPriority;
    public $urlComponent;
    static $paramtypesmap = array(
        "dateViewed" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "excludeFromSitemap" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fullName" => "SearchColumnStringField[]",
        "hidden" => "SearchColumnBooleanField[]",
        "hits" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "longDescription" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "pageTitle" => "SearchColumnStringField[]",
        "sitemapPriority" => "SearchColumnEnumSelectField[]",
        "urlComponent" => "SearchColumnStringField[]",
    );
}
