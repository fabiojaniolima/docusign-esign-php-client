<?php
/**
 * ProvisioningInformation
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
 * ProvisioningInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProvisioningInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'provisioningInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_connection_id' => 'string',
        'default_plan_id' => 'string',
        'distributor_code' => 'string',
        'distributor_password' => 'string',
        'password_rule_text' => 'string',
        'plan_promotion_text' => 'string',
        'purchase_order_or_prom_allowed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_connection_id' => null,
        'default_plan_id' => null,
        'distributor_code' => null,
        'distributor_password' => null,
        'password_rule_text' => null,
        'plan_promotion_text' => null,
        'purchase_order_or_prom_allowed' => null
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
        'default_connection_id' => 'defaultConnectionId',
        'default_plan_id' => 'defaultPlanId',
        'distributor_code' => 'distributorCode',
        'distributor_password' => 'distributorPassword',
        'password_rule_text' => 'passwordRuleText',
        'plan_promotion_text' => 'planPromotionText',
        'purchase_order_or_prom_allowed' => 'purchaseOrderOrPromAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_connection_id' => 'setDefaultConnectionId',
        'default_plan_id' => 'setDefaultPlanId',
        'distributor_code' => 'setDistributorCode',
        'distributor_password' => 'setDistributorPassword',
        'password_rule_text' => 'setPasswordRuleText',
        'plan_promotion_text' => 'setPlanPromotionText',
        'purchase_order_or_prom_allowed' => 'setPurchaseOrderOrPromAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_connection_id' => 'getDefaultConnectionId',
        'default_plan_id' => 'getDefaultPlanId',
        'distributor_code' => 'getDistributorCode',
        'distributor_password' => 'getDistributorPassword',
        'password_rule_text' => 'getPasswordRuleText',
        'plan_promotion_text' => 'getPlanPromotionText',
        'purchase_order_or_prom_allowed' => 'getPurchaseOrderOrPromAllowed'
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
        $this->container['default_connection_id'] = isset($data['default_connection_id']) ? $data['default_connection_id'] : null;
        $this->container['default_plan_id'] = isset($data['default_plan_id']) ? $data['default_plan_id'] : null;
        $this->container['distributor_code'] = isset($data['distributor_code']) ? $data['distributor_code'] : null;
        $this->container['distributor_password'] = isset($data['distributor_password']) ? $data['distributor_password'] : null;
        $this->container['password_rule_text'] = isset($data['password_rule_text']) ? $data['password_rule_text'] : null;
        $this->container['plan_promotion_text'] = isset($data['plan_promotion_text']) ? $data['plan_promotion_text'] : null;
        $this->container['purchase_order_or_prom_allowed'] = isset($data['purchase_order_or_prom_allowed']) ? $data['purchase_order_or_prom_allowed'] : null;
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
     * Gets default_connection_id
     *
     * @return string
     */
    public function getDefaultConnectionId()
    {
        return $this->container['default_connection_id'];
    }

    /**
     * Sets default_connection_id
     *
     * @param string $default_connection_id 
     *
     * @return $this
     */
    public function setDefaultConnectionId($default_connection_id)
    {
        $this->container['default_connection_id'] = $default_connection_id;

        return $this;
    }

    /**
     * Gets default_plan_id
     *
     * @return string
     */
    public function getDefaultPlanId()
    {
        return $this->container['default_plan_id'];
    }

    /**
     * Sets default_plan_id
     *
     * @param string $default_plan_id 
     *
     * @return $this
     */
    public function setDefaultPlanId($default_plan_id)
    {
        $this->container['default_plan_id'] = $default_plan_id;

        return $this;
    }

    /**
     * Gets distributor_code
     *
     * @return string
     */
    public function getDistributorCode()
    {
        return $this->container['distributor_code'];
    }

    /**
     * Sets distributor_code
     *
     * @param string $distributor_code The code that identifies the billing plan groups and plans for the new account.
     *
     * @return $this
     */
    public function setDistributorCode($distributor_code)
    {
        $this->container['distributor_code'] = $distributor_code;

        return $this;
    }

    /**
     * Gets distributor_password
     *
     * @return string
     */
    public function getDistributorPassword()
    {
        return $this->container['distributor_password'];
    }

    /**
     * Sets distributor_password
     *
     * @param string $distributor_password The password for the distributorCode.
     *
     * @return $this
     */
    public function setDistributorPassword($distributor_password)
    {
        $this->container['distributor_password'] = $distributor_password;

        return $this;
    }

    /**
     * Gets password_rule_text
     *
     * @return string
     */
    public function getPasswordRuleText()
    {
        return $this->container['password_rule_text'];
    }

    /**
     * Sets password_rule_text
     *
     * @param string $password_rule_text 
     *
     * @return $this
     */
    public function setPasswordRuleText($password_rule_text)
    {
        $this->container['password_rule_text'] = $password_rule_text;

        return $this;
    }

    /**
     * Gets plan_promotion_text
     *
     * @return string
     */
    public function getPlanPromotionText()
    {
        return $this->container['plan_promotion_text'];
    }

    /**
     * Sets plan_promotion_text
     *
     * @param string $plan_promotion_text 
     *
     * @return $this
     */
    public function setPlanPromotionText($plan_promotion_text)
    {
        $this->container['plan_promotion_text'] = $plan_promotion_text;

        return $this;
    }

    /**
     * Gets purchase_order_or_prom_allowed
     *
     * @return string
     */
    public function getPurchaseOrderOrPromAllowed()
    {
        return $this->container['purchase_order_or_prom_allowed'];
    }

    /**
     * Sets purchase_order_or_prom_allowed
     *
     * @param string $purchase_order_or_prom_allowed 
     *
     * @return $this
     */
    public function setPurchaseOrderOrPromAllowed($purchase_order_or_prom_allowed)
    {
        $this->container['purchase_order_or_prom_allowed'] = $purchase_order_or_prom_allowed;

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

