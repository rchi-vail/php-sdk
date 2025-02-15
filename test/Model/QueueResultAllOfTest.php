<?php
/**
 * QueueResultAllOfTest
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

use FreeClimb\Api\Model\QueueResultAllOf;
use PHPUnit\Framework\TestCase;

/**
 * QueueResultAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description QueueResultAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class QueueResultAllOfTest extends TestCase
{
    protected $QueueResultAllOf;

    /**
     * Test "QueueResultAllOf"
     */
    public function setUp() : void
    {
        $this->QueueResultAllOf = new QueueResultAllOf();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->QueueResultAllOf->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->QueueResultAllOf->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->QueueResultAllOf->getAccountId());
        

    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->QueueResultAllOf->setQueueId('TEST_STRING');
        $this->assertStringContainsString($this->QueueResultAllOf->getQueueId(), 'TEST_STRING');
        $this->assertIsString($this->QueueResultAllOf->getQueueId());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->QueueResultAllOf->setAlias('TEST_STRING');
        $this->assertStringContainsString($this->QueueResultAllOf->getAlias(), 'TEST_STRING');
        $this->assertIsString($this->QueueResultAllOf->getAlias());
        

    }
    /**
     * Test attribute "max_size"
     */
    public function testPropertyMaxSize()
    {
        $this->QueueResultAllOf->setMaxSize(12345);
        $this->assertEquals($this->QueueResultAllOf->getMaxSize(), 12345);
        $this->assertIsInt($this->QueueResultAllOf->getMaxSize());
    }
    /**
     * Test attribute "current_size"
     */
    public function testPropertyCurrentSize()
    {
        $this->QueueResultAllOf->setCurrentSize('TEST_STRING');
        $this->assertStringContainsString($this->QueueResultAllOf->getCurrentSize(), 'TEST_STRING');
        $this->assertIsString($this->QueueResultAllOf->getCurrentSize());
        

    }
    /**
     * Test attribute "average_wait_time"
     */
    public function testPropertyAverageWaitTime()
    {
        $this->QueueResultAllOf->setAverageWaitTime('TEST_STRING');
        $this->assertStringContainsString($this->QueueResultAllOf->getAverageWaitTime(), 'TEST_STRING');
        $this->assertIsString($this->QueueResultAllOf->getAverageWaitTime());
        

    }
    /**
     * Test attribute "subresource_uris"
     */
    public function testPropertySubresourceUris()
    {
        $this->QueueResultAllOf->setSubresourceUris(new \stdClass);
        $this->assertIsObject($this->QueueResultAllOf->getSubresourceUris());
    }
}
