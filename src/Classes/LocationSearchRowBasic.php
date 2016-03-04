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
 * generated:  2016-03-04 07:23:27 PM UTC
 */

namespace NetSuite\Classes;

class LocationSearchRowBasic extends SearchRowBasic {
    public $address1;
    public $address2;
    public $address3;
    public $city;
    public $country;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $isOffice;
    public $makeInventoryAvailable;
    public $makeInventoryAvailableStore;
    public $name;
    public $nameNoHierarchy;
    public $phone;
    public $state;
    public $subsidiary;
    public $tranPrefix;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isOffice" => "SearchColumnBooleanField[]",
        "makeInventoryAvailable" => "SearchColumnBooleanField[]",
        "makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nameNoHierarchy" => "SearchColumnStringField[]",
        "phone" => "SearchColumnStringField[]",
        "state" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}

