<?php
/**
 * ObjsUserProfile
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
 * ObjsUserProfile Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjsUserProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'objs_user_profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'always_active' => 'bool',
        'api_app_id' => 'string',
        'avatar_hash' => 'string',
        'bot_id' => 'string',
        'display_name' => 'string',
        'display_name_normalized' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'guest_channels' => 'string',
        'guest_expiration_ts' => 'int',
        'guest_invited_by' => 'string',
        'image_1024' => 'string',
        'image_192' => 'string',
        'image_24' => 'string',
        'image_32' => 'string',
        'image_48' => 'string',
        'image_512' => 'string',
        'image_72' => 'string',
        'image_original' => 'string',
        'is_custom_image' => 'bool',
        'last_name' => 'string',
        'phone' => 'string',
        'real_name' => 'string',
        'real_name_normalized' => 'string',
        'skype' => 'string',
        'status_emoji' => 'string',
        'status_expiration' => 'int',
        'status_text' => 'string',
        'status_text_canonical' => 'string',
        'team' => 'string',
        'teams' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'always_active' => null,
        'api_app_id' => null,
        'avatar_hash' => null,
        'bot_id' => null,
        'display_name' => null,
        'display_name_normalized' => null,
        'email' => 'email',
        'first_name' => null,
        'guest_channels' => null,
        'guest_expiration_ts' => null,
        'guest_invited_by' => null,
        'image_1024' => 'uri',
        'image_192' => 'uri',
        'image_24' => 'uri',
        'image_32' => 'uri',
        'image_48' => 'uri',
        'image_512' => 'uri',
        'image_72' => 'uri',
        'image_original' => 'uri',
        'is_custom_image' => null,
        'last_name' => null,
        'phone' => null,
        'real_name' => null,
        'real_name_normalized' => null,
        'skype' => null,
        'status_emoji' => null,
        'status_expiration' => null,
        'status_text' => null,
        'status_text_canonical' => null,
        'team' => null,
        'teams' => null,
        'title' => null
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
        'always_active' => 'always_active',
        'api_app_id' => 'api_app_id',
        'avatar_hash' => 'avatar_hash',
        'bot_id' => 'bot_id',
        'display_name' => 'display_name',
        'display_name_normalized' => 'display_name_normalized',
        'email' => 'email',
        'first_name' => 'first_name',
        'guest_channels' => 'guest_channels',
        'guest_expiration_ts' => 'guest_expiration_ts',
        'guest_invited_by' => 'guest_invited_by',
        'image_1024' => 'image_1024',
        'image_192' => 'image_192',
        'image_24' => 'image_24',
        'image_32' => 'image_32',
        'image_48' => 'image_48',
        'image_512' => 'image_512',
        'image_72' => 'image_72',
        'image_original' => 'image_original',
        'is_custom_image' => 'is_custom_image',
        'last_name' => 'last_name',
        'phone' => 'phone',
        'real_name' => 'real_name',
        'real_name_normalized' => 'real_name_normalized',
        'skype' => 'skype',
        'status_emoji' => 'status_emoji',
        'status_expiration' => 'status_expiration',
        'status_text' => 'status_text',
        'status_text_canonical' => 'status_text_canonical',
        'team' => 'team',
        'teams' => 'teams',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'always_active' => 'setAlwaysActive',
        'api_app_id' => 'setApiAppId',
        'avatar_hash' => 'setAvatarHash',
        'bot_id' => 'setBotId',
        'display_name' => 'setDisplayName',
        'display_name_normalized' => 'setDisplayNameNormalized',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'guest_channels' => 'setGuestChannels',
        'guest_expiration_ts' => 'setGuestExpirationTs',
        'guest_invited_by' => 'setGuestInvitedBy',
        'image_1024' => 'setImage1024',
        'image_192' => 'setImage192',
        'image_24' => 'setImage24',
        'image_32' => 'setImage32',
        'image_48' => 'setImage48',
        'image_512' => 'setImage512',
        'image_72' => 'setImage72',
        'image_original' => 'setImageOriginal',
        'is_custom_image' => 'setIsCustomImage',
        'last_name' => 'setLastName',
        'phone' => 'setPhone',
        'real_name' => 'setRealName',
        'real_name_normalized' => 'setRealNameNormalized',
        'skype' => 'setSkype',
        'status_emoji' => 'setStatusEmoji',
        'status_expiration' => 'setStatusExpiration',
        'status_text' => 'setStatusText',
        'status_text_canonical' => 'setStatusTextCanonical',
        'team' => 'setTeam',
        'teams' => 'setTeams',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'always_active' => 'getAlwaysActive',
        'api_app_id' => 'getApiAppId',
        'avatar_hash' => 'getAvatarHash',
        'bot_id' => 'getBotId',
        'display_name' => 'getDisplayName',
        'display_name_normalized' => 'getDisplayNameNormalized',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'guest_channels' => 'getGuestChannels',
        'guest_expiration_ts' => 'getGuestExpirationTs',
        'guest_invited_by' => 'getGuestInvitedBy',
        'image_1024' => 'getImage1024',
        'image_192' => 'getImage192',
        'image_24' => 'getImage24',
        'image_32' => 'getImage32',
        'image_48' => 'getImage48',
        'image_512' => 'getImage512',
        'image_72' => 'getImage72',
        'image_original' => 'getImageOriginal',
        'is_custom_image' => 'getIsCustomImage',
        'last_name' => 'getLastName',
        'phone' => 'getPhone',
        'real_name' => 'getRealName',
        'real_name_normalized' => 'getRealNameNormalized',
        'skype' => 'getSkype',
        'status_emoji' => 'getStatusEmoji',
        'status_expiration' => 'getStatusExpiration',
        'status_text' => 'getStatusText',
        'status_text_canonical' => 'getStatusTextCanonical',
        'team' => 'getTeam',
        'teams' => 'getTeams',
        'title' => 'getTitle'
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
        $this->container['always_active'] = isset($data['always_active']) ? $data['always_active'] : null;
        $this->container['api_app_id'] = isset($data['api_app_id']) ? $data['api_app_id'] : null;
        $this->container['avatar_hash'] = isset($data['avatar_hash']) ? $data['avatar_hash'] : null;
        $this->container['bot_id'] = isset($data['bot_id']) ? $data['bot_id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['display_name_normalized'] = isset($data['display_name_normalized']) ? $data['display_name_normalized'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['guest_channels'] = isset($data['guest_channels']) ? $data['guest_channels'] : null;
        $this->container['guest_expiration_ts'] = isset($data['guest_expiration_ts']) ? $data['guest_expiration_ts'] : null;
        $this->container['guest_invited_by'] = isset($data['guest_invited_by']) ? $data['guest_invited_by'] : null;
        $this->container['image_1024'] = isset($data['image_1024']) ? $data['image_1024'] : null;
        $this->container['image_192'] = isset($data['image_192']) ? $data['image_192'] : null;
        $this->container['image_24'] = isset($data['image_24']) ? $data['image_24'] : null;
        $this->container['image_32'] = isset($data['image_32']) ? $data['image_32'] : null;
        $this->container['image_48'] = isset($data['image_48']) ? $data['image_48'] : null;
        $this->container['image_512'] = isset($data['image_512']) ? $data['image_512'] : null;
        $this->container['image_72'] = isset($data['image_72']) ? $data['image_72'] : null;
        $this->container['image_original'] = isset($data['image_original']) ? $data['image_original'] : null;
        $this->container['is_custom_image'] = isset($data['is_custom_image']) ? $data['is_custom_image'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['real_name'] = isset($data['real_name']) ? $data['real_name'] : null;
        $this->container['real_name_normalized'] = isset($data['real_name_normalized']) ? $data['real_name_normalized'] : null;
        $this->container['skype'] = isset($data['skype']) ? $data['skype'] : null;
        $this->container['status_emoji'] = isset($data['status_emoji']) ? $data['status_emoji'] : null;
        $this->container['status_expiration'] = isset($data['status_expiration']) ? $data['status_expiration'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;
        $this->container['status_text_canonical'] = isset($data['status_text_canonical']) ? $data['status_text_canonical'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['api_app_id']) && !preg_match("/^A[A-Z0-9]{8}$/", $this->container['api_app_id'])) {
            $invalidProperties[] = "invalid value for 'api_app_id', must be conform to the pattern /^A[A-Z0-9]{8}$/.";
        }

        if ($this->container['avatar_hash'] === null) {
            $invalidProperties[] = "'avatar_hash' can't be null";
        }
        if (!is_null($this->container['bot_id']) && !preg_match("/^B[A-Z0-9]{8}$/", $this->container['bot_id'])) {
            $invalidProperties[] = "invalid value for 'bot_id', must be conform to the pattern /^B[A-Z0-9]{8}$/.";
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['display_name_normalized'] === null) {
            $invalidProperties[] = "'display_name_normalized' can't be null";
        }
        if ($this->container['real_name'] === null) {
            $invalidProperties[] = "'real_name' can't be null";
        }
        if ($this->container['real_name_normalized'] === null) {
            $invalidProperties[] = "'real_name_normalized' can't be null";
        }
        if (!is_null($this->container['team']) && !preg_match("/^[TE][A-Z0-9]{8}$/", $this->container['team'])) {
            $invalidProperties[] = "invalid value for 'team', must be conform to the pattern /^[TE][A-Z0-9]{8}$/.";
        }

        if (!is_null($this->container['teams']) && !preg_match("/^[TE][A-Z0-9]{8}$/", $this->container['teams'])) {
            $invalidProperties[] = "invalid value for 'teams', must be conform to the pattern /^[TE][A-Z0-9]{8}$/.";
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
     * Gets always_active
     *
     * @return bool|null
     */
    public function getAlwaysActive()
    {
        return $this->container['always_active'];
    }

    /**
     * Sets always_active
     *
     * @param bool|null $always_active always_active
     *
     * @return $this
     */
    public function setAlwaysActive($always_active)
    {
        $this->container['always_active'] = $always_active;

        return $this;
    }

    /**
     * Gets api_app_id
     *
     * @return string|null
     */
    public function getApiAppId()
    {
        return $this->container['api_app_id'];
    }

    /**
     * Sets api_app_id
     *
     * @param string|null $api_app_id api_app_id
     *
     * @return $this
     */
    public function setApiAppId($api_app_id)
    {

        if (!is_null($api_app_id) && (!preg_match("/^A[A-Z0-9]{8}$/", $api_app_id))) {
            throw new \InvalidArgumentException("invalid value for $api_app_id when calling ObjsUserProfile., must conform to the pattern /^A[A-Z0-9]{8}$/.");
        }

        $this->container['api_app_id'] = $api_app_id;

        return $this;
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
     * Gets bot_id
     *
     * @return string|null
     */
    public function getBotId()
    {
        return $this->container['bot_id'];
    }

    /**
     * Sets bot_id
     *
     * @param string|null $bot_id bot_id
     *
     * @return $this
     */
    public function setBotId($bot_id)
    {

        if (!is_null($bot_id) && (!preg_match("/^B[A-Z0-9]{8}$/", $bot_id))) {
            throw new \InvalidArgumentException("invalid value for $bot_id when calling ObjsUserProfile., must conform to the pattern /^B[A-Z0-9]{8}$/.");
        }

        $this->container['bot_id'] = $bot_id;

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
     * Gets display_name_normalized
     *
     * @return string
     */
    public function getDisplayNameNormalized()
    {
        return $this->container['display_name_normalized'];
    }

    /**
     * Sets display_name_normalized
     *
     * @param string $display_name_normalized display_name_normalized
     *
     * @return $this
     */
    public function setDisplayNameNormalized($display_name_normalized)
    {
        $this->container['display_name_normalized'] = $display_name_normalized;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets guest_channels
     *
     * @return string|null
     */
    public function getGuestChannels()
    {
        return $this->container['guest_channels'];
    }

    /**
     * Sets guest_channels
     *
     * @param string|null $guest_channels guest_channels
     *
     * @return $this
     */
    public function setGuestChannels($guest_channels)
    {
        $this->container['guest_channels'] = $guest_channels;

        return $this;
    }

    /**
     * Gets guest_expiration_ts
     *
     * @return int|null
     */
    public function getGuestExpirationTs()
    {
        return $this->container['guest_expiration_ts'];
    }

    /**
     * Sets guest_expiration_ts
     *
     * @param int|null $guest_expiration_ts guest_expiration_ts
     *
     * @return $this
     */
    public function setGuestExpirationTs($guest_expiration_ts)
    {
        $this->container['guest_expiration_ts'] = $guest_expiration_ts;

        return $this;
    }

    /**
     * Gets guest_invited_by
     *
     * @return string|null
     */
    public function getGuestInvitedBy()
    {
        return $this->container['guest_invited_by'];
    }

    /**
     * Sets guest_invited_by
     *
     * @param string|null $guest_invited_by guest_invited_by
     *
     * @return $this
     */
    public function setGuestInvitedBy($guest_invited_by)
    {
        $this->container['guest_invited_by'] = $guest_invited_by;

        return $this;
    }

    /**
     * Gets image_1024
     *
     * @return string|null
     */
    public function getImage1024()
    {
        return $this->container['image_1024'];
    }

    /**
     * Sets image_1024
     *
     * @param string|null $image_1024 image_1024
     *
     * @return $this
     */
    public function setImage1024($image_1024)
    {
        $this->container['image_1024'] = $image_1024;

        return $this;
    }

    /**
     * Gets image_192
     *
     * @return string|null
     */
    public function getImage192()
    {
        return $this->container['image_192'];
    }

    /**
     * Sets image_192
     *
     * @param string|null $image_192 image_192
     *
     * @return $this
     */
    public function setImage192($image_192)
    {
        $this->container['image_192'] = $image_192;

        return $this;
    }

    /**
     * Gets image_24
     *
     * @return string|null
     */
    public function getImage24()
    {
        return $this->container['image_24'];
    }

    /**
     * Sets image_24
     *
     * @param string|null $image_24 image_24
     *
     * @return $this
     */
    public function setImage24($image_24)
    {
        $this->container['image_24'] = $image_24;

        return $this;
    }

    /**
     * Gets image_32
     *
     * @return string|null
     */
    public function getImage32()
    {
        return $this->container['image_32'];
    }

    /**
     * Sets image_32
     *
     * @param string|null $image_32 image_32
     *
     * @return $this
     */
    public function setImage32($image_32)
    {
        $this->container['image_32'] = $image_32;

        return $this;
    }

    /**
     * Gets image_48
     *
     * @return string|null
     */
    public function getImage48()
    {
        return $this->container['image_48'];
    }

    /**
     * Sets image_48
     *
     * @param string|null $image_48 image_48
     *
     * @return $this
     */
    public function setImage48($image_48)
    {
        $this->container['image_48'] = $image_48;

        return $this;
    }

    /**
     * Gets image_512
     *
     * @return string|null
     */
    public function getImage512()
    {
        return $this->container['image_512'];
    }

    /**
     * Sets image_512
     *
     * @param string|null $image_512 image_512
     *
     * @return $this
     */
    public function setImage512($image_512)
    {
        $this->container['image_512'] = $image_512;

        return $this;
    }

    /**
     * Gets image_72
     *
     * @return string|null
     */
    public function getImage72()
    {
        return $this->container['image_72'];
    }

    /**
     * Sets image_72
     *
     * @param string|null $image_72 image_72
     *
     * @return $this
     */
    public function setImage72($image_72)
    {
        $this->container['image_72'] = $image_72;

        return $this;
    }

    /**
     * Gets image_original
     *
     * @return string|null
     */
    public function getImageOriginal()
    {
        return $this->container['image_original'];
    }

    /**
     * Sets image_original
     *
     * @param string|null $image_original image_original
     *
     * @return $this
     */
    public function setImageOriginal($image_original)
    {
        $this->container['image_original'] = $image_original;

        return $this;
    }

    /**
     * Gets is_custom_image
     *
     * @return bool|null
     */
    public function getIsCustomImage()
    {
        return $this->container['is_custom_image'];
    }

    /**
     * Sets is_custom_image
     *
     * @param bool|null $is_custom_image is_custom_image
     *
     * @return $this
     */
    public function setIsCustomImage($is_custom_image)
    {
        $this->container['is_custom_image'] = $is_custom_image;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * Gets real_name_normalized
     *
     * @return string
     */
    public function getRealNameNormalized()
    {
        return $this->container['real_name_normalized'];
    }

    /**
     * Sets real_name_normalized
     *
     * @param string $real_name_normalized real_name_normalized
     *
     * @return $this
     */
    public function setRealNameNormalized($real_name_normalized)
    {
        $this->container['real_name_normalized'] = $real_name_normalized;

        return $this;
    }

    /**
     * Gets skype
     *
     * @return string|null
     */
    public function getSkype()
    {
        return $this->container['skype'];
    }

    /**
     * Sets skype
     *
     * @param string|null $skype skype
     *
     * @return $this
     */
    public function setSkype($skype)
    {
        $this->container['skype'] = $skype;

        return $this;
    }

    /**
     * Gets status_emoji
     *
     * @return string|null
     */
    public function getStatusEmoji()
    {
        return $this->container['status_emoji'];
    }

    /**
     * Sets status_emoji
     *
     * @param string|null $status_emoji status_emoji
     *
     * @return $this
     */
    public function setStatusEmoji($status_emoji)
    {
        $this->container['status_emoji'] = $status_emoji;

        return $this;
    }

    /**
     * Gets status_expiration
     *
     * @return int|null
     */
    public function getStatusExpiration()
    {
        return $this->container['status_expiration'];
    }

    /**
     * Sets status_expiration
     *
     * @param int|null $status_expiration status_expiration
     *
     * @return $this
     */
    public function setStatusExpiration($status_expiration)
    {
        $this->container['status_expiration'] = $status_expiration;

        return $this;
    }

    /**
     * Gets status_text
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /**
     * Sets status_text
     *
     * @param string|null $status_text status_text
     *
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

        return $this;
    }

    /**
     * Gets status_text_canonical
     *
     * @return string|null
     */
    public function getStatusTextCanonical()
    {
        return $this->container['status_text_canonical'];
    }

    /**
     * Sets status_text_canonical
     *
     * @param string|null $status_text_canonical status_text_canonical
     *
     * @return $this
     */
    public function setStatusTextCanonical($status_text_canonical)
    {
        $this->container['status_text_canonical'] = $status_text_canonical;

        return $this;
    }

    /**
     * Gets team
     *
     * @return string|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param string|null $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {

        if (!is_null($team) && (!preg_match("/^[TE][A-Z0-9]{8}$/", $team))) {
            throw new \InvalidArgumentException("invalid value for $team when calling ObjsUserProfile., must conform to the pattern /^[TE][A-Z0-9]{8}$/.");
        }

        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return string|null
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param string|null $teams teams
     *
     * @return $this
     */
    public function setTeams($teams)
    {

        if (!is_null($teams) && (!preg_match("/^[TE][A-Z0-9]{8}$/", $teams))) {
            throw new \InvalidArgumentException("invalid value for $teams when calling ObjsUserProfile., must conform to the pattern /^[TE][A-Z0-9]{8}$/.");
        }

        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


