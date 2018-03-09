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

class TransactionSearchRowBasic extends SearchRowBasic {
    public $abbrev;
    public $account;
    public $accountType;
    public $actualShipDate;
    public $altSalesAmount;
    public $altSalesNetAmount;
    public $amount;
    public $amountPaid;
    public $amountRemaining;
    public $amountUnbilled;
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
    public $billAddress1;
    public $billAddress2;
    public $billAddress3;
    public $billAddressee;
    public $billAttention;
    public $billCity;
    public $billCountry;
    public $billCountryCode;
    public $billedDate;
    public $billingAccount;
    public $billingAmount;
    public $billingSchedule;
    public $billingTransaction;
    public $billPhone;
    public $billState;
    public $billVarianceStatus;
    public $billZip;
    public $binNumber;
    public $binNumberQuantity;
    public $bomQuantity;
    public $buildEntireAssembly;
    public $buildVariance;
    public $built;
    public $canHaveStackablePromotions;
    public $catchUpPeriod;
    public $ccCustomerCode;
    public $ccExpDate;
    public $ccHolderName;
    public $ccNumber;
    public $ccStreet;
    public $ccZipCode;
    public $class;
    public $cleared;
    public $closed;
    public $closeDate;
    public $cogsAmount;
    public $commissionEffectiveDate;
    public $commit;
    public $componentYield;
    public $confirmationNumber;
    public $contribution;
    public $contributionPrimary;
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
    public $discountAmount;
    public $docUnit;
    public $drAccount;
    public $dueDate;
    public $effectiveRate;
    public $email;
    public $endDate;
    public $entity;
    public $entityStatus;
    public $estGrossProfit;
    public $estGrossProfitPct;
    public $estGrossProfitPercent;
    public $exchangeRate;
    public $excludeCommission;
    public $excludeFromRateRequest;
    public $expectedCloseDate;
    public $expectedReceiptDate;
    public $expenseCategory;
    public $expenseDate;
    public $externalId;
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
    public $giftCert;
    public $grossAmount;
    public $includeInForecast;
    public $incoterm;
    public $intercoStatus;
    public $intercoTransaction;
    public $internalId;
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
    public $isReversal;
    public $isRevRecTransaction;
    public $isScrap;
    public $isShipAddress;
    public $isTransferPriceCosting;
    public $isWip;
    public $item;
    public $itemFulfillmentChoice;
    public $itemRevision;
    public $landedCostPerLine;
    public $lastModifiedDate;
    public $leadSource;
    public $line;
    public $lineSequenceNumber;
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
    public $netAmount;
    public $netAmountNoTax;
    public $nextApprover;
    public $nextBillDate;
    public $noAutoAssignLocation;
    public $nonReimbursable;
    public $oneTimeTotal;
    public $opportunity;
    public $options;
    public $orderPriority;
    public $originator;
    public $otherRefNum;
    public $overheadParentItem;
    public $packageCount;
    public $paidAmount;
    public $paidTransaction;
    public $partner;
    public $partnerContribution;
    public $partnerRole;
    public $partnerTeamMember;
    public $payingAmount;
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
    public $payrollBatch;
    public $pnRefNum;
    public $poRate;
    public $posting;
    public $postingPeriod;
    public $priceLevel;
    public $print;
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
    public $quantityUom;
    public $rate;
    public $realizedGainPostingTransaction;
    public $recognizedRevenue;
    public $recordType;
    public $recurAnnuallyTotal;
    public $recurMonthlyTotal;
    public $recurQuarterlyTotal;
    public $recurringBill;
    public $recurWeeklyTotal;
    public $refNumber;
    public $revCommitStatus;
    public $revCommittingTransaction;
    public $revenueStatus;
    public $reversalDate;
    public $reversalNumber;
    public $revRecEndDate;
    public $revRecOnRevCommitment;
    public $revRecStartDate;
    public $rgAccount;
    public $rgAmount;
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
    public $shipAddress1;
    public $shipAddress2;
    public $shipAddress3;
    public $shipAddressee;
    public $shipAttention;
    public $shipCarrier;
    public $shipCity;
    public $shipComplete;
    public $shipCountry;
    public $shipCountryCode;
    public $shipDate;
    public $shipGroup;
    public $shipMethod;
    public $shipPhone;
    public $shippingAmount;
    public $shipRecvStatusLine;
    public $shipState;
    public $shipTo;
    public $shipZip;
    public $signedAmount;
    public $source;
    public $startDate;
    public $status;
    public $subscription;
    public $subscriptionLine;
    public $subsidiary;
    public $taxAmount;
    public $taxCode;
    public $taxLine;
    public $taxPeriod;
    public $taxTotal;
    public $termInMonths;
    public $terms;
    public $termsOfSale;
    public $title;
    public $toBeEmailed;
    public $toBePrinted;
    public $toSubsidiary;
    public $total;
    public $totalCostEstimate;
    public $trackingNumbers;
    public $tranDate;
    public $tranEstGrossProfit;
    public $tranFxEstGrossProfit;
    public $tranId;
    public $tranIsVsoeBundle;
    public $transactionDiscount;
    public $transactionLineType;
    public $transactionNumber;
    public $transferLocation;
    public $transferOrderItemLine;
    public $transferOrderQuantityCommitted;
    public $transferOrderQuantityPacked;
    public $transferOrderQuantityPicked;
    public $transferOrderQuantityReceived;
    public $transferOrderQuantityShipped;
    public $type;
    public $unit;
    public $unitCostOverride;
    public $vendType;
    public $visibleToCustomer;
    public $vsoeAllocation;
    public $vsoeAmount;
    public $vsoeDeferral;
    public $vsoeDelivered;
    public $vsoePermitDiscount;
    public $vsoePrice;
    public $webSite;
    public $customFieldList;
    static $paramtypesmap = array(
        "abbrev" => "SearchColumnStringField[]",
        "account" => "SearchColumnSelectField[]",
        "accountType" => "SearchColumnEnumSelectField[]",
        "actualShipDate" => "SearchColumnDateField[]",
        "altSalesAmount" => "SearchColumnDoubleField[]",
        "altSalesNetAmount" => "SearchColumnDoubleField[]",
        "amount" => "SearchColumnDoubleField[]",
        "amountPaid" => "SearchColumnDoubleField[]",
        "amountRemaining" => "SearchColumnDoubleField[]",
        "amountUnbilled" => "SearchColumnDoubleField[]",
        "appliedToForeignAmount" => "SearchColumnDoubleField[]",
        "appliedToIsFxVariance" => "SearchColumnBooleanField[]",
        "appliedToLinkAmount" => "SearchColumnDoubleField[]",
        "appliedToLinkType" => "SearchColumnStringField[]",
        "appliedToTransaction" => "SearchColumnSelectField[]",
        "applyingForeignAmount" => "SearchColumnDoubleField[]",
        "applyingIsFxVariance" => "SearchColumnBooleanField[]",
        "applyingLinkAmount" => "SearchColumnDoubleField[]",
        "applyingLinkType" => "SearchColumnStringField[]",
        "applyingTransaction" => "SearchColumnSelectField[]",
        "approvalStatus" => "SearchColumnEnumSelectField[]",
        "authCode" => "SearchColumnStringField[]",
        "autoCalculateLag" => "SearchColumnBooleanField[]",
        "avsStreetMatch" => "SearchColumnEnumSelectField[]",
        "avsZipMatch" => "SearchColumnEnumSelectField[]",
        "billable" => "SearchColumnBooleanField[]",
        "billAddress" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billedDate" => "SearchColumnDateField[]",
        "billingAccount" => "SearchColumnSelectField[]",
        "billingAmount" => "SearchColumnDoubleField[]",
        "billingSchedule" => "SearchColumnSelectField[]",
        "billingTransaction" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billVarianceStatus" => "SearchColumnEnumSelectField[]",
        "billZip" => "SearchColumnStringField[]",
        "binNumber" => "SearchColumnStringField[]",
        "binNumberQuantity" => "SearchColumnDoubleField[]",
        "bomQuantity" => "SearchColumnDoubleField[]",
        "buildEntireAssembly" => "SearchColumnBooleanField[]",
        "buildVariance" => "SearchColumnDoubleField[]",
        "built" => "SearchColumnDoubleField[]",
        "canHaveStackablePromotions" => "SearchColumnBooleanField[]",
        "catchUpPeriod" => "SearchColumnStringField[]",
        "ccCustomerCode" => "SearchColumnStringField[]",
        "ccExpDate" => "SearchColumnDateField[]",
        "ccHolderName" => "SearchColumnStringField[]",
        "ccNumber" => "SearchColumnStringField[]",
        "ccStreet" => "SearchColumnStringField[]",
        "ccZipCode" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "cleared" => "SearchColumnBooleanField[]",
        "closed" => "SearchColumnBooleanField[]",
        "closeDate" => "SearchColumnDateField[]",
        "cogsAmount" => "SearchColumnDoubleField[]",
        "commissionEffectiveDate" => "SearchColumnDateField[]",
        "commit" => "SearchColumnEnumSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "confirmationNumber" => "SearchColumnStringField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "costComponentAmount" => "SearchColumnDoubleField[]",
        "costComponentCategory" => "SearchColumnStringField[]",
        "costComponentItem" => "SearchColumnStringField[]",
        "costComponentQuantity" => "SearchColumnDoubleField[]",
        "costComponentStandardCost" => "SearchColumnDoubleField[]",
        "costEstimate" => "SearchColumnDoubleField[]",
        "costEstimateRate" => "SearchColumnDoubleField[]",
        "costEstimateType" => "SearchColumnEnumSelectField[]",
        "createdBy" => "SearchColumnSelectField[]",
        "createdFrom" => "SearchColumnSelectField[]",
        "creditAmount" => "SearchColumnDoubleField[]",
        "cscMatch" => "SearchColumnEnumSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "customForm" => "SearchColumnSelectField[]",
        "customGL" => "SearchColumnBooleanField[]",
        "custType" => "SearchColumnSelectField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOpen" => "SearchColumnLongField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "debitAmount" => "SearchColumnDoubleField[]",
        "deferredRevenue" => "SearchColumnDoubleField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "department" => "SearchColumnSelectField[]",
        "depositDate" => "SearchColumnDateField[]",
        "depositTransaction" => "SearchColumnSelectField[]",
        "discountAmount" => "SearchColumnDoubleField[]",
        "docUnit" => "SearchColumnStringField[]",
        "drAccount" => "SearchColumnStringField[]",
        "dueDate" => "SearchColumnDateField[]",
        "effectiveRate" => "SearchColumnDoubleField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "entity" => "SearchColumnSelectField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estGrossProfit" => "SearchColumnDoubleField[]",
        "estGrossProfitPct" => "SearchColumnDoubleField[]",
        "estGrossProfitPercent" => "SearchColumnDoubleField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "excludeCommission" => "SearchColumnBooleanField[]",
        "excludeFromRateRequest" => "SearchColumnBooleanField[]",
        "expectedCloseDate" => "SearchColumnDateField[]",
        "expectedReceiptDate" => "SearchColumnDateField[]",
        "expenseCategory" => "SearchColumnSelectField[]",
        "expenseDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "firmed" => "SearchColumnBooleanField[]",
        "forecastType" => "SearchColumnEnumSelectField[]",
        "fulfillingTransaction" => "SearchColumnSelectField[]",
        "fxAccount" => "SearchColumnStringField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "fxCostEstimate" => "SearchColumnDoubleField[]",
        "fxCostEstimateRate" => "SearchColumnDoubleField[]",
        "fxEstGrossProfit" => "SearchColumnDoubleField[]",
        "fxTranCostEstimate" => "SearchColumnDoubleField[]",
        "fxVsoeAllocation" => "SearchColumnDoubleField[]",
        "fxVsoeAmount" => "SearchColumnDoubleField[]",
        "fxVsoePrice" => "SearchColumnDoubleField[]",
        "gcoAvailabelToCharge" => "SearchColumnBooleanField[]",
        "gcoAvailableToRefund" => "SearchColumnBooleanField[]",
        "gcoAvsStreetMatch" => "SearchColumnEnumSelectField[]",
        "gcoAvsZipMatch" => "SearchColumnEnumSelectField[]",
        "gcoBuyerAccountAge" => "SearchColumnLongField[]",
        "gcoBuyerIp" => "SearchColumnStringField[]",
        "gcoChargeAmount" => "SearchColumnDoubleField[]",
        "gcoChargebackAmount" => "SearchColumnDoubleField[]",
        "gcoConfirmedChargedTotal" => "SearchColumnDoubleField[]",
        "gcoConfirmedRefundedTotal" => "SearchColumnDoubleField[]",
        "gcoCreditcardNumber" => "SearchColumnStringField[]",
        "gcoCscMatch" => "SearchColumnEnumSelectField[]",
        "gcoFinancialState" => "SearchColumnStringField[]",
        "gcoFulfillmentState" => "SearchColumnStringField[]",
        "gcoOrderId" => "SearchColumnStringField[]",
        "gcoOrderTotal" => "SearchColumnDoubleField[]",
        "gcoPromotionAmount" => "SearchColumnDoubleField[]",
        "gcoPromotionName" => "SearchColumnStringField[]",
        "gcoRefundAmount" => "SearchColumnDoubleField[]",
        "gcoShippingTotal" => "SearchColumnDoubleField[]",
        "gcoStateChangedDetail" => "SearchColumnStringField[]",
        "giftCert" => "SearchColumnStringField[]",
        "grossAmount" => "SearchColumnDoubleField[]",
        "includeInForecast" => "SearchColumnBooleanField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "intercoStatus" => "SearchColumnEnumSelectField[]",
        "intercoTransaction" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inVsoeBundle" => "SearchColumnBooleanField[]",
        "isAllocation" => "SearchColumnBooleanField[]",
        "isBackflush" => "SearchColumnBooleanField[]",
        "isGcoChargeback" => "SearchColumnBooleanField[]",
        "isGcoChargeConfirmed" => "SearchColumnBooleanField[]",
        "isGcoPaymentGuaranteed" => "SearchColumnBooleanField[]",
        "isGcoRefundConfirmed" => "SearchColumnBooleanField[]",
        "isInsideDelivery" => "SearchColumnBooleanField[]",
        "isInsidePickup" => "SearchColumnBooleanField[]",
        "isIntercompanyAdjustment" => "SearchColumnBooleanField[]",
        "isMultiShipTo" => "SearchColumnBooleanField[]",
        "isReversal" => "SearchColumnBooleanField[]",
        "isRevRecTransaction" => "SearchColumnBooleanField[]",
        "isScrap" => "SearchColumnBooleanField[]",
        "isShipAddress" => "SearchColumnBooleanField[]",
        "isTransferPriceCosting" => "SearchColumnBooleanField[]",
        "isWip" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "itemFulfillmentChoice" => "SearchColumnEnumSelectField[]",
        "itemRevision" => "SearchColumnSelectField[]",
        "landedCostPerLine" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "line" => "SearchColumnLongField[]",
        "lineSequenceNumber" => "SearchColumnLongField[]",
        "lineUniqueKey" => "SearchColumnLongField[]",
        "location" => "SearchColumnSelectField[]",
        "locationAutoAssigned" => "SearchColumnBooleanField[]",
        "mainLine" => "SearchColumnBooleanField[]",
        "mainName" => "SearchColumnStringField[]",
        "manufacturingRouting" => "SearchColumnSelectField[]",
        "matchBillToReceipt" => "SearchColumnBooleanField[]",
        "memo" => "SearchColumnStringField[]",
        "memoMain" => "SearchColumnStringField[]",
        "memorized" => "SearchColumnBooleanField[]",
        "merchantAccount" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "multiSubsidiary" => "SearchColumnBooleanField[]",
        "netAmount" => "SearchColumnDoubleField[]",
        "netAmountNoTax" => "SearchColumnDoubleField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "nextBillDate" => "SearchColumnDateField[]",
        "noAutoAssignLocation" => "SearchColumnBooleanField[]",
        "nonReimbursable" => "SearchColumnBooleanField[]",
        "oneTimeTotal" => "SearchColumnDoubleField[]",
        "opportunity" => "SearchColumnSelectField[]",
        "options" => "SearchColumnStringField[]",
        "orderPriority" => "SearchColumnDoubleField[]",
        "originator" => "SearchColumnEnumSelectField[]",
        "otherRefNum" => "SearchColumnTextNumberField[]",
        "overheadParentItem" => "SearchColumnSelectField[]",
        "packageCount" => "SearchColumnLongField[]",
        "paidAmount" => "SearchColumnDoubleField[]",
        "paidTransaction" => "SearchColumnSelectField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnSelectField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "payingAmount" => "SearchColumnDoubleField[]",
        "payingTransaction" => "SearchColumnSelectField[]",
        "paymentApproved" => "SearchColumnBooleanField[]",
        "paymentEventDate" => "SearchColumnDateField[]",
        "paymentEventHoldReason" => "SearchColumnEnumSelectField[]",
        "paymentEventPurchaseCardUsed" => "SearchColumnBooleanField[]",
        "paymentEventPurchaseDataSent" => "SearchColumnBooleanField[]",
        "paymentEventResult" => "SearchColumnEnumSelectField[]",
        "paymentEventType" => "SearchColumnEnumSelectField[]",
        "paymentHold" => "SearchColumnBooleanField[]",
        "paymentMethod" => "SearchColumnSelectField[]",
        "payPalPending" => "SearchColumnBooleanField[]",
        "payPalStatus" => "SearchColumnStringField[]",
        "payPalTranId" => "SearchColumnStringField[]",
        "payrollBatch" => "SearchColumnStringField[]",
        "pnRefNum" => "SearchColumnStringField[]",
        "poRate" => "SearchColumnDoubleField[]",
        "posting" => "SearchColumnBooleanField[]",
        "postingPeriod" => "SearchColumnSelectField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "print" => "SearchColumnStringField[]",
        "probability" => "SearchColumnDoubleField[]",
        "projectedAmount" => "SearchColumnDoubleField[]",
        "projectTask" => "SearchColumnSelectField[]",
        "promoCode" => "SearchColumnSelectField[]",
        "purchaseOrder" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityBilled" => "SearchColumnDoubleField[]",
        "quantityCommitted" => "SearchColumnDoubleField[]",
        "quantityPacked" => "SearchColumnDoubleField[]",
        "quantityPicked" => "SearchColumnDoubleField[]",
        "quantityRevCommitted" => "SearchColumnDoubleField[]",
        "quantityShipRecv" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "rate" => "SearchColumnDoubleField[]",
        "realizedGainPostingTransaction" => "SearchColumnStringField[]",
        "recognizedRevenue" => "SearchColumnDoubleField[]",
        "recordType" => "SearchColumnStringField[]",
        "recurAnnuallyTotal" => "SearchColumnDoubleField[]",
        "recurMonthlyTotal" => "SearchColumnDoubleField[]",
        "recurQuarterlyTotal" => "SearchColumnDoubleField[]",
        "recurringBill" => "SearchColumnBooleanField[]",
        "recurWeeklyTotal" => "SearchColumnDoubleField[]",
        "refNumber" => "SearchColumnLongField[]",
        "revCommitStatus" => "SearchColumnEnumSelectField[]",
        "revCommittingTransaction" => "SearchColumnSelectField[]",
        "revenueStatus" => "SearchColumnEnumSelectField[]",
        "reversalDate" => "SearchColumnDateField[]",
        "reversalNumber" => "SearchColumnStringField[]",
        "revRecEndDate" => "SearchColumnDateField[]",
        "revRecOnRevCommitment" => "SearchColumnBooleanField[]",
        "revRecStartDate" => "SearchColumnDateField[]",
        "rgAccount" => "SearchColumnSelectField[]",
        "rgAmount" => "SearchColumnDoubleField[]",
        "salesEffectiveDate" => "SearchColumnDateField[]",
        "salesOrder" => "SearchColumnSelectField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "schedulingMethod" => "SearchColumnEnumSelectField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "serialNumberCost" => "SearchColumnDoubleField[]",
        "serialNumberCostAdjustment" => "SearchColumnDoubleField[]",
        "serialNumberQuantity" => "SearchColumnDoubleField[]",
        "serialNumbers" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCarrier" => "SearchColumnEnumSelectField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipComplete" => "SearchColumnBooleanField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipDate" => "SearchColumnDateField[]",
        "shipGroup" => "SearchColumnLongField[]",
        "shipMethod" => "SearchColumnSelectField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shippingAmount" => "SearchColumnDoubleField[]",
        "shipRecvStatusLine" => "SearchColumnBooleanField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipTo" => "SearchColumnSelectField[]",
        "shipZip" => "SearchColumnStringField[]",
        "signedAmount" => "SearchColumnDoubleField[]",
        "source" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionLine" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxAmount" => "SearchColumnDoubleField[]",
        "taxCode" => "SearchColumnSelectField[]",
        "taxLine" => "SearchColumnBooleanField[]",
        "taxPeriod" => "SearchColumnSelectField[]",
        "taxTotal" => "SearchColumnDoubleField[]",
        "termInMonths" => "SearchColumnLongField[]",
        "terms" => "SearchColumnSelectField[]",
        "termsOfSale" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "toBeEmailed" => "SearchColumnBooleanField[]",
        "toBePrinted" => "SearchColumnBooleanField[]",
        "toSubsidiary" => "SearchColumnSelectField[]",
        "total" => "SearchColumnDoubleField[]",
        "totalCostEstimate" => "SearchColumnDoubleField[]",
        "trackingNumbers" => "SearchColumnStringField[]",
        "tranDate" => "SearchColumnDateField[]",
        "tranEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranId" => "SearchColumnStringField[]",
        "tranIsVsoeBundle" => "SearchColumnBooleanField[]",
        "transactionDiscount" => "SearchColumnBooleanField[]",
        "transactionLineType" => "SearchColumnEnumSelectField[]",
        "transactionNumber" => "SearchColumnStringField[]",
        "transferLocation" => "SearchColumnSelectField[]",
        "transferOrderItemLine" => "SearchColumnStringField[]",
        "transferOrderQuantityCommitted" => "SearchColumnDoubleField[]",
        "transferOrderQuantityPacked" => "SearchColumnDoubleField[]",
        "transferOrderQuantityPicked" => "SearchColumnDoubleField[]",
        "transferOrderQuantityReceived" => "SearchColumnDoubleField[]",
        "transferOrderQuantityShipped" => "SearchColumnDoubleField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "unit" => "SearchColumnStringField[]",
        "unitCostOverride" => "SearchColumnDoubleField[]",
        "vendType" => "SearchColumnSelectField[]",
        "visibleToCustomer" => "SearchColumnBooleanField[]",
        "vsoeAllocation" => "SearchColumnDoubleField[]",
        "vsoeAmount" => "SearchColumnDoubleField[]",
        "vsoeDeferral" => "SearchColumnEnumSelectField[]",
        "vsoeDelivered" => "SearchColumnBooleanField[]",
        "vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
        "vsoePrice" => "SearchColumnDoubleField[]",
        "webSite" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
