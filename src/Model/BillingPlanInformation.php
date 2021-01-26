<?php
/**
 * BillingPlanInformation
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
 * BillingPlanInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingPlanInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'billingPlanInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_store_receipt' => '\DocuSign\eSign\Model\AppStoreReceipt',
        'billing_address' => '\DocuSign\eSign\Model\AccountAddress',
        'credit_card_information' => '\DocuSign\eSign\Model\CreditCardInformation',
        'direct_debit_processor_information' => '\DocuSign\eSign\Model\DirectDebitProcessorInformation',
        'downgrade_reason' => 'string',
        'enable_support' => 'string',
        'included_seats' => 'string',
        'incremental_seats' => 'string',
        'payment_method' => 'string',
        'payment_processor_information' => '\DocuSign\eSign\Model\PaymentProcessorInformation',
        'plan_information' => '\DocuSign\eSign\Model\PlanInformation',
        'referral_information' => '\DocuSign\eSign\Model\ReferralInformation',
        'renewal_status' => 'string',
        'sale_discount_amount' => 'string',
        'sale_discount_fixed_amount' => 'string',
        'sale_discount_percent' => 'string',
        'sale_discount_periods' => 'string',
        'sale_discount_seat_price_override' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_store_receipt' => null,
        'billing_address' => null,
        'credit_card_information' => null,
        'direct_debit_processor_information' => null,
        'downgrade_reason' => null,
        'enable_support' => null,
        'included_seats' => null,
        'incremental_seats' => null,
        'payment_method' => null,
        'payment_processor_information' => null,
        'plan_information' => null,
        'referral_information' => null,
        'renewal_status' => null,
        'sale_discount_amount' => null,
        'sale_discount_fixed_amount' => null,
        'sale_discount_percent' => null,
        'sale_discount_periods' => null,
        'sale_discount_seat_price_override' => null
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
        'app_store_receipt' => 'appStoreReceipt',
        'billing_address' => 'billingAddress',
        'credit_card_information' => 'creditCardInformation',
        'direct_debit_processor_information' => 'directDebitProcessorInformation',
        'downgrade_reason' => 'downgradeReason',
        'enable_support' => 'enableSupport',
        'included_seats' => 'includedSeats',
        'incremental_seats' => 'incrementalSeats',
        'payment_method' => 'paymentMethod',
        'payment_processor_information' => 'paymentProcessorInformation',
        'plan_information' => 'planInformation',
        'referral_information' => 'referralInformation',
        'renewal_status' => 'renewalStatus',
        'sale_discount_amount' => 'saleDiscountAmount',
        'sale_discount_fixed_amount' => 'saleDiscountFixedAmount',
        'sale_discount_percent' => 'saleDiscountPercent',
        'sale_discount_periods' => 'saleDiscountPeriods',
        'sale_discount_seat_price_override' => 'saleDiscountSeatPriceOverride'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_store_receipt' => 'setAppStoreReceipt',
        'billing_address' => 'setBillingAddress',
        'credit_card_information' => 'setCreditCardInformation',
        'direct_debit_processor_information' => 'setDirectDebitProcessorInformation',
        'downgrade_reason' => 'setDowngradeReason',
        'enable_support' => 'setEnableSupport',
        'included_seats' => 'setIncludedSeats',
        'incremental_seats' => 'setIncrementalSeats',
        'payment_method' => 'setPaymentMethod',
        'payment_processor_information' => 'setPaymentProcessorInformation',
        'plan_information' => 'setPlanInformation',
        'referral_information' => 'setReferralInformation',
        'renewal_status' => 'setRenewalStatus',
        'sale_discount_amount' => 'setSaleDiscountAmount',
        'sale_discount_fixed_amount' => 'setSaleDiscountFixedAmount',
        'sale_discount_percent' => 'setSaleDiscountPercent',
        'sale_discount_periods' => 'setSaleDiscountPeriods',
        'sale_discount_seat_price_override' => 'setSaleDiscountSeatPriceOverride'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_store_receipt' => 'getAppStoreReceipt',
        'billing_address' => 'getBillingAddress',
        'credit_card_information' => 'getCreditCardInformation',
        'direct_debit_processor_information' => 'getDirectDebitProcessorInformation',
        'downgrade_reason' => 'getDowngradeReason',
        'enable_support' => 'getEnableSupport',
        'included_seats' => 'getIncludedSeats',
        'incremental_seats' => 'getIncrementalSeats',
        'payment_method' => 'getPaymentMethod',
        'payment_processor_information' => 'getPaymentProcessorInformation',
        'plan_information' => 'getPlanInformation',
        'referral_information' => 'getReferralInformation',
        'renewal_status' => 'getRenewalStatus',
        'sale_discount_amount' => 'getSaleDiscountAmount',
        'sale_discount_fixed_amount' => 'getSaleDiscountFixedAmount',
        'sale_discount_percent' => 'getSaleDiscountPercent',
        'sale_discount_periods' => 'getSaleDiscountPeriods',
        'sale_discount_seat_price_override' => 'getSaleDiscountSeatPriceOverride'
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
        $this->container['app_store_receipt'] = isset($data['app_store_receipt']) ? $data['app_store_receipt'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['credit_card_information'] = isset($data['credit_card_information']) ? $data['credit_card_information'] : null;
        $this->container['direct_debit_processor_information'] = isset($data['direct_debit_processor_information']) ? $data['direct_debit_processor_information'] : null;
        $this->container['downgrade_reason'] = isset($data['downgrade_reason']) ? $data['downgrade_reason'] : null;
        $this->container['enable_support'] = isset($data['enable_support']) ? $data['enable_support'] : null;
        $this->container['included_seats'] = isset($data['included_seats']) ? $data['included_seats'] : null;
        $this->container['incremental_seats'] = isset($data['incremental_seats']) ? $data['incremental_seats'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_processor_information'] = isset($data['payment_processor_information']) ? $data['payment_processor_information'] : null;
        $this->container['plan_information'] = isset($data['plan_information']) ? $data['plan_information'] : null;
        $this->container['referral_information'] = isset($data['referral_information']) ? $data['referral_information'] : null;
        $this->container['renewal_status'] = isset($data['renewal_status']) ? $data['renewal_status'] : null;
        $this->container['sale_discount_amount'] = isset($data['sale_discount_amount']) ? $data['sale_discount_amount'] : null;
        $this->container['sale_discount_fixed_amount'] = isset($data['sale_discount_fixed_amount']) ? $data['sale_discount_fixed_amount'] : null;
        $this->container['sale_discount_percent'] = isset($data['sale_discount_percent']) ? $data['sale_discount_percent'] : null;
        $this->container['sale_discount_periods'] = isset($data['sale_discount_periods']) ? $data['sale_discount_periods'] : null;
        $this->container['sale_discount_seat_price_override'] = isset($data['sale_discount_seat_price_override']) ? $data['sale_discount_seat_price_override'] : null;
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
     * Gets app_store_receipt
     *
     * @return \DocuSign\eSign\Model\AppStoreReceipt
     */
    public function getAppStoreReceipt()
    {
        return $this->container['app_store_receipt'];
    }

    /**
     * Sets app_store_receipt
     *
     * @param \DocuSign\eSign\Model\AppStoreReceipt $app_store_receipt app_store_receipt
     *
     * @return $this
     */
    public function setAppStoreReceipt($app_store_receipt)
    {
        $this->container['app_store_receipt'] = $app_store_receipt;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \DocuSign\eSign\Model\AccountAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \DocuSign\eSign\Model\AccountAddress $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets credit_card_information
     *
     * @return \DocuSign\eSign\Model\CreditCardInformation
     */
    public function getCreditCardInformation()
    {
        return $this->container['credit_card_information'];
    }

    /**
     * Sets credit_card_information
     *
     * @param \DocuSign\eSign\Model\CreditCardInformation $credit_card_information credit_card_information
     *
     * @return $this
     */
    public function setCreditCardInformation($credit_card_information)
    {
        $this->container['credit_card_information'] = $credit_card_information;

        return $this;
    }

    /**
     * Gets direct_debit_processor_information
     *
     * @return \DocuSign\eSign\Model\DirectDebitProcessorInformation
     */
    public function getDirectDebitProcessorInformation()
    {
        return $this->container['direct_debit_processor_information'];
    }

    /**
     * Sets direct_debit_processor_information
     *
     * @param \DocuSign\eSign\Model\DirectDebitProcessorInformation $direct_debit_processor_information direct_debit_processor_information
     *
     * @return $this
     */
    public function setDirectDebitProcessorInformation($direct_debit_processor_information)
    {
        $this->container['direct_debit_processor_information'] = $direct_debit_processor_information;

        return $this;
    }

    /**
     * Gets downgrade_reason
     *
     * @return string
     */
    public function getDowngradeReason()
    {
        return $this->container['downgrade_reason'];
    }

    /**
     * Sets downgrade_reason
     *
     * @param string $downgrade_reason 
     *
     * @return $this
     */
    public function setDowngradeReason($downgrade_reason)
    {
        $this->container['downgrade_reason'] = $downgrade_reason;

        return $this;
    }

    /**
     * Gets enable_support
     *
     * @return string
     */
    public function getEnableSupport()
    {
        return $this->container['enable_support'];
    }

    /**
     * Sets enable_support
     *
     * @param string $enable_support 
     *
     * @return $this
     */
    public function setEnableSupport($enable_support)
    {
        $this->container['enable_support'] = $enable_support;

        return $this;
    }

    /**
     * Gets included_seats
     *
     * @return string
     */
    public function getIncludedSeats()
    {
        return $this->container['included_seats'];
    }

    /**
     * Sets included_seats
     *
     * @param string $included_seats The number of seats (users) included.
     *
     * @return $this
     */
    public function setIncludedSeats($included_seats)
    {
        $this->container['included_seats'] = $included_seats;

        return $this;
    }

    /**
     * Gets incremental_seats
     *
     * @return string
     */
    public function getIncrementalSeats()
    {
        return $this->container['incremental_seats'];
    }

    /**
     * Sets incremental_seats
     *
     * @param string $incremental_seats Reserved: TBD
     *
     * @return $this
     */
    public function setIncrementalSeats($incremental_seats)
    {
        $this->container['incremental_seats'] = $incremental_seats;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method 
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_processor_information
     *
     * @return \DocuSign\eSign\Model\PaymentProcessorInformation
     */
    public function getPaymentProcessorInformation()
    {
        return $this->container['payment_processor_information'];
    }

    /**
     * Sets payment_processor_information
     *
     * @param \DocuSign\eSign\Model\PaymentProcessorInformation $payment_processor_information payment_processor_information
     *
     * @return $this
     */
    public function setPaymentProcessorInformation($payment_processor_information)
    {
        $this->container['payment_processor_information'] = $payment_processor_information;

        return $this;
    }

    /**
     * Gets plan_information
     *
     * @return \DocuSign\eSign\Model\PlanInformation
     */
    public function getPlanInformation()
    {
        return $this->container['plan_information'];
    }

    /**
     * Sets plan_information
     *
     * @param \DocuSign\eSign\Model\PlanInformation $plan_information plan_information
     *
     * @return $this
     */
    public function setPlanInformation($plan_information)
    {
        $this->container['plan_information'] = $plan_information;

        return $this;
    }

    /**
     * Gets referral_information
     *
     * @return \DocuSign\eSign\Model\ReferralInformation
     */
    public function getReferralInformation()
    {
        return $this->container['referral_information'];
    }

    /**
     * Sets referral_information
     *
     * @param \DocuSign\eSign\Model\ReferralInformation $referral_information referral_information
     *
     * @return $this
     */
    public function setReferralInformation($referral_information)
    {
        $this->container['referral_information'] = $referral_information;

        return $this;
    }

    /**
     * Gets renewal_status
     *
     * @return string
     */
    public function getRenewalStatus()
    {
        return $this->container['renewal_status'];
    }

    /**
     * Sets renewal_status
     *
     * @param string $renewal_status 
     *
     * @return $this
     */
    public function setRenewalStatus($renewal_status)
    {
        $this->container['renewal_status'] = $renewal_status;

        return $this;
    }

    /**
     * Gets sale_discount_amount
     *
     * @return string
     */
    public function getSaleDiscountAmount()
    {
        return $this->container['sale_discount_amount'];
    }

    /**
     * Sets sale_discount_amount
     *
     * @param string $sale_discount_amount 
     *
     * @return $this
     */
    public function setSaleDiscountAmount($sale_discount_amount)
    {
        $this->container['sale_discount_amount'] = $sale_discount_amount;

        return $this;
    }

    /**
     * Gets sale_discount_fixed_amount
     *
     * @return string
     */
    public function getSaleDiscountFixedAmount()
    {
        return $this->container['sale_discount_fixed_amount'];
    }

    /**
     * Sets sale_discount_fixed_amount
     *
     * @param string $sale_discount_fixed_amount 
     *
     * @return $this
     */
    public function setSaleDiscountFixedAmount($sale_discount_fixed_amount)
    {
        $this->container['sale_discount_fixed_amount'] = $sale_discount_fixed_amount;

        return $this;
    }

    /**
     * Gets sale_discount_percent
     *
     * @return string
     */
    public function getSaleDiscountPercent()
    {
        return $this->container['sale_discount_percent'];
    }

    /**
     * Sets sale_discount_percent
     *
     * @param string $sale_discount_percent 
     *
     * @return $this
     */
    public function setSaleDiscountPercent($sale_discount_percent)
    {
        $this->container['sale_discount_percent'] = $sale_discount_percent;

        return $this;
    }

    /**
     * Gets sale_discount_periods
     *
     * @return string
     */
    public function getSaleDiscountPeriods()
    {
        return $this->container['sale_discount_periods'];
    }

    /**
     * Sets sale_discount_periods
     *
     * @param string $sale_discount_periods 
     *
     * @return $this
     */
    public function setSaleDiscountPeriods($sale_discount_periods)
    {
        $this->container['sale_discount_periods'] = $sale_discount_periods;

        return $this;
    }

    /**
     * Gets sale_discount_seat_price_override
     *
     * @return string
     */
    public function getSaleDiscountSeatPriceOverride()
    {
        return $this->container['sale_discount_seat_price_override'];
    }

    /**
     * Sets sale_discount_seat_price_override
     *
     * @param string $sale_discount_seat_price_override 
     *
     * @return $this
     */
    public function setSaleDiscountSeatPriceOverride($sale_discount_seat_price_override)
    {
        $this->container['sale_discount_seat_price_override'] = $sale_discount_seat_price_override;

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

