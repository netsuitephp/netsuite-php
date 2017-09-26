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

class TransactionSearchBasic extends SearchRecordBasic {
    public $account;
    public $accountType;
    public $actualShipDate;
    public $altSalesAmount;
    public $altSalesNetAmount;
    public $amount;
    public $amountPaid;
    public $amountRemaining;
    public $amountUnbilled;
    public $anyLineItem;
    public $appliedToForeignAmount;
    public $appliedToIsFxVariance;
    public $appliedToLinkAmount;
    public $appliedToLinkType;
    public $appliedToTransaction;
    public $applyingForeignAmount;
    public $applyingIsFxVariance;
    public $applyingLinkAmount;
    public $applyingLinkType;
    public $applyingTransaction;
    public $approvalStatus;
    public $authCode;
    public $autoCalculateLag;
    public $avsStreetMatch;
    public $avsZipMatch;
    public $billable;
    public $billAddress;
    public $billAddressee;
    public $billAttention;
    public $billCity;
    public $billCountry;
    public $billCounty;
    public $billedDate;
    public $billingAccount;
    public $billingSchedule;
    public $billingStatus;
    public $billingTransaction;
    public $billPhone;
    public $billState;
    public $billVarianceStatus;
    public $billZip;
    public $binNumber;
    public $binNumberQuantity;
    public $bomQuantity;
    public $bookSpecificTransaction;
    public $buildEntireAssembly;
    public $buildVariance;
    public $built;
    public $canHaveStackablePromotions;
    public $catchUpPeriod;
    public $ccCustomerCode;
    public $ccExpireDate;
    public $ccName;
    public $ccNumber;
    public $chargeType;
    public $class;
    public $cleared;
    public $closed;
    public $closeDate;
    public $cogs;
    public $commissionEffectiveDate;
    public $commit;
    public $componentYield;
    public $confirmationNumber;
    public $contribution;
    public $costComponentAmount;
    public $costComponentCategory;
    public $costComponentItem;
    public $costComponentQuantity;
    public $costComponentStandardCost;
    public $costEstimate;
    public $costEstimateRate;
    public $costEstimateType;
    public $createdBy;
    public $createdFrom;
    public $creditAmount;
    public $cscMatch;
    public $currency;
    public $customerSubOf;
    public $customForm;
    public $customGL;
    public $custType;
    public $dateCreated;
    public $daysOpen;
    public $daysOverdue;
    public $debitAmount;
    public $deferredRevenue;
    public $deferRevRec;
    public $department;
    public $depositDate;
    public $depositTransaction;
    public $drAccount;
    public $dueDate;
    public $email;
    public $employee;
    public $endDate;
    public $entity;
    public $entityStatus;
    public $estGrossProfit;
    public $estGrossProfitPct;
    public $exchangeRate;
    public $excludeCommission;
    public $excludeFromRateRequest;
    public $expectedCloseDate;
    public $expectedReceiptDate;
    public $expenseCategory;
    public $expenseDate;
    public $externalId;
    public $externalIdString;
    public $finChrg;
    public $firmed;
    public $forecastType;
    public $fulfillingTransaction;
    public $fxAccount;
    public $fxAmount;
    public $fxCostEstimate;
    public $fxCostEstimateRate;
    public $fxEstGrossProfit;
    public $fxTranCostEstimate;
    public $fxVsoeAllocation;
    public $fxVsoeAmount;
    public $fxVsoePrice;
    public $gcoAvailabelToCharge;
    public $gcoAvailableToRefund;
    public $gcoAvsStreetMatch;
    public $gcoAvsZipMatch;
    public $gcoBuyerAccountAge;
    public $gcoBuyerIp;
    public $gcoChargeAmount;
    public $gcoChargebackAmount;
    public $gcoConfirmedChargedTotal;
    public $gcoConfirmedRefundedTotal;
    public $gcoCreditcardNumber;
    public $gcoCscMatch;
    public $gcoFinancialState;
    public $gcoFulfillmentState;
    public $gcoOrderId;
    public $gcoOrderTotal;
    public $gcoPromotionAmount;
    public $gcoPromotionName;
    public $gcoRefundAmount;
    public $gcoShippingTotal;
    public $gcoStateChangedDetail;
    public $giftCertificate;
    public $grossAmount;
    public $includeInForecast;
    public $incoterm;
    public $intercoStatus;
    public $intercoTransaction;
    public $internalId;
    public $internalIdNumber;
    public $inVsoeBundle;
    public $isAllocation;
    public $isBackflush;
    public $isGcoChargeback;
    public $isGcoChargeConfirmed;
    public $isGcoPaymentGuaranteed;
    public $isGcoRefundConfirmed;
    public $isInsideDelivery;
    public $isInsidePickup;
    public $isIntercompanyAdjustment;
    public $isMultiShipTo;
    public $isPayPalMeth;
    public $isReversal;
    public $isRevRecTransaction;
    public $isScrap;
    public $isShipAddress;
    public $isTransferPriceCosting;
    public $isVsoeAlloc;
    public $isWip;
    public $item;
    public $itemFulfillmentChoice;
    public $itemRevision;
    public $itemSubOf;
    public $landedCostPerLine;
    public $lastModifiedDate;
    public $leadSource;
    public $lineUniqueKey;
    public $location;
    public $locationAutoAssigned;
    public $mainLine;
    public $mainName;
    public $manufacturingRouting;
    public $matchBillToReceipt;
    public $memo;
    public $memoMain;
    public $memorized;
    public $merchantAccount;
    public $message;
    public $multiSubsidiary;
    public $nameText;
    public $netAmount;
    public $nextApprover;
    public $nextBillDate;
    public $noAutoAssignLocation;
    public $nonReimbursable;
    public $number;
    public $oneTimeTotal;
    public $opportunity;
    public $orderPriority;
    public $otherRefNum;
    public $otherRefNumNonDeposit;
    public $overheadParentItem;
    public $packageCount;
    public $paidTransaction;
    public $parent;
    public $partner;
    public $partnerContribution;
    public $partnerRole;
    public $partnerTeamMember;
    public $payingTransaction;
    public $paymentApproved;
    public $paymentEventDate;
    public $paymentEventHoldReason;
    public $paymentEventPurchaseCardUsed;
    public $paymentEventPurchaseDataSent;
    public $paymentEventResult;
    public $paymentEventType;
    public $paymentHold;
    public $paymentMethod;
    public $payPalPending;
    public $payPalStatus;
    public $payPalTranId;
    public $pnRefNum;
    public $poAsText;
    public $posting;
    public $postingPeriod;
    public $postingPeriodRelative;
    public $priceLevel;
    public $printedPickingTicket;
    public $probability;
    public $projectedAmount;
    public $projectTask;
    public $promoCode;
    public $purchaseOrder;
    public $quantity;
    public $quantityBilled;
    public $quantityCommitted;
    public $quantityPacked;
    public $quantityPicked;
    public $quantityRevCommitted;
    public $quantityShipRecv;
    public $recognizedRevenue;
    public $recordType;
    public $recurAnnuallyTotal;
    public $recurMonthlyTotal;
    public $recurQuarterlyTotal;
    public $recurringBill;
    public $recurWeeklyTotal;
    public $refNumber;
    public $revCommitStatus;
    public $revCommittingStatus;
    public $revCommittingTransaction;
    public $revenueStatus;
    public $reversalDate;
    public $reversalNumber;
    public $revRecEndDate;
    public $revRecOnRevCommitment;
    public $revRecStartDate;
    public $revRecTermInMonths;
    public $salesEffectiveDate;
    public $salesOrder;
    public $salesRep;
    public $salesTeamMember;
    public $salesTeamRole;
    public $schedulingMethod;
    public $serialNumber;
    public $serialNumberCost;
    public $serialNumberCostAdjustment;
    public $serialNumberQuantity;
    public $serialNumbers;
    public $shipAddress;
    public $shipAddressee;
    public $shipAttention;
    public $shipCarrier;
    public $shipCity;
    public $shipComplete;
    public $shipCountry;
    public $shipCounty;
    public $shipDate;
    public $shipGroup;
    public $shipMethod;
    public $shipPhone;
    public $shipping;
    public $shipRecvStatus;
    public $shipRecvStatusLine;
    public $shipState;
    public $shipTo;
    public $shipZip;
    public $source;
    public $startDate;
    public $statistical;
    public $status;
    public $subscription;
    public $subscriptionLine;
    public $subsidiary;
    public $taxItem;
    public $taxLine;
    public $taxPeriod;
    public $taxPeriodRelative;
    public $taxRate;
    public $terms;
    public $termsOfSale;
    public $title;
    public $toBeEmailed;
    public $toBePrinted;
    public $toSubsidiary;
    public $totalAmount;
    public $trackingNumbers;
    public $tranCostEstimate;
    public $tranDate;
    public $tranEstGrossProfit;
    public $tranEstGrossProfitPct;
    public $tranFxEstGrossProfit;
    public $tranId;
    public $tranIsVsoeBundle;
    public $transactionDiscount;
    public $transactionLineType;
    public $transactionNumber;
    public $transferLocation;
    public $transferOrderQuantityCommitted;
    public $transferOrderQuantityPacked;
    public $transferOrderQuantityPicked;
    public $transferOrderQuantityReceived;
    public $transferOrderQuantityShipped;
    public $type;
    public $unit;
    public $unitCostOverride;
    public $unitsType;
    public $vendType;
    public $visibleToCustomer;
    public $voided;
    public $vsoeAllocation;
    public $vsoeAmount;
    public $vsoeDeferral;
    public $vsoeDelivered;
    public $vsoePermitDiscount;
    public $vsoePrice;
    public $webSite;
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountType" => "SearchEnumMultiSelectField",
        "actualShipDate" => "SearchDateField",
        "altSalesAmount" => "SearchDoubleField",
        "altSalesNetAmount" => "SearchDoubleField",
        "amount" => "SearchDoubleField",
        "amountPaid" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "amountUnbilled" => "SearchDoubleField",
        "anyLineItem" => "SearchMultiSelectField",
        "appliedToForeignAmount" => "SearchDoubleField",
        "appliedToIsFxVariance" => "SearchBooleanField",
        "appliedToLinkAmount" => "SearchDoubleField",
        "appliedToLinkType" => "SearchEnumMultiSelectField",
        "appliedToTransaction" => "SearchMultiSelectField",
        "applyingForeignAmount" => "SearchDoubleField",
        "applyingIsFxVariance" => "SearchBooleanField",
        "applyingLinkAmount" => "SearchDoubleField",
        "applyingLinkType" => "SearchEnumMultiSelectField",
        "applyingTransaction" => "SearchMultiSelectField",
        "approvalStatus" => "SearchEnumMultiSelectField",
        "authCode" => "SearchStringField",
        "autoCalculateLag" => "SearchBooleanField",
        "avsStreetMatch" => "SearchEnumMultiSelectField",
        "avsZipMatch" => "SearchEnumMultiSelectField",
        "billable" => "SearchBooleanField",
        "billAddress" => "SearchStringField",
        "billAddressee" => "SearchStringField",
        "billAttention" => "SearchStringField",
        "billCity" => "SearchStringField",
        "billCountry" => "SearchEnumMultiSelectField",
        "billCounty" => "SearchStringField",
        "billedDate" => "SearchDateField",
        "billingAccount" => "SearchMultiSelectField",
        "billingSchedule" => "SearchMultiSelectField",
        "billingStatus" => "SearchBooleanField",
        "billingTransaction" => "SearchMultiSelectField",
        "billPhone" => "SearchStringField",
        "billState" => "SearchStringField",
        "billVarianceStatus" => "SearchEnumMultiSelectField",
        "billZip" => "SearchStringField",
        "binNumber" => "SearchStringField",
        "binNumberQuantity" => "SearchDoubleField",
        "bomQuantity" => "SearchDoubleField",
        "bookSpecificTransaction" => "SearchBooleanField",
        "buildEntireAssembly" => "SearchBooleanField",
        "buildVariance" => "SearchDoubleField",
        "built" => "SearchDoubleField",
        "canHaveStackablePromotions" => "SearchBooleanField",
        "catchUpPeriod" => "SearchMultiSelectField",
        "ccCustomerCode" => "SearchStringField",
        "ccExpireDate" => "SearchDateField",
        "ccName" => "SearchStringField",
        "ccNumber" => "SearchStringField",
        "chargeType" => "SearchEnumMultiSelectField",
        "class" => "SearchMultiSelectField",
        "cleared" => "SearchBooleanField",
        "closed" => "SearchBooleanField",
        "closeDate" => "SearchDateField",
        "cogs" => "SearchBooleanField",
        "commissionEffectiveDate" => "SearchDateField",
        "commit" => "SearchEnumMultiSelectField",
        "componentYield" => "SearchDoubleField",
        "confirmationNumber" => "SearchStringField",
        "contribution" => "SearchLongField",
        "costComponentAmount" => "SearchDoubleField",
        "costComponentCategory" => "SearchMultiSelectField",
        "costComponentItem" => "SearchMultiSelectField",
        "costComponentQuantity" => "SearchDoubleField",
        "costComponentStandardCost" => "SearchDoubleField",
        "costEstimate" => "SearchDoubleField",
        "costEstimateRate" => "SearchDoubleField",
        "costEstimateType" => "SearchEnumMultiSelectField",
        "createdBy" => "SearchMultiSelectField",
        "createdFrom" => "SearchMultiSelectField",
        "creditAmount" => "SearchDoubleField",
        "cscMatch" => "SearchEnumMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customerSubOf" => "SearchMultiSelectField",
        "customForm" => "SearchMultiSelectField",
        "customGL" => "SearchBooleanField",
        "custType" => "SearchMultiSelectField",
        "dateCreated" => "SearchDateField",
        "daysOpen" => "SearchLongField",
        "daysOverdue" => "SearchLongField",
        "debitAmount" => "SearchDoubleField",
        "deferredRevenue" => "SearchDoubleField",
        "deferRevRec" => "SearchBooleanField",
        "department" => "SearchMultiSelectField",
        "depositDate" => "SearchDateField",
        "depositTransaction" => "SearchMultiSelectField",
        "drAccount" => "SearchMultiSelectField",
        "dueDate" => "SearchDateField",
        "email" => "SearchStringField",
        "employee" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "entity" => "SearchMultiSelectField",
        "entityStatus" => "SearchMultiSelectField",
        "estGrossProfit" => "SearchDoubleField",
        "estGrossProfitPct" => "SearchDoubleField",
        "exchangeRate" => "SearchDoubleField",
        "excludeCommission" => "SearchBooleanField",
        "excludeFromRateRequest" => "SearchBooleanField",
        "expectedCloseDate" => "SearchDateField",
        "expectedReceiptDate" => "SearchDateField",
        "expenseCategory" => "SearchMultiSelectField",
        "expenseDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "finChrg" => "SearchBooleanField",
        "firmed" => "SearchBooleanField",
        "forecastType" => "SearchEnumMultiSelectField",
        "fulfillingTransaction" => "SearchMultiSelectField",
        "fxAccount" => "SearchMultiSelectField",
        "fxAmount" => "SearchDoubleField",
        "fxCostEstimate" => "SearchDoubleField",
        "fxCostEstimateRate" => "SearchDoubleField",
        "fxEstGrossProfit" => "SearchDoubleField",
        "fxTranCostEstimate" => "SearchDoubleField",
        "fxVsoeAllocation" => "SearchDoubleField",
        "fxVsoeAmount" => "SearchDoubleField",
        "fxVsoePrice" => "SearchDoubleField",
        "gcoAvailabelToCharge" => "SearchBooleanField",
        "gcoAvailableToRefund" => "SearchBooleanField",
        "gcoAvsStreetMatch" => "SearchEnumMultiSelectField",
        "gcoAvsZipMatch" => "SearchEnumMultiSelectField",
        "gcoBuyerAccountAge" => "SearchLongField",
        "gcoBuyerIp" => "SearchStringField",
        "gcoChargeAmount" => "SearchDoubleField",
        "gcoChargebackAmount" => "SearchDoubleField",
        "gcoConfirmedChargedTotal" => "SearchDoubleField",
        "gcoConfirmedRefundedTotal" => "SearchDoubleField",
        "gcoCreditcardNumber" => "SearchStringField",
        "gcoCscMatch" => "SearchEnumMultiSelectField",
        "gcoFinancialState" => "SearchStringField",
        "gcoFulfillmentState" => "SearchStringField",
        "gcoOrderId" => "SearchStringField",
        "gcoOrderTotal" => "SearchDoubleField",
        "gcoPromotionAmount" => "SearchDoubleField",
        "gcoPromotionName" => "SearchStringField",
        "gcoRefundAmount" => "SearchDoubleField",
        "gcoShippingTotal" => "SearchDoubleField",
        "gcoStateChangedDetail" => "SearchStringField",
        "giftCertificate" => "SearchStringField",
        "grossAmount" => "SearchDoubleField",
        "includeInForecast" => "SearchBooleanField",
        "incoterm" => "SearchMultiSelectField",
        "intercoStatus" => "SearchEnumMultiSelectField",
        "intercoTransaction" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inVsoeBundle" => "SearchBooleanField",
        "isAllocation" => "SearchBooleanField",
        "isBackflush" => "SearchBooleanField",
        "isGcoChargeback" => "SearchBooleanField",
        "isGcoChargeConfirmed" => "SearchBooleanField",
        "isGcoPaymentGuaranteed" => "SearchBooleanField",
        "isGcoRefundConfirmed" => "SearchBooleanField",
        "isInsideDelivery" => "SearchBooleanField",
        "isInsidePickup" => "SearchBooleanField",
        "isIntercompanyAdjustment" => "SearchBooleanField",
        "isMultiShipTo" => "SearchBooleanField",
        "isPayPalMeth" => "SearchBooleanField",
        "isReversal" => "SearchBooleanField",
        "isRevRecTransaction" => "SearchBooleanField",
        "isScrap" => "SearchBooleanField",
        "isShipAddress" => "SearchBooleanField",
        "isTransferPriceCosting" => "SearchBooleanField",
        "isVsoeAlloc" => "SearchBooleanField",
        "isWip" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "itemFulfillmentChoice" => "SearchEnumMultiSelectField",
        "itemRevision" => "SearchMultiSelectField",
        "itemSubOf" => "SearchMultiSelectField",
        "landedCostPerLine" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "leadSource" => "SearchMultiSelectField",
        "lineUniqueKey" => "SearchLongField",
        "location" => "SearchMultiSelectField",
        "locationAutoAssigned" => "SearchBooleanField",
        "mainLine" => "SearchBooleanField",
        "mainName" => "SearchMultiSelectField",
        "manufacturingRouting" => "SearchMultiSelectField",
        "matchBillToReceipt" => "SearchBooleanField",
        "memo" => "SearchStringField",
        "memoMain" => "SearchStringField",
        "memorized" => "SearchBooleanField",
        "merchantAccount" => "SearchStringField",
        "message" => "SearchStringField",
        "multiSubsidiary" => "SearchBooleanField",
        "nameText" => "SearchStringField",
        "netAmount" => "SearchDoubleField",
        "nextApprover" => "SearchMultiSelectField",
        "nextBillDate" => "SearchDateField",
        "noAutoAssignLocation" => "SearchBooleanField",
        "nonReimbursable" => "SearchBooleanField",
        "number" => "SearchLongField",
        "oneTimeTotal" => "SearchDoubleField",
        "opportunity" => "SearchMultiSelectField",
        "orderPriority" => "SearchDoubleField",
        "otherRefNum" => "SearchTextNumberField",
        "otherRefNumNonDeposit" => "SearchTextNumberField",
        "overheadParentItem" => "SearchMultiSelectField",
        "packageCount" => "SearchLongField",
        "paidTransaction" => "SearchMultiSelectField",
        "parent" => "SearchLongField",
        "partner" => "SearchMultiSelectField",
        "partnerContribution" => "SearchLongField",
        "partnerRole" => "SearchMultiSelectField",
        "partnerTeamMember" => "SearchMultiSelectField",
        "payingTransaction" => "SearchMultiSelectField",
        "paymentApproved" => "SearchBooleanField",
        "paymentEventDate" => "SearchDateField",
        "paymentEventHoldReason" => "SearchEnumMultiSelectField",
        "paymentEventPurchaseCardUsed" => "SearchBooleanField",
        "paymentEventPurchaseDataSent" => "SearchBooleanField",
        "paymentEventResult" => "SearchEnumMultiSelectField",
        "paymentEventType" => "SearchEnumMultiSelectField",
        "paymentHold" => "SearchBooleanField",
        "paymentMethod" => "SearchMultiSelectField",
        "payPalPending" => "SearchBooleanField",
        "payPalStatus" => "SearchStringField",
        "payPalTranId" => "SearchStringField",
        "pnRefNum" => "SearchStringField",
        "poAsText" => "SearchStringField",
        "posting" => "SearchBooleanField",
        "postingPeriod" => "RecordRef",
        "postingPeriodRelative" => "PostingPeriodDate",
        "priceLevel" => "SearchMultiSelectField",
        "printedPickingTicket" => "SearchBooleanField",
        "probability" => "SearchLongField",
        "projectedAmount" => "SearchDoubleField",
        "projectTask" => "SearchMultiSelectField",
        "promoCode" => "SearchMultiSelectField",
        "purchaseOrder" => "SearchMultiSelectField",
        "quantity" => "SearchDoubleField",
        "quantityBilled" => "SearchDoubleField",
        "quantityCommitted" => "SearchDoubleField",
        "quantityPacked" => "SearchDoubleField",
        "quantityPicked" => "SearchDoubleField",
        "quantityRevCommitted" => "SearchDoubleField",
        "quantityShipRecv" => "SearchDoubleField",
        "recognizedRevenue" => "SearchDoubleField",
        "recordType" => "SearchStringField",
        "recurAnnuallyTotal" => "SearchDoubleField",
        "recurMonthlyTotal" => "SearchDoubleField",
        "recurQuarterlyTotal" => "SearchDoubleField",
        "recurringBill" => "SearchBooleanField",
        "recurWeeklyTotal" => "SearchDoubleField",
        "refNumber" => "SearchLongField",
        "revCommitStatus" => "SearchEnumMultiSelectField",
        "revCommittingStatus" => "SearchBooleanField",
        "revCommittingTransaction" => "SearchMultiSelectField",
        "revenueStatus" => "SearchEnumMultiSelectField",
        "reversalDate" => "SearchDateField",
        "reversalNumber" => "SearchStringField",
        "revRecEndDate" => "SearchDateField",
        "revRecOnRevCommitment" => "SearchBooleanField",
        "revRecStartDate" => "SearchDateField",
        "revRecTermInMonths" => "SearchLongField",
        "salesEffectiveDate" => "SearchDateField",
        "salesOrder" => "SearchMultiSelectField",
        "salesRep" => "SearchMultiSelectField",
        "salesTeamMember" => "SearchMultiSelectField",
        "salesTeamRole" => "SearchMultiSelectField",
        "schedulingMethod" => "SearchEnumMultiSelectField",
        "serialNumber" => "SearchStringField",
        "serialNumberCost" => "SearchDoubleField",
        "serialNumberCostAdjustment" => "SearchDoubleField",
        "serialNumberQuantity" => "SearchDoubleField",
        "serialNumbers" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "shipAddressee" => "SearchStringField",
        "shipAttention" => "SearchStringField",
        "shipCarrier" => "SearchEnumMultiSelectField",
        "shipCity" => "SearchStringField",
        "shipComplete" => "SearchBooleanField",
        "shipCountry" => "SearchEnumMultiSelectField",
        "shipCounty" => "SearchStringField",
        "shipDate" => "SearchDateField",
        "shipGroup" => "SearchLongField",
        "shipMethod" => "SearchMultiSelectField",
        "shipPhone" => "SearchStringField",
        "shipping" => "SearchBooleanField",
        "shipRecvStatus" => "SearchBooleanField",
        "shipRecvStatusLine" => "SearchBooleanField",
        "shipState" => "SearchMultiSelectField",
        "shipTo" => "SearchMultiSelectField",
        "shipZip" => "SearchStringField",
        "source" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "statistical" => "SearchBooleanField",
        "status" => "SearchEnumMultiSelectField",
        "subscription" => "SearchMultiSelectField",
        "subscriptionLine" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxItem" => "SearchMultiSelectField",
        "taxLine" => "SearchBooleanField",
        "taxPeriod" => "RecordRef",
        "taxPeriodRelative" => "PostingPeriodDate",
        "taxRate" => "SearchDoubleField",
        "terms" => "SearchMultiSelectField",
        "termsOfSale" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "toBeEmailed" => "SearchBooleanField",
        "toBePrinted" => "SearchBooleanField",
        "toSubsidiary" => "SearchMultiSelectField",
        "totalAmount" => "SearchDoubleField",
        "trackingNumbers" => "SearchStringField",
        "tranCostEstimate" => "SearchDoubleField",
        "tranDate" => "SearchDateField",
        "tranEstGrossProfit" => "SearchDoubleField",
        "tranEstGrossProfitPct" => "SearchDoubleField",
        "tranFxEstGrossProfit" => "SearchDoubleField",
        "tranId" => "SearchStringField",
        "tranIsVsoeBundle" => "SearchBooleanField",
        "transactionDiscount" => "SearchBooleanField",
        "transactionLineType" => "SearchEnumMultiSelectField",
        "transactionNumber" => "SearchStringField",
        "transferLocation" => "SearchMultiSelectField",
        "transferOrderQuantityCommitted" => "SearchDoubleField",
        "transferOrderQuantityPacked" => "SearchDoubleField",
        "transferOrderQuantityPicked" => "SearchDoubleField",
        "transferOrderQuantityReceived" => "SearchDoubleField",
        "transferOrderQuantityShipped" => "SearchDoubleField",
        "type" => "SearchEnumMultiSelectField",
        "unit" => "SearchMultiSelectField",
        "unitCostOverride" => "SearchDoubleField",
        "unitsType" => "SearchMultiSelectField",
        "vendType" => "SearchMultiSelectField",
        "visibleToCustomer" => "SearchBooleanField",
        "voided" => "SearchBooleanField",
        "vsoeAllocation" => "SearchDoubleField",
        "vsoeAmount" => "SearchDoubleField",
        "vsoeDeferral" => "SearchEnumMultiSelectField",
        "vsoeDelivered" => "SearchBooleanField",
        "vsoePermitDiscount" => "SearchEnumMultiSelectField",
        "vsoePrice" => "SearchDoubleField",
        "webSite" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
