<?php
/**
 * MessagingEventMessageSenderDataType
 *
 * PHP version 5
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Voximplant Kit API Documentation
 *
 * <h1>Basic description</h1> <p>HTTP API is available via the <u>https://kitapi-{{region}}.voximplant.com/api/v3/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to create an api token on api tokens page. Pass this token as access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VoximplantKit\Model;

use \ArrayAccess;
use VoximplantKit\ObjectSerializer;

/**
 * MessagingEventMessageSenderDataType Class Doc Comment
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagingEventMessageSenderDataType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessagingEventMessageSenderDataType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sender_id' => 'int',
        'sender_username' => 'string',
        'sender_display_name' => 'string',
        'sender_avatar' => 'string',
        'sender_email' => 'string',
        'is_bot' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sender_id' => null,
        'sender_username' => null,
        'sender_display_name' => null,
        'sender_avatar' => null,
        'sender_email' => null,
        'is_bot' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sender_id' => 'sender_id',
        'sender_username' => 'sender_username',
        'sender_display_name' => 'sender_display_name',
        'sender_avatar' => 'sender_avatar',
        'sender_email' => 'sender_email',
        'is_bot' => 'is_bot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender_id' => 'setSenderId',
        'sender_username' => 'setSenderUsername',
        'sender_display_name' => 'setSenderDisplayName',
        'sender_avatar' => 'setSenderAvatar',
        'sender_email' => 'setSenderEmail',
        'is_bot' => 'setIsBot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender_id' => 'getSenderId',
        'sender_username' => 'getSenderUsername',
        'sender_display_name' => 'getSenderDisplayName',
        'sender_avatar' => 'getSenderAvatar',
        'sender_email' => 'getSenderEmail',
        'is_bot' => 'getIsBot'
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
        return self::$swaggerModelName;
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
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['sender_username'] = isset($data['sender_username']) ? $data['sender_username'] : null;
        $this->container['sender_display_name'] = isset($data['sender_display_name']) ? $data['sender_display_name'] : null;
        $this->container['sender_avatar'] = isset($data['sender_avatar']) ? $data['sender_avatar'] : null;
        $this->container['sender_email'] = isset($data['sender_email']) ? $data['sender_email'] : null;
        $this->container['is_bot'] = isset($data['is_bot']) ? $data['is_bot'] : null;
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
     * Gets sender_id
     *
     * @return int
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param int $sender_id sender_id
     *
     * @return $this
     */
    public function setSenderId($sender_id)
    {
        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets sender_username
     *
     * @return string
     */
    public function getSenderUsername()
    {
        return $this->container['sender_username'];
    }

    /**
     * Sets sender_username
     *
     * @param string $sender_username sender_username
     *
     * @return $this
     */
    public function setSenderUsername($sender_username)
    {
        $this->container['sender_username'] = $sender_username;

        return $this;
    }

    /**
     * Gets sender_display_name
     *
     * @return string
     */
    public function getSenderDisplayName()
    {
        return $this->container['sender_display_name'];
    }

    /**
     * Sets sender_display_name
     *
     * @param string $sender_display_name sender_display_name
     *
     * @return $this
     */
    public function setSenderDisplayName($sender_display_name)
    {
        $this->container['sender_display_name'] = $sender_display_name;

        return $this;
    }

    /**
     * Gets sender_avatar
     *
     * @return string
     */
    public function getSenderAvatar()
    {
        return $this->container['sender_avatar'];
    }

    /**
     * Sets sender_avatar
     *
     * @param string $sender_avatar sender_avatar
     *
     * @return $this
     */
    public function setSenderAvatar($sender_avatar)
    {
        $this->container['sender_avatar'] = $sender_avatar;

        return $this;
    }

    /**
     * Gets sender_email
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->container['sender_email'];
    }

    /**
     * Sets sender_email
     *
     * @param string $sender_email sender_email
     *
     * @return $this
     */
    public function setSenderEmail($sender_email)
    {
        $this->container['sender_email'] = $sender_email;

        return $this;
    }

    /**
     * Gets is_bot
     *
     * @return bool
     */
    public function getIsBot()
    {
        return $this->container['is_bot'];
    }

    /**
     * Sets is_bot
     *
     * @param bool $is_bot is_bot
     *
     * @return $this
     */
    public function setIsBot($is_bot)
    {
        $this->container['is_bot'] = $is_bot;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


