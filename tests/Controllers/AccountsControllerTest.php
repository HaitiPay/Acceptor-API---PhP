<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Tests;

use HaitiPayAcceptorAPILib\APIException;
use HaitiPayAcceptorAPILib\Exceptions;
use HaitiPayAcceptorAPILib\APIHelper;
use HaitiPayAcceptorAPILib\Models;

class AccountsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \HaitiPayAcceptorAPILib\Controllers\AccountsController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \HaitiPayAcceptorAPILib\HaitiPayAcceptorAPIClient();
        self::$controller = $client->getAccounts();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Search accounts
     */
    public function testTestSearchAccounts()
    {
        // Parameters for the API call
        $id = '1421';
        $iban = '';
        $status = null;
        $type = null;
        $offset = 0;
        $limit = 20;
        $sort = 'id';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->searchAccounts($id, $iban, $status, $type, $offset, $limit, $sort);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }

    /**
     * Search client accounts
     */
    public function testTestSearchClientAccounts()
    {
        // Parameters for the API call
        $clientId = '1421';
        $id = '';
        $iban = '';
        $status = null;
        $type = null;
        $offset = 0;
        $limit = 20;
        $sort = 'id';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->searchClientAccounts($clientId, $id, $iban, $status, $type, $offset, $limit, $sort);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
