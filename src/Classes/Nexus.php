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

class Nexus extends Record {
    /**
     * @var \NetSuite\Classes\Country::*
     */
    public $country;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $state;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxAgency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxAgencyPst;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parentNexus;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $taxDateFromFulfillment;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "country" => "Country",
        "state" => "RecordRef",
        "taxAgency" => "RecordRef",
        "taxAgencyPst" => "RecordRef",
        "taxCode" => "RecordRef",
        "description" => "string",
        "parentNexus" => "RecordRef",
        "isInactive" => "boolean",
        "taxDateFromFulfillment" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
