<?php

namespace Fungku\NetSuite;

use Fungku\NetSuite\Classes;

class NetSuiteService extends NetSuiteClient
{
    public $generated_from_endpoint = "2015_2";


    /**
     * Service Call: login
     * Parameter options:
     * (LoginRequest) parameters
     * @return Classes\LoginResponse
     * @throws Exception invalid function signature message
     */
    public function login(Classes\LoginRequest $arg)
    {
        return $this->makeSoapCall("login", $arg);
    }


    /**
     * Service Call: ssoLogin
     * Parameter options:
     * (SsoLoginRequest) parameters
     * @return Classes\SsoLoginResponse
     * @throws Exception invalid function signature message
     */
    public function ssoLogin(Classes\SsoLoginRequest $arg)
    {
        return $this->makeSoapCall("ssoLogin", $arg);
    }


    /**
     * Service Call: mapSso
     * Parameter options:
     * (MapSsoRequest) parameters
     * @return Classes\MapSsoResponse
     * @throws Exception invalid function signature message
     */
    public function mapSso(Classes\MapSsoRequest $arg)
    {
        return $this->makeSoapCall("mapSso", $arg);
    }


    /**
     * Service Call: changePassword
     * Parameter options:
     * (ChangePasswordRequest) parameters
     * @return Classes\ChangePasswordResponse
     * @throws Exception invalid function signature message
     */
    public function changePassword(Classes\ChangePasswordRequest $arg)
    {
        return $this->makeSoapCall("changePassword", $arg);
    }


    /**
     * Service Call: changeEmail
     * Parameter options:
     * (ChangeEmailRequest) parameters
     * @return Classes\ChangeEmailResponse
     * @throws Exception invalid function signature message
     */
    public function changeEmail(Classes\ChangeEmailRequest $arg)
    {
        return $this->makeSoapCall("changeEmail", $arg);
    }


    /**
     * Service Call: logout
     * Parameter options:
     * (LogoutRequest) parameters
     * @return Classes\LogoutResponse
     * @throws Exception invalid function signature message
     */
    public function logout(Classes\LogoutRequest $arg)
    {
        return $this->makeSoapCall("logout", $arg);
    }


    /**
     * Service Call: add
     * Parameter options:
     * (AddRequest) parameters
     * @return Classes\AddResponse
     * @throws Exception invalid function signature message
     */
    public function add(Classes\AddRequest $arg)
    {
        return $this->makeSoapCall("add", $arg);
    }


    /**
     * Service Call: delete
     * Parameter options:
     * (DeleteRequest) parameters
     * @return Classes\DeleteResponse
     * @throws Exception invalid function signature message
     */
    public function delete(Classes\DeleteRequest $arg)
    {
        return $this->makeSoapCall("delete", $arg);
    }


    /**
     * Service Call: search
     * Parameter options:
     * (SearchRequest) parameters
     * @return Classes\SearchResponse
     * @throws Exception invalid function signature message
     */
    public function search(Classes\SearchRequest $arg)
    {
        return $this->makeSoapCall("search", $arg);
    }


    /**
     * Service Call: searchMore
     * Parameter options:
     * (SearchMoreRequest) parameters
     * @return Classes\SearchMoreResponse
     * @throws Exception invalid function signature message
     */
    public function searchMore(Classes\SearchMoreRequest $arg)
    {
        return $this->makeSoapCall("searchMore", $arg);
    }


    /**
     * Service Call: searchMoreWithId
     * Parameter options:
     * (SearchMoreWithIdRequest) parameters
     * @return Classes\SearchMoreWithIdResponse
     * @throws Exception invalid function signature message
     */
    public function searchMoreWithId(Classes\SearchMoreWithIdRequest $arg)
    {
        return $this->makeSoapCall("searchMoreWithId", $arg);
    }


    /**
     * Service Call: searchNext
     * Parameter options:
     * (SearchNextRequest) parameters
     * @return Classes\SearchNextResponse
     * @throws Exception invalid function signature message
     */
    public function searchNext(Classes\SearchNextRequest $arg)
    {
        return $this->makeSoapCall("searchNext", $arg);
    }


    /**
     * Service Call: update
     * Parameter options:
     * (UpdateRequest) parameters
     * @return Classes\UpdateResponse
     * @throws Exception invalid function signature message
     */
    public function update(Classes\UpdateRequest $arg)
    {
        return $this->makeSoapCall("update", $arg);
    }


    /**
     * Service Call: upsert
     * Parameter options:
     * (UpsertRequest) parameters
     * @return Classes\UpsertResponse
     * @throws Exception invalid function signature message
     */
    public function upsert(Classes\UpsertRequest $arg)
    {
        return $this->makeSoapCall("upsert", $arg);
    }


    /**
     * Service Call: addList
     * Parameter options:
     * (AddListRequest) parameters
     * @return Classes\AddListResponse
     * @throws Exception invalid function signature message
     */
    public function addList(Classes\AddListRequest $arg)
    {
        return $this->makeSoapCall("addList", $arg);
    }


    /**
     * Service Call: deleteList
     * Parameter options:
     * (DeleteListRequest) parameters
     * @return Classes\DeleteListResponse
     * @throws Exception invalid function signature message
     */
    public function deleteList(Classes\DeleteListRequest $arg)
    {
        return $this->makeSoapCall("deleteList", $arg);
    }


    /**
     * Service Call: updateList
     * Parameter options:
     * (UpdateListRequest) parameters
     * @return Classes\UpdateListResponse
     * @throws Exception invalid function signature message
     */
    public function updateList(Classes\UpdateListRequest $arg)
    {
        return $this->makeSoapCall("updateList", $arg);
    }


    /**
     * Service Call: upsertList
     * Parameter options:
     * (UpsertListRequest) parameters
     * @return Classes\UpsertListResponse
     * @throws Exception invalid function signature message
     */
    public function upsertList(Classes\UpsertListRequest $arg)
    {
        return $this->makeSoapCall("upsertList", $arg);
    }


    /**
     * Service Call: get
     * Parameter options:
     * (GetRequest) parameters
     * @return Classes\GetResponse
     * @throws Exception invalid function signature message
     */
    public function get(Classes\GetRequest $arg)
    {
        return $this->makeSoapCall("get", $arg);
    }


    /**
     * Service Call: getList
     * Parameter options:
     * (GetListRequest) parameters
     * @return Classes\GetListResponse
     * @throws Exception invalid function signature message
     */
    public function getList(Classes\GetListRequest $arg)
    {
        return $this->makeSoapCall("getList", $arg);
    }


    /**
     * Service Call: getAll
     * Parameter options:
     * (GetAllRequest) parameters
     * @return Classes\GetAllResponse
     * @throws Exception invalid function signature message
     */
    public function getAll(Classes\GetAllRequest $arg)
    {
        return $this->makeSoapCall("getAll", $arg);
    }


    /**
     * Service Call: getSavedSearch
     * Parameter options:
     * (GetSavedSearchRequest) parameters
     * @return Classes\GetSavedSearchResponse
     * @throws Exception invalid function signature message
     */
    public function getSavedSearch(Classes\GetSavedSearchRequest $arg)
    {
        return $this->makeSoapCall("getSavedSearch", $arg);
    }


    /**
     * Service Call: getCustomizationId
     * Parameter options:
     * (GetCustomizationIdRequest) parameters
     * @return Classes\GetCustomizationIdResponse
     * @throws Exception invalid function signature message
     */
    public function getCustomizationId(Classes\GetCustomizationIdRequest $arg)
    {
        return $this->makeSoapCall("getCustomizationId", $arg);
    }


    /**
     * Service Call: initialize
     * Parameter options:
     * (InitializeRequest) parameters
     * @return Classes\InitializeResponse
     * @throws Exception invalid function signature message
     */
    public function initialize(Classes\InitializeRequest $arg)
    {
        return $this->makeSoapCall("initialize", $arg);
    }


    /**
     * Service Call: initializeList
     * Parameter options:
     * (InitializeListRequest) parameters
     * @return Classes\InitializeListResponse
     * @throws Exception invalid function signature message
     */
    public function initializeList(Classes\InitializeListRequest $arg)
    {
        return $this->makeSoapCall("initializeList", $arg);
    }


    /**
     * Service Call: getSelectValue
     * Parameter options:
     * (getSelectValueRequest) parameters
     * @return Classes\getSelectValueResponse
     * @throws Exception invalid function signature message
     */
    public function getSelectValue(Classes\getSelectValueRequest $arg)
    {
        return $this->makeSoapCall("getSelectValue", $arg);
    }


    /**
     * Service Call: getItemAvailability
     * Parameter options:
     * (GetItemAvailabilityRequest) parameters
     * @return Classes\GetItemAvailabilityResponse
     * @throws Exception invalid function signature message
     */
    public function getItemAvailability(Classes\GetItemAvailabilityRequest $arg)
    {
        return $this->makeSoapCall("getItemAvailability", $arg);
    }


    /**
     * Service Call: getBudgetExchangeRate
     * Parameter options:
     * (GetBudgetExchangeRateRequest) parameters
     * @return Classes\GetBudgetExchangeRateResponse
     * @throws Exception invalid function signature message
     */
    public function getBudgetExchangeRate(Classes\GetBudgetExchangeRateRequest $arg)
    {
        return $this->makeSoapCall("getBudgetExchangeRate", $arg);
    }


    /**
     * Service Call: getConsolidatedExchangeRate
     * Parameter options:
     * (GetConsolidatedExchangeRateRequest) parameters
     * @return Classes\GetConsolidatedExchangeRateResponse
     * @throws Exception invalid function signature message
     */
    public function getConsolidatedExchangeRate(Classes\GetConsolidatedExchangeRateRequest $arg)
    {
        return $this->makeSoapCall("getConsolidatedExchangeRate", $arg);
    }


    /**
     * Service Call: getCurrencyRate
     * Parameter options:
     * (GetCurrencyRateRequest) parameters
     * @return Classes\GetCurrencyRateResponse
     * @throws Exception invalid function signature message
     */
    public function getCurrencyRate(Classes\GetCurrencyRateRequest $arg)
    {
        return $this->makeSoapCall("getCurrencyRate", $arg);
    }


    /**
     * Service Call: getDataCenterUrls
     * Parameter options:
     * (GetDataCenterUrlsRequest) parameters
     * @return Classes\GetDataCenterUrlsResponse
     * @throws Exception invalid function signature message
     */
    public function getDataCenterUrls(Classes\GetDataCenterUrlsRequest $arg)
    {
        return $this->makeSoapCall("getDataCenterUrls", $arg);
    }


    /**
     * Service Call: getPostingTransactionSummary
     * Parameter options:
     * (GetPostingTransactionSummaryRequest) parameters
     * @return Classes\GetPostingTransactionSummaryResponse
     * @throws Exception invalid function signature message
     */
    public function getPostingTransactionSummary(Classes\GetPostingTransactionSummaryRequest $arg)
    {
        return $this->makeSoapCall("getPostingTransactionSummary", $arg);
    }


    /**
     * Service Call: getServerTime
     * Parameter options:
     * (GetServerTimeRequest) parameters
     * @return Classes\GetServerTimeResponse
     * @throws Exception invalid function signature message
     */
    public function getServerTime(Classes\GetServerTimeRequest $arg)
    {
        return $this->makeSoapCall("getServerTime", $arg);
    }


    /**
     * Service Call: attach
     * Parameter options:
     * (AttachRequest) parameters
     * @return Classes\AttachResponse
     * @throws Exception invalid function signature message
     */
    public function attach(Classes\AttachRequest $arg)
    {
        return $this->makeSoapCall("attach", $arg);
    }


    /**
     * Service Call: detach
     * Parameter options:
     * (DetachRequest) parameters
     * @return Classes\DetachResponse
     * @throws Exception invalid function signature message
     */
    public function detach(Classes\DetachRequest $arg)
    {
        return $this->makeSoapCall("detach", $arg);
    }


    /**
     * Service Call: updateInviteeStatus
     * Parameter options:
     * (UpdateInviteeStatusRequest) parameters
     * @return Classes\UpdateInviteeStatusResponse
     * @throws Exception invalid function signature message
     */
    public function updateInviteeStatus(Classes\UpdateInviteeStatusRequest $arg)
    {
        return $this->makeSoapCall("updateInviteeStatus", $arg);
    }


    /**
     * Service Call: updateInviteeStatusList
     * Parameter options:
     * (UpdateInviteeStatusListRequest) parameters
     * @return Classes\UpdateInviteeStatusListResponse
     * @throws Exception invalid function signature message
     */
    public function updateInviteeStatusList(Classes\UpdateInviteeStatusListRequest $arg)
    {
        return $this->makeSoapCall("updateInviteeStatusList", $arg);
    }


    /**
     * Service Call: asyncAddList
     * Parameter options:
     * (AsyncAddListRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncAddList(Classes\AsyncAddListRequest $arg)
    {
        return $this->makeSoapCall("asyncAddList", $arg);
    }


    /**
     * Service Call: asyncUpdateList
     * Parameter options:
     * (AsyncUpdateListRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncUpdateList(Classes\AsyncUpdateListRequest $arg)
    {
        return $this->makeSoapCall("asyncUpdateList", $arg);
    }


    /**
     * Service Call: asyncUpsertList
     * Parameter options:
     * (AsyncUpsertListRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncUpsertList(Classes\AsyncUpsertListRequest $arg)
    {
        return $this->makeSoapCall("asyncUpsertList", $arg);
    }


    /**
     * Service Call: asyncDeleteList
     * Parameter options:
     * (AsyncDeleteListRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncDeleteList(Classes\AsyncDeleteListRequest $arg)
    {
        return $this->makeSoapCall("asyncDeleteList", $arg);
    }


    /**
     * Service Call: asyncGetList
     * Parameter options:
     * (AsyncGetListRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncGetList(Classes\AsyncGetListRequest $arg)
    {
        return $this->makeSoapCall("asyncGetList", $arg);
    }


    /**
     * Service Call: asyncInitializeList
     * Parameter options:
     * (AsyncInitializeListRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncInitializeList(Classes\AsyncInitializeListRequest $arg)
    {
        return $this->makeSoapCall("asyncInitializeList", $arg);
    }


    /**
     * Service Call: asyncSearch
     * Parameter options:
     * (AsyncSearchRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncSearch(Classes\AsyncSearchRequest $arg)
    {
        return $this->makeSoapCall("asyncSearch", $arg);
    }


    /**
     * Service Call: getAsyncResult
     * Parameter options:
     * (GetAsyncResultRequest) parameters
     * @return Classes\GetAsyncResultResponse
     * @throws Exception invalid function signature message
     */
    public function getAsyncResult(Classes\GetAsyncResultRequest $arg)
    {
        return $this->makeSoapCall("getAsyncResult", $arg);
    }


    /**
     * Service Call: checkAsyncStatus
     * Parameter options:
     * (CheckAsyncStatusRequest) parameters
     * @return Classes\AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function checkAsyncStatus(Classes\CheckAsyncStatusRequest $arg)
    {
        return $this->makeSoapCall("checkAsyncStatus", $arg);
    }


    /**
     * Service Call: getDeleted
     * Parameter options:
     * (GetDeletedRequest) parameters
     * @return Classes\GetDeletedResponse
     * @throws Exception invalid function signature message
     */
    public function getDeleted(Classes\GetDeletedRequest $arg)
    {
        return $this->makeSoapCall("getDeleted", $arg);
    }
}
