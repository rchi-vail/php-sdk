<?php
/**
 * MakeCallRequest
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
 * MakeCallRequest Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MakeCallRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MakeCallRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'string',
        'to' => 'string',
        'application_id' => 'string',
        'send_digits' => 'string',
        'if_machine' => 'string',
        'if_machine_url' => 'string',
        'timeout' => 'int',
        'parent_call_id' => 'string',
        'privacy_mode' => 'bool',
        'call_connect_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from' => null,
        'to' => null,
        'application_id' => null,
        'send_digits' => null,
        'if_machine' => null,
        'if_machine_url' => null,
        'timeout' => 'int32',
        'parent_call_id' => null,
        'privacy_mode' => null,
        'call_connect_url' => null
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
        'from' => 'from',
        'to' => 'to',
        'application_id' => 'applicationId',
        'send_digits' => 'sendDigits',
        'if_machine' => 'ifMachine',
        'if_machine_url' => 'ifMachineUrl',
        'timeout' => 'timeout',
        'parent_call_id' => 'parentCallId',
        'privacy_mode' => 'privacyMode',
        'call_connect_url' => 'callConnectUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'to' => 'setTo',
        'application_id' => 'setApplicationId',
        'send_digits' => 'setSendDigits',
        'if_machine' => 'setIfMachine',
        'if_machine_url' => 'setIfMachineUrl',
        'timeout' => 'setTimeout',
        'parent_call_id' => 'setParentCallId',
        'privacy_mode' => 'setPrivacyMode',
        'call_connect_url' => 'setCallConnectUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'to' => 'getTo',
        'application_id' => 'getApplicationId',
        'send_digits' => 'getSendDigits',
        'if_machine' => 'getIfMachine',
        'if_machine_url' => 'getIfMachineUrl',
        'timeout' => 'getTimeout',
        'parent_call_id' => 'getParentCallId',
        'privacy_mode' => 'getPrivacyMode',
        'call_connect_url' => 'getCallConnectUrl'
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['send_digits'] = $data['send_digits'] ?? null;
        $this->container['if_machine'] = $data['if_machine'] ?? null;
        $this->container['if_machine_url'] = $data['if_machine_url'] ?? null;
        $this->container['timeout'] = $data['timeout'] ?? 30;
        $this->container['parent_call_id'] = $data['parent_call_id'] ?? null;
        $this->container['privacy_mode'] = $data['privacy_mode'] ?? null;
        $this->container['call_connect_url'] = $data['call_connect_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
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
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Phone number to use as the caller ID. This can be: (a) The To or From number provided in FreeClimb's initial request to your app or (b) Any incoming phone number you have purchased from FreeClimb.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Phone number to place the Call to.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id Required if no `parentCallId` or `callConnectUrl` has been provided. ID of the application FreeClimb should use to handle this phone call. FreeClimb will use the `callConnectUrl` and `statusCallbackUrl` set on the application unless the `callConnectUrl` attribute is also provided with the request. In this case, the URL specified in that `callConnectUrl` attribute will be used as a replacement of the `callConnectUrl` originally assigned in the application. If the `callConnectUrl` is not set as either an attribute of the request or as part of the specified application, an error will be provided. The application’s voiceUrl parameter is not used for outbound calls.
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets send_digits
     *
     * @return string|null
     */
    public function getSendDigits()
    {
        return $this->container['send_digits'];
    }

    /**
     * Sets send_digits
     *
     * @param string|null $send_digits String of digits to dial after connecting to the number. It can include digits `0-9`, `*`, and `#`, and allows embedding a pause between the output of individual digits. The default pause is 500 milliseconds. So, a string such as *1234#* will be played in 2 seconds because of the 4 standard pauses implied within the string. A custom pause is specified by including a positive integer wrapped in curly braces: {n}. For more information, see **sendDigits examples** below.
     *
     * @return self
     */
    public function setSendDigits($send_digits)
    {
        $this->container['send_digits'] = $send_digits;

        return $this;
    }

    /**
     * Gets if_machine
     *
     * @return string|null
     */
    public function getIfMachine()
    {
        return $this->container['if_machine'];
    }

    /**
     * Sets if_machine
     *
     * @param string|null $if_machine Specifies how FreeClimb should handle this Call if an answering machine answers it.
     *
     * @return self
     */
    public function setIfMachine($if_machine)
    {
        $this->container['if_machine'] = $if_machine;

        return $this;
    }

    /**
     * Gets if_machine_url
     *
     * @return string|null
     */
    public function getIfMachineUrl()
    {
        return $this->container['if_machine_url'];
    }

    /**
     * Sets if_machine_url
     *
     * @param string|null $if_machine_url This attribute specifies a URL to which FreeClimb will make a POST request when an answering machine or a fax machine is detected. This URL is required if the ifMachine flag is set to redirect. When ifMachine is set to hangup, ifMachineUrl must not be included in the request. For more information, see **ifMachineUrl example** below.
     *
     * @return self
     */
    public function setIfMachineUrl($if_machine_url)
    {
        $this->container['if_machine_url'] = $if_machine_url;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout Number of seconds that FreeClimb should allow the phone to ring before assuming there is no answer. Default is 30 seconds. Maximum allowed ring-time is determined by the target phone's provider. Note that most providers limit ring-time to 120 seconds.
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets parent_call_id
     *
     * @return string|null
     */
    public function getParentCallId()
    {
        return $this->container['parent_call_id'];
    }

    /**
     * Sets parent_call_id
     *
     * @param string|null $parent_call_id Required if no `applicationId` or `callConnectUrl` has been provided. The ID of the parent Call in the case that this new Call is meant to be treated as a child of an existing Call. This attribute should be included when possible to reduce latency when adding child calls to Conferences containing the parent Call. A call can only be used as a parent once the call is in progress or as an inbound call that is still ringing. An outbound call is considered to be in progress once the `outdialConnect` or `outdialApiConnect` webhook is invoked. An inbound call is ringing when the inbound webhook is invoked. If a `callConnectUrl` attribute is also included with the `parentCallId` in the request, this URL will be used as a replacement of the `callConnectUrl` originally assigned in the parent call.
     *
     * @return self
     */
    public function setParentCallId($parent_call_id)
    {
        $this->container['parent_call_id'] = $parent_call_id;

        return $this;
    }

    /**
     * Gets privacy_mode
     *
     * @return bool|null
     */
    public function getPrivacyMode()
    {
        return $this->container['privacy_mode'];
    }

    /**
     * Sets privacy_mode
     *
     * @param bool|null $privacy_mode Activate privacy mode in order to obscure log data that can potentially expose private information.
     *
     * @return self
     */
    public function setPrivacyMode($privacy_mode)
    {
        $this->container['privacy_mode'] = $privacy_mode;

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
     * @param string|null $call_connect_url The URL that FreeClimb should use to handle this phone call. If an applicationId or parentCallId have already been provided, this callConnectUrl attribute will be used as a replacement of the callConnectUrl originally assigned in the application or parent call.
     *
     * @return self
     */
    public function setCallConnectUrl($call_connect_url)
    {
        $this->container['call_connect_url'] = $call_connect_url;

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


