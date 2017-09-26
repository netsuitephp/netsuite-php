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

class PromotionCodeSearchRowBasic extends SearchRowBasic {
    public $code;
    public $description;
    public $discount;
    public $endDate;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $isPublic;
    public $location;
    public $name;
    public $startDate;
    public $customFieldList;
    static $paramtypesmap = array(
        "code" => "SearchColumnStringField[]",
        "description" => "SearchColumnStringField[]",
        "discount" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPublic" => "SearchColumnBooleanField[]",
        "location" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
