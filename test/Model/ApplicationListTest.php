<?php
/**
 * ApplicationListTest
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

use FreeClimb\Api\Model\ApplicationList;
use PHPUnit\Framework\TestCase;

/**
 * ApplicationListTest Class Doc Comment
 *
 * @category    Class
 * @description ApplicationList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ApplicationListTest extends TestCase
{
    protected $ApplicationList;

    /**
     * Test "ApplicationList"
     */
    public function setUp() : void
    {
        $this->ApplicationList = new ApplicationList();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->ApplicationList->setTotal(12345);
        $this->assertEquals($this->ApplicationList->getTotal(), 12345);
        $this->assertIsInt($this->ApplicationList->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->ApplicationList->setStart(12345);
        $this->assertEquals($this->ApplicationList->getStart(), 12345);
        $this->assertIsInt($this->ApplicationList->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->ApplicationList->setEnd(12345);
        $this->assertEquals($this->ApplicationList->getEnd(), 12345);
        $this->assertIsInt($this->ApplicationList->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->ApplicationList->setPage(12345);
        $this->assertEquals($this->ApplicationList->getPage(), 12345);
        $this->assertIsInt($this->ApplicationList->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->ApplicationList->setNumPages(12345);
        $this->assertEquals($this->ApplicationList->getNumPages(), 12345);
        $this->assertIsInt($this->ApplicationList->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->ApplicationList->setPageSize(12345);
        $this->assertEquals($this->ApplicationList->getPageSize(), 12345);
        $this->assertIsInt($this->ApplicationList->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->ApplicationList->setNextPageUri('TEST_STRING');
        $this->assertStringContainsString($this->ApplicationList->getNextPageUri(), 'TEST_STRING');
        $this->assertIsString($this->ApplicationList->getNextPageUri());
        

    }
    /**
     * Test attribute "applications"
     */
    public function testPropertyApplications()
    {
        $this->ApplicationList->setApplications(array());
        $this->assertIsArray($this->ApplicationList->getApplications());
    }
}
