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

class SubsidiaryTaxRegistration {
    /**
     * @var integer
     */
    public $id;
    /**
     * @var \NetSuite\Classes\Country
     */
    public $nexusCountry;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxAgency;
    /**
     * @var string
     */
    public $taxRegistrationNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxEngine;
    /**
     * @var string
     */
    public $effectiveFrom;
    /**
     * @var string
     */
    public $validUntil;
    static $paramtypesmap = array(
        "id" => "integer",
        "nexusCountry" => "Country",
        "nexus" => "RecordRef",
        "taxAgency" => "RecordRef",
        "taxRegistrationNumber" => "string",
        "taxEngine" => "RecordRef",
        "effectiveFrom" => "dateTime",
        "validUntil" => "dateTime",
    );
}
