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
class OAuthAuthorizationController extends BaseController
{
    /**
     * @var OAuthAuthorizationController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return OAuthAuthorizationController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Create a new OAuth 2 token.
     *
     * @param string $authorization Authorization header in Basic auth format
     * @param string $scope         (optional) Requested scopes as a space-delimited list.
     * @param    array  $fieldParameters    Additional optional form parameters are supported by this endpoint
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRequestToken(
        $authorization,
        $scope = null,
        $fieldParameters = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/oauth2/token';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization'   => $authorization
        );

        //prepare parameters
        $_parameters = array (
            'grant_type'    => 'client_credentials',
            'scope'         => $scope
        );
        if (isset($fieldParameters)) {
            $_parameters = array_merge($_parameters, $fieldParameters);
        }

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\OAuthProviderException('OAuth 2 provider returned an error.', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\OAuthProviderException(
                'OAuth 2 provider says client authentication failed.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'HaitiPayAcceptorAPILib\\Models\\OAuthToken');
    }
}
