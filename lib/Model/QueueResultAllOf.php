<?php
/**
 * QueueResultAllOf
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * QueueResultAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QueueResultAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QueueResult_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'queue_id' => 'string',
        'alias' => 'string',
        'max_size' => 'int',
        'current_size' => 'string',
        'average_wait_time' => 'string',
        'subresource_uris' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'queue_id' => null,
        'alias' => null,
        'max_size' => null,
        'current_size' => null,
        'average_wait_time' => null,
        'subresource_uris' => null
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
        'queue_id' => 'queueId',
        'alias' => 'alias',
        'max_size' => 'maxSize',
        'current_size' => 'currentSize',
        'average_wait_time' => 'averageWaitTime',
        'subresource_uris' => 'subresourceUris'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'queue_id' => 'setQueueId',
        'alias' => 'setAlias',
        'max_size' => 'setMaxSize',
        'current_size' => 'setCurrentSize',
        'average_wait_time' => 'setAverageWaitTime',
        'subresource_uris' => 'setSubresourceUris'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'queue_id' => 'getQueueId',
        'alias' => 'getAlias',
        'max_size' => 'getMaxSize',
        'current_size' => 'getCurrentSize',
        'average_wait_time' => 'getAverageWaitTime',
        'subresource_uris' => 'getSubresourceUris'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['queue_id'] = isset($data['queue_id']) ? $data['queue_id'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['max_size'] = isset($data['max_size']) ? $data['max_size'] : null;
        $this->container['current_size'] = isset($data['current_size']) ? $data['current_size'] : null;
        $this->container['average_wait_time'] = isset($data['average_wait_time']) ? $data['average_wait_time'] : null;
        $this->container['subresource_uris'] = isset($data['subresource_uris']) ? $data['subresource_uris'] : null;
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
     * @param string|null $account_id ID of the account that created this Queue.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets queue_id
     *
     * @return string|null
     */
    public function getQueueId()
    {
        return $this->container['queue_id'];
    }

    /**
     * Sets queue_id
     *
     * @param string|null $queue_id A string that uniquely identifies this Queue resource.
     *
     * @return $this
     */
    public function setQueueId($queue_id)
    {
        $this->container['queue_id'] = $queue_id;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias A description for this Queue.
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets max_size
     *
     * @return int|null
     */
    public function getMaxSize()
    {
        return $this->container['max_size'];
    }

    /**
     * Sets max_size
     *
     * @param int|null $max_size The maximum number of Calls permitted in the Queue. Default is 100. Maximum is 1000.
     *
     * @return $this
     */
    public function setMaxSize($max_size)
    {
        $this->container['max_size'] = $max_size;

        return $this;
    }

    /**
     * Gets current_size
     *
     * @return string|null
     */
    public function getCurrentSize()
    {
        return $this->container['current_size'];
    }

    /**
     * Sets current_size
     *
     * @param string|null $current_size Count of Calls currently in the Queue.
     *
     * @return $this
     */
    public function setCurrentSize($current_size)
    {
        $this->container['current_size'] = $current_size;

        return $this;
    }

    /**
     * Gets average_wait_time
     *
     * @return string|null
     */
    public function getAverageWaitTime()
    {
        return $this->container['average_wait_time'];
    }

    /**
     * Sets average_wait_time
     *
     * @param string|null $average_wait_time Average wait time (in seconds) of all Calls in the Queue.
     *
     * @return $this
     */
    public function setAverageWaitTime($average_wait_time)
    {
        $this->container['average_wait_time'] = $average_wait_time;

        return $this;
    }

    /**
     * Gets subresource_uris
     *
     * @return object|null
     */
    public function getSubresourceUris()
    {
        return $this->container['subresource_uris'];
    }

    /**
     * Sets subresource_uris
     *
     * @param object|null $subresource_uris List of subresources for this Queue (which includes Queue members).
     *
     * @return $this
     */
    public function setSubresourceUris($subresource_uris)
    {
        $this->container['subresource_uris'] = $subresource_uris;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


