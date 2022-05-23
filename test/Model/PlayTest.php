<?php
/**
 * PlayTest
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

use FreeClimb\Api\Model\Play;
use PHPUnit\Framework\TestCase;

/**
 * PlayTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;Play&#x60; command plays an audio file back to the caller. The audio file may be located at any location accessible via a URL. &#x60;Play&#x60; can exist as a stand-alone command or as a nested command. It does not allow barge-in unless nested within a &#x60;GetSpeech&#x60; command. The file will always be played to completion unless nested.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PlayTest extends TestCase
{
    protected $Play;

    /**
     * Test "Play"
     */
    public function setUp() : void
    {
        $this->Play = new Play();
    }
    /**
     * Test attribute "file"
     */
    public function testPropertyFile()
    {
        $this->Play->setFile('TEST_STRING');
        $this->assertStringContainsString($this->Play->getFile(), 'TEST_STRING');
        $this->assertIsString($this->Play->getFile());
        

    }
    /**
     * Test attribute "loop"
     */
    public function testPropertyLoop()
    {
        $this->Play->setLoop(12345);
        $this->assertEquals($this->Play->getLoop(), 12345);
        $this->assertIsInt($this->Play->getLoop());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->Play->setConferenceId('TEST_STRING');
        $this->assertStringContainsString($this->Play->getConferenceId(), 'TEST_STRING');
        $this->assertIsString($this->Play->getConferenceId());
        

    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->Play->setPrivacyMode(true);
        $this->assertEquals($this->Play->getPrivacyMode(), true);
        $this->assertIsBool($this->Play->getPrivacyMode());
    }
}
