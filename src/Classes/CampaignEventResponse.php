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

class CampaignEventResponse {
    public $name;
    public $type;
    public $dateSent;
    public $sent;
    public $opened;
    public $openedRatio;
    public $clickedThru;
    public $clickedThruRatio;
    public $responded;
    public $respondedRatio;
    public $unsubscribed;
    public $unsubscribedRatio;
    public $bounced;
    public $bouncedRatio;
    static $paramtypesmap = array(
        "name" => "string",
        "type" => "string",
        "dateSent" => "dateTime",
        "sent" => "float",
        "opened" => "float",
        "openedRatio" => "float",
        "clickedThru" => "float",
        "clickedThruRatio" => "float",
        "responded" => "integer",
        "respondedRatio" => "float",
        "unsubscribed" => "integer",
        "unsubscribedRatio" => "float",
        "bounced" => "integer",
        "bouncedRatio" => "float",
    );
}
