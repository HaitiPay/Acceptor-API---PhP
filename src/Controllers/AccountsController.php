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
class AccountsController extends BaseController
{
    /**
     * @var AccountsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AccountsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Search accounts
     *
     * @param string  $id     (optional) TODO: type description here
     * @param string  $iban   (optional) TODO: type description here
     * @param array   $status (optional) TODO: type description here
     * @param string  $type   (optional) TODO: type description here
     * @param integer $offset (optional) Pagination page number
     * @param integer $limit  (optional) The number of items per page
     * @param string  $sort   (optional) Field to define the sort order. To indicate sorting direction, ascending
     *                        (oldest first) fields may be prefixed with +. Descending (newer first) fields may be
     *                        prefixed with -
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function searchAccounts(
        $id = null,
        $iban = null,
        $status = null,
        $type = null,
        $offset = 0,
        $limit = 20,
        $sort = 'id'
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/accounts';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'id'     => $id,
            'iban'   => $iban,
            'status' => $status,
            'type'   => $type,
            'offset' => (null != $offset) ? $offset : 0,
            'limit'  => (null != $limit) ? $limit : 20,
            'sort'   => (null != $sort) ? $sort : 'id',
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
            throw new Exceptions\Accounts0ErrorException('Request could not be processed', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'HaitiPayAcceptorAPILib\\Models\\AccountCollection');
    }

    /**
     * Search client accounts
     *
     * @param string  $clientId TODO: type description here
     * @param string  $id       (optional) TODO: type description here
     * @param string  $iban     (optional) TODO: type description here
     * @param array   $status   (optional) TODO: type description here
     * @param string  $type     (optional) TODO: type description here
     * @param integer $offset   (optional) Pagination page number
     * @param integer $limit    (optional) The number of items per page
     * @param string  $sort     (optional) Field to define the sort order. To indicate sorting direction, ascending
     *                          (oldest first) fields may be prefixed with +. Descending (newer first) fields may be
     *                          prefixed with -
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function searchClientAccounts(
        $clientId,
        $id = null,
        $iban = null,
        $status = null,
        $type = null,
        $offset = 0,
        $limit = 20,
        $sort = 'id'
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/clients/{clientId}/accounts';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'clientId' => $clientId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'id'       => $id,
            'iban'     => $iban,
            'status'   => $status,
            'type'     => $type,
            'offset'   => (null != $offset) ? $offset : 0,
            'limit'    => (null != $limit) ? $limit : 20,
            'sort'     => (null != $sort) ? $sort : 'id',
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
            throw new Exceptions\ClientsAccounts0ErrorException('Request could not be processed', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'HaitiPayAcceptorAPILib\\Models\\AccountCollection');
    }
}
