<?php
/**
 * OPInvoiceCreditAvailableCredit
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
 * OPInvoiceCreditAvailableCredit Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OPInvoiceCreditAvailableCredit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OPInvoiceCreditAvailableCredit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'availableCreditAmount' => 'float',
        'currency' => 'string',
        'currentMonthInterest' => 'float',
        'interestBalance' => 'float',
        'maxCreditAmount' => 'float',
        'totalCollateralAmount' => 'float',
        'totalWithdrawn' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'availableCreditAmount' => 'float',
        'currency' => null,
        'currentMonthInterest' => 'float',
        'interestBalance' => 'float',
        'maxCreditAmount' => 'float',
        'totalCollateralAmount' => 'float',
        'totalWithdrawn' => 'float'
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
        'availableCreditAmount' => 'available_credit_amount',
        'currency' => 'currency',
        'currentMonthInterest' => 'current_month_interest',
        'interestBalance' => 'interest_balance',
        'maxCreditAmount' => 'max_credit_amount',
        'totalCollateralAmount' => 'total_collateral_amount',
        'totalWithdrawn' => 'total_withdrawn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availableCreditAmount' => 'setAvailableCreditAmount',
        'currency' => 'setCurrency',
        'currentMonthInterest' => 'setCurrentMonthInterest',
        'interestBalance' => 'setInterestBalance',
        'maxCreditAmount' => 'setMaxCreditAmount',
        'totalCollateralAmount' => 'setTotalCollateralAmount',
        'totalWithdrawn' => 'setTotalWithdrawn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availableCreditAmount' => 'getAvailableCreditAmount',
        'currency' => 'getCurrency',
        'currentMonthInterest' => 'getCurrentMonthInterest',
        'interestBalance' => 'getInterestBalance',
        'maxCreditAmount' => 'getMaxCreditAmount',
        'totalCollateralAmount' => 'getTotalCollateralAmount',
        'totalWithdrawn' => 'getTotalWithdrawn'
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
        $this->container['availableCreditAmount'] = isset($data['availableCreditAmount']) ? $data['availableCreditAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['currentMonthInterest'] = isset($data['currentMonthInterest']) ? $data['currentMonthInterest'] : null;
        $this->container['interestBalance'] = isset($data['interestBalance']) ? $data['interestBalance'] : null;
        $this->container['maxCreditAmount'] = isset($data['maxCreditAmount']) ? $data['maxCreditAmount'] : null;
        $this->container['totalCollateralAmount'] = isset($data['totalCollateralAmount']) ? $data['totalCollateralAmount'] : null;
        $this->container['totalWithdrawn'] = isset($data['totalWithdrawn']) ? $data['totalWithdrawn'] : null;
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
     * Gets availableCreditAmount
     *
     * @return float
     */
    public function getAvailableCreditAmount()
    {
        return $this->container['availableCreditAmount'];
    }

    /**
     * Sets availableCreditAmount
     *
     * @param float $availableCreditAmount availableCreditAmount
     *
     * @return $this
     */
    public function setAvailableCreditAmount($availableCreditAmount)
    {
        $this->container['availableCreditAmount'] = $availableCreditAmount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currentMonthInterest
     *
     * @return float
     */
    public function getCurrentMonthInterest()
    {
        return $this->container['currentMonthInterest'];
    }

    /**
     * Sets currentMonthInterest
     *
     * @param float $currentMonthInterest currentMonthInterest
     *
     * @return $this
     */
    public function setCurrentMonthInterest($currentMonthInterest)
    {
        $this->container['currentMonthInterest'] = $currentMonthInterest;

        return $this;
    }

    /**
     * Gets interestBalance
     *
     * @return float
     */
    public function getInterestBalance()
    {
        return $this->container['interestBalance'];
    }

    /**
     * Sets interestBalance
     *
     * @param float $interestBalance interestBalance
     *
     * @return $this
     */
    public function setInterestBalance($interestBalance)
    {
        $this->container['interestBalance'] = $interestBalance;

        return $this;
    }

    /**
     * Gets maxCreditAmount
     *
     * @return float
     */
    public function getMaxCreditAmount()
    {
        return $this->container['maxCreditAmount'];
    }

    /**
     * Sets maxCreditAmount
     *
     * @param float $maxCreditAmount maxCreditAmount
     *
     * @return $this
     */
    public function setMaxCreditAmount($maxCreditAmount)
    {
        $this->container['maxCreditAmount'] = $maxCreditAmount;

        return $this;
    }

    /**
     * Gets totalCollateralAmount
     *
     * @return float
     */
    public function getTotalCollateralAmount()
    {
        return $this->container['totalCollateralAmount'];
    }

    /**
     * Sets totalCollateralAmount
     *
     * @param float $totalCollateralAmount totalCollateralAmount
     *
     * @return $this
     */
    public function setTotalCollateralAmount($totalCollateralAmount)
    {
        $this->container['totalCollateralAmount'] = $totalCollateralAmount;

        return $this;
    }

    /**
     * Gets totalWithdrawn
     *
     * @return float
     */
    public function getTotalWithdrawn()
    {
        return $this->container['totalWithdrawn'];
    }

    /**
     * Sets totalWithdrawn
     *
     * @param float $totalWithdrawn totalWithdrawn
     *
     * @return $this
     */
    public function setTotalWithdrawn($totalWithdrawn)
    {
        $this->container['totalWithdrawn'] = $totalWithdrawn;

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


