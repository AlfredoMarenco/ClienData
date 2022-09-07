<?php
/**
 * BatchReadInputSimplePublicObjectId
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\Calls
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Calls
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Objects\Calls\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Objects\Calls\ObjectSerializer;

/**
 * BatchReadInputSimplePublicObjectId Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\Calls
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BatchReadInputSimplePublicObjectId implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchReadInputSimplePublicObjectId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'properties' => 'string[]',
        'properties_with_history' => 'string[]',
        'id_property' => 'string',
        'inputs' => '\HubSpot\Client\Crm\Objects\Calls\Model\SimplePublicObjectId[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'properties' => null,
        'properties_with_history' => null,
        'id_property' => null,
        'inputs' => null
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
        'properties' => 'properties',
        'properties_with_history' => 'propertiesWithHistory',
        'id_property' => 'idProperty',
        'inputs' => 'inputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'properties' => 'setProperties',
        'properties_with_history' => 'setPropertiesWithHistory',
        'id_property' => 'setIdProperty',
        'inputs' => 'setInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'properties' => 'getProperties',
        'properties_with_history' => 'getPropertiesWithHistory',
        'id_property' => 'getIdProperty',
        'inputs' => 'getInputs'
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
        $this->container['properties'] = $data['properties'] ?? null;
        $this->container['properties_with_history'] = $data['properties_with_history'] ?? null;
        $this->container['id_property'] = $data['id_property'] ?? null;
        $this->container['inputs'] = $data['inputs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['properties_with_history'] === null) {
            $invalidProperties[] = "'properties_with_history' can't be null";
        }
        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
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
     * Gets properties
     *
     * @return string[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[] $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets properties_with_history
     *
     * @return string[]
     */
    public function getPropertiesWithHistory()
    {
        return $this->container['properties_with_history'];
    }

    /**
     * Sets properties_with_history
     *
     * @param string[] $properties_with_history properties_with_history
     *
     * @return self
     */
    public function setPropertiesWithHistory($properties_with_history)
    {
        $this->container['properties_with_history'] = $properties_with_history;

        return $this;
    }

    /**
     * Gets id_property
     *
     * @return string|null
     */
    public function getIdProperty()
    {
        return $this->container['id_property'];
    }

    /**
     * Sets id_property
     *
     * @param string|null $id_property id_property
     *
     * @return self
     */
    public function setIdProperty($id_property)
    {
        $this->container['id_property'] = $id_property;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return \HubSpot\Client\Crm\Objects\Calls\Model\SimplePublicObjectId[]
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \HubSpot\Client\Crm\Objects\Calls\Model\SimplePublicObjectId[] $inputs inputs
     *
     * @return self
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


