<?php
/**
 * CallerIDType
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
 * CallerIDType Class Doc Comment
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallerIDType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallerIDType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'callerid_number' => 'string',
        'active' => 'bool',
        'verified_until' => 'string',
        'domain_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'callerid_number' => null,
        'active' => null,
        'verified_until' => null,
        'domain_id' => null
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
        'id' => 'id',
        'callerid_number' => 'callerid_number',
        'active' => 'active',
        'verified_until' => 'verified_until',
        'domain_id' => 'domain_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'callerid_number' => 'setCalleridNumber',
        'active' => 'setActive',
        'verified_until' => 'setVerifiedUntil',
        'domain_id' => 'setDomainId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'callerid_number' => 'getCalleridNumber',
        'active' => 'getActive',
        'verified_until' => 'getVerifiedUntil',
        'domain_id' => 'getDomainId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['callerid_number'] = isset($data['callerid_number']) ? $data['callerid_number'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['verified_until'] = isset($data['verified_until']) ? $data['verified_until'] : null;
        $this->container['domain_id'] = isset($data['domain_id']) ? $data['domain_id'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets callerid_number
     *
     * @return string
     */
    public function getCalleridNumber()
    {
        return $this->container['callerid_number'];
    }

    /**
     * Sets callerid_number
     *
     * @param string $callerid_number callerid_number
     *
     * @return $this
     */
    public function setCalleridNumber($callerid_number)
    {
        $this->container['callerid_number'] = $callerid_number;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets verified_until
     *
     * @return string
     */
    public function getVerifiedUntil()
    {
        return $this->container['verified_until'];
    }

    /**
     * Sets verified_until
     *
     * @param string $verified_until verified_until
     *
     * @return $this
     */
    public function setVerifiedUntil($verified_until)
    {
        $this->container['verified_until'] = $verified_until;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return int
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param int $domain_id domain_id
     *
     * @return $this
     */
    public function setDomainId($domain_id)
    {
        $this->container['domain_id'] = $domain_id;

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


