<?php
/**
 * OPInvoiceCredit
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
 * ### Changelog #### 2021-04-19 12:49 UTC id:17d03991 (0.85.122) - Added email reports to company settings  #### 2021-04-16 11:39 UTC id:9986b15f (0.85.121)  #### 2021-04-15 13:38 UTC id:916907e3 (0.85.120) - Allow NL companies to change print attachments setting in invoice sending  #### 2021-04-15 13:01 UTC id:7a79b14f (0.85.119) - Show full error message in invoice events  #### 2021-04-13 06:35 UTC id:3c595833 (0.85.118) - Operator company scopes   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.122
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
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
 * OPInvoiceCredit Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OPInvoiceCredit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OPInvoiceCredit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'channelUserId' => 'string',
        'contactEmail' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'bank' => 'string',
        'activationUrl' => 'string',
        'opBankDetails' => '\Vertaislaina\Maventa\AutoXChange\Entity\OPInvoiceCreditBankDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'channelUserId' => null,
        'contactEmail' => null,
        'iban' => null,
        'bic' => null,
        'bank' => null,
        'activationUrl' => null,
        'opBankDetails' => null
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
        'status' => 'status',
        'channelUserId' => 'channel_user_id',
        'contactEmail' => 'contact_email',
        'iban' => 'iban',
        'bic' => 'bic',
        'bank' => 'bank',
        'activationUrl' => 'activation_url',
        'opBankDetails' => 'op_bank_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'channelUserId' => 'setChannelUserId',
        'contactEmail' => 'setContactEmail',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'bank' => 'setBank',
        'activationUrl' => 'setActivationUrl',
        'opBankDetails' => 'setOpBankDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'channelUserId' => 'getChannelUserId',
        'contactEmail' => 'getContactEmail',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'bank' => 'getBank',
        'activationUrl' => 'getActivationUrl',
        'opBankDetails' => 'getOpBankDetails'
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

    const STATUS_DISABLED = 'DISABLED';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PENDING = 'PENDING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DISABLED,
            self::STATUS_ACTIVE,
            self::STATUS_PENDING,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['channelUserId'] = isset($data['channelUserId']) ? $data['channelUserId'] : null;
        $this->container['contactEmail'] = isset($data['contactEmail']) ? $data['contactEmail'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['activationUrl'] = isset($data['activationUrl']) ? $data['activationUrl'] : null;
        $this->container['opBankDetails'] = isset($data['opBankDetails']) ? $data['opBankDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Service status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets channelUserId
     *
     * @return string
     */
    public function getChannelUserId()
    {
        return $this->container['channelUserId'];
    }

    /**
     * Sets channelUserId
     *
     * @param string $channelUserId Channel user id for the company
     *
     * @return $this
     */
    public function setChannelUserId($channelUserId)
    {
        $this->container['channelUserId'] = $channelUserId;

        return $this;
    }

    /**
     * Gets contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contactEmail'];
    }

    /**
     * Sets contactEmail
     *
     * @param string $contactEmail Company contact email
     *
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->container['contactEmail'] = $contactEmail;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban Company IBAN account number
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic Company bank BIC number
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param string $bank Company bank name
     *
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets activationUrl
     *
     * @return string
     */
    public function getActivationUrl()
    {
        return $this->container['activationUrl'];
    }

    /**
     * Sets activationUrl
     *
     * @param string $activationUrl Url for the user to sign the agreement
     *
     * @return $this
     */
    public function setActivationUrl($activationUrl)
    {
        $this->container['activationUrl'] = $activationUrl;

        return $this;
    }

    /**
     * Gets opBankDetails
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\OPInvoiceCreditBankDetails
     */
    public function getOpBankDetails()
    {
        return $this->container['opBankDetails'];
    }

    /**
     * Sets opBankDetails
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\OPInvoiceCreditBankDetails $opBankDetails Bank account details to be used on invoices
     *
     * @return $this
     */
    public function setOpBankDetails($opBankDetails)
    {
        $this->container['opBankDetails'] = $opBankDetails;

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


