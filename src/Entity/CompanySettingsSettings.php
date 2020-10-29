<?php
/**
 * CompanySettingsSettings
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
 * ### Changelog #### 2020-10-28 13:17 UTC id:5d9c56d0 (0.85.78) - Do not use bid only when looking in Peppol directory  #### 2020-10-28 10:02 UTC id:2cff14f6 (0.85.77) - Return bad request when the network_settings parameter format is invalid on POST company/profile operation for FI BANK network  #### 2020-10-27 12:39 UTC id:fa7472c9 (0.85.76) - Fix FINVOICE20 and FINVOICE13 formats for the POST /v1/invoices endpoint  #### 2020-10-26 13:41 UTC id:e41dceba (0.85.75) - Return error on old ordering profile registration  #### 2020-10-22 11:16 UTC id:a2f621ff (0.85.74)   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.78
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
 * CompanySettingsSettings Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanySettingsSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanySettings_Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'details' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyDetails',
        'address' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyAddress',
        'invoiceNotifications' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyInvoiceNotifications',
        'sendInvoiceEmail' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoiceEmail',
        'dataflyt' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsDataflyt',
        'dataflytLink' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsDataflytLink',
        'sendInvoicePrint' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoicePrintSettings',
        'sendInvoiceGeneral' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoiceGeneralSettings',
        'logos' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyLogos',
        'checks' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyChecks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'details' => null,
        'address' => null,
        'invoiceNotifications' => null,
        'sendInvoiceEmail' => null,
        'dataflyt' => null,
        'dataflytLink' => null,
        'sendInvoicePrint' => null,
        'sendInvoiceGeneral' => null,
        'logos' => null,
        'checks' => null
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
        'details' => 'details',
        'address' => 'address',
        'invoiceNotifications' => 'invoice_notifications',
        'sendInvoiceEmail' => 'send_invoice_email',
        'dataflyt' => 'dataflyt',
        'dataflytLink' => 'dataflyt_link',
        'sendInvoicePrint' => 'send_invoice_print',
        'sendInvoiceGeneral' => 'send_invoice_general',
        'logos' => 'logos',
        'checks' => 'checks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'details' => 'setDetails',
        'address' => 'setAddress',
        'invoiceNotifications' => 'setInvoiceNotifications',
        'sendInvoiceEmail' => 'setSendInvoiceEmail',
        'dataflyt' => 'setDataflyt',
        'dataflytLink' => 'setDataflytLink',
        'sendInvoicePrint' => 'setSendInvoicePrint',
        'sendInvoiceGeneral' => 'setSendInvoiceGeneral',
        'logos' => 'setLogos',
        'checks' => 'setChecks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'details' => 'getDetails',
        'address' => 'getAddress',
        'invoiceNotifications' => 'getInvoiceNotifications',
        'sendInvoiceEmail' => 'getSendInvoiceEmail',
        'dataflyt' => 'getDataflyt',
        'dataflytLink' => 'getDataflytLink',
        'sendInvoicePrint' => 'getSendInvoicePrint',
        'sendInvoiceGeneral' => 'getSendInvoiceGeneral',
        'logos' => 'getLogos',
        'checks' => 'getChecks'
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
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['invoiceNotifications'] = isset($data['invoiceNotifications']) ? $data['invoiceNotifications'] : null;
        $this->container['sendInvoiceEmail'] = isset($data['sendInvoiceEmail']) ? $data['sendInvoiceEmail'] : null;
        $this->container['dataflyt'] = isset($data['dataflyt']) ? $data['dataflyt'] : null;
        $this->container['dataflytLink'] = isset($data['dataflytLink']) ? $data['dataflytLink'] : null;
        $this->container['sendInvoicePrint'] = isset($data['sendInvoicePrint']) ? $data['sendInvoicePrint'] : null;
        $this->container['sendInvoiceGeneral'] = isset($data['sendInvoiceGeneral']) ? $data['sendInvoiceGeneral'] : null;
        $this->container['logos'] = isset($data['logos']) ? $data['logos'] : null;
        $this->container['checks'] = isset($data['checks']) ? $data['checks'] : null;
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
     * Gets details
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyDetails $details Company details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyAddress $address Company address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets invoiceNotifications
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyInvoiceNotifications
     */
    public function getInvoiceNotifications()
    {
        return $this->container['invoiceNotifications'];
    }

    /**
     * Sets invoiceNotifications
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyInvoiceNotifications $invoiceNotifications Company invoice notifications
     *
     * @return $this
     */
    public function setInvoiceNotifications($invoiceNotifications)
    {
        $this->container['invoiceNotifications'] = $invoiceNotifications;

        return $this;
    }

    /**
     * Gets sendInvoiceEmail
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoiceEmail
     */
    public function getSendInvoiceEmail()
    {
        return $this->container['sendInvoiceEmail'];
    }

    /**
     * Sets sendInvoiceEmail
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoiceEmail $sendInvoiceEmail Company send invoices via emails
     *
     * @return $this
     */
    public function setSendInvoiceEmail($sendInvoiceEmail)
    {
        $this->container['sendInvoiceEmail'] = $sendInvoiceEmail;

        return $this;
    }

    /**
     * Gets dataflyt
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsDataflyt
     */
    public function getDataflyt()
    {
        return $this->container['dataflyt'];
    }

    /**
     * Sets dataflyt
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsDataflyt $dataflyt Dataflyt settings
     *
     * @return $this
     */
    public function setDataflyt($dataflyt)
    {
        $this->container['dataflyt'] = $dataflyt;

        return $this;
    }

    /**
     * Gets dataflytLink
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsDataflytLink
     */
    public function getDataflytLink()
    {
        return $this->container['dataflytLink'];
    }

    /**
     * Sets dataflytLink
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsDataflytLink $dataflytLink Dataflyt accounting office
     *
     * @return $this
     */
    public function setDataflytLink($dataflytLink)
    {
        $this->container['dataflytLink'] = $dataflytLink;

        return $this;
    }

    /**
     * Gets sendInvoicePrint
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoicePrintSettings
     */
    public function getSendInvoicePrint()
    {
        return $this->container['sendInvoicePrint'];
    }

    /**
     * Sets sendInvoicePrint
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoicePrintSettings $sendInvoicePrint Company invoice sending print settings
     *
     * @return $this
     */
    public function setSendInvoicePrint($sendInvoicePrint)
    {
        $this->container['sendInvoicePrint'] = $sendInvoicePrint;

        return $this;
    }

    /**
     * Gets sendInvoiceGeneral
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoiceGeneralSettings
     */
    public function getSendInvoiceGeneral()
    {
        return $this->container['sendInvoiceGeneral'];
    }

    /**
     * Sets sendInvoiceGeneral
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanySendInvoiceGeneralSettings $sendInvoiceGeneral Company invoice sending general settings
     *
     * @return $this
     */
    public function setSendInvoiceGeneral($sendInvoiceGeneral)
    {
        $this->container['sendInvoiceGeneral'] = $sendInvoiceGeneral;

        return $this;
    }

    /**
     * Gets logos
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyLogos
     */
    public function getLogos()
    {
        return $this->container['logos'];
    }

    /**
     * Sets logos
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyLogos $logos Company logos
     *
     * @return $this
     */
    public function setLogos($logos)
    {
        $this->container['logos'] = $logos;

        return $this;
    }

    /**
     * Gets checks
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyChecks
     */
    public function getChecks()
    {
        return $this->container['checks'];
    }

    /**
     * Sets checks
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsCompanyChecks $checks Checks to be executed
     *
     * @return $this
     */
    public function setChecks($checks)
    {
        $this->container['checks'] = $checks;

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


