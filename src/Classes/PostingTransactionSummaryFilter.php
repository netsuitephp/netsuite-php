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

class PostingTransactionSummaryFilter {
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $period;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $parentItem;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $book;
    static $paramtypesmap = array(
        "period" => "RecordRefList",
        "account" => "RecordRefList",
        "parentItem" => "RecordRefList",
        "item" => "RecordRefList",
        "entity" => "RecordRefList",
        "department" => "RecordRefList",
        "class" => "RecordRefList",
        "location" => "RecordRefList",
        "subsidiary" => "RecordRefList",
        "book" => "RecordRefList",
    );
}
