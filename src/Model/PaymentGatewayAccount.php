<?php
/**
 * PaymentGatewayAccount
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
 * PaymentGatewayAccount Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentGatewayAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'paymentGatewayAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_custom_metadata' => 'bool',
        'config' => '\DocuSign\eSign\Model\PaymentGatewayAccountSetting',
        'display_name' => 'string',
        'is_enabled' => 'string',
        'is_legacy' => 'string',
        'last_modified' => 'string',
        'payment_gateway' => 'string',
        'payment_gateway_account_id' => 'string',
        'payment_gateway_display_name' => 'string',
        'pay_pal_legacy_settings' => '\DocuSign\eSign\Model\PayPalLegacySettings',
        'supported_currencies' => 'string[]',
        'supported_payment_methods' => 'string[]',
        'supported_payment_methods_with_options' => '\DocuSign\eSign\Model\PaymentMethodWithOptions[]',
        'zero_decimal_currencies' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_custom_metadata' => null,
        'config' => null,
        'display_name' => null,
        'is_enabled' => null,
        'is_legacy' => null,
        'last_modified' => null,
        'payment_gateway' => null,
        'payment_gateway_account_id' => null,
        'payment_gateway_display_name' => null,
        'pay_pal_legacy_settings' => null,
        'supported_currencies' => null,
        'supported_payment_methods' => null,
        'supported_payment_methods_with_options' => null,
        'zero_decimal_currencies' => null
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
        'allow_custom_metadata' => 'allowCustomMetadata',
        'config' => 'config',
        'display_name' => 'displayName',
        'is_enabled' => 'isEnabled',
        'is_legacy' => 'isLegacy',
        'last_modified' => 'lastModified',
        'payment_gateway' => 'paymentGateway',
        'payment_gateway_account_id' => 'paymentGatewayAccountId',
        'payment_gateway_display_name' => 'paymentGatewayDisplayName',
        'pay_pal_legacy_settings' => 'payPalLegacySettings',
        'supported_currencies' => 'supportedCurrencies',
        'supported_payment_methods' => 'supportedPaymentMethods',
        'supported_payment_methods_with_options' => 'supportedPaymentMethodsWithOptions',
        'zero_decimal_currencies' => 'zeroDecimalCurrencies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_custom_metadata' => 'setAllowCustomMetadata',
        'config' => 'setConfig',
        'display_name' => 'setDisplayName',
        'is_enabled' => 'setIsEnabled',
        'is_legacy' => 'setIsLegacy',
        'last_modified' => 'setLastModified',
        'payment_gateway' => 'setPaymentGateway',
        'payment_gateway_account_id' => 'setPaymentGatewayAccountId',
        'payment_gateway_display_name' => 'setPaymentGatewayDisplayName',
        'pay_pal_legacy_settings' => 'setPayPalLegacySettings',
        'supported_currencies' => 'setSupportedCurrencies',
        'supported_payment_methods' => 'setSupportedPaymentMethods',
        'supported_payment_methods_with_options' => 'setSupportedPaymentMethodsWithOptions',
        'zero_decimal_currencies' => 'setZeroDecimalCurrencies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_custom_metadata' => 'getAllowCustomMetadata',
        'config' => 'getConfig',
        'display_name' => 'getDisplayName',
        'is_enabled' => 'getIsEnabled',
        'is_legacy' => 'getIsLegacy',
        'last_modified' => 'getLastModified',
        'payment_gateway' => 'getPaymentGateway',
        'payment_gateway_account_id' => 'getPaymentGatewayAccountId',
        'payment_gateway_display_name' => 'getPaymentGatewayDisplayName',
        'pay_pal_legacy_settings' => 'getPayPalLegacySettings',
        'supported_currencies' => 'getSupportedCurrencies',
        'supported_payment_methods' => 'getSupportedPaymentMethods',
        'supported_payment_methods_with_options' => 'getSupportedPaymentMethodsWithOptions',
        'zero_decimal_currencies' => 'getZeroDecimalCurrencies'
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
        $this->container['allow_custom_metadata'] = isset($data['allow_custom_metadata']) ? $data['allow_custom_metadata'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['is_legacy'] = isset($data['is_legacy']) ? $data['is_legacy'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['payment_gateway'] = isset($data['payment_gateway']) ? $data['payment_gateway'] : null;
        $this->container['payment_gateway_account_id'] = isset($data['payment_gateway_account_id']) ? $data['payment_gateway_account_id'] : null;
        $this->container['payment_gateway_display_name'] = isset($data['payment_gateway_display_name']) ? $data['payment_gateway_display_name'] : null;
        $this->container['pay_pal_legacy_settings'] = isset($data['pay_pal_legacy_settings']) ? $data['pay_pal_legacy_settings'] : null;
        $this->container['supported_currencies'] = isset($data['supported_currencies']) ? $data['supported_currencies'] : null;
        $this->container['supported_payment_methods'] = isset($data['supported_payment_methods']) ? $data['supported_payment_methods'] : null;
        $this->container['supported_payment_methods_with_options'] = isset($data['supported_payment_methods_with_options']) ? $data['supported_payment_methods_with_options'] : null;
        $this->container['zero_decimal_currencies'] = isset($data['zero_decimal_currencies']) ? $data['zero_decimal_currencies'] : null;
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
     * Gets allow_custom_metadata
     *
     * @return bool
     */
    public function getAllowCustomMetadata()
    {
        return $this->container['allow_custom_metadata'];
    }

    /**
     * Sets allow_custom_metadata
     *
     * @param bool $allow_custom_metadata 
     *
     * @return $this
     */
    public function setAllowCustomMetadata($allow_custom_metadata)
    {
        $this->container['allow_custom_metadata'] = $allow_custom_metadata;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \DocuSign\eSign\Model\PaymentGatewayAccountSetting
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \DocuSign\eSign\Model\PaymentGatewayAccountSetting $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

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
     * @param string $display_name 
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return string
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param string $is_enabled 
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets is_legacy
     *
     * @return string
     */
    public function getIsLegacy()
    {
        return $this->container['is_legacy'];
    }

    /**
     * Sets is_legacy
     *
     * @param string $is_legacy 
     *
     * @return $this
     */
    public function setIsLegacy($is_legacy)
    {
        $this->container['is_legacy'] = $is_legacy;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string $last_modified 
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets payment_gateway
     *
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->container['payment_gateway'];
    }

    /**
     * Sets payment_gateway
     *
     * @param string $payment_gateway 
     *
     * @return $this
     */
    public function setPaymentGateway($payment_gateway)
    {
        $this->container['payment_gateway'] = $payment_gateway;

        return $this;
    }

    /**
     * Gets payment_gateway_account_id
     *
     * @return string
     */
    public function getPaymentGatewayAccountId()
    {
        return $this->container['payment_gateway_account_id'];
    }

    /**
     * Sets payment_gateway_account_id
     *
     * @param string $payment_gateway_account_id 
     *
     * @return $this
     */
    public function setPaymentGatewayAccountId($payment_gateway_account_id)
    {
        $this->container['payment_gateway_account_id'] = $payment_gateway_account_id;

        return $this;
    }

    /**
     * Gets payment_gateway_display_name
     *
     * @return string
     */
    public function getPaymentGatewayDisplayName()
    {
        return $this->container['payment_gateway_display_name'];
    }

    /**
     * Sets payment_gateway_display_name
     *
     * @param string $payment_gateway_display_name 
     *
     * @return $this
     */
    public function setPaymentGatewayDisplayName($payment_gateway_display_name)
    {
        $this->container['payment_gateway_display_name'] = $payment_gateway_display_name;

        return $this;
    }

    /**
     * Gets pay_pal_legacy_settings
     *
     * @return \DocuSign\eSign\Model\PayPalLegacySettings
     */
    public function getPayPalLegacySettings()
    {
        return $this->container['pay_pal_legacy_settings'];
    }

    /**
     * Sets pay_pal_legacy_settings
     *
     * @param \DocuSign\eSign\Model\PayPalLegacySettings $pay_pal_legacy_settings pay_pal_legacy_settings
     *
     * @return $this
     */
    public function setPayPalLegacySettings($pay_pal_legacy_settings)
    {
        $this->container['pay_pal_legacy_settings'] = $pay_pal_legacy_settings;

        return $this;
    }

    /**
     * Gets supported_currencies
     *
     * @return string[]
     */
    public function getSupportedCurrencies()
    {
        return $this->container['supported_currencies'];
    }

    /**
     * Sets supported_currencies
     *
     * @param string[] $supported_currencies 
     *
     * @return $this
     */
    public function setSupportedCurrencies($supported_currencies)
    {
        $this->container['supported_currencies'] = $supported_currencies;

        return $this;
    }

    /**
     * Gets supported_payment_methods
     *
     * @return string[]
     */
    public function getSupportedPaymentMethods()
    {
        return $this->container['supported_payment_methods'];
    }

    /**
     * Sets supported_payment_methods
     *
     * @param string[] $supported_payment_methods 
     *
     * @return $this
     */
    public function setSupportedPaymentMethods($supported_payment_methods)
    {
        $this->container['supported_payment_methods'] = $supported_payment_methods;

        return $this;
    }

    /**
     * Gets supported_payment_methods_with_options
     *
     * @return \DocuSign\eSign\Model\PaymentMethodWithOptions[]
     */
    public function getSupportedPaymentMethodsWithOptions()
    {
        return $this->container['supported_payment_methods_with_options'];
    }

    /**
     * Sets supported_payment_methods_with_options
     *
     * @param \DocuSign\eSign\Model\PaymentMethodWithOptions[] $supported_payment_methods_with_options 
     *
     * @return $this
     */
    public function setSupportedPaymentMethodsWithOptions($supported_payment_methods_with_options)
    {
        $this->container['supported_payment_methods_with_options'] = $supported_payment_methods_with_options;

        return $this;
    }

    /**
     * Gets zero_decimal_currencies
     *
     * @return string[]
     */
    public function getZeroDecimalCurrencies()
    {
        return $this->container['zero_decimal_currencies'];
    }

    /**
     * Sets zero_decimal_currencies
     *
     * @param string[] $zero_decimal_currencies 
     *
     * @return $this
     */
    public function setZeroDecimalCurrencies($zero_decimal_currencies)
    {
        $this->container['zero_decimal_currencies'] = $zero_decimal_currencies;

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

