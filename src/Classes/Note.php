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

class Note extends Record {
    /**
     * @var string
     */
    public $title;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $noteType;
    /**
     * @var \NetSuite\Classes\NoteDirection
     */
    public $direction;
    /**
     * @var string
     */
    public $noteDate;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $activity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $author;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $folder;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $media;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $record;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $recordType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $topic;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transaction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "title" => "string",
        "noteType" => "RecordRef",
        "direction" => "NoteDirection",
        "noteDate" => "dateTime",
        "note" => "string",
        "lastModifiedDate" => "dateTime",
        "activity" => "RecordRef",
        "author" => "RecordRef",
        "entity" => "RecordRef",
        "folder" => "RecordRef",
        "item" => "RecordRef",
        "media" => "RecordRef",
        "record" => "RecordRef",
        "recordType" => "RecordRef",
        "topic" => "RecordRef",
        "transaction" => "RecordRef",
        "customForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
