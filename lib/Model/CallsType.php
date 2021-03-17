<?php
/**
 * CallsType
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
 * CallsType Class Doc Comment
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallsType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallsType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'domain_id' => 'int',
        'session_id' => 'int',
        'scenario_id' => 'int',
        'datetime_start' => 'string',
        'phone_a' => 'string',
        'phone_b' => 'string',
        'is_incoming' => 'bool',
        'call_result_code' => 'int',
        'duration' => 'int',
        'record_url' => 'string',
        'call_cost' => 'float',
        'call_data' => 'string',
        'call_resources' => 'string',
        'call_calls' => 'string',
        'call_records' => 'string',
        'call_status' => 'int',
        'recalc' => 'bool',
        'campaign_id' => 'int',
        'processing' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'domain_id' => null,
        'session_id' => null,
        'scenario_id' => null,
        'datetime_start' => null,
        'phone_a' => null,
        'phone_b' => null,
        'is_incoming' => null,
        'call_result_code' => null,
        'duration' => null,
        'record_url' => null,
        'call_cost' => null,
        'call_data' => null,
        'call_resources' => null,
        'call_calls' => null,
        'call_records' => null,
        'call_status' => null,
        'recalc' => null,
        'campaign_id' => null,
        'processing' => null
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
        'domain_id' => 'domain_id',
        'session_id' => 'session_id',
        'scenario_id' => 'scenario_id',
        'datetime_start' => 'datetime_start',
        'phone_a' => 'phone_a',
        'phone_b' => 'phone_b',
        'is_incoming' => 'is_incoming',
        'call_result_code' => 'call_result_code',
        'duration' => 'duration',
        'record_url' => 'record_url',
        'call_cost' => 'call_cost',
        'call_data' => 'call_data',
        'call_resources' => 'call_resources',
        'call_calls' => 'call_calls',
        'call_records' => 'call_records',
        'call_status' => 'call_status',
        'recalc' => 'recalc',
        'campaign_id' => 'campaign_id',
        'processing' => 'processing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'domain_id' => 'setDomainId',
        'session_id' => 'setSessionId',
        'scenario_id' => 'setScenarioId',
        'datetime_start' => 'setDatetimeStart',
        'phone_a' => 'setPhoneA',
        'phone_b' => 'setPhoneB',
        'is_incoming' => 'setIsIncoming',
        'call_result_code' => 'setCallResultCode',
        'duration' => 'setDuration',
        'record_url' => 'setRecordUrl',
        'call_cost' => 'setCallCost',
        'call_data' => 'setCallData',
        'call_resources' => 'setCallResources',
        'call_calls' => 'setCallCalls',
        'call_records' => 'setCallRecords',
        'call_status' => 'setCallStatus',
        'recalc' => 'setRecalc',
        'campaign_id' => 'setCampaignId',
        'processing' => 'setProcessing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'domain_id' => 'getDomainId',
        'session_id' => 'getSessionId',
        'scenario_id' => 'getScenarioId',
        'datetime_start' => 'getDatetimeStart',
        'phone_a' => 'getPhoneA',
        'phone_b' => 'getPhoneB',
        'is_incoming' => 'getIsIncoming',
        'call_result_code' => 'getCallResultCode',
        'duration' => 'getDuration',
        'record_url' => 'getRecordUrl',
        'call_cost' => 'getCallCost',
        'call_data' => 'getCallData',
        'call_resources' => 'getCallResources',
        'call_calls' => 'getCallCalls',
        'call_records' => 'getCallRecords',
        'call_status' => 'getCallStatus',
        'recalc' => 'getRecalc',
        'campaign_id' => 'getCampaignId',
        'processing' => 'getProcessing'
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
        $this->container['domain_id'] = isset($data['domain_id']) ? $data['domain_id'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['scenario_id'] = isset($data['scenario_id']) ? $data['scenario_id'] : null;
        $this->container['datetime_start'] = isset($data['datetime_start']) ? $data['datetime_start'] : null;
        $this->container['phone_a'] = isset($data['phone_a']) ? $data['phone_a'] : null;
        $this->container['phone_b'] = isset($data['phone_b']) ? $data['phone_b'] : null;
        $this->container['is_incoming'] = isset($data['is_incoming']) ? $data['is_incoming'] : null;
        $this->container['call_result_code'] = isset($data['call_result_code']) ? $data['call_result_code'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['record_url'] = isset($data['record_url']) ? $data['record_url'] : null;
        $this->container['call_cost'] = isset($data['call_cost']) ? $data['call_cost'] : null;
        $this->container['call_data'] = isset($data['call_data']) ? $data['call_data'] : null;
        $this->container['call_resources'] = isset($data['call_resources']) ? $data['call_resources'] : null;
        $this->container['call_calls'] = isset($data['call_calls']) ? $data['call_calls'] : null;
        $this->container['call_records'] = isset($data['call_records']) ? $data['call_records'] : null;
        $this->container['call_status'] = isset($data['call_status']) ? $data['call_status'] : null;
        $this->container['recalc'] = isset($data['recalc']) ? $data['recalc'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
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
     * Gets session_id
     *
     * @return int
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param int $session_id session_id
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets scenario_id
     *
     * @return int
     */
    public function getScenarioId()
    {
        return $this->container['scenario_id'];
    }

    /**
     * Sets scenario_id
     *
     * @param int $scenario_id scenario_id
     *
     * @return $this
     */
    public function setScenarioId($scenario_id)
    {
        $this->container['scenario_id'] = $scenario_id;

        return $this;
    }

    /**
     * Gets datetime_start
     *
     * @return string
     */
    public function getDatetimeStart()
    {
        return $this->container['datetime_start'];
    }

    /**
     * Sets datetime_start
     *
     * @param string $datetime_start datetime_start
     *
     * @return $this
     */
    public function setDatetimeStart($datetime_start)
    {
        $this->container['datetime_start'] = $datetime_start;

        return $this;
    }

    /**
     * Gets phone_a
     *
     * @return string
     */
    public function getPhoneA()
    {
        return $this->container['phone_a'];
    }

    /**
     * Sets phone_a
     *
     * @param string $phone_a phone_a
     *
     * @return $this
     */
    public function setPhoneA($phone_a)
    {
        $this->container['phone_a'] = $phone_a;

        return $this;
    }

    /**
     * Gets phone_b
     *
     * @return string
     */
    public function getPhoneB()
    {
        return $this->container['phone_b'];
    }

    /**
     * Sets phone_b
     *
     * @param string $phone_b phone_b
     *
     * @return $this
     */
    public function setPhoneB($phone_b)
    {
        $this->container['phone_b'] = $phone_b;

        return $this;
    }

    /**
     * Gets is_incoming
     *
     * @return bool
     */
    public function getIsIncoming()
    {
        return $this->container['is_incoming'];
    }

    /**
     * Sets is_incoming
     *
     * @param bool $is_incoming is_incoming
     *
     * @return $this
     */
    public function setIsIncoming($is_incoming)
    {
        $this->container['is_incoming'] = $is_incoming;

        return $this;
    }

    /**
     * Gets call_result_code
     *
     * @return int
     */
    public function getCallResultCode()
    {
        return $this->container['call_result_code'];
    }

    /**
     * Sets call_result_code
     *
     * @param int $call_result_code call_result_code
     *
     * @return $this
     */
    public function setCallResultCode($call_result_code)
    {
        $this->container['call_result_code'] = $call_result_code;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets record_url
     *
     * @return string
     */
    public function getRecordUrl()
    {
        return $this->container['record_url'];
    }

    /**
     * Sets record_url
     *
     * @param string $record_url record_url
     *
     * @return $this
     */
    public function setRecordUrl($record_url)
    {
        $this->container['record_url'] = $record_url;

        return $this;
    }

    /**
     * Gets call_cost
     *
     * @return float
     */
    public function getCallCost()
    {
        return $this->container['call_cost'];
    }

    /**
     * Sets call_cost
     *
     * @param float $call_cost call_cost
     *
     * @return $this
     */
    public function setCallCost($call_cost)
    {
        $this->container['call_cost'] = $call_cost;

        return $this;
    }

    /**
     * Gets call_data
     *
     * @return string
     */
    public function getCallData()
    {
        return $this->container['call_data'];
    }

    /**
     * Sets call_data
     *
     * @param string $call_data call_data
     *
     * @return $this
     */
    public function setCallData($call_data)
    {
        $this->container['call_data'] = $call_data;

        return $this;
    }

    /**
     * Gets call_resources
     *
     * @return string
     */
    public function getCallResources()
    {
        return $this->container['call_resources'];
    }

    /**
     * Sets call_resources
     *
     * @param string $call_resources call_resources
     *
     * @return $this
     */
    public function setCallResources($call_resources)
    {
        $this->container['call_resources'] = $call_resources;

        return $this;
    }

    /**
     * Gets call_calls
     *
     * @return string
     */
    public function getCallCalls()
    {
        return $this->container['call_calls'];
    }

    /**
     * Sets call_calls
     *
     * @param string $call_calls call_calls
     *
     * @return $this
     */
    public function setCallCalls($call_calls)
    {
        $this->container['call_calls'] = $call_calls;

        return $this;
    }

    /**
     * Gets call_records
     *
     * @return string
     */
    public function getCallRecords()
    {
        return $this->container['call_records'];
    }

    /**
     * Sets call_records
     *
     * @param string $call_records call_records
     *
     * @return $this
     */
    public function setCallRecords($call_records)
    {
        $this->container['call_records'] = $call_records;

        return $this;
    }

    /**
     * Gets call_status
     *
     * @return int
     */
    public function getCallStatus()
    {
        return $this->container['call_status'];
    }

    /**
     * Sets call_status
     *
     * @param int $call_status call_status
     *
     * @return $this
     */
    public function setCallStatus($call_status)
    {
        $this->container['call_status'] = $call_status;

        return $this;
    }

    /**
     * Gets recalc
     *
     * @return bool
     */
    public function getRecalc()
    {
        return $this->container['recalc'];
    }

    /**
     * Sets recalc
     *
     * @param bool $recalc recalc
     *
     * @return $this
     */
    public function setRecalc($recalc)
    {
        $this->container['recalc'] = $recalc;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets processing
     *
     * @return bool
     */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
     * Sets processing
     *
     * @param bool $processing processing
     *
     * @return $this
     */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;

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


