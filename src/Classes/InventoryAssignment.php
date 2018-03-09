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

class InventoryAssignment {
    public $internalId;
    public $issueInventoryNumber;
    public $receiptInventoryNumber;
    public $binNumber;
    public $toBinNumber;
    public $quantity;
    public $expirationDate;
    public $quantityAvailable;
    static $paramtypesmap = array(
        "internalId" => "string",
        "issueInventoryNumber" => "RecordRef",
        "receiptInventoryNumber" => "string",
        "binNumber" => "RecordRef",
        "toBinNumber" => "RecordRef",
        "quantity" => "float",
        "expirationDate" => "dateTime",
        "quantityAvailable" => "float",
    );
}
