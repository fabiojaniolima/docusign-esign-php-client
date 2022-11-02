<?php
/**
 * CreditCardInformation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
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
 * Swagger Codegen version: 2.4.21-SNAPSHOT
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
 * CreditCardInformation Class Doc Comment
 *
 * @category    Class
 * @description This object contains information about a credit card that is associated with an account.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreditCardInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'creditCardInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\DocuSign\eSign\Model\AddressInformation',
        'card_last_digits' => '?string',
        'card_number' => '?string',
        'card_type' => '?string',
        'cv_number' => '?string',
        'expiration_month' => '?string',
        'expiration_year' => '?string',
        'name_on_card' => '?string',
        'tokenized_card' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'card_last_digits' => null,
        'card_number' => null,
        'card_type' => null,
        'cv_number' => null,
        'expiration_month' => null,
        'expiration_year' => null,
        'name_on_card' => null,
        'tokenized_card' => null
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
        'address' => 'address',
        'card_last_digits' => 'cardLastDigits',
        'card_number' => 'cardNumber',
        'card_type' => 'cardType',
        'cv_number' => 'cvNumber',
        'expiration_month' => 'expirationMonth',
        'expiration_year' => 'expirationYear',
        'name_on_card' => 'nameOnCard',
        'tokenized_card' => 'tokenizedCard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'card_last_digits' => 'setCardLastDigits',
        'card_number' => 'setCardNumber',
        'card_type' => 'setCardType',
        'cv_number' => 'setCvNumber',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'name_on_card' => 'setNameOnCard',
        'tokenized_card' => 'setTokenizedCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'card_last_digits' => 'getCardLastDigits',
        'card_number' => 'getCardNumber',
        'card_type' => 'getCardType',
        'cv_number' => 'getCvNumber',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'name_on_card' => 'getNameOnCard',
        'tokenized_card' => 'getTokenizedCard'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['card_last_digits'] = isset($data['card_last_digits']) ? $data['card_last_digits'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['cv_number'] = isset($data['cv_number']) ? $data['cv_number'] : null;
        $this->container['expiration_month'] = isset($data['expiration_month']) ? $data['expiration_month'] : null;
        $this->container['expiration_year'] = isset($data['expiration_year']) ? $data['expiration_year'] : null;
        $this->container['name_on_card'] = isset($data['name_on_card']) ? $data['name_on_card'] : null;
        $this->container['tokenized_card'] = isset($data['tokenized_card']) ? $data['tokenized_card'] : null;
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
     * Gets address
     *
     * @return \DocuSign\eSign\Model\AddressInformation
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \DocuSign\eSign\Model\AddressInformation $address A complex element containing the credit card billing address information.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets card_last_digits
     *
     * @return ?string
     */
    public function getCardLastDigits()
    {
        return $this->container['card_last_digits'];
    }

    /**
     * Sets card_last_digits
     *
     * @param ?string $card_last_digits 
     *
     * @return $this
     */
    public function setCardLastDigits($card_last_digits)
    {
        $this->container['card_last_digits'] = $card_last_digits;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return ?string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param ?string $card_number The number on the credit card.
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return ?string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param ?string $card_type The credit card type. Valid values are: visa, mastercard, or amex.
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets cv_number
     *
     * @return ?string
     */
    public function getCvNumber()
    {
        return $this->container['cv_number'];
    }

    /**
     * Sets cv_number
     *
     * @param ?string $cv_number 
     *
     * @return $this
     */
    public function setCvNumber($cv_number)
    {
        $this->container['cv_number'] = $cv_number;

        return $this;
    }

    /**
     * Gets expiration_month
     *
     * @return ?string
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     *
     * @param ?string $expiration_month The month that the credit card expires (1-12).
     *
     * @return $this
     */
    public function setExpirationMonth($expiration_month)
    {
        $this->container['expiration_month'] = $expiration_month;

        return $this;
    }

    /**
     * Gets expiration_year
     *
     * @return ?string
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     *
     * @param ?string $expiration_year The year 4 digit year in which the credit card expires.
     *
     * @return $this
     */
    public function setExpirationYear($expiration_year)
    {
        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets name_on_card
     *
     * @return ?string
     */
    public function getNameOnCard()
    {
        return $this->container['name_on_card'];
    }

    /**
     * Sets name_on_card
     *
     * @param ?string $name_on_card The exact name printed on the credit card.
     *
     * @return $this
     */
    public function setNameOnCard($name_on_card)
    {
        $this->container['name_on_card'] = $name_on_card;

        return $this;
    }

    /**
     * Gets tokenized_card
     *
     * @return ?string
     */
    public function getTokenizedCard()
    {
        return $this->container['tokenized_card'];
    }

    /**
     * Sets tokenized_card
     *
     * @param ?string $tokenized_card 
     *
     * @return $this
     */
    public function setTokenizedCard($tokenized_card)
    {
        $this->container['tokenized_card'] = $tokenized_card;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

