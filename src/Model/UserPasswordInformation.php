<?php
/**
 * UserPasswordInformation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * UserPasswordInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserPasswordInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'userPasswordInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_password' => 'string',
        'email' => 'string',
        'forgotten_password_info' => '\DocuSign\eSign\Model\ForgottenPasswordInformation',
        'new_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_password' => null,
        'email' => null,
        'forgotten_password_info' => null,
        'new_password' => null
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
        'current_password' => 'currentPassword',
        'email' => 'email',
        'forgotten_password_info' => 'forgottenPasswordInfo',
        'new_password' => 'newPassword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_password' => 'setCurrentPassword',
        'email' => 'setEmail',
        'forgotten_password_info' => 'setForgottenPasswordInfo',
        'new_password' => 'setNewPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_password' => 'getCurrentPassword',
        'email' => 'getEmail',
        'forgotten_password_info' => 'getForgottenPasswordInfo',
        'new_password' => 'getNewPassword'
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
        $this->container['current_password'] = isset($data['current_password']) ? $data['current_password'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['forgotten_password_info'] = isset($data['forgotten_password_info']) ? $data['forgotten_password_info'] : null;
        $this->container['new_password'] = isset($data['new_password']) ? $data['new_password'] : null;
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
     * Gets current_password
     *
     * @return string
     */
    public function getCurrentPassword()
    {
        return $this->container['current_password'];
    }

    /**
     * Sets current_password
     *
     * @param string $current_password The user's current password to be changed.
     *
     * @return $this
     */
    public function setCurrentPassword($current_password)
    {
        $this->container['current_password'] = $current_password;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The user's email address for the associated account.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets forgotten_password_info
     *
     * @return \DocuSign\eSign\Model\ForgottenPasswordInformation
     */
    public function getForgottenPasswordInfo()
    {
        return $this->container['forgotten_password_info'];
    }

    /**
     * Sets forgotten_password_info
     *
     * @param \DocuSign\eSign\Model\ForgottenPasswordInformation $forgotten_password_info forgotten_password_info
     *
     * @return $this
     */
    public function setForgottenPasswordInfo($forgotten_password_info)
    {
        $this->container['forgotten_password_info'] = $forgotten_password_info;

        return $this;
    }

    /**
     * Gets new_password
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->container['new_password'];
    }

    /**
     * Sets new_password
     *
     * @param string $new_password The user's new password.
     *
     * @return $this
     */
    public function setNewPassword($new_password)
    {
        $this->container['new_password'] = $new_password;

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

