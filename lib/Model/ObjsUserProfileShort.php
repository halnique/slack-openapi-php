<?php
/**
 * ObjsUserProfileShort
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
 * ObjsUserProfileShort Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjsUserProfileShort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'objs_user_profile_short';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'avatar_hash' => 'string',
        'display_name' => 'string',
        'first_name' => 'string',
        'image_72' => 'string',
        'is_restricted' => 'bool',
        'is_ultra_restricted' => 'bool',
        'name' => 'string',
        'real_name' => 'string',
        'team' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'avatar_hash' => null,
        'display_name' => null,
        'first_name' => null,
        'image_72' => 'uri',
        'is_restricted' => null,
        'is_ultra_restricted' => null,
        'name' => null,
        'real_name' => null,
        'team' => null
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
        'avatar_hash' => 'avatar_hash',
        'display_name' => 'display_name',
        'first_name' => 'first_name',
        'image_72' => 'image_72',
        'is_restricted' => 'is_restricted',
        'is_ultra_restricted' => 'is_ultra_restricted',
        'name' => 'name',
        'real_name' => 'real_name',
        'team' => 'team'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avatar_hash' => 'setAvatarHash',
        'display_name' => 'setDisplayName',
        'first_name' => 'setFirstName',
        'image_72' => 'setImage72',
        'is_restricted' => 'setIsRestricted',
        'is_ultra_restricted' => 'setIsUltraRestricted',
        'name' => 'setName',
        'real_name' => 'setRealName',
        'team' => 'setTeam'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avatar_hash' => 'getAvatarHash',
        'display_name' => 'getDisplayName',
        'first_name' => 'getFirstName',
        'image_72' => 'getImage72',
        'is_restricted' => 'getIsRestricted',
        'is_ultra_restricted' => 'getIsUltraRestricted',
        'name' => 'getName',
        'real_name' => 'getRealName',
        'team' => 'getTeam'
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
        $this->container['avatar_hash'] = isset($data['avatar_hash']) ? $data['avatar_hash'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['image_72'] = isset($data['image_72']) ? $data['image_72'] : null;
        $this->container['is_restricted'] = isset($data['is_restricted']) ? $data['is_restricted'] : null;
        $this->container['is_ultra_restricted'] = isset($data['is_ultra_restricted']) ? $data['is_ultra_restricted'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['real_name'] = isset($data['real_name']) ? $data['real_name'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['avatar_hash'] === null) {
            $invalidProperties[] = "'avatar_hash' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['image_72'] === null) {
            $invalidProperties[] = "'image_72' can't be null";
        }
        if ($this->container['is_restricted'] === null) {
            $invalidProperties[] = "'is_restricted' can't be null";
        }
        if ($this->container['is_ultra_restricted'] === null) {
            $invalidProperties[] = "'is_ultra_restricted' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['real_name'] === null) {
            $invalidProperties[] = "'real_name' can't be null";
        }
        if ($this->container['team'] === null) {
            $invalidProperties[] = "'team' can't be null";
        }
        if (!preg_match("/^[TE][A-Z0-9]{8}$/", $this->container['team'])) {
            $invalidProperties[] = "invalid value for 'team', must be conform to the pattern /^[TE][A-Z0-9]{8}$/.";
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
     * Gets avatar_hash
     *
     * @return string
     */
    public function getAvatarHash()
    {
        return $this->container['avatar_hash'];
    }

    /**
     * Sets avatar_hash
     *
     * @param string $avatar_hash avatar_hash
     *
     * @return $this
     */
    public function setAvatarHash($avatar_hash)
    {
        $this->container['avatar_hash'] = $avatar_hash;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets image_72
     *
     * @return string
     */
    public function getImage72()
    {
        return $this->container['image_72'];
    }

    /**
     * Sets image_72
     *
     * @param string $image_72 image_72
     *
     * @return $this
     */
    public function setImage72($image_72)
    {
        $this->container['image_72'] = $image_72;

        return $this;
    }

    /**
     * Gets is_restricted
     *
     * @return bool
     */
    public function getIsRestricted()
    {
        return $this->container['is_restricted'];
    }

    /**
     * Sets is_restricted
     *
     * @param bool $is_restricted is_restricted
     *
     * @return $this
     */
    public function setIsRestricted($is_restricted)
    {
        $this->container['is_restricted'] = $is_restricted;

        return $this;
    }

    /**
     * Gets is_ultra_restricted
     *
     * @return bool
     */
    public function getIsUltraRestricted()
    {
        return $this->container['is_ultra_restricted'];
    }

    /**
     * Sets is_ultra_restricted
     *
     * @param bool $is_ultra_restricted is_ultra_restricted
     *
     * @return $this
     */
    public function setIsUltraRestricted($is_ultra_restricted)
    {
        $this->container['is_ultra_restricted'] = $is_ultra_restricted;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets real_name
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->container['real_name'];
    }

    /**
     * Sets real_name
     *
     * @param string $real_name real_name
     *
     * @return $this
     */
    public function setRealName($real_name)
    {
        $this->container['real_name'] = $real_name;

        return $this;
    }

    /**
     * Gets team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param string $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {

        if ((!preg_match("/^[TE][A-Z0-9]{8}$/", $team))) {
            throw new \InvalidArgumentException("invalid value for $team when calling ObjsUserProfileShort., must conform to the pattern /^[TE][A-Z0-9]{8}$/.");
        }

        $this->container['team'] = $team;

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


