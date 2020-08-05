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

class ClientsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \HaitiPayAcceptorAPILib\Controllers\ClientsController Controller instance
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
        self::$controller = $client->getClients();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Search for a client
     */
    public function testTestSearchClients()
    {
        // Parameters for the API call
        $phone = '50937027447';
        $idNumber = null;
        $externalId = 'EXT123';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->searchClients($phone, $idNumber, $externalId);
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
