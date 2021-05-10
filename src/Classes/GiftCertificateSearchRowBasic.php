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

class GiftCertificateSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amountRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amtAvailBilled;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expirationDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $gcActive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertCode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $incomeAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $liabilityAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $originalAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $purchaseDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $sender;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "amountRemaining" => "SearchColumnDoubleField[]",
        "amtAvailBilled" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "email" => "SearchColumnStringField[]",
        "expirationDate" => "SearchColumnDateField[]",
        "gcActive" => "SearchColumnBooleanField[]",
        "giftCertCode" => "SearchColumnStringField[]",
        "incomeAcct" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "liabilityAcct" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "originalAmount" => "SearchColumnDoubleField[]",
        "purchaseDate" => "SearchColumnDateField[]",
        "sender" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
