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

class Customer extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var boolean
     */
    public $isPerson;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $middleName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $printOnCheckAs;
    /**
     * @var string
     */
    public $altPhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var string
     */
    public $altEmail;
    /**
     * @var \NetSuite\Classes\Language
     */
    public $language;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\CustomerNumberFormat
     */
    public $numberFormat;
    /**
     * @var \NetSuite\Classes\CustomerNegativeNumberFormat
     */
    public $negativeNumberFormat;
    /**
     * @var string
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $image;
    /**
     * @var \NetSuite\Classes\EmailPreference
     */
    public $emailPreference;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $representingSubsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $territory;
    /**
     * @var string
     */
    public $contribPct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var string
     */
    public $vatRegNumber;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var boolean
     */
    public $taxExempt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terms;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var \NetSuite\Classes\CustomerCreditHoldOverride
     */
    public $creditHoldOverride;
    /**
     * @var \NetSuite\Classes\CustomerMonthlyClosing
     */
    public $monthlyClosing;
    /**
     * @var boolean
     */
    public $overrideCurrencyFormat;
    /**
     * @var string
     */
    public $displaySymbol;
    /**
     * @var \NetSuite\Classes\CurrencySymbolPlacement
     */
    public $symbolPlacement;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $overdueBalance;
    /**
     * @var integer
     */
    public $daysOverdue;
    /**
     * @var float
     */
    public $unbilledOrders;
    /**
     * @var float
     */
    public $consolUnbilledOrders;
    /**
     * @var float
     */
    public $consolOverdueBalance;
    /**
     * @var float
     */
    public $consolDepositBalance;
    /**
     * @var float
     */
    public $consolBalance;
    /**
     * @var float
     */
    public $consolAging;
    /**
     * @var float
     */
    public $consolAging1;
    /**
     * @var float
     */
    public $consolAging2;
    /**
     * @var float
     */
    public $consolAging3;
    /**
     * @var float
     */
    public $consolAging4;
    /**
     * @var integer
     */
    public $consolDaysOverdue;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $prefCCProcessor;
    /**
     * @var float
     */
    public $depositBalance;
    /**
     * @var boolean
     */
    public $shipComplete;
    /**
     * @var boolean
     */
    public $taxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxItem;
    /**
     * @var string
     */
    public $resaleNumber;
    /**
     * @var float
     */
    public $aging;
    /**
     * @var float
     */
    public $aging1;
    /**
     * @var float
     */
    public $aging2;
    /**
     * @var float
     */
    public $aging3;
    /**
     * @var float
     */
    public $aging4;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\AlcoholRecipientType
     */
    public $alcoholRecipientType;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var integer
     */
    public $reminderDays;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingItem;
    /**
     * @var string
     */
    public $thirdPartyAcct;
    /**
     * @var string
     */
    public $thirdPartyZipcode;
    /**
     * @var \NetSuite\Classes\Country::*
     */
    public $thirdPartyCountry;
    /**
     * @var \NetSuite\Classes\CustomerThirdPartyCarrier
     */
    public $thirdPartyCarrier;
    /**
     * @var boolean
     */
    public $giveAccess;
    /**
     * @var float
     */
    public $estimatedBudget;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $accessRole;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assignedWebSite;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var boolean
     */
    public $requirePwdChange;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $campaignCategory;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $sourceWebSite;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $receivablesAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $drAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $fxAccount;
    /**
     * @var float
     */
    public $defaultOrderPriority;
    /**
     * @var string
     */
    public $webLead;
    /**
     * @var string
     */
    public $referrer;
    /**
     * @var string
     */
    public $keywords;
    /**
     * @var string
     */
    public $clickStream;
    /**
     * @var string
     */
    public $lastPageVisited;
    /**
     * @var integer
     */
    public $visits;
    /**
     * @var string
     */
    public $firstVisit;
    /**
     * @var string
     */
    public $lastVisit;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $openingBalanceDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $openingBalanceAccount;
    /**
     * @var \NetSuite\Classes\CustomerStage
     */
    public $stage;
    /**
     * @var boolean
     */
    public $emailTransactions;
    /**
     * @var boolean
     */
    public $printTransactions;
    /**
     * @var boolean
     */
    public $faxTransactions;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultTaxReg;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var boolean
     */
    public $isBudgetApproved;
    /**
     * @var \NetSuite\Classes\GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesReadiness;
    /**
     * @var \NetSuite\Classes\CustomerSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buyingReason;
    /**
     * @var \NetSuite\Classes\CustomerDownloadList
     */
    public $downloadList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buyingTimeFrame;
    /**
     * @var \NetSuite\Classes\CustomerAddressbookList
     */
    public $addressbookList;
    /**
     * @var \NetSuite\Classes\SubscriptionsList
     */
    public $subscriptionsList;
    /**
     * @var \NetSuite\Classes\ContactAccessRolesList
     */
    public $contactRolesList;
    /**
     * @var \NetSuite\Classes\CustomerCurrencyList
     */
    public $currencyList;
    /**
     * @var \NetSuite\Classes\CustomerCreditCardsList
     */
    public $creditCardsList;
    /**
     * @var \NetSuite\Classes\CustomerPartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\CustomerGroupPricingList
     */
    public $groupPricingList;
    /**
     * @var \NetSuite\Classes\CustomerItemPricingList
     */
    public $itemPricingList;
    /**
     * @var \NetSuite\Classes\CustomerTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultAllocationStrategy;
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
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "isPerson" => "boolean",
        "phoneticName" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "companyName" => "string",
        "entityStatus" => "RecordRef",
        "parent" => "RecordRef",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "url" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "category" => "RecordRef",
        "title" => "string",
        "printOnCheckAs" => "string",
        "altPhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "altEmail" => "string",
        "language" => "Language",
        "comments" => "string",
        "numberFormat" => "CustomerNumberFormat",
        "negativeNumberFormat" => "CustomerNegativeNumberFormat",
        "dateCreated" => "dateTime",
        "image" => "RecordRef",
        "emailPreference" => "EmailPreference",
        "subsidiary" => "RecordRef",
        "representingSubsidiary" => "RecordRef",
        "salesRep" => "RecordRef",
        "territory" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "salesGroup" => "RecordRef",
        "vatRegNumber" => "string",
        "accountNumber" => "string",
        "taxExempt" => "boolean",
        "terms" => "RecordRef",
        "creditLimit" => "float",
        "creditHoldOverride" => "CustomerCreditHoldOverride",
        "monthlyClosing" => "CustomerMonthlyClosing",
        "overrideCurrencyFormat" => "boolean",
        "displaySymbol" => "string",
        "symbolPlacement" => "CurrencySymbolPlacement",
        "balance" => "float",
        "overdueBalance" => "float",
        "daysOverdue" => "integer",
        "unbilledOrders" => "float",
        "consolUnbilledOrders" => "float",
        "consolOverdueBalance" => "float",
        "consolDepositBalance" => "float",
        "consolBalance" => "float",
        "consolAging" => "float",
        "consolAging1" => "float",
        "consolAging2" => "float",
        "consolAging3" => "float",
        "consolAging4" => "float",
        "consolDaysOverdue" => "integer",
        "priceLevel" => "RecordRef",
        "currency" => "RecordRef",
        "prefCCProcessor" => "RecordRef",
        "depositBalance" => "float",
        "shipComplete" => "boolean",
        "taxable" => "boolean",
        "taxItem" => "RecordRef",
        "resaleNumber" => "string",
        "aging" => "float",
        "aging1" => "float",
        "aging2" => "float",
        "aging3" => "float",
        "aging4" => "float",
        "startDate" => "dateTime",
        "alcoholRecipientType" => "AlcoholRecipientType",
        "endDate" => "dateTime",
        "reminderDays" => "integer",
        "shippingItem" => "RecordRef",
        "thirdPartyAcct" => "string",
        "thirdPartyZipcode" => "string",
        "thirdPartyCountry" => "Country",
        "thirdPartyCarrier" => "CustomerThirdPartyCarrier",
        "giveAccess" => "boolean",
        "estimatedBudget" => "float",
        "accessRole" => "RecordRef",
        "sendEmail" => "boolean",
        "assignedWebSite" => "RecordRef",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "campaignCategory" => "RecordRef",
        "sourceWebSite" => "RecordRef",
        "leadSource" => "RecordRef",
        "receivablesAccount" => "RecordRef",
        "drAccount" => "RecordRef",
        "fxAccount" => "RecordRef",
        "defaultOrderPriority" => "float",
        "webLead" => "string",
        "referrer" => "string",
        "keywords" => "string",
        "clickStream" => "string",
        "lastPageVisited" => "string",
        "visits" => "integer",
        "firstVisit" => "dateTime",
        "lastVisit" => "dateTime",
        "billPay" => "boolean",
        "openingBalance" => "float",
        "lastModifiedDate" => "dateTime",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "stage" => "CustomerStage",
        "emailTransactions" => "boolean",
        "printTransactions" => "boolean",
        "faxTransactions" => "boolean",
        "defaultTaxReg" => "RecordRef",
        "syncPartnerTeams" => "boolean",
        "isBudgetApproved" => "boolean",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "salesReadiness" => "RecordRef",
        "salesTeamList" => "CustomerSalesTeamList",
        "buyingReason" => "RecordRef",
        "downloadList" => "CustomerDownloadList",
        "buyingTimeFrame" => "RecordRef",
        "addressbookList" => "CustomerAddressbookList",
        "subscriptionsList" => "SubscriptionsList",
        "contactRolesList" => "ContactAccessRolesList",
        "currencyList" => "CustomerCurrencyList",
        "creditCardsList" => "CustomerCreditCardsList",
        "partnersList" => "CustomerPartnersList",
        "groupPricingList" => "CustomerGroupPricingList",
        "itemPricingList" => "CustomerItemPricingList",
        "taxRegistrationList" => "CustomerTaxRegistrationList",
        "defaultAllocationStrategy" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
