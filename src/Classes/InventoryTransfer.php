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

class InventoryTransfer extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $tranDate;
    public $postingPeriod;
    public $tranId;
    public $memo;
    public $location;
    public $transferLocation;
    public $department;
    public $class;
    public $subsidiary;
    public $inventoryList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "memo" => "string",
        "location" => "RecordRef",
        "transferLocation" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "subsidiary" => "RecordRef",
        "inventoryList" => "InventoryTransferInventoryList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
