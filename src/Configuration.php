<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The base Uri for API calls
     * @var string
     */
    public static $BASEURI = 'https://sandbox.haitipay.com/api/acceptor/v1';

    /**
     * OAuth 2 Client ID
     * @var string
     */
    public static $oAuthClientId = 'TODO: Replace';

    /**
     * OAuth 2 Client Secret
     * @var string
     */
    public static $oAuthClientSecret = 'TODO: Replace';

    /**
     * OAuth 2 token
     * @var \HaitiPayAcceptorAPILib\Models\OAuthToken
     */
    public static $oAuthToken = null;

    /**
     * OAuth token update callback
     * Called whenever token is updated
     * @var callable
     */
    public static $oAuthTokenUpdateCallback = null;
}
