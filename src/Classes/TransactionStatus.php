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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class TransactionStatus {
    static $paramtypesmap = array(
    );
    const _billCancelled = "_billCancelled";
    const _billOpen = "_billOpen";
    const _billPaidInFull = "_billPaidInFull";
    const _billPaymentApproved = "_billPaymentApproved";
    const _billPaymentConfirmed = "_billPaymentConfirmed";
    const _billPaymentDeclined = "_billPaymentDeclined";
    const _billPaymentInTransit = "_billPaymentInTransit";
    const _billPaymentOnlineBillPayPendingAccountingApproval = "_billPaymentOnlineBillPayPendingAccountingApproval";
    const _billPaymentPendingApproval = "_billPaymentPendingApproval";
    const _billPaymentRejected = "_billPaymentRejected";
    const _billPaymentVoided = "_billPaymentVoided";
    const _billPendingApproval = "_billPendingApproval";
    const _billRejected = "_billRejected";
    const _cashSaleDeposited = "_cashSaleDeposited";
    const _cashSaleNotDeposited = "_cashSaleNotDeposited";
    const _cashSaleUnapprovedPayment = "_cashSaleUnapprovedPayment";
    const _checkOnlineBillPayPendingAccountingApproval = "_checkOnlineBillPayPendingAccountingApproval";
    const _checkVoided = "_checkVoided";
    const _commissionOverpaid = "_commissionOverpaid";
    const _commissionPaidInFull = "_commissionPaidInFull";
    const _commissionPendingAccountingApproval = "_commissionPendingAccountingApproval";
    const _commissionPendingPayment = "_commissionPendingPayment";
    const _commissionRejectedByAccounting = "_commissionRejectedByAccounting";
    const _creditMemoFullyApplied = "_creditMemoFullyApplied";
    const _creditMemoOpen = "_creditMemoOpen";
    const _creditMemoVoided = "_creditMemoVoided";
    const _customerDepositCancelled = "_customerDepositCancelled";
    const _customerDepositDeposited = "_customerDepositDeposited";
    const _customerDepositFullyApplied = "_customerDepositFullyApplied";
    const _customerDepositNotDeposited = "_customerDepositNotDeposited";
    const _customerDepositUnapprovedPayment = "_customerDepositUnapprovedPayment";
    const _customerRefundCancelled = "_customerRefundCancelled";
    const _customerRefundVoided = "_customerRefundVoided";
    const _estimateClosed = "_estimateClosed";
    const _estimateExpired = "_estimateExpired";
    const _estimateOpen = "_estimateOpen";
    const _estimateProcessed = "_estimateProcessed";
    const _estimateVoided = "_estimateVoided";
    const _expenseReportApprovedByAccounting = "_expenseReportApprovedByAccounting";
    const _expenseReportApprovedOverriddenByAccounting = "_expenseReportApprovedOverriddenByAccounting";
    const _expenseReportInProgress = "_expenseReportInProgress";
    const _expenseReportPaidInFull = "_expenseReportPaidInFull";
    const _expenseReportPaymentInTransit = "_expenseReportPaymentInTransit";
    const _expenseReportPendingAccountingApproval = "_expenseReportPendingAccountingApproval";
    const _expenseReportPendingSupervisorApproval = "_expenseReportPendingSupervisorApproval";
    const _expenseReportRejectedByAccounting = "_expenseReportRejectedByAccounting";
    const _expenseReportRejectedBySupervisor = "_expenseReportRejectedBySupervisor";
    const _expenseReportRejectedOverriddenByAccounting = "_expenseReportRejectedOverriddenByAccounting";
    const _expenseReportVoided = "_expenseReportVoided";
    const _invoiceOpen = "_invoiceOpen";
    const _invoicePaidInFull = "_invoicePaidInFull";
    const _invoicePendingApproval = "_invoicePendingApproval";
    const _invoiceRejected = "_invoiceRejected";
    const _invoiceVoided = "_invoiceVoided";
    const _itemFulfillmentPacked = "_itemFulfillmentPacked";
    const _itemFulfillmentPicked = "_itemFulfillmentPicked";
    const _itemFulfillmentShipped = "_itemFulfillmentShipped";
    const _journalApprovedForPosting = "_journalApprovedForPosting";
    const _journalPendingApproval = "_journalPendingApproval";
    const _journalRejected = "_journalRejected";
    const _opportunityClosedLost = "_opportunityClosedLost";
    const _opportunityClosedWon = "_opportunityClosedWon";
    const _opportunityInProgress = "_opportunityInProgress";
    const _opportunityIssuedEstimate = "_opportunityIssuedEstimate";
    const _paycheckCommitted = "_paycheckCommitted";
    const _paycheckCreated = "_paycheckCreated";
    const _paycheckError = "_paycheckError";
    const _paycheckPendingCommitment = "_paycheckPendingCommitment";
    const _paycheckPendingTaxCalculation = "_paycheckPendingTaxCalculation";
    const _paycheckPreview = "_paycheckPreview";
    const _paycheckReversed = "_paycheckReversed";
    const _paymentCancelled = "_paymentCancelled";
    const _paymentDeposited = "_paymentDeposited";
    const _paymentNotDeposited = "_paymentNotDeposited";
    const _paymentUnapprovedPayment = "_paymentUnapprovedPayment";
    const _payrollLiabilityCheckVoided = "_payrollLiabilityCheckVoided";
    const _periodEndJournalApprovedForPosting = "_periodEndJournalApprovedForPosting";
    const _periodEndJournalPendingApproval = "_periodEndJournalPendingApproval";
    const _periodEndJournalRejected = "_periodEndJournalRejected";
    const _purchaseOrderClosed = "_purchaseOrderClosed";
    const _purchaseOrderFullyBilled = "_purchaseOrderFullyBilled";
    const _purchaseOrderPartiallyReceived = "_purchaseOrderPartiallyReceived";
    const _purchaseOrderPendingBill = "_purchaseOrderPendingBill";
    const _purchaseOrderPendingBillingPartiallyReceived = "_purchaseOrderPendingBillingPartiallyReceived";
    const _purchaseOrderPendingReceipt = "_purchaseOrderPendingReceipt";
    const _purchaseOrderPendingSupervisorApproval = "_purchaseOrderPendingSupervisorApproval";
    const _purchaseOrderPlanned = "_purchaseOrderPlanned";
    const _purchaseOrderRejectedBySupervisor = "_purchaseOrderRejectedBySupervisor";
    const _requisitionCancelled = "_requisitionCancelled";
    const _requisitionClosed = "_requisitionClosed";
    const _requisitionFullyOrdered = "_requisitionFullyOrdered";
    const _requisitionFullyReceived = "_requisitionFullyReceived";
    const _requisitionPartiallyOrdered = "_requisitionPartiallyOrdered";
    const _requisitionPartiallyReceived = "_requisitionPartiallyReceived";
    const _requisitionPendingApproval = "_requisitionPendingApproval";
    const _requisitionPendingOrder = "_requisitionPendingOrder";
    const _requisitionRejected = "_requisitionRejected";
    const _returnAuthorizationCancelled = "_returnAuthorizationCancelled";
    const _returnAuthorizationClosed = "_returnAuthorizationClosed";
    const _returnAuthorizationPartiallyReceived = "_returnAuthorizationPartiallyReceived";
    const _returnAuthorizationPendingApproval = "_returnAuthorizationPendingApproval";
    const _returnAuthorizationPendingReceipt = "_returnAuthorizationPendingReceipt";
    const _returnAuthorizationPendingRefund = "_returnAuthorizationPendingRefund";
    const _returnAuthorizationPendingRefundPartiallyReceived = "_returnAuthorizationPendingRefundPartiallyReceived";
    const _returnAuthorizationRefunded = "_returnAuthorizationRefunded";
    const _salesOrderBilled = "_salesOrderBilled";
    const _salesOrderCancelled = "_salesOrderCancelled";
    const _salesOrderClosed = "_salesOrderClosed";
    const _salesOrderPartiallyFulfilled = "_salesOrderPartiallyFulfilled";
    const _salesOrderPendingApproval = "_salesOrderPendingApproval";
    const _salesOrderPendingBilling = "_salesOrderPendingBilling";
    const _salesOrderPendingBillingPartiallyFulfilled = "_salesOrderPendingBillingPartiallyFulfilled";
    const _salesOrderPendingFulfillment = "_salesOrderPendingFulfillment";
    const _salesTaxPaymentOnlineBillPayPendingAccountingApproval = "_salesTaxPaymentOnlineBillPayPendingAccountingApproval";
    const _salesTaxPaymentVoided = "_salesTaxPaymentVoided";
    const _statementChargeOpen = "_statementChargeOpen";
    const _statementChargePaidInFull = "_statementChargePaidInFull";
    const _taxLiabilityChequeVoided = "_taxLiabilityChequeVoided";
    const _tegataPayableEndorsed = "_tegataPayableEndorsed";
    const _tegataPayableIssued = "_tegataPayableIssued";
    const _tegataPayablePaid = "_tegataPayablePaid";
    const _tegataReceivablesCollected = "_tegataReceivablesCollected";
    const _tegataReceivablesDiscounted = "_tegataReceivablesDiscounted";
    const _tegataReceivablesEndorsed = "_tegataReceivablesEndorsed";
    const _tegataReceivablesHolding = "_tegataReceivablesHolding";
    const _tegataReceivablesVoided = "_tegataReceivablesVoided";
    const _transferOrderClosed = "_transferOrderClosed";
    const _transferOrderPartiallyFulfilled = "_transferOrderPartiallyFulfilled";
    const _transferOrderPendingApproval = "_transferOrderPendingApproval";
    const _transferOrderPendingFulfillment = "_transferOrderPendingFulfillment";
    const _transferOrderPendingReceipt = "_transferOrderPendingReceipt";
    const _transferOrderPendingReceiptPartiallyFulfilled = "_transferOrderPendingReceiptPartiallyFulfilled";
    const _transferOrderReceived = "_transferOrderReceived";
    const _transferOrderRejected = "_transferOrderRejected";
    const _vendorReturnAuthorizationCancelled = "_vendorReturnAuthorizationCancelled";
    const _vendorReturnAuthorizationClosed = "_vendorReturnAuthorizationClosed";
    const _vendorReturnAuthorizationCredited = "_vendorReturnAuthorizationCredited";
    const _vendorReturnAuthorizationPartiallyReturned = "_vendorReturnAuthorizationPartiallyReturned";
    const _vendorReturnAuthorizationPendingApproval = "_vendorReturnAuthorizationPendingApproval";
    const _vendorReturnAuthorizationPendingCredit = "_vendorReturnAuthorizationPendingCredit";
    const _vendorReturnAuthorizationPendingCreditPartiallyReturned = "_vendorReturnAuthorizationPendingCreditPartiallyReturned";
    const _vendorReturnAuthorizationPendingReturn = "_vendorReturnAuthorizationPendingReturn";
    const _workOrderBuilt = "_workOrderBuilt";
    const _workOrderCancelled = "_workOrderCancelled";
    const _workOrderClosed = "_workOrderClosed";
    const _workOrderPartiallyBuilt = "_workOrderPartiallyBuilt";
    const _workOrderPendingBuild = "_workOrderPendingBuild";
    const _workOrderPlanned = "_workOrderPlanned";
}
