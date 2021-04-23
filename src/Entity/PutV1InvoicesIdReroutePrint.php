<?php
/**
 * PutV1InvoicesIdReroutePrint
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
 * PutV1InvoicesIdReroutePrint Class Doc Comment
 *
 * @category Class
 * @description Reroutes invoice via print
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutV1InvoicesIdReroutePrint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'putV1InvoicesIdReroutePrint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recipientName' => 'string',
        'recipientAddress1' => 'string',
        'recipientAddress2' => 'string',
        'recipientPostCode' => 'string',
        'recipientPostOffice' => 'string',
        'recipientState' => 'string',
        'recipientCountry' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recipientName' => null,
        'recipientAddress1' => null,
        'recipientAddress2' => null,
        'recipientPostCode' => null,
        'recipientPostOffice' => null,
        'recipientState' => null,
        'recipientCountry' => null
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
        'recipientName' => 'recipient_name',
        'recipientAddress1' => 'recipient_address1',
        'recipientAddress2' => 'recipient_address2',
        'recipientPostCode' => 'recipient_post_code',
        'recipientPostOffice' => 'recipient_post_office',
        'recipientState' => 'recipient_state',
        'recipientCountry' => 'recipient_country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipientName' => 'setRecipientName',
        'recipientAddress1' => 'setRecipientAddress1',
        'recipientAddress2' => 'setRecipientAddress2',
        'recipientPostCode' => 'setRecipientPostCode',
        'recipientPostOffice' => 'setRecipientPostOffice',
        'recipientState' => 'setRecipientState',
        'recipientCountry' => 'setRecipientCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipientName' => 'getRecipientName',
        'recipientAddress1' => 'getRecipientAddress1',
        'recipientAddress2' => 'getRecipientAddress2',
        'recipientPostCode' => 'getRecipientPostCode',
        'recipientPostOffice' => 'getRecipientPostOffice',
        'recipientState' => 'getRecipientState',
        'recipientCountry' => 'getRecipientCountry'
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
        $this->container['recipientName'] = isset($data['recipientName']) ? $data['recipientName'] : null;
        $this->container['recipientAddress1'] = isset($data['recipientAddress1']) ? $data['recipientAddress1'] : null;
        $this->container['recipientAddress2'] = isset($data['recipientAddress2']) ? $data['recipientAddress2'] : null;
        $this->container['recipientPostCode'] = isset($data['recipientPostCode']) ? $data['recipientPostCode'] : null;
        $this->container['recipientPostOffice'] = isset($data['recipientPostOffice']) ? $data['recipientPostOffice'] : null;
        $this->container['recipientState'] = isset($data['recipientState']) ? $data['recipientState'] : null;
        $this->container['recipientCountry'] = isset($data['recipientCountry']) ? $data['recipientCountry'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recipientName'] === null) {
            $invalidProperties[] = "'recipientName' can't be null";
        }
        if ($this->container['recipientAddress1'] === null) {
            $invalidProperties[] = "'recipientAddress1' can't be null";
        }
        if ($this->container['recipientPostCode'] === null) {
            $invalidProperties[] = "'recipientPostCode' can't be null";
        }
        if ($this->container['recipientPostOffice'] === null) {
            $invalidProperties[] = "'recipientPostOffice' can't be null";
        }
        if ($this->container['recipientCountry'] === null) {
            $invalidProperties[] = "'recipientCountry' can't be null";
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
     * Gets recipientName
     *
     * @return string
     */
    public function getRecipientName()
    {
        return $this->container['recipientName'];
    }

    /**
     * Sets recipientName
     *
     * @param string $recipientName Recipient name
     *
     * @return $this
     */
    public function setRecipientName($recipientName)
    {
        $this->container['recipientName'] = $recipientName;

        return $this;
    }

    /**
     * Gets recipientAddress1
     *
     * @return string
     */
    public function getRecipientAddress1()
    {
        return $this->container['recipientAddress1'];
    }

    /**
     * Sets recipientAddress1
     *
     * @param string $recipientAddress1 Recipient address line 1
     *
     * @return $this
     */
    public function setRecipientAddress1($recipientAddress1)
    {
        $this->container['recipientAddress1'] = $recipientAddress1;

        return $this;
    }

    /**
     * Gets recipientAddress2
     *
     * @return string
     */
    public function getRecipientAddress2()
    {
        return $this->container['recipientAddress2'];
    }

    /**
     * Sets recipientAddress2
     *
     * @param string $recipientAddress2 Recipient address line 2
     *
     * @return $this
     */
    public function setRecipientAddress2($recipientAddress2)
    {
        $this->container['recipientAddress2'] = $recipientAddress2;

        return $this;
    }

    /**
     * Gets recipientPostCode
     *
     * @return string
     */
    public function getRecipientPostCode()
    {
        return $this->container['recipientPostCode'];
    }

    /**
     * Sets recipientPostCode
     *
     * @param string $recipientPostCode Recipient post code
     *
     * @return $this
     */
    public function setRecipientPostCode($recipientPostCode)
    {
        $this->container['recipientPostCode'] = $recipientPostCode;

        return $this;
    }

    /**
     * Gets recipientPostOffice
     *
     * @return string
     */
    public function getRecipientPostOffice()
    {
        return $this->container['recipientPostOffice'];
    }

    /**
     * Sets recipientPostOffice
     *
     * @param string $recipientPostOffice Recipient post office
     *
     * @return $this
     */
    public function setRecipientPostOffice($recipientPostOffice)
    {
        $this->container['recipientPostOffice'] = $recipientPostOffice;

        return $this;
    }

    /**
     * Gets recipientState
     *
     * @return string
     */
    public function getRecipientState()
    {
        return $this->container['recipientState'];
    }

    /**
     * Sets recipientState
     *
     * @param string $recipientState Recipient state
     *
     * @return $this
     */
    public function setRecipientState($recipientState)
    {
        $this->container['recipientState'] = $recipientState;

        return $this;
    }

    /**
     * Gets recipientCountry
     *
     * @return string
     */
    public function getRecipientCountry()
    {
        return $this->container['recipientCountry'];
    }

    /**
     * Sets recipientCountry
     *
     * @param string $recipientCountry Recipient country
     *
     * @return $this
     */
    public function setRecipientCountry($recipientCountry)
    {
        $this->container['recipientCountry'] = $recipientCountry;

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

