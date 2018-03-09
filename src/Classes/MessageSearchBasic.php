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

class MessageSearchBasic extends SearchRecordBasic {
    public $author;
    public $authorEmail;
    public $bcc;
    public $cc;
    public $externalId;
    public $externalIdString;
    public $hasAttachment;
    public $internalId;
    public $internalIdNumber;
    public $internalOnly;
    public $message;
    public $messageDate;
    public $messageType;
    public $recipient;
    public $recipientEmail;
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
