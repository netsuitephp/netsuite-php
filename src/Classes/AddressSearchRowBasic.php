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

class AddressSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $override;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zip;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "override" => "SearchColumnBooleanField[]",
        "phone" => "SearchColumnStringField[]",
        "state" => "SearchColumnStringField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
