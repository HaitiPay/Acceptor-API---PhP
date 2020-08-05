<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib;

use HaitiPayAcceptorAPILib\Controllers;

/**
 * HaitiPayAcceptorAPILib client class
 */
class HaitiPayAcceptorAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthClientId = null,
        $oAuthClientSecret = null
    ) {
        Configuration::$oAuthClientId = $oAuthClientId ? $oAuthClientId : Configuration::$oAuthClientId;
        Configuration::$oAuthClientSecret = $oAuthClientSecret ? $oAuthClientSecret : Configuration::$oAuthClientSecret;
    }
    /**
     * Singleton access to Clients controller
     * @return Controllers\ClientsController The *Singleton* instance
     */
    public function getClients()
    {
        return Controllers\ClientsController::getInstance();
    }
    /**
     * Singleton access to Accounts controller
     * @return Controllers\AccountsController The *Singleton* instance
     */
    public function getAccounts()
    {
        return Controllers\AccountsController::getInstance();
    }
    /**
     * Singleton access to Cashin controller
     * @return Controllers\CashinController The *Singleton* instance
     */
    public function getCashin()
    {
        return Controllers\CashinController::getInstance();
    }
    /**
     * Singleton access to Cashout controller
     * @return Controllers\CashoutController The *Singleton* instance
     */
    public function getCashout()
    {
        return Controllers\CashoutController::getInstance();
    }
    /**
     * Singleton access to Payment controller
     * @return Controllers\PaymentController The *Singleton* instance
     */
    public function getPayment()
    {
        return Controllers\PaymentController::getInstance();
    }
    /**
     * Singleton access to BillPayment controller
     * @return Controllers\BillPaymentController The *Singleton* instance
     */
    public function getBillPayment()
    {
        return Controllers\BillPaymentController::getInstance();
    }
    /**
     * Singleton access to Reversal controller
     * @return Controllers\ReversalController The *Singleton* instance
     */
    public function getReversal()
    {
        return Controllers\ReversalController::getInstance();
    }
    /**
     * Singleton access to Authentication controller
     * @return Controllers\AuthenticationController The *Singleton* instance
     */
    public function getAuthentication()
    {
        return Controllers\AuthenticationController::getInstance();
    }
    /**
     * Singleton access to OAuthAuthorization controller
     * @return Controllers\OAuthAuthorizationController The *Singleton* instance
     */
    public function getOAuthAuthorization()
    {
        return Controllers\OAuthAuthorizationController::getInstance();
    }
    /**
     * Get OAuth 2 authorization manager
     * @return OAuthManager
     */
    public function auth()
    {
        return OAuthManager::getInstance();
    }
}
