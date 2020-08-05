<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Controllers;

use HaitiPayAcceptorAPILib\APIException;
use HaitiPayAcceptorAPILib\APIHelper;
use HaitiPayAcceptorAPILib\Configuration;
use HaitiPayAcceptorAPILib\Models;
use HaitiPayAcceptorAPILib\Exceptions;
use HaitiPayAcceptorAPILib\Http\HttpRequest;
use HaitiPayAcceptorAPILib\Http\HttpResponse;
use HaitiPayAcceptorAPILib\Http\HttpMethod;
use HaitiPayAcceptorAPILib\Http\HttpContext;
use HaitiPayAcceptorAPILib\OAuthManager;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class BillPaymentController extends BaseController
{
    /**
     * @var BillPaymentController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return BillPaymentController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Bill issuers list
     *
     * @param string $billItemId (optional) root item to use to get a subset of this tree
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function loadBillerTree(
        $billItemId = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/billers';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'billItemId' => $billItemId,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\Billers0ErrorException('Request could not be processed', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * 
     * <details>
     * <summary>An example of paybill call flow (click to expand)</summary>
     *
     * ```js
     * function paybill(apiClient, billIssuerId, clientIdentifier) {
     * // initiate paybill transaction
     * let response = apiClient.post("/transactions/paybill", {billIssuerId: billIssuerId,
     * clientIdentifier: clientIdentifier});
     * let transactionToken = response.body.transactionToken;
     * let userSubmittedValues = null;
     *
     * // making multiple preauth
     * while(true) {
     * response = apiClient.patch("/transactions/paybill/" + transactionToken, {inputs:
     * userSubmittedValues});
     * if (response.code === 201) {
     * break;
     * }
     * userSubmittedValues = askUserInput(response.body.inputs);
     * }
     *
     * // making authentification
     * makeAuth(transactionToken)
     *
     * // making transaction
     * apiClient.post("/transactions/paybill/" + transactionToken);
     * }
     *
     * function askUserInput(inputs) {
     * // ui logic to ask user to fill inputs
     * }
     *
     * function makeAuth(transactionToken)
     * {
     * // logic to make authentication
     * }
     * ```
     *
     * </details>
     *
     *
     * @param object $body TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createInitPaybill(
        $body
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/transactions/paybill';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\TransactionsPaybill0ErrorException('Request could not be processed', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'HaitiPayAcceptorAPILib\\Models\\TransactionsPaybillResponse');
    }

    /**
     * Paybill pre-authorization
     *
     * @param string                            $transactionToken TODO: type description here
     * @param Models\TransactionsPaybillRequest $body             TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateSubmitPaybillInfo(
        $transactionToken,
        $body
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/transactions/paybill/{transactionToken}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'transactionToken' => $transactionToken,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => BaseController::USER_AGENT,
            'Accept'         => 'application/json',
            'content-type'   => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::patch($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\TransactionsPaybill0ErrorException('Request could not be processed', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'HaitiPayAcceptorAPILib\\Models\\TransactionsPaybillResponse1');
    }

    /**
     * Paybill transaction
     *
     * @param string $transactionToken TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPaybill(
        $transactionToken
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/transactions/paybill/{transactionToken}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'transactionToken' => $transactionToken,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => BaseController::USER_AGENT,
            'Accept'         => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\TransactionsPaybill0ErrorException('Request could not be processed', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'HaitiPayAcceptorAPILib\\Models\\TransactionsPaybillResponse2');
    }
}
