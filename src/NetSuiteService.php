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
 * created:    2015-01-22  1:04 PM
 * updated:    2020-12-11 06:57:10 PM PST
 */

namespace NetSuite;

use NetSuite\Classes;

class NetSuiteService extends NetSuiteClient {

    public $generated_from_endpoint = '2020_2';

    /**
     * Service Call: changePassword
     * Parameter options:
     * (ChangePasswordRequest) parameters
     * @return Classes\ChangePasswordResponse $arg
     * @throws Exception invalid function signature message
     */
    public function changePassword(Classes\ChangePasswordRequest $arg) {
        return $this->makeSoapCall("changePassword", $arg);
    }

    /**
     * Service Call: changeEmail
     * Parameter options:
     * (ChangeEmailRequest) parameters
     * @return Classes\ChangeEmailResponse $arg
     * @throws Exception invalid function signature message
     */
    public function changeEmail(Classes\ChangeEmailRequest $arg) {
        return $this->makeSoapCall("changeEmail", $arg);
    }

    /**
     * Service Call: add
     * Parameter options:
     * (AddRequest) parameters
     * @return Classes\AddResponse $arg
     * @throws Exception invalid function signature message
     */
    public function add(Classes\AddRequest $arg) {
        return $this->makeSoapCall("add", $arg);
    }

    /**
     * Service Call: delete
     * Parameter options:
     * (DeleteRequest) parameters
     * @return Classes\DeleteResponse $arg
     * @throws Exception invalid function signature message
     */
    public function delete(Classes\DeleteRequest $arg) {
        return $this->makeSoapCall("delete", $arg);
    }

    /**
     * Service Call: search
     * Parameter options:
     * (SearchRequest) parameters
     * @return Classes\SearchResponse $arg
     * @throws Exception invalid function signature message
     */
    public function search(Classes\SearchRequest $arg) {
        return $this->makeSoapCall("search", $arg);
    }

    /**
     * Service Call: searchMoreWithId
     * Parameter options:
     * (SearchMoreWithIdRequest) parameters
     * @return Classes\SearchMoreWithIdResponse $arg
     * @throws Exception invalid function signature message
     */
    public function searchMoreWithId(Classes\SearchMoreWithIdRequest $arg) {
        return $this->makeSoapCall("searchMoreWithId", $arg);
    }

    /**
     * Service Call: update
     * Parameter options:
     * (UpdateRequest) parameters
     * @return Classes\UpdateResponse $arg
     * @throws Exception invalid function signature message
     */
    public function update(Classes\UpdateRequest $arg) {
        return $this->makeSoapCall("update", $arg);
    }

    /**
     * Service Call: upsert
     * Parameter options:
     * (UpsertRequest) parameters
     * @return Classes\UpsertResponse $arg
     * @throws Exception invalid function signature message
     */
    public function upsert(Classes\UpsertRequest $arg) {
        return $this->makeSoapCall("upsert", $arg);
    }

    /**
     * Service Call: addList
     * Parameter options:
     * (AddListRequest) parameters
     * @return Classes\AddListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function addList(Classes\AddListRequest $arg) {
        return $this->makeSoapCall("addList", $arg);
    }

    /**
     * Service Call: deleteList
     * Parameter options:
     * (DeleteListRequest) parameters
     * @return Classes\DeleteListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function deleteList(Classes\DeleteListRequest $arg) {
        return $this->makeSoapCall("deleteList", $arg);
    }

    /**
     * Service Call: updateList
     * Parameter options:
     * (UpdateListRequest) parameters
     * @return Classes\UpdateListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function updateList(Classes\UpdateListRequest $arg) {
        return $this->makeSoapCall("updateList", $arg);
    }

    /**
     * Service Call: upsertList
     * Parameter options:
     * (UpsertListRequest) parameters
     * @return Classes\UpsertListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function upsertList(Classes\UpsertListRequest $arg) {
        return $this->makeSoapCall("upsertList", $arg);
    }

    /**
     * Service Call: get
     * Parameter options:
     * (GetRequest) parameters
     * @return Classes\GetResponse $arg
     * @throws Exception invalid function signature message
     */
    public function get(Classes\GetRequest $arg) {
        return $this->makeSoapCall("get", $arg);
    }

    /**
     * Service Call: getList
     * Parameter options:
     * (GetListRequest) parameters
     * @return Classes\GetListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getList(Classes\GetListRequest $arg) {
        return $this->makeSoapCall("getList", $arg);
    }

    /**
     * Service Call: getAll
     * Parameter options:
     * (GetAllRequest) parameters
     * @return Classes\GetAllResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getAll(Classes\GetAllRequest $arg) {
        return $this->makeSoapCall("getAll", $arg);
    }

    /**
     * Service Call: getSavedSearch
     * Parameter options:
     * (GetSavedSearchRequest) parameters
     * @return Classes\GetSavedSearchResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getSavedSearch(Classes\GetSavedSearchRequest $arg) {
        return $this->makeSoapCall("getSavedSearch", $arg);
    }

    /**
     * Service Call: getCustomizationId
     * Parameter options:
     * (GetCustomizationIdRequest) parameters
     * @return Classes\GetCustomizationIdResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getCustomizationId(Classes\GetCustomizationIdRequest $arg) {
        return $this->makeSoapCall("getCustomizationId", $arg);
    }

    /**
     * Service Call: initialize
     * Parameter options:
     * (InitializeRequest) parameters
     * @return Classes\InitializeResponse $arg
     * @throws Exception invalid function signature message
     */
    public function initialize(Classes\InitializeRequest $arg) {
        return $this->makeSoapCall("initialize", $arg);
    }

    /**
     * Service Call: initializeList
     * Parameter options:
     * (InitializeListRequest) parameters
     * @return Classes\InitializeListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function initializeList(Classes\InitializeListRequest $arg) {
        return $this->makeSoapCall("initializeList", $arg);
    }

    /**
     * Service Call: getSelectValue
     * Parameter options:
     * (getSelectValueRequest) parameters
     * @return Classes\getSelectValueResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getSelectValue(Classes\getSelectValueRequest $arg) {
        return $this->makeSoapCall("getSelectValue", $arg);
    }

    /**
     * Service Call: getItemAvailability
     * Parameter options:
     * (GetItemAvailabilityRequest) parameters
     * @return Classes\GetItemAvailabilityResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getItemAvailability(Classes\GetItemAvailabilityRequest $arg) {
        return $this->makeSoapCall("getItemAvailability", $arg);
    }

    /**
     * Service Call: getBudgetExchangeRate
     * Parameter options:
     * (GetBudgetExchangeRateRequest) parameters
     * @return Classes\GetBudgetExchangeRateResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getBudgetExchangeRate(Classes\GetBudgetExchangeRateRequest $arg) {
        return $this->makeSoapCall("getBudgetExchangeRate", $arg);
    }

    /**
     * Service Call: getCurrencyRate
     * Parameter options:
     * (GetCurrencyRateRequest) parameters
     * @return Classes\GetCurrencyRateResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getCurrencyRate(Classes\GetCurrencyRateRequest $arg) {
        return $this->makeSoapCall("getCurrencyRate", $arg);
    }

    /**
     * Service Call: getDataCenterUrls
     * Parameter options:
     * (GetDataCenterUrlsRequest) parameters
     * @return Classes\GetDataCenterUrlsResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getDataCenterUrls(Classes\GetDataCenterUrlsRequest $arg) {
        return $this->makeSoapCall("getDataCenterUrls", $arg);
    }

    /**
     * Service Call: getPostingTransactionSummary
     * Parameter options:
     * (GetPostingTransactionSummaryRequest) parameters
     * @return Classes\GetPostingTransactionSummaryResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getPostingTransactionSummary(Classes\GetPostingTransactionSummaryRequest $arg) {
        return $this->makeSoapCall("getPostingTransactionSummary", $arg);
    }

    /**
     * Service Call: getServerTime
     * Parameter options:
     * (GetServerTimeRequest) parameters
     * @return Classes\GetServerTimeResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getServerTime(Classes\GetServerTimeRequest $arg) {
        return $this->makeSoapCall("getServerTime", $arg);
    }

    /**
     * Service Call: attach
     * Parameter options:
     * (AttachRequest) parameters
     * @return Classes\AttachResponse $arg
     * @throws Exception invalid function signature message
     */
    public function attach(Classes\AttachRequest $arg) {
        return $this->makeSoapCall("attach", $arg);
    }

    /**
     * Service Call: detach
     * Parameter options:
     * (DetachRequest) parameters
     * @return Classes\DetachResponse $arg
     * @throws Exception invalid function signature message
     */
    public function detach(Classes\DetachRequest $arg) {
        return $this->makeSoapCall("detach", $arg);
    }

    /**
     * Service Call: updateInviteeStatus
     * Parameter options:
     * (UpdateInviteeStatusRequest) parameters
     * @return Classes\UpdateInviteeStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function updateInviteeStatus(Classes\UpdateInviteeStatusRequest $arg) {
        return $this->makeSoapCall("updateInviteeStatus", $arg);
    }

    /**
     * Service Call: updateInviteeStatusList
     * Parameter options:
     * (UpdateInviteeStatusListRequest) parameters
     * @return Classes\UpdateInviteeStatusListResponse $arg
     * @throws Exception invalid function signature message
     */
    public function updateInviteeStatusList(Classes\UpdateInviteeStatusListRequest $arg) {
        return $this->makeSoapCall("updateInviteeStatusList", $arg);
    }

    /**
     * Service Call: asyncAddList
     * Parameter options:
     * (AsyncAddListRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncAddList(Classes\AsyncAddListRequest $arg) {
        return $this->makeSoapCall("asyncAddList", $arg);
    }

    /**
     * Service Call: asyncUpdateList
     * Parameter options:
     * (AsyncUpdateListRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncUpdateList(Classes\AsyncUpdateListRequest $arg) {
        return $this->makeSoapCall("asyncUpdateList", $arg);
    }

    /**
     * Service Call: asyncUpsertList
     * Parameter options:
     * (AsyncUpsertListRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncUpsertList(Classes\AsyncUpsertListRequest $arg) {
        return $this->makeSoapCall("asyncUpsertList", $arg);
    }

    /**
     * Service Call: asyncDeleteList
     * Parameter options:
     * (AsyncDeleteListRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncDeleteList(Classes\AsyncDeleteListRequest $arg) {
        return $this->makeSoapCall("asyncDeleteList", $arg);
    }

    /**
     * Service Call: asyncGetList
     * Parameter options:
     * (AsyncGetListRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncGetList(Classes\AsyncGetListRequest $arg) {
        return $this->makeSoapCall("asyncGetList", $arg);
    }

    /**
     * Service Call: asyncInitializeList
     * Parameter options:
     * (AsyncInitializeListRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncInitializeList(Classes\AsyncInitializeListRequest $arg) {
        return $this->makeSoapCall("asyncInitializeList", $arg);
    }

    /**
     * Service Call: asyncSearch
     * Parameter options:
     * (AsyncSearchRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function asyncSearch(Classes\AsyncSearchRequest $arg) {
        return $this->makeSoapCall("asyncSearch", $arg);
    }

    /**
     * Service Call: getAsyncResult
     * Parameter options:
     * (GetAsyncResultRequest) parameters
     * @return Classes\GetAsyncResultResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getAsyncResult(Classes\GetAsyncResultRequest $arg) {
        return $this->makeSoapCall("getAsyncResult", $arg);
    }

    /**
     * Service Call: checkAsyncStatus
     * Parameter options:
     * (CheckAsyncStatusRequest) parameters
     * @return Classes\AsyncStatusResponse $arg
     * @throws Exception invalid function signature message
     */
    public function checkAsyncStatus(Classes\CheckAsyncStatusRequest $arg) {
        return $this->makeSoapCall("checkAsyncStatus", $arg);
    }

    /**
     * Service Call: getDeleted
     * Parameter options:
     * (GetDeletedRequest) parameters
     * @return Classes\GetDeletedResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getDeleted(Classes\GetDeletedRequest $arg) {
        return $this->makeSoapCall("getDeleted", $arg);
    }

    /**
     * Service Call: getAccountGovernanceInfo
     * Parameter options:
     * (GetAccountGovernanceInfoRequest) parameters
     * @return Classes\GetAccountGovernanceInfoResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getAccountGovernanceInfo(Classes\GetAccountGovernanceInfoRequest $arg) {
        return $this->makeSoapCall("getAccountGovernanceInfo", $arg);
    }

    /**
     * Service Call: getIntegrationGovernanceInfo
     * Parameter options:
     * (GetIntegrationGovernanceInfoRequest) parameters
     * @return Classes\GetIntegrationGovernanceInfoResponse $arg
     * @throws Exception invalid function signature message
     */
    public function getIntegrationGovernanceInfo(Classes\GetIntegrationGovernanceInfoRequest $arg) {
        return $this->makeSoapCall("getIntegrationGovernanceInfo", $arg);
    }

}

