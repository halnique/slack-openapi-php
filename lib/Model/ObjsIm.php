<?php
/**
 * ObjsIm
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
 * ObjsIm Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjsIm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'objs_im';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created' => 'int',
        'id' => 'string',
        'is_app_home' => 'bool',
        'is_ext_shared' => 'bool',
        'is_im' => 'bool',
        'is_org_shared' => 'bool',
        'is_shared' => 'bool',
        'is_user_deleted' => 'bool',
        'priority' => 'float',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'created' => null,
        'id' => null,
        'is_app_home' => null,
        'is_ext_shared' => null,
        'is_im' => null,
        'is_org_shared' => null,
        'is_shared' => null,
        'is_user_deleted' => null,
        'priority' => null,
        'user' => null
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
        'created' => 'created',
        'id' => 'id',
        'is_app_home' => 'is_app_home',
        'is_ext_shared' => 'is_ext_shared',
        'is_im' => 'is_im',
        'is_org_shared' => 'is_org_shared',
        'is_shared' => 'is_shared',
        'is_user_deleted' => 'is_user_deleted',
        'priority' => 'priority',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'id' => 'setId',
        'is_app_home' => 'setIsAppHome',
        'is_ext_shared' => 'setIsExtShared',
        'is_im' => 'setIsIm',
        'is_org_shared' => 'setIsOrgShared',
        'is_shared' => 'setIsShared',
        'is_user_deleted' => 'setIsUserDeleted',
        'priority' => 'setPriority',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'id' => 'getId',
        'is_app_home' => 'getIsAppHome',
        'is_ext_shared' => 'getIsExtShared',
        'is_im' => 'getIsIm',
        'is_org_shared' => 'getIsOrgShared',
        'is_shared' => 'getIsShared',
        'is_user_deleted' => 'getIsUserDeleted',
        'priority' => 'getPriority',
        'user' => 'getUser'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_app_home'] = isset($data['is_app_home']) ? $data['is_app_home'] : null;
        $this->container['is_ext_shared'] = isset($data['is_ext_shared']) ? $data['is_ext_shared'] : null;
        $this->container['is_im'] = isset($data['is_im']) ? $data['is_im'] : null;
        $this->container['is_org_shared'] = isset($data['is_org_shared']) ? $data['is_org_shared'] : null;
        $this->container['is_shared'] = isset($data['is_shared']) ? $data['is_shared'] : null;
        $this->container['is_user_deleted'] = isset($data['is_user_deleted']) ? $data['is_user_deleted'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[D][A-Z0-9]{8}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[D][A-Z0-9]{8}$/.";
        }

        if ($this->container['is_im'] === null) {
            $invalidProperties[] = "'is_im' can't be null";
        }
        if ($this->container['is_org_shared'] === null) {
            $invalidProperties[] = "'is_org_shared' can't be null";
        }
        if ($this->container['is_user_deleted'] === null) {
            $invalidProperties[] = "'is_user_deleted' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if (!preg_match("/^[UW][A-Z0-9]{8}$/", $this->container['user'])) {
            $invalidProperties[] = "invalid value for 'user', must be conform to the pattern /^[UW][A-Z0-9]{8}$/.";
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
     * Gets created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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

        if ((!preg_match("/^[D][A-Z0-9]{8}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling ObjsIm., must conform to the pattern /^[D][A-Z0-9]{8}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_app_home
     *
     * @return bool|null
     */
    public function getIsAppHome()
    {
        return $this->container['is_app_home'];
    }

    /**
     * Sets is_app_home
     *
     * @param bool|null $is_app_home is_app_home
     *
     * @return $this
     */
    public function setIsAppHome($is_app_home)
    {
        $this->container['is_app_home'] = $is_app_home;

        return $this;
    }

    /**
     * Gets is_ext_shared
     *
     * @return bool|null
     */
    public function getIsExtShared()
    {
        return $this->container['is_ext_shared'];
    }

    /**
     * Sets is_ext_shared
     *
     * @param bool|null $is_ext_shared is_ext_shared
     *
     * @return $this
     */
    public function setIsExtShared($is_ext_shared)
    {
        $this->container['is_ext_shared'] = $is_ext_shared;

        return $this;
    }

    /**
     * Gets is_im
     *
     * @return bool
     */
    public function getIsIm()
    {
        return $this->container['is_im'];
    }

    /**
     * Sets is_im
     *
     * @param bool $is_im is_im
     *
     * @return $this
     */
    public function setIsIm($is_im)
    {
        $this->container['is_im'] = $is_im;

        return $this;
    }

    /**
     * Gets is_org_shared
     *
     * @return bool
     */
    public function getIsOrgShared()
    {
        return $this->container['is_org_shared'];
    }

    /**
     * Sets is_org_shared
     *
     * @param bool $is_org_shared is_org_shared
     *
     * @return $this
     */
    public function setIsOrgShared($is_org_shared)
    {
        $this->container['is_org_shared'] = $is_org_shared;

        return $this;
    }

    /**
     * Gets is_shared
     *
     * @return bool|null
     */
    public function getIsShared()
    {
        return $this->container['is_shared'];
    }

    /**
     * Sets is_shared
     *
     * @param bool|null $is_shared is_shared
     *
     * @return $this
     */
    public function setIsShared($is_shared)
    {
        $this->container['is_shared'] = $is_shared;

        return $this;
    }

    /**
     * Gets is_user_deleted
     *
     * @return bool
     */
    public function getIsUserDeleted()
    {
        return $this->container['is_user_deleted'];
    }

    /**
     * Sets is_user_deleted
     *
     * @param bool $is_user_deleted is_user_deleted
     *
     * @return $this
     */
    public function setIsUserDeleted($is_user_deleted)
    {
        $this->container['is_user_deleted'] = $is_user_deleted;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return float|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float|null $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user user
     *
     * @return $this
     */
    public function setUser($user)
    {

        if ((!preg_match("/^[UW][A-Z0-9]{8}$/", $user))) {
            throw new \InvalidArgumentException("invalid value for $user when calling ObjsIm., must conform to the pattern /^[UW][A-Z0-9]{8}$/.");
        }

        $this->container['user'] = $user;

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


