<?php
/**
 * OutDialTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@freeclimb.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use FreeClimb\Api\Model\OutDial;
use PHPUnit\Framework\TestCase;

/**
 * OutDialTest Class Doc Comment
 *
 * @category    Class
 * @description The OutDial command is used to call a phone number
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OutDialTest extends TestCase
{
    protected $OutDial;

    /**
     * Test "OutDial"
     */
    public function setUp() : void
    {
        $this->OutDial = new OutDial();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->OutDial->setActionUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDial->getActionUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDial->getActionUrl());
        

    }
    /**
     * Test attribute "call_connect_url"
     */
    public function testPropertyCallConnectUrl()
    {
        $this->OutDial->setCallConnectUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDial->getCallConnectUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDial->getCallConnectUrl());
        

    }
    /**
     * Test attribute "calling_number"
     */
    public function testPropertyCallingNumber()
    {
        $this->OutDial->setCallingNumber(12345);
        $this->assertEquals($this->OutDial->getCallingNumber(), 12345);
        $this->assertIsNumeric($this->OutDial->getCallingNumber());
    }
    /**
     * Test attribute "destination"
     */
    public function testPropertyDestination()
    {
        $this->OutDial->setDestination(12345);
        $this->assertEquals($this->OutDial->getDestination(), 12345);
        $this->assertIsNumeric($this->OutDial->getDestination());
    }
    /**
     * Test attribute "if_machine"
     */
    public function testPropertyIfMachine()
    {
        $this->OutDial->setIfMachine('TEST_STRING');
        $this->assertStringContainsString($this->OutDial->getIfMachine(), 'TEST_STRING');
        $this->assertIsString($this->OutDial->getIfMachine());
        

    }
    /**
     * Test attribute "if_machine_url"
     */
    public function testPropertyIfMachineUrl()
    {
        $this->OutDial->setIfMachineUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDial->getIfMachineUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDial->getIfMachineUrl());
        

    }
    /**
     * Test attribute "send_digits"
     */
    public function testPropertySendDigits()
    {
        $this->OutDial->setSendDigits('TEST_STRING');
        $this->assertStringContainsString($this->OutDial->getSendDigits(), 'TEST_STRING');
        $this->assertIsString($this->OutDial->getSendDigits());
        

    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->OutDial->setStatusCallbackUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDial->getStatusCallbackUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDial->getStatusCallbackUrl());
        

    }
    /**
     * Test attribute "timeout"
     */
    public function testPropertyTimeout()
    {
        $this->OutDial->setTimeout(12345);
        $this->assertEquals($this->OutDial->getTimeout(), 12345);
        $this->assertIsInt($this->OutDial->getTimeout());
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->OutDial->setPrivacyMode(true);
        $this->assertEquals($this->OutDial->getPrivacyMode(), true);
        $this->assertIsBool($this->OutDial->getPrivacyMode());
    }
}
