<?php
/**
 * ObjsEnterpriseUser
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Slack Web API
 *
 * One way to interact with the Slack platform is its HTTP RPC-based Web API, a collection of methods requiring OAuth 2.0-based user, bot, or workspace tokens blessed with related OAuth scopes.
 *
 * The version of the OpenAPI document: 1.2.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.0-SNAPSHOT
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
 * ObjsEnterpriseUser Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjsEnterpriseUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'objs_enterprise_user';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enterprise_id' => 'string',
        'enterprise_name' => 'string',
        'id' => 'string',
        'is_admin' => 'bool',
        'is_owner' => 'bool',
        'teams' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'enterprise_id' => null,
        'enterprise_name' => null,
        'id' => null,
        'is_admin' => null,
        'is_owner' => null,
        'teams' => null
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
        'enterprise_id' => 'enterprise_id',
        'enterprise_name' => 'enterprise_name',
        'id' => 'id',
        'is_admin' => 'is_admin',
        'is_owner' => 'is_owner',
        'teams' => 'teams'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterprise_id' => 'setEnterpriseId',
        'enterprise_name' => 'setEnterpriseName',
        'id' => 'setId',
        'is_admin' => 'setIsAdmin',
        'is_owner' => 'setIsOwner',
        'teams' => 'setTeams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterprise_id' => 'getEnterpriseId',
        'enterprise_name' => 'getEnterpriseName',
        'id' => 'getId',
        'is_admin' => 'getIsAdmin',
        'is_owner' => 'getIsOwner',
        'teams' => 'getTeams'
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
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['enterprise_name'] = isset($data['enterprise_name']) ? $data['enterprise_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_admin'] = isset($data['is_admin']) ? $data['is_admin'] : null;
        $this->container['is_owner'] = isset($data['is_owner']) ? $data['is_owner'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['enterprise_id'] === null) {
            $invalidProperties[] = "'enterprise_id' can't be null";
        }
        if (!preg_match("/^[E][A-Z0-9]{8}$/", $this->container['enterprise_id'])) {
            $invalidProperties[] = "invalid value for 'enterprise_id', must be conform to the pattern /^[E][A-Z0-9]{8}$/.";
        }

        if ($this->container['enterprise_name'] === null) {
            $invalidProperties[] = "'enterprise_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[W][A-Z0-9]{8}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[W][A-Z0-9]{8}$/.";
        }

        if ($this->container['is_admin'] === null) {
            $invalidProperties[] = "'is_admin' can't be null";
        }
        if ($this->container['is_owner'] === null) {
            $invalidProperties[] = "'is_owner' can't be null";
        }
        if ($this->container['teams'] === null) {
            $invalidProperties[] = "'teams' can't be null";
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
     * Gets enterprise_id
     *
     * @return string
     */
    public function getEnterpriseId()
    {
        return $this->container['enterprise_id'];
    }

    /**
     * Sets enterprise_id
     *
     * @param string $enterprise_id enterprise_id
     *
     * @return $this
     */
    public function setEnterpriseId($enterprise_id)
    {

        if ((!preg_match("/^[E][A-Z0-9]{8}$/", $enterprise_id))) {
            throw new \InvalidArgumentException("invalid value for $enterprise_id when calling ObjsEnterpriseUser., must conform to the pattern /^[E][A-Z0-9]{8}$/.");
        }

        $this->container['enterprise_id'] = $enterprise_id;

        return $this;
    }

    /**
     * Gets enterprise_name
     *
     * @return string
     */
    public function getEnterpriseName()
    {
        return $this->container['enterprise_name'];
    }

    /**
     * Sets enterprise_name
     *
     * @param string $enterprise_name enterprise_name
     *
     * @return $this
     */
    public function setEnterpriseName($enterprise_name)
    {
        $this->container['enterprise_name'] = $enterprise_name;

        return $this;
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

        if ((!preg_match("/^[W][A-Z0-9]{8}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling ObjsEnterpriseUser., must conform to the pattern /^[W][A-Z0-9]{8}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_admin
     *
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->container['is_admin'];
    }

    /**
     * Sets is_admin
     *
     * @param bool $is_admin is_admin
     *
     * @return $this
     */
    public function setIsAdmin($is_admin)
    {
        $this->container['is_admin'] = $is_admin;

        return $this;
    }

    /**
     * Gets is_owner
     *
     * @return bool
     */
    public function getIsOwner()
    {
        return $this->container['is_owner'];
    }

    /**
     * Sets is_owner
     *
     * @param bool $is_owner is_owner
     *
     * @return $this
     */
    public function setIsOwner($is_owner)
    {
        $this->container['is_owner'] = $is_owner;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return string[]
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param string[] $teams teams
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

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
}


