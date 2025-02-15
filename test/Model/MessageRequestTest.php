<?php
/**
 * MessageRequestTest
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

use FreeClimb\Api\Model\MessageRequest;
use PHPUnit\Framework\TestCase;

/**
 * MessageRequestTest Class Doc Comment
 *
 * @category    Class
 * @description MessageRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class MessageRequestTest extends TestCase
{
    protected $MessageRequest;

    /**
     * Test "MessageRequest"
     */
    public function setUp() : void
    {
        $this->MessageRequest = new MessageRequest();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->MessageRequest->setUri('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getUri(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->MessageRequest->setDateCreated('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getDateCreated(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->MessageRequest->setDateUpdated('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getDateUpdated(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->MessageRequest->setRevision(12345);
        $this->assertEquals($this->MessageRequest->getRevision(), 12345);
        $this->assertIsInt($this->MessageRequest->getRevision());
    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->MessageRequest->setFrom('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getFrom(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getFrom());
        

    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->MessageRequest->setTo('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getTo(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getTo());
        

    }
    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {
        $this->MessageRequest->setText('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getText(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getText());
        

    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->MessageRequest->setNotificationUrl('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getNotificationUrl(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getNotificationUrl());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->MessageRequest->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->MessageRequest->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->MessageRequest->getAccountId());
        

    }
}
