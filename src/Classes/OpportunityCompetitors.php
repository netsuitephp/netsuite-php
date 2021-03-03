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

class OpportunityCompetitors {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $competitor;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $notes;
    /**
     * @var string
     */
    public $strategy;
    /**
     * @var boolean
     */
    public $winner;
    static $paramtypesmap = array(
        "competitor" => "RecordRef",
        "url" => "string",
        "notes" => "string",
        "strategy" => "string",
        "winner" => "boolean",
    );
}
