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

class MessageSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $author;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $authorEmail;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $bcc;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $cc;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $hasAttachment;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $internalOnly;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $messageDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $messageType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $recipient;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $recipientEmail;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $subject;
    static $paramtypesmap = array(
        "author" => "SearchMultiSelectField",
        "authorEmail" => "SearchStringField",
        "bcc" => "SearchStringField",
        "cc" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "hasAttachment" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "internalOnly" => "SearchBooleanField",
        "message" => "SearchStringField",
        "messageDate" => "SearchDateField",
        "messageType" => "SearchEnumMultiSelectField",
        "recipient" => "SearchMultiSelectField",
        "recipientEmail" => "SearchStringField",
        "subject" => "SearchStringField",
    );
}
