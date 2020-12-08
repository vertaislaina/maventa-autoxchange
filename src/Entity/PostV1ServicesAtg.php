<?php
/**
 * PostV1ServicesAtg
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
 * ### Changelog #### 2020-12-07 14:28 UTC id:afb810de (0.85.94) - Isolate the deprecated invoices fetching using the documents endpoint  #### 2020-12-07 08:05 UTC id:0377630a (0.85.93) - Isolate the deprecated invoice comment updating feature from everything else  #### 2020-12-03 08:07 UTC id:54ba01e0 (0.85.92) - Added more logging on the soon-to-be removed functionality - Swagger to use application/x-www-form-urlencoded as content type for the oauth2 endpoint  #### 2020-12-03 05:32 UTC id:063799d6 (0.85.91)  #### 2020-11-25 13:52 UTC id:dcb235d9 (0.85.90) - Endpoints for interaction with the OP Laskulaina service   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.94
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
 * PostV1ServicesAtg Class Doc Comment
 *
 * @category Class
 * @description Create a new ATG agreement
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostV1ServicesAtg implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'postV1ServicesAtg';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountNumber' => 'string',
        'kidLength' => 'int',
        'referencePosition' => 'string',
        'paymentTypePosition' => 'string',
        'notificationByPrint' => 'bool',
        'notificationByEmail' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountNumber' => null,
        'kidLength' => 'int32',
        'referencePosition' => null,
        'paymentTypePosition' => null,
        'notificationByPrint' => null,
        'notificationByEmail' => null
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
        'accountNumber' => 'account_number',
        'kidLength' => 'kid_length',
        'referencePosition' => 'reference_position',
        'paymentTypePosition' => 'payment_type_position',
        'notificationByPrint' => 'notification_by_print',
        'notificationByEmail' => 'notification_by_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountNumber' => 'setAccountNumber',
        'kidLength' => 'setKidLength',
        'referencePosition' => 'setReferencePosition',
        'paymentTypePosition' => 'setPaymentTypePosition',
        'notificationByPrint' => 'setNotificationByPrint',
        'notificationByEmail' => 'setNotificationByEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountNumber' => 'getAccountNumber',
        'kidLength' => 'getKidLength',
        'referencePosition' => 'getReferencePosition',
        'paymentTypePosition' => 'getPaymentTypePosition',
        'notificationByPrint' => 'getNotificationByPrint',
        'notificationByEmail' => 'getNotificationByEmail'
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
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
        $this->container['kidLength'] = isset($data['kidLength']) ? $data['kidLength'] : null;
        $this->container['referencePosition'] = isset($data['referencePosition']) ? $data['referencePosition'] : null;
        $this->container['paymentTypePosition'] = isset($data['paymentTypePosition']) ? $data['paymentTypePosition'] : null;
        $this->container['notificationByPrint'] = isset($data['notificationByPrint']) ? $data['notificationByPrint'] : null;
        $this->container['notificationByEmail'] = isset($data['notificationByEmail']) ? $data['notificationByEmail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accountNumber'] === null) {
            $invalidProperties[] = "'accountNumber' can't be null";
        }
        if ($this->container['kidLength'] === null) {
            $invalidProperties[] = "'kidLength' can't be null";
        }
        if ($this->container['referencePosition'] === null) {
            $invalidProperties[] = "'referencePosition' can't be null";
        }
        if ($this->container['paymentTypePosition'] === null) {
            $invalidProperties[] = "'paymentTypePosition' can't be null";
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
     * Gets accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     *
     * @param string $accountNumber Account number linked to agreement
     *
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets kidLength
     *
     * @return int
     */
    public function getKidLength()
    {
        return $this->container['kidLength'];
    }

    /**
     * Sets kidLength
     *
     * @param int $kidLength Length of KID
     *
     * @return $this
     */
    public function setKidLength($kidLength)
    {
        $this->container['kidLength'] = $kidLength;

        return $this;
    }

    /**
     * Gets referencePosition
     *
     * @return string
     */
    public function getReferencePosition()
    {
        return $this->container['referencePosition'];
    }

    /**
     * Sets referencePosition
     *
     * @param string $referencePosition The reference position in the KID
     *
     * @return $this
     */
    public function setReferencePosition($referencePosition)
    {
        $this->container['referencePosition'] = $referencePosition;

        return $this;
    }

    /**
     * Gets paymentTypePosition
     *
     * @return string
     */
    public function getPaymentTypePosition()
    {
        return $this->container['paymentTypePosition'];
    }

    /**
     * Sets paymentTypePosition
     *
     * @param string $paymentTypePosition The payment type position in the KID
     *
     * @return $this
     */
    public function setPaymentTypePosition($paymentTypePosition)
    {
        $this->container['paymentTypePosition'] = $paymentTypePosition;

        return $this;
    }

    /**
     * Gets notificationByPrint
     *
     * @return bool
     */
    public function getNotificationByPrint()
    {
        return $this->container['notificationByPrint'];
    }

    /**
     * Sets notificationByPrint
     *
     * @param bool $notificationByPrint Send notification about ATG invoice by print
     *
     * @return $this
     */
    public function setNotificationByPrint($notificationByPrint)
    {
        $this->container['notificationByPrint'] = $notificationByPrint;

        return $this;
    }

    /**
     * Gets notificationByEmail
     *
     * @return bool
     */
    public function getNotificationByEmail()
    {
        return $this->container['notificationByEmail'];
    }

    /**
     * Sets notificationByEmail
     *
     * @param bool $notificationByEmail Send notification about ATG invoice by email
     *
     * @return $this
     */
    public function setNotificationByEmail($notificationByEmail)
    {
        $this->container['notificationByEmail'] = $notificationByEmail;

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


