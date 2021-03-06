<?php
/**
 * AttemptType
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
 * AttemptType Class Doc Comment
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttemptType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AttemptType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'calllist_item_id' => 'int',
        'datetime_start' => 'string',
        'datetime_end' => 'string',
        'attempt_num' => 'int',
        'record_url' => 'string',
        'attempt_status' => 'bool',
        'call_data' => 'string',
        'attempt_cost' => 'float',
        'session_id' => 'string',
        'duration' => 'int',
        'recalc' => 'bool',
        'campaign_id' => 'int',
        'call_result_code' => 'int',
        'call_resources' => 'string',
        'call_calls' => 'string',
        'call_records' => 'string',
        'processing' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'calllist_item_id' => null,
        'datetime_start' => null,
        'datetime_end' => null,
        'attempt_num' => null,
        'record_url' => null,
        'attempt_status' => null,
        'call_data' => null,
        'attempt_cost' => 'float',
        'session_id' => null,
        'duration' => null,
        'recalc' => null,
        'campaign_id' => null,
        'call_result_code' => null,
        'call_resources' => null,
        'call_calls' => null,
        'call_records' => null,
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
        'calllist_item_id' => 'calllist_item_id',
        'datetime_start' => 'datetime_start',
        'datetime_end' => 'datetime_end',
        'attempt_num' => 'attempt_num',
        'record_url' => 'record_url',
        'attempt_status' => 'attempt_status',
        'call_data' => 'call_data',
        'attempt_cost' => 'attempt_cost',
        'session_id' => 'session_id',
        'duration' => 'duration',
        'recalc' => 'recalc',
        'campaign_id' => 'campaign_id',
        'call_result_code' => 'call_result_code',
        'call_resources' => 'call_resources',
        'call_calls' => 'call_calls',
        'call_records' => 'call_records',
        'processing' => 'processing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'calllist_item_id' => 'setCalllistItemId',
        'datetime_start' => 'setDatetimeStart',
        'datetime_end' => 'setDatetimeEnd',
        'attempt_num' => 'setAttemptNum',
        'record_url' => 'setRecordUrl',
        'attempt_status' => 'setAttemptStatus',
        'call_data' => 'setCallData',
        'attempt_cost' => 'setAttemptCost',
        'session_id' => 'setSessionId',
        'duration' => 'setDuration',
        'recalc' => 'setRecalc',
        'campaign_id' => 'setCampaignId',
        'call_result_code' => 'setCallResultCode',
        'call_resources' => 'setCallResources',
        'call_calls' => 'setCallCalls',
        'call_records' => 'setCallRecords',
        'processing' => 'setProcessing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'calllist_item_id' => 'getCalllistItemId',
        'datetime_start' => 'getDatetimeStart',
        'datetime_end' => 'getDatetimeEnd',
        'attempt_num' => 'getAttemptNum',
        'record_url' => 'getRecordUrl',
        'attempt_status' => 'getAttemptStatus',
        'call_data' => 'getCallData',
        'attempt_cost' => 'getAttemptCost',
        'session_id' => 'getSessionId',
        'duration' => 'getDuration',
        'recalc' => 'getRecalc',
        'campaign_id' => 'getCampaignId',
        'call_result_code' => 'getCallResultCode',
        'call_resources' => 'getCallResources',
        'call_calls' => 'getCallCalls',
        'call_records' => 'getCallRecords',
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
        $this->container['calllist_item_id'] = isset($data['calllist_item_id']) ? $data['calllist_item_id'] : null;
        $this->container['datetime_start'] = isset($data['datetime_start']) ? $data['datetime_start'] : null;
        $this->container['datetime_end'] = isset($data['datetime_end']) ? $data['datetime_end'] : null;
        $this->container['attempt_num'] = isset($data['attempt_num']) ? $data['attempt_num'] : null;
        $this->container['record_url'] = isset($data['record_url']) ? $data['record_url'] : null;
        $this->container['attempt_status'] = isset($data['attempt_status']) ? $data['attempt_status'] : null;
        $this->container['call_data'] = isset($data['call_data']) ? $data['call_data'] : null;
        $this->container['attempt_cost'] = isset($data['attempt_cost']) ? $data['attempt_cost'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['recalc'] = isset($data['recalc']) ? $data['recalc'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['call_result_code'] = isset($data['call_result_code']) ? $data['call_result_code'] : null;
        $this->container['call_resources'] = isset($data['call_resources']) ? $data['call_resources'] : null;
        $this->container['call_calls'] = isset($data['call_calls']) ? $data['call_calls'] : null;
        $this->container['call_records'] = isset($data['call_records']) ? $data['call_records'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets calllist_item_id
     *
     * @return int
     */
    public function getCalllistItemId()
    {
        return $this->container['calllist_item_id'];
    }

    /**
     * Sets calllist_item_id
     *
     * @param int $calllist_item_id calllist_item_id
     *
     * @return $this
     */
    public function setCalllistItemId($calllist_item_id)
    {
        $this->container['calllist_item_id'] = $calllist_item_id;

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
     * Gets datetime_end
     *
     * @return string
     */
    public function getDatetimeEnd()
    {
        return $this->container['datetime_end'];
    }

    /**
     * Sets datetime_end
     *
     * @param string $datetime_end datetime_end
     *
     * @return $this
     */
    public function setDatetimeEnd($datetime_end)
    {
        $this->container['datetime_end'] = $datetime_end;

        return $this;
    }

    /**
     * Gets attempt_num
     *
     * @return int
     */
    public function getAttemptNum()
    {
        return $this->container['attempt_num'];
    }

    /**
     * Sets attempt_num
     *
     * @param int $attempt_num attempt_num
     *
     * @return $this
     */
    public function setAttemptNum($attempt_num)
    {
        $this->container['attempt_num'] = $attempt_num;

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
     * Gets attempt_status
     *
     * @return bool
     */
    public function getAttemptStatus()
    {
        return $this->container['attempt_status'];
    }

    /**
     * Sets attempt_status
     *
     * @param bool $attempt_status attempt_status
     *
     * @return $this
     */
    public function setAttemptStatus($attempt_status)
    {
        $this->container['attempt_status'] = $attempt_status;

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
     * Gets attempt_cost
     *
     * @return float
     */
    public function getAttemptCost()
    {
        return $this->container['attempt_cost'];
    }

    /**
     * Sets attempt_cost
     *
     * @param float $attempt_cost attempt_cost
     *
     * @return $this
     */
    public function setAttemptCost($attempt_cost)
    {
        $this->container['attempt_cost'] = $attempt_cost;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id session_id
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

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


