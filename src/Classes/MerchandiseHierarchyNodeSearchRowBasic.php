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

class MerchandiseHierarchyNodeSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $hierarchyLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $hierarchyVersion;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parentNode;
    static $paramtypesmap = array(
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hierarchyLevel" => "SearchColumnSelectField[]",
        "hierarchyVersion" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "parentNode" => "SearchColumnSelectField[]",
    );
}
