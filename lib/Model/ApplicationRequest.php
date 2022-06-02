<?php
/**
 * ApplicationRequest
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
 * ApplicationRequest Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApplicationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alias' => 'string',
        'voice_url' => 'string',
        'voice_fallback_url' => 'string',
        'call_connect_url' => 'string',
        'status_callback_url' => 'string',
        'sms_url' => 'string',
        'sms_fallback_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alias' => null,
        'voice_url' => null,
        'voice_fallback_url' => null,
        'call_connect_url' => null,
        'status_callback_url' => null,
        'sms_url' => null,
        'sms_fallback_url' => null
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
        'alias' => 'alias',
        'voice_url' => 'voiceUrl',
        'voice_fallback_url' => 'voiceFallbackUrl',
        'call_connect_url' => 'callConnectUrl',
        'status_callback_url' => 'statusCallbackUrl',
        'sms_url' => 'smsUrl',
        'sms_fallback_url' => 'smsFallbackUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alias' => 'setAlias',
        'voice_url' => 'setVoiceUrl',
        'voice_fallback_url' => 'setVoiceFallbackUrl',
        'call_connect_url' => 'setCallConnectUrl',
        'status_callback_url' => 'setStatusCallbackUrl',
        'sms_url' => 'setSmsUrl',
        'sms_fallback_url' => 'setSmsFallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alias' => 'getAlias',
        'voice_url' => 'getVoiceUrl',
        'voice_fallback_url' => 'getVoiceFallbackUrl',
        'call_connect_url' => 'getCallConnectUrl',
        'status_callback_url' => 'getStatusCallbackUrl',
        'sms_url' => 'getSmsUrl',
        'sms_fallback_url' => 'getSmsFallbackUrl'
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
        $this->container['alias'] = $data['alias'] ?? null;
        $this->container['voice_url'] = $data['voice_url'] ?? null;
        $this->container['voice_fallback_url'] = $data['voice_fallback_url'] ?? null;
        $this->container['call_connect_url'] = $data['call_connect_url'] ?? null;
        $this->container['status_callback_url'] = $data['status_callback_url'] ?? null;
        $this->container['sms_url'] = $data['sms_url'] ?? null;
        $this->container['sms_fallback_url'] = $data['sms_fallback_url'] ?? null;
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
     * @param string|null $alias A human readable description of the application, with maximum length 64 characters.
     *
     * @return self
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets voice_url
     *
     * @return string|null
     */
    public function getVoiceUrl()
    {
        return $this->container['voice_url'];
    }

    /**
     * Sets voice_url
     *
     * @param string|null $voice_url The URL that FreeClimb will request when an inbound call arrives on a phone number assigned to this application. Used only for inbound calls.
     *
     * @return self
     */
    public function setVoiceUrl($voice_url)
    {
        $this->container['voice_url'] = $voice_url;

        return $this;
    }

    /**
     * Gets voice_fallback_url
     *
     * @return string|null
     */
    public function getVoiceFallbackUrl()
    {
        return $this->container['voice_fallback_url'];
    }

    /**
     * Sets voice_fallback_url
     *
     * @param string|null $voice_fallback_url The URL that FreeClimb will request if it times out waiting for a response from the voiceUrl. Used for inbound calls only. Note: A PerCL response is expected to control the inbound call.
     *
     * @return self
     */
    public function setVoiceFallbackUrl($voice_fallback_url)
    {
        $this->container['voice_fallback_url'] = $voice_fallback_url;

        return $this;
    }

    /**
     * Gets call_connect_url
     *
     * @return string|null
     */
    public function getCallConnectUrl()
    {
        return $this->container['call_connect_url'];
    }

    /**
     * Sets call_connect_url
     *
     * @param string|null $call_connect_url The URL that FreeClimb will request when an outbound call request is complete. Used for outbound calls only.  Note: A PerCL response is expected if the outbound call is connected (status=InProgress) to control the call.
     *
     * @return self
     */
    public function setCallConnectUrl($call_connect_url)
    {
        $this->container['call_connect_url'] = $call_connect_url;

        return $this;
    }

    /**
     * Gets status_callback_url
     *
     * @return string|null
     */
    public function getStatusCallbackUrl()
    {
        return $this->container['status_callback_url'];
    }

    /**
     * Sets status_callback_url
     *
     * @param string|null $status_callback_url The URL that FreeClimb will request to pass call status (such as call ended) to the application.  Note: This is a notification only; any PerCL returned will be ignored.
     *
     * @return self
     */
    public function setStatusCallbackUrl($status_callback_url)
    {
        $this->container['status_callback_url'] = $status_callback_url;

        return $this;
    }

    /**
     * Gets sms_url
     *
     * @return string|null
     */
    public function getSmsUrl()
    {
        return $this->container['sms_url'];
    }

    /**
     * Sets sms_url
     *
     * @param string|null $sms_url The URL that FreeClimb will request when a phone number assigned to this application receives an incoming SMS message. Used for inbound SMS only.  Note: Any PerCL returned will be ignored.
     *
     * @return self
     */
    public function setSmsUrl($sms_url)
    {
        $this->container['sms_url'] = $sms_url;

        return $this;
    }

    /**
     * Gets sms_fallback_url
     *
     * @return string|null
     */
    public function getSmsFallbackUrl()
    {
        return $this->container['sms_fallback_url'];
    }

    /**
     * Sets sms_fallback_url
     *
     * @param string|null $sms_fallback_url The URL that FreeClimb will request if it times out waiting for a response from the smsUrl. Used for inbound SMS only.  Note: Any PerCL returned will be ignored.
     *
     * @return self
     */
    public function setSmsFallbackUrl($sms_fallback_url)
    {
        $this->container['sms_fallback_url'] = $sms_fallback_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
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
    public function offsetGet($offset) : mixed
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
    public function offsetSet($offset, $value) : void
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
    public function offsetUnset($offset) : void
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
    public function jsonSerialize() : mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
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
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

}


