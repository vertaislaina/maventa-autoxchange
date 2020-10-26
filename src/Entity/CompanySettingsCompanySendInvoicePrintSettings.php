<?php
/**
 * CompanySettingsCompanySendInvoicePrintSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AutoXChange API
 *
 * ### Changelog #### 2020-10-26 13:41 UTC id:e41dceba (0.85.75) - Return error on old ordering profile registration  #### 2020-10-22 11:16 UTC id:a2f621ff (0.85.74)  #### 2020-10-21 08:44 UTC id:1ebcfa21 (0.85.73) - Create and associate a AutoInvoice user to a ODP user for better compatibility  #### 2020-10-15 11:32 UTC id:373f35ed (0.85.72) - Do not create billing action for transactions made by operators  #### 2020-10-13 17:45 UTC id:d3c2849d (0.85.71) - Support incoming scan documents   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.75
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vertaislaina\Maventa\AutoXChange\Entity;

use \ArrayAccess;
use \Vertaislaina\Maventa\AutoXChange\ObjectSerializer;

/**
 * CompanySettingsCompanySendInvoicePrintSettings Class Doc Comment
 *
 * @category Class
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanySettingsCompanySendInvoicePrintSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanySettings_CompanySendInvoicePrintSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'letterClass' => 'string',
        'colorScheme' => 'string',
        'attachmentPrint' => 'bool',
        'marketingPage' => 'bool',
        'useOwnPdf' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'letterClass' => null,
        'colorScheme' => null,
        'attachmentPrint' => null,
        'marketingPage' => null,
        'useOwnPdf' => null
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
        'enabled' => 'enabled',
        'letterClass' => 'letter_class',
        'colorScheme' => 'color_scheme',
        'attachmentPrint' => 'attachment_print',
        'marketingPage' => 'marketing_page',
        'useOwnPdf' => 'use_own_pdf'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'letterClass' => 'setLetterClass',
        'colorScheme' => 'setColorScheme',
        'attachmentPrint' => 'setAttachmentPrint',
        'marketingPage' => 'setMarketingPage',
        'useOwnPdf' => 'setUseOwnPdf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'letterClass' => 'getLetterClass',
        'colorScheme' => 'getColorScheme',
        'attachmentPrint' => 'getAttachmentPrint',
        'marketingPage' => 'getMarketingPage',
        'useOwnPdf' => 'getUseOwnPdf'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['letterClass'] = isset($data['letterClass']) ? $data['letterClass'] : null;
        $this->container['colorScheme'] = isset($data['colorScheme']) ? $data['colorScheme'] : null;
        $this->container['attachmentPrint'] = isset($data['attachmentPrint']) ? $data['attachmentPrint'] : null;
        $this->container['marketingPage'] = isset($data['marketingPage']) ? $data['marketingPage'] : null;
        $this->container['useOwnPdf'] = isset($data['useOwnPdf']) ? $data['useOwnPdf'] : null;
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Print service enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets letterClass
     *
     * @return string
     */
    public function getLetterClass()
    {
        return $this->container['letterClass'];
    }

    /**
     * Sets letterClass
     *
     * @param string $letterClass Print service letter class(FI only)
     *
     * @return $this
     */
    public function setLetterClass($letterClass)
    {
        $this->container['letterClass'] = $letterClass;

        return $this;
    }

    /**
     * Gets colorScheme
     *
     * @return string
     */
    public function getColorScheme()
    {
        return $this->container['colorScheme'];
    }

    /**
     * Sets colorScheme
     *
     * @param string $colorScheme Print color(FI only)
     *
     * @return $this
     */
    public function setColorScheme($colorScheme)
    {
        $this->container['colorScheme'] = $colorScheme;

        return $this;
    }

    /**
     * Gets attachmentPrint
     *
     * @return bool
     */
    public function getAttachmentPrint()
    {
        return $this->container['attachmentPrint'];
    }

    /**
     * Sets attachmentPrint
     *
     * @param bool $attachmentPrint Attachment print(NO only)
     *
     * @return $this
     */
    public function setAttachmentPrint($attachmentPrint)
    {
        $this->container['attachmentPrint'] = $attachmentPrint;

        return $this;
    }

    /**
     * Gets marketingPage
     *
     * @return bool
     */
    public function getMarketingPage()
    {
        return $this->container['marketingPage'];
    }

    /**
     * Sets marketingPage
     *
     * @param bool $marketingPage Automatic e-invoice marketing page(FI only)
     *
     * @return $this
     */
    public function setMarketingPage($marketingPage)
    {
        $this->container['marketingPage'] = $marketingPage;

        return $this;
    }

    /**
     * Gets useOwnPdf
     *
     * @return bool
     */
    public function getUseOwnPdf()
    {
        return $this->container['useOwnPdf'];
    }

    /**
     * Sets useOwnPdf
     *
     * @param bool $useOwnPdf Use own PDFs for print service(FI and NO only)
     *
     * @return $this
     */
    public function setUseOwnPdf($useOwnPdf)
    {
        $this->container['useOwnPdf'] = $useOwnPdf;

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


