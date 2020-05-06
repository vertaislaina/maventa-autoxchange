<?php
/**
 * PatchV1CompanySettings
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
 * ### Changelog #### 2020-05-06 09:36 UTC id:3586aec0 - Graceful handling of invalid VAT numbers in supplier activation lookup  #### 2020-05-05 09:16 UTC id:2095eb8b - Only present /v1/invoices sources as INTERNAL, EXTERNAL or SCAN  #### 2020-05-04 06:49 UTC id:4dc71ee6 - Improve handling of the license information given in the requests - Present only attachments as files for invoices - Treat invoices from VismaScanner and Go2UBL as scan origins  #### 2020-05-04 05:04 UTC id:038c9629 - Present the delivery time for sent documents - Show SCAN as origin for scanned invoices  #### 2020-04-28 11:22 UTC id:cad3bbb6 - Created at filter for sent invoices - Use invoice id as the id for the analysis   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.35
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
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
 * PatchV1CompanySettings Class Doc Comment
 *
 * @category Class
 * @description Modify company settings
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PatchV1CompanySettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'patchV1CompanySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'details' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanyDetails',
        'address' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanyAddress',
        'invoiceNotifications' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanyInvoiceNotifications',
        'dataflyt' => '\Vertaislaina\Maventa\AutoXChange\Entity\DataflytIn',
        'dataflytLink' => '\Vertaislaina\Maventa\AutoXChange\Entity\DataflytLinkIn',
        'sendInvoicePrint' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySendInvoicePrintSettings',
        'sendInvoiceGeneral' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanySendInvoiceGeneralSettings',
        'logos' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanyLogos',
        'checks' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanyChecks'
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

        if ($this->container['details'] === null) {
            $invalidProperties[] = "'details' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['invoiceNotifications'] === null) {
            $invalidProperties[] = "'invoiceNotifications' can't be null";
        }
        if ($this->container['dataflyt'] === null) {
            $invalidProperties[] = "'dataflyt' can't be null";
        }
        if ($this->container['dataflytLink'] === null) {
            $invalidProperties[] = "'dataflytLink' can't be null";
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
     * Gets details
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanyDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanyDetails $details Company details
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanyAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanyAddress $address Company address
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanyInvoiceNotifications
     */
    public function getInvoiceNotifications()
    {
        return $this->container['invoiceNotifications'];
    }

    /**
     * Sets invoiceNotifications
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanyInvoiceNotifications $invoiceNotifications Company invoice notifications
     *
     * @return $this
     */
    public function setInvoiceNotifications($invoiceNotifications)
    {
        $this->container['invoiceNotifications'] = $invoiceNotifications;

        return $this;
    }

    /**
     * Gets dataflyt
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DataflytIn
     */
    public function getDataflyt()
    {
        return $this->container['dataflyt'];
    }

    /**
     * Sets dataflyt
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DataflytIn $dataflyt Dataflyt settings for the accounting office
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DataflytLinkIn
     */
    public function getDataflytLink()
    {
        return $this->container['dataflytLink'];
    }

    /**
     * Sets dataflytLink
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DataflytLinkIn $dataflytLink Dataflyt settings for the farmer
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySendInvoicePrintSettings
     */
    public function getSendInvoicePrint()
    {
        return $this->container['sendInvoicePrint'];
    }

    /**
     * Sets sendInvoicePrint
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySendInvoicePrintSettings $sendInvoicePrint Company invoice sending print settings
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanySendInvoiceGeneralSettings
     */
    public function getSendInvoiceGeneral()
    {
        return $this->container['sendInvoiceGeneral'];
    }

    /**
     * Sets sendInvoiceGeneral
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanySendInvoiceGeneralSettings $sendInvoiceGeneral Company invoice sending general settings
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanyLogos
     */
    public function getLogos()
    {
        return $this->container['logos'];
    }

    /**
     * Sets logos
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanyLogos $logos Company logos
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanyChecks
     */
    public function getChecks()
    {
        return $this->container['checks'];
    }

    /**
     * Sets checks
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanyChecks $checks Checks to be executed
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


