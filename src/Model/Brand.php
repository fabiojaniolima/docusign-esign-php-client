<?php
/**
 * Brand
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
 * Brand Class Doc Comment
 *
 * @category    Class
 * @description Information about a brand that is associated with an account. A brand applies custom styles and text to an envelope.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Brand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'brand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'brand_company' => '?string',
        'brand_id' => '?string',
        'brand_languages' => '?string[]',
        'brand_name' => '?string',
        'colors' => '\DocuSign\eSign\Model\NameValue[]',
        'default_brand_language' => '?string',
        'email_content' => '\DocuSign\eSign\Model\BrandEmailContent[]',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'is_overriding_company_name' => '?bool',
        'is_sending_default' => '?bool',
        'is_signing_default' => '?bool',
        'landing_pages' => '\DocuSign\eSign\Model\NameValue[]',
        'links' => '\DocuSign\eSign\Model\BrandLink[]',
        'logos' => '\DocuSign\eSign\Model\BrandLogos',
        'resources' => '\DocuSign\eSign\Model\BrandResourceUrls'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'brand_company' => null,
        'brand_id' => null,
        'brand_languages' => null,
        'brand_name' => null,
        'colors' => null,
        'default_brand_language' => null,
        'email_content' => null,
        'error_details' => null,
        'is_overriding_company_name' => null,
        'is_sending_default' => null,
        'is_signing_default' => null,
        'landing_pages' => null,
        'links' => null,
        'logos' => null,
        'resources' => null
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
        'brand_company' => 'brandCompany',
        'brand_id' => 'brandId',
        'brand_languages' => 'brandLanguages',
        'brand_name' => 'brandName',
        'colors' => 'colors',
        'default_brand_language' => 'defaultBrandLanguage',
        'email_content' => 'emailContent',
        'error_details' => 'errorDetails',
        'is_overriding_company_name' => 'isOverridingCompanyName',
        'is_sending_default' => 'isSendingDefault',
        'is_signing_default' => 'isSigningDefault',
        'landing_pages' => 'landingPages',
        'links' => 'links',
        'logos' => 'logos',
        'resources' => 'resources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand_company' => 'setBrandCompany',
        'brand_id' => 'setBrandId',
        'brand_languages' => 'setBrandLanguages',
        'brand_name' => 'setBrandName',
        'colors' => 'setColors',
        'default_brand_language' => 'setDefaultBrandLanguage',
        'email_content' => 'setEmailContent',
        'error_details' => 'setErrorDetails',
        'is_overriding_company_name' => 'setIsOverridingCompanyName',
        'is_sending_default' => 'setIsSendingDefault',
        'is_signing_default' => 'setIsSigningDefault',
        'landing_pages' => 'setLandingPages',
        'links' => 'setLinks',
        'logos' => 'setLogos',
        'resources' => 'setResources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand_company' => 'getBrandCompany',
        'brand_id' => 'getBrandId',
        'brand_languages' => 'getBrandLanguages',
        'brand_name' => 'getBrandName',
        'colors' => 'getColors',
        'default_brand_language' => 'getDefaultBrandLanguage',
        'email_content' => 'getEmailContent',
        'error_details' => 'getErrorDetails',
        'is_overriding_company_name' => 'getIsOverridingCompanyName',
        'is_sending_default' => 'getIsSendingDefault',
        'is_signing_default' => 'getIsSigningDefault',
        'landing_pages' => 'getLandingPages',
        'links' => 'getLinks',
        'logos' => 'getLogos',
        'resources' => 'getResources'
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
        $this->container['brand_company'] = isset($data['brand_company']) ? $data['brand_company'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['brand_languages'] = isset($data['brand_languages']) ? $data['brand_languages'] : null;
        $this->container['brand_name'] = isset($data['brand_name']) ? $data['brand_name'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
        $this->container['default_brand_language'] = isset($data['default_brand_language']) ? $data['default_brand_language'] : null;
        $this->container['email_content'] = isset($data['email_content']) ? $data['email_content'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['is_overriding_company_name'] = isset($data['is_overriding_company_name']) ? $data['is_overriding_company_name'] : null;
        $this->container['is_sending_default'] = isset($data['is_sending_default']) ? $data['is_sending_default'] : null;
        $this->container['is_signing_default'] = isset($data['is_signing_default']) ? $data['is_signing_default'] : null;
        $this->container['landing_pages'] = isset($data['landing_pages']) ? $data['landing_pages'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['logos'] = isset($data['logos']) ? $data['logos'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
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
     * Gets brand_company
     *
     * @return ?string
     */
    public function getBrandCompany()
    {
        return $this->container['brand_company'];
    }

    /**
     * Sets brand_company
     *
     * @param ?string $brand_company The name of the company associated with this brand.
     *
     * @return $this
     */
    public function setBrandCompany($brand_company)
    {
        $this->container['brand_company'] = $brand_company;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return ?string
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param ?string $brand_id The ID used to identify a specific brand in API calls.
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets brand_languages
     *
     * @return ?string[]
     */
    public function getBrandLanguages()
    {
        return $this->container['brand_languages'];
    }

    /**
     * Sets brand_languages
     *
     * @param ?string[] $brand_languages 
     *
     * @return $this
     */
    public function setBrandLanguages($brand_languages)
    {
        $this->container['brand_languages'] = $brand_languages;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return ?string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param ?string $brand_name The name of the brand.
     *
     * @return $this
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \DocuSign\eSign\Model\NameValue[] $colors 
     *
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets default_brand_language
     *
     * @return ?string
     */
    public function getDefaultBrandLanguage()
    {
        return $this->container['default_brand_language'];
    }

    /**
     * Sets default_brand_language
     *
     * @param ?string $default_brand_language 
     *
     * @return $this
     */
    public function setDefaultBrandLanguage($default_brand_language)
    {
        $this->container['default_brand_language'] = $default_brand_language;

        return $this;
    }

    /**
     * Gets email_content
     *
     * @return \DocuSign\eSign\Model\BrandEmailContent[]
     */
    public function getEmailContent()
    {
        return $this->container['email_content'];
    }

    /**
     * Sets email_content
     *
     * @param \DocuSign\eSign\Model\BrandEmailContent[] $email_content 
     *
     * @return $this
     */
    public function setEmailContent($email_content)
    {
        $this->container['email_content'] = $email_content;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details This object describes errors that occur. It is only valid for responses and ignored in requests.
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets is_overriding_company_name
     *
     * @return ?bool
     */
    public function getIsOverridingCompanyName()
    {
        return $this->container['is_overriding_company_name'];
    }

    /**
     * Sets is_overriding_company_name
     *
     * @param ?bool $is_overriding_company_name 
     *
     * @return $this
     */
    public function setIsOverridingCompanyName($is_overriding_company_name)
    {
        $this->container['is_overriding_company_name'] = $is_overriding_company_name;

        return $this;
    }

    /**
     * Gets is_sending_default
     *
     * @return ?bool
     */
    public function getIsSendingDefault()
    {
        return $this->container['is_sending_default'];
    }

    /**
     * Sets is_sending_default
     *
     * @param ?bool $is_sending_default 
     *
     * @return $this
     */
    public function setIsSendingDefault($is_sending_default)
    {
        $this->container['is_sending_default'] = $is_sending_default;

        return $this;
    }

    /**
     * Gets is_signing_default
     *
     * @return ?bool
     */
    public function getIsSigningDefault()
    {
        return $this->container['is_signing_default'];
    }

    /**
     * Sets is_signing_default
     *
     * @param ?bool $is_signing_default 
     *
     * @return $this
     */
    public function setIsSigningDefault($is_signing_default)
    {
        $this->container['is_signing_default'] = $is_signing_default;

        return $this;
    }

    /**
     * Gets landing_pages
     *
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getLandingPages()
    {
        return $this->container['landing_pages'];
    }

    /**
     * Sets landing_pages
     *
     * @param \DocuSign\eSign\Model\NameValue[] $landing_pages 
     *
     * @return $this
     */
    public function setLandingPages($landing_pages)
    {
        $this->container['landing_pages'] = $landing_pages;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \DocuSign\eSign\Model\BrandLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \DocuSign\eSign\Model\BrandLink[] $links 
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets logos
     *
     * @return \DocuSign\eSign\Model\BrandLogos
     */
    public function getLogos()
    {
        return $this->container['logos'];
    }

    /**
     * Sets logos
     *
     * @param \DocuSign\eSign\Model\BrandLogos $logos The URIs for retrieving the logos that are associated with the brand.
     *
     * @return $this
     */
    public function setLogos($logos)
    {
        $this->container['logos'] = $logos;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \DocuSign\eSign\Model\BrandResourceUrls
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \DocuSign\eSign\Model\BrandResourceUrls $resources An object containing the URLs for the four DocuSign master resource files that the brand uses for sending, signing, email messages, and captive (embedded) signing. You can modify the default email messages and formats in these file to customize the user experience.  **Note:** This object is returned only when the `resourceContentType` is `sending`, `signing`, `email`, or `signing_captive`.
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

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

