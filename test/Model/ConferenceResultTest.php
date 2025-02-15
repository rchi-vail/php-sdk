<?php
/**
 * ConferenceResultTest
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

use FreeClimb\Api\Model\ConferenceResult;
use PHPUnit\Framework\TestCase;

/**
 * ConferenceResultTest Class Doc Comment
 *
 * @category    Class
 * @description ConferenceResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ConferenceResultTest extends TestCase
{
    protected $ConferenceResult;

    /**
     * Test "ConferenceResult"
     */
    public function setUp() : void
    {
        $this->ConferenceResult = new ConferenceResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->ConferenceResult->setUri('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getUri(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->ConferenceResult->setDateCreated('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getDateCreated(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->ConferenceResult->setDateUpdated('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getDateUpdated(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->ConferenceResult->setRevision(12345);
        $this->assertEquals($this->ConferenceResult->getRevision(), 12345);
        $this->assertIsInt($this->ConferenceResult->getRevision());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->ConferenceResult->setConferenceId('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getConferenceId(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getConferenceId());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->ConferenceResult->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getAccountId());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->ConferenceResult->setAlias('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getAlias(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getAlias());
        

    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        
        $this->ConferenceResult->setPlayBeep('always');
        $this->assertStringContainsString($this->ConferenceResult->getPlayBeep(), 'always');
        $this->assertIsString($this->ConferenceResult->getPlayBeep());

    }
    /**
     * Test attribute "record"
     */
    public function testPropertyRecord()
    {
        $this->ConferenceResult->setRecord(true);
        $this->assertEquals($this->ConferenceResult->getRecord(), true);
        $this->assertIsBool($this->ConferenceResult->getRecord());
    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        
        $this->ConferenceResult->setStatus('creating');
        $this->assertStringContainsString($this->ConferenceResult->getStatus(), 'creating');
        $this->assertIsString($this->ConferenceResult->getStatus());

    }
    /**
     * Test attribute "wait_url"
     */
    public function testPropertyWaitUrl()
    {
        $this->ConferenceResult->setWaitUrl('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getWaitUrl(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getWaitUrl());
        

    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->ConferenceResult->setActionUrl('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getActionUrl(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getActionUrl());
        

    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->ConferenceResult->setStatusCallbackUrl('TEST_STRING');
        $this->assertStringContainsString($this->ConferenceResult->getStatusCallbackUrl(), 'TEST_STRING');
        $this->assertIsString($this->ConferenceResult->getStatusCallbackUrl());
        

    }
    /**
     * Test attribute "subresource_uris"
     */
    public function testPropertySubresourceUris()
    {
        $this->ConferenceResult->setSubresourceUris(new \stdClass);
        $this->assertIsObject($this->ConferenceResult->getSubresourceUris());
    }
}
