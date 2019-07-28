<?php
/**
 * ObjsComment
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
 * ObjsComment Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjsComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'objs_comment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment' => 'string',
        'created' => 'int',
        'id' => 'string',
        'is_intro' => 'bool',
        'is_starred' => 'bool',
        'num_stars' => 'int',
        'pinned_info' => 'map[string,object]',
        'pinned_to' => 'string[]',
        'reactions' => '\OpenAPI\Client\Model\ObjsReaction[]',
        'timestamp' => 'int',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'comment' => null,
        'created' => null,
        'id' => null,
        'is_intro' => null,
        'is_starred' => null,
        'num_stars' => null,
        'pinned_info' => null,
        'pinned_to' => null,
        'reactions' => null,
        'timestamp' => null,
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
        'comment' => 'comment',
        'created' => 'created',
        'id' => 'id',
        'is_intro' => 'is_intro',
        'is_starred' => 'is_starred',
        'num_stars' => 'num_stars',
        'pinned_info' => 'pinned_info',
        'pinned_to' => 'pinned_to',
        'reactions' => 'reactions',
        'timestamp' => 'timestamp',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'created' => 'setCreated',
        'id' => 'setId',
        'is_intro' => 'setIsIntro',
        'is_starred' => 'setIsStarred',
        'num_stars' => 'setNumStars',
        'pinned_info' => 'setPinnedInfo',
        'pinned_to' => 'setPinnedTo',
        'reactions' => 'setReactions',
        'timestamp' => 'setTimestamp',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'created' => 'getCreated',
        'id' => 'getId',
        'is_intro' => 'getIsIntro',
        'is_starred' => 'getIsStarred',
        'num_stars' => 'getNumStars',
        'pinned_info' => 'getPinnedInfo',
        'pinned_to' => 'getPinnedTo',
        'reactions' => 'getReactions',
        'timestamp' => 'getTimestamp',
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_intro'] = isset($data['is_intro']) ? $data['is_intro'] : null;
        $this->container['is_starred'] = isset($data['is_starred']) ? $data['is_starred'] : null;
        $this->container['num_stars'] = isset($data['num_stars']) ? $data['num_stars'] : null;
        $this->container['pinned_info'] = isset($data['pinned_info']) ? $data['pinned_info'] : null;
        $this->container['pinned_to'] = isset($data['pinned_to']) ? $data['pinned_to'] : null;
        $this->container['reactions'] = isset($data['reactions']) ? $data['reactions'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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

        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^Fc[A-Z0-9]{8}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^Fc[A-Z0-9]{8}$/.";
        }

        if ($this->container['is_intro'] === null) {
            $invalidProperties[] = "'is_intro' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
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
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
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

        if ((!preg_match("/^Fc[A-Z0-9]{8}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling ObjsComment., must conform to the pattern /^Fc[A-Z0-9]{8}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_intro
     *
     * @return bool
     */
    public function getIsIntro()
    {
        return $this->container['is_intro'];
    }

    /**
     * Sets is_intro
     *
     * @param bool $is_intro is_intro
     *
     * @return $this
     */
    public function setIsIntro($is_intro)
    {
        $this->container['is_intro'] = $is_intro;

        return $this;
    }

    /**
     * Gets is_starred
     *
     * @return bool|null
     */
    public function getIsStarred()
    {
        return $this->container['is_starred'];
    }

    /**
     * Sets is_starred
     *
     * @param bool|null $is_starred is_starred
     *
     * @return $this
     */
    public function setIsStarred($is_starred)
    {
        $this->container['is_starred'] = $is_starred;

        return $this;
    }

    /**
     * Gets num_stars
     *
     * @return int|null
     */
    public function getNumStars()
    {
        return $this->container['num_stars'];
    }

    /**
     * Sets num_stars
     *
     * @param int|null $num_stars num_stars
     *
     * @return $this
     */
    public function setNumStars($num_stars)
    {
        $this->container['num_stars'] = $num_stars;

        return $this;
    }

    /**
     * Gets pinned_info
     *
     * @return map[string,object]|null
     */
    public function getPinnedInfo()
    {
        return $this->container['pinned_info'];
    }

    /**
     * Sets pinned_info
     *
     * @param map[string,object]|null $pinned_info pinned_info
     *
     * @return $this
     */
    public function setPinnedInfo($pinned_info)
    {
        $this->container['pinned_info'] = $pinned_info;

        return $this;
    }

    /**
     * Gets pinned_to
     *
     * @return string[]|null
     */
    public function getPinnedTo()
    {
        return $this->container['pinned_to'];
    }

    /**
     * Sets pinned_to
     *
     * @param string[]|null $pinned_to pinned_to
     *
     * @return $this
     */
    public function setPinnedTo($pinned_to)
    {
        $this->container['pinned_to'] = $pinned_to;

        return $this;
    }

    /**
     * Gets reactions
     *
     * @return \OpenAPI\Client\Model\ObjsReaction[]|null
     */
    public function getReactions()
    {
        return $this->container['reactions'];
    }

    /**
     * Sets reactions
     *
     * @param \OpenAPI\Client\Model\ObjsReaction[]|null $reactions reactions
     *
     * @return $this
     */
    public function setReactions($reactions)
    {
        $this->container['reactions'] = $reactions;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
            throw new \InvalidArgumentException("invalid value for $user when calling ObjsComment., must conform to the pattern /^[UW][A-Z0-9]{8}$/.");
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


