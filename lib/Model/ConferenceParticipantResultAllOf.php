<?php
/**
 * ConferenceParticipantResultAllOf
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
 * Do not edit the class manually.
 */

namespace FreeClimb\Api\Model;

use \ArrayAccess;
use \FreeClimb\Api\ObjectSerializer;

/**
 * ConferenceParticipantResultAllOf Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConferenceParticipantResultAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConferenceParticipantResult_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'conference_id' => 'string',
        'call_id' => 'string',
        'talk' => 'bool',
        'listen' => 'bool',
        'start_conf_on_enter' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'conference_id' => null,
        'call_id' => null,
        'talk' => null,
        'listen' => null,
        'start_conf_on_enter' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'accountId',
        'conference_id' => 'conferenceId',
        'call_id' => 'callId',
        'talk' => 'talk',
        'listen' => 'listen',
        'start_conf_on_enter' => 'startConfOnEnter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'conference_id' => 'setConferenceId',
        'call_id' => 'setCallId',
        'talk' => 'setTalk',
        'listen' => 'setListen',
        'start_conf_on_enter' => 'setStartConfOnEnter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'conference_id' => 'getConferenceId',
        'call_id' => 'getCallId',
        'talk' => 'getTalk',
        'listen' => 'getListen',
        'start_conf_on_enter' => 'getStartConfOnEnter'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['conference_id'] = $data['conference_id'] ?? null;
        $this->container['call_id'] = $data['call_id'] ?? null;
        $this->container['talk'] = $data['talk'] ?? null;
        $this->container['listen'] = $data['listen'] ?? null;
        $this->container['start_conf_on_enter'] = $data['start_conf_on_enter'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id ID of the account that created this participant.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets conference_id
     *
     * @return string|null
     */
    public function getConferenceId()
    {
        return $this->container['conference_id'];
    }

    /**
     * Sets conference_id
     *
     * @param string|null $conference_id ID of the conference this participant is in.
     *
     * @return self
     */
    public function setConferenceId($conference_id)
    {
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets call_id
     *
     * @return string|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string|null $call_id ID of the Call associated with this Participant.
     *
     * @return self
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets talk
     *
     * @return bool|null
     */
    public function getTalk()
    {
        return $this->container['talk'];
    }

    /**
     * Sets talk
     *
     * @param bool|null $talk True if this Participant has talk privileges in the Conference. False otherwise.
     *
     * @return self
     */
    public function setTalk($talk)
    {
        $this->container['talk'] = $talk;

        return $this;
    }

    /**
     * Gets listen
     *
     * @return bool|null
     */
    public function getListen()
    {
        return $this->container['listen'];
    }

    /**
     * Sets listen
     *
     * @param bool|null $listen True if this Participant has listen privileges in the Conference. False otherwise.
     *
     * @return self
     */
    public function setListen($listen)
    {
        $this->container['listen'] = $listen;

        return $this;
    }

    /**
     * Gets start_conf_on_enter
     *
     * @return bool|null
     */
    public function getStartConfOnEnter()
    {
        return $this->container['start_conf_on_enter'];
    }

    /**
     * Sets start_conf_on_enter
     *
     * @param bool|null $start_conf_on_enter True if this Participant joining the Conference caused the Conference to start (status = inProgress). False otherwise.
     *
     * @return self
     */
    public function setStartConfOnEnter($start_conf_on_enter)
    {
        $this->container['start_conf_on_enter'] = $start_conf_on_enter;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

}


