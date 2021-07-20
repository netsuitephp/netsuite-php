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

class TransactionSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $accountType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $acctCorpCardExp;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $actualProductionEndDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $actualProductionStartDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $actualShipDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $altSalesAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $altSalesNetAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amountPaid;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amountRemaining;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amountUnbilled;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $anyLineItem;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $appliedToForeignAmount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $appliedToIsFxVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $appliedToLinkAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $appliedToLinkType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $appliedToTransaction;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $applyingForeignAmount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $applyingIsFxVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $applyingLinkAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $applyingLinkType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $applyingTransaction;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $authCode;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $autoCalculateLag;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $avsStreetMatch;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $avsZipMatch;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $billable;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billAddress;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billAddressee;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billAttention;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billCity;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $billCountry;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billCounty;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $billedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingAccount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $billingStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingTransaction;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billPhone;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billState;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $billVarianceStatus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billZip;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $binNumber;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $binNumberQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $bookSpecificTransaction;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $buildEntireAssembly;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $buildVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $built;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $canHaveStackablePromotions;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $catchUpPeriod;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $ccCustomerCode;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $ccExpireDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $ccName;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $ccNumber;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $cleared;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $closed;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $closeDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $cogs;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $commissionEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $commit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $componentYield;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $confirmationNumber;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $contribution;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costComponentAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $costComponentCategory;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $costComponentItem;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costComponentQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costComponentStandardCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costEstimate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costEstimateRate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $costEstimateType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $createdBy;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $creditAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $cscMatch;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $customerSubOf;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $customGL;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $custType;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysOpen;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysOverdue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $debitAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $deferredRevenue;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $deferRevRec;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $depositDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $depositTransaction;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $drAccount;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dueDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $employee;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estGrossProfitPct;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $excludeCommission;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $excludeFromRateRequest;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expectedCloseDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expectedReceiptDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $expenseCategory;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expenseDate;
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
    public $finChrg;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $firmed;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $forecastType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $fulfillingTransaction;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $fxAccount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxCostEstimateRate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxTranCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxVsoeAllocation;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxVsoeAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxVsoePrice;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $gcoAvailabelToCharge;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $gcoAvailableToRefund;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $gcoAvsStreetMatch;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $gcoAvsZipMatch;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $gcoBuyerAccountAge;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoBuyerIp;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoChargeAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoChargebackAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoConfirmedChargedTotal;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoConfirmedRefundedTotal;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoCreditcardNumber;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $gcoCscMatch;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoFinancialState;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoFulfillmentState;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoOrderId;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoOrderTotal;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoPromotionAmount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoPromotionName;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoRefundAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $gcoShippingTotal;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $gcoStateChangedDetail;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertificate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $grossAmount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $includeInForecast;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $incoterm;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $intercoStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $intercoTransaction;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $inventoryLocation;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $inventorySubsidiary;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $inVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isAllocation;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isBackflush;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isGcoChargeback;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isGcoChargeConfirmed;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isGcoPaymentGuaranteed;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isGcoRefundConfirmed;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInsideDelivery;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInsidePickup;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isIntercompanyAdjustment;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInTransitPayment;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isMultiShipTo;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPayPalMeth;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isReversal;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isRevRecTransaction;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isScrap;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isShipAddress;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isTransferPriceCosting;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isVsoeAlloc;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isWip;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $itemFulfillmentChoice;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemRevision;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemSubOf;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $landedCostPerLine;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $lineUniqueKey;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $locationAutoAssigned;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $mainLine;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $mainName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $manufacturingRouting;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $matchBillToReceipt;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memoMain;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $memorized;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $merchantAccount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $multiSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $nameText;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $netAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $nextBillDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $noAutoAssignLocation;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $nonReimbursable;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $oneTimeTotal;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $opportunity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $orderAllocationStrategy;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $orderPriority;
    /**
     * @var \NetSuite\Classes\SearchTextNumberField
     */
    public $otherRefNum;
    /**
     * @var \NetSuite\Classes\SearchTextNumberField
     */
    public $otherRefNumNonDeposit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $overheadParentItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $overrideInstallments;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $packageCount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $paidTransaction;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $partnerContribution;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $partnerRole;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $partnerTeamMember;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $payingTransaction;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $paymentApproved;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $paymentEventDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $paymentEventHoldReason;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $paymentEventPurchaseCardUsed;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $paymentEventPurchaseDataSent;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $paymentEventResult;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $paymentEventType;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $paymentHold;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $paymentMethod;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $paymentOption;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $payPalPending;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $payPalStatus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $payPalTranId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $pnRefNum;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $poAsText;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $policyViolated;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $posting;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\PostingPeriodDate
     */
    public $postingPeriodRelative;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $printedPickingTicket;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $probability;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $projectedAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $projectTask;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $purchaseOrder;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityBilled;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityPacked;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityPicked;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityRevCommitted;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityShipRecv;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $recognizedRevenue;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $recordType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $recurAnnuallyTotal;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $recurMonthlyTotal;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $recurQuarterlyTotal;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $recurringBill;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $recurWeeklyTotal;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $refNumber;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $requestedDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $revCommitStatus;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $revCommittingStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $revCommittingTransaction;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $revenueStatus;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $reversalDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $reversalNumber;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $revRecEndDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $revRecOnRevCommitment;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $revRecStartDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $revRecTermInMonths;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $salesEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesOrder;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesTeamMember;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesTeamRole;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $schedulingMethod;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $serialNumber;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $serialNumberCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $serialNumberCostAdjustment;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $serialNumberQuantity;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $serialNumbers;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipAddressee;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipAttention;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $shipCarrier;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipCity;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shipComplete;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $shipCountry;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipCounty;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $shipDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $shipGroup;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shipMethod;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipPhone;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shipping;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shipRecvStatus;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shipRecvStatusLine;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shipState;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shipTo;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipZip;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $source;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $statistical;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subscriptionLine;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $taxLine;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxPeriod;
    /**
     * @var \NetSuite\Classes\PostingPeriodDate
     */
    public $taxPeriodRelative;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $taxPointDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $taxRate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $termsOfSale;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $toBeEmailed;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $toBePrinted;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $toSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $totalAmount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $trackingNumbers;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranEstGrossProfitPct;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranFxEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $tranIsVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $transactionDiscount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $transactionLineType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $transactionNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $transferLocation;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $transferOrderQuantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $transferOrderQuantityPacked;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $transferOrderQuantityPicked;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $transferOrderQuantityReceived;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $transferOrderQuantityShipped;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $unit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitCostOverride;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $vendType;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $visibleToCustomer;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $voided;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $vsoeAllocation;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $vsoeAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $vsoePermitDiscount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $vsoePrice;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $webSite;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountType" => "SearchEnumMultiSelectField",
        "acctCorpCardExp" => "SearchMultiSelectField",
        "actualProductionEndDate" => "SearchDateField",
        "actualProductionStartDate" => "SearchDateField",
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
        "inventoryLocation" => "SearchMultiSelectField",
        "inventorySubsidiary" => "SearchMultiSelectField",
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
        "isInTransitPayment" => "SearchBooleanField",
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
        "nexus" => "SearchMultiSelectField",
        "noAutoAssignLocation" => "SearchBooleanField",
        "nonReimbursable" => "SearchBooleanField",
        "number" => "SearchLongField",
        "oneTimeTotal" => "SearchDoubleField",
        "opportunity" => "SearchMultiSelectField",
        "orderAllocationStrategy" => "SearchMultiSelectField",
        "orderPriority" => "SearchDoubleField",
        "otherRefNum" => "SearchTextNumberField",
        "otherRefNumNonDeposit" => "SearchTextNumberField",
        "overheadParentItem" => "SearchMultiSelectField",
        "overrideInstallments" => "SearchBooleanField",
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
        "paymentOption" => "SearchStringField",
        "payPalPending" => "SearchBooleanField",
        "payPalStatus" => "SearchStringField",
        "payPalTranId" => "SearchStringField",
        "pnRefNum" => "SearchStringField",
        "poAsText" => "SearchStringField",
        "policyViolated" => "SearchBooleanField",
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
        "requestedDate" => "SearchDateField",
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
        "subsidiaryTaxRegNum" => "SearchMultiSelectField",
        "taxItem" => "SearchMultiSelectField",
        "taxLine" => "SearchBooleanField",
        "taxPeriod" => "RecordRef",
        "taxPeriodRelative" => "PostingPeriodDate",
        "taxPointDate" => "SearchDateField",
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
