<?php
/**
 * ReceivablesService
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
 * ReceivablesService Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReceivablesService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReceivablesService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iban' => 'string',
        'bic' => 'string',
        'bank' => 'string',
        'contactPerson' => 'string',
        'contactEmail' => 'string',
        'customerServiceEmail' => 'string',
        'customerServicePhoneNumber' => 'string',
        'contactPhoneNumber' => 'string',
        'authorizationEmail' => 'string',
        'billingAddress' => '\Vertaislaina\Maventa\AutoXChange\Entity\VFSFIBillingAddress',
        'vfsfi' => '\Vertaislaina\Maventa\AutoXChange\Entity\VFSFIData',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iban' => null,
        'bic' => null,
        'bank' => null,
        'contactPerson' => null,
        'contactEmail' => null,
        'customerServiceEmail' => null,
        'customerServicePhoneNumber' => null,
        'contactPhoneNumber' => null,
        'authorizationEmail' => null,
        'billingAddress' => null,
        'vfsfi' => null,
        'status' => null
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
        'iban' => 'iban',
        'bic' => 'bic',
        'bank' => 'bank',
        'contactPerson' => 'contact_person',
        'contactEmail' => 'contact_email',
        'customerServiceEmail' => 'customer_service_email',
        'customerServicePhoneNumber' => 'customer_service_phone_number',
        'contactPhoneNumber' => 'contact_phone_number',
        'authorizationEmail' => 'authorization_email',
        'billingAddress' => 'billing_address',
        'vfsfi' => 'vfsfi',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iban' => 'setIban',
        'bic' => 'setBic',
        'bank' => 'setBank',
        'contactPerson' => 'setContactPerson',
        'contactEmail' => 'setContactEmail',
        'customerServiceEmail' => 'setCustomerServiceEmail',
        'customerServicePhoneNumber' => 'setCustomerServicePhoneNumber',
        'contactPhoneNumber' => 'setContactPhoneNumber',
        'authorizationEmail' => 'setAuthorizationEmail',
        'billingAddress' => 'setBillingAddress',
        'vfsfi' => 'setVfsfi',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iban' => 'getIban',
        'bic' => 'getBic',
        'bank' => 'getBank',
        'contactPerson' => 'getContactPerson',
        'contactEmail' => 'getContactEmail',
        'customerServiceEmail' => 'getCustomerServiceEmail',
        'customerServicePhoneNumber' => 'getCustomerServicePhoneNumber',
        'contactPhoneNumber' => 'getContactPhoneNumber',
        'authorizationEmail' => 'getAuthorizationEmail',
        'billingAddress' => 'getBillingAddress',
        'vfsfi' => 'getVfsfi',
        'status' => 'getStatus'
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
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['contactPerson'] = isset($data['contactPerson']) ? $data['contactPerson'] : null;
        $this->container['contactEmail'] = isset($data['contactEmail']) ? $data['contactEmail'] : null;
        $this->container['customerServiceEmail'] = isset($data['customerServiceEmail']) ? $data['customerServiceEmail'] : null;
        $this->container['customerServicePhoneNumber'] = isset($data['customerServicePhoneNumber']) ? $data['customerServicePhoneNumber'] : null;
        $this->container['contactPhoneNumber'] = isset($data['contactPhoneNumber']) ? $data['contactPhoneNumber'] : null;
        $this->container['authorizationEmail'] = isset($data['authorizationEmail']) ? $data['authorizationEmail'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['vfsfi'] = isset($data['vfsfi']) ? $data['vfsfi'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * @param string $iban IBAN
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
     * @param string $bic Bank identifier code
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
     * @param string $bank Bank
     *
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets contactPerson
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->container['contactPerson'];
    }

    /**
     * Sets contactPerson
     *
     * @param string $contactPerson Contact person
     *
     * @return $this
     */
    public function setContactPerson($contactPerson)
    {
        $this->container['contactPerson'] = $contactPerson;

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
     * @param string $contactEmail Contact email
     *
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->container['contactEmail'] = $contactEmail;

        return $this;
    }

    /**
     * Gets customerServiceEmail
     *
     * @return string
     */
    public function getCustomerServiceEmail()
    {
        return $this->container['customerServiceEmail'];
    }

    /**
     * Sets customerServiceEmail
     *
     * @param string $customerServiceEmail Customer service email
     *
     * @return $this
     */
    public function setCustomerServiceEmail($customerServiceEmail)
    {
        $this->container['customerServiceEmail'] = $customerServiceEmail;

        return $this;
    }

    /**
     * Gets customerServicePhoneNumber
     *
     * @return string
     */
    public function getCustomerServicePhoneNumber()
    {
        return $this->container['customerServicePhoneNumber'];
    }

    /**
     * Sets customerServicePhoneNumber
     *
     * @param string $customerServicePhoneNumber Customer service phone number
     *
     * @return $this
     */
    public function setCustomerServicePhoneNumber($customerServicePhoneNumber)
    {
        $this->container['customerServicePhoneNumber'] = $customerServicePhoneNumber;

        return $this;
    }

    /**
     * Gets contactPhoneNumber
     *
     * @return string
     */
    public function getContactPhoneNumber()
    {
        return $this->container['contactPhoneNumber'];
    }

    /**
     * Sets contactPhoneNumber
     *
     * @param string $contactPhoneNumber Contact Phone Number
     *
     * @return $this
     */
    public function setContactPhoneNumber($contactPhoneNumber)
    {
        $this->container['contactPhoneNumber'] = $contactPhoneNumber;

        return $this;
    }

    /**
     * Gets authorizationEmail
     *
     * @return string
     */
    public function getAuthorizationEmail()
    {
        return $this->container['authorizationEmail'];
    }

    /**
     * Sets authorizationEmail
     *
     * @param string $authorizationEmail Authorization email
     *
     * @return $this
     */
    public function setAuthorizationEmail($authorizationEmail)
    {
        $this->container['authorizationEmail'] = $authorizationEmail;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\VFSFIBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\VFSFIBillingAddress $billingAddress Billing address
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets vfsfi
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\VFSFIData
     */
    public function getVfsfi()
    {
        return $this->container['vfsfi'];
    }

    /**
     * Sets vfsfi
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\VFSFIData $vfsfi VFSFI data
     *
     * @return $this
     */
    public function setVfsfi($vfsfi)
    {
        $this->container['vfsfi'] = $vfsfi;

        return $this;
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


