<?php
/**
 * OAuthToken
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
 * OAuthToken Class Doc Comment
 *
 * @category Class
 * @description The endpoint enables a registered company to obtain a OAuth 2 Bearer Token, which can be used to access the companys data in all the future API calls.  A token will be active for 60 minutes.  #### Scopes  Scopes let you specify what type of access you need and limit access for granted OAuth tokens.   | Scope | Description |  |-------|-------------|                             eui|  Recommended to use when integrating to EUI. Alias for eui:open, company:read, company:write, lookup, receivables:assignments, document:send, document:receive, invoice:receive, invoice:send, analysis|                         global|                                                                                                                                         Alias for company:read, document:receive, document:send, lookup|                        company|                                                                                                                                                                   Alias for company:read, company:write|                         lookup|                                                                                                                                                                  grants access to the lookup operations|               document:receive|                                                                                                                                                            grants access to document receive operations|                  document:send|                                                                                                                                                               grants access to document send operations|                invoice:receive|                                                                                                                                                             grants access to invoice receive operations|                   invoice:send|                                                                                                                                                                grants access to invoice send operations|                   company:read|                                                                                                                                      grants read access to company settings, profiles and notifications|                  company:write|                                                                                                                                     grants write access to company settings, profiles and notifications|                       validate|                                                                                                                                                      grants access to the AutoInvoice validator service|        receivables:assignments|                                                                                                                                                 grants access to assignments in the receivables service|                       analysis|                                                                                                                                                                       grants access to analysis service|                billing:reports|                                                                                                                                                                        grants access to billing reports|     operator:documents:receive|                                                                                                                                                               grants access to fetch received documents|        operator:documents:send|                                                                                                                                                                         grants access to send documents|                operator:lookup|                                                                                                                                                     grants access to perform actions related to lookups|          operator:participants|                                                                                                                                               grants access to perform actions on operator participants|         operator:notifications|                                                                                                                                              grants access to perform actions on operator notifications|              operator:validate|                                                                                                                                                      grants access to the AutoInvoice validator service| operator:receivables:assignments|                                                                                                                                                    grants access to assignments the receivables service| operator:receivables:assignments:create|                                                                                                                                         grants access to create assignments in the receivables servicee|              operator:analysis|                                                                                                                                                                       grants access to analysis service|             operator:companies|                                                                                                                                                               grants access to fetch operator companies|              operator:takeover|                                                                                                                                                             grants access to execute a company takeover   If no scope is defined, the token request will default to use the scopes &#x60;&#x60;&#x60;global&#x60;&#x60;&#x60; and &#x60;&#x60;&#x60;company&#x60;&#x60;&#x60;. The granted scopes will be returned in the response.  #### Vendor API key and license data  To identify the application a valid &#x60;&#x60;&#x60;vendor_api_key&#x60;&#x60;&#x60; should be provided in the token request. Additional license data can be provided as JSON in the &#x60;&#x60;&#x60;license_data&#x60;&#x60;&#x60; parameter:  &#x60;&#x60;&#x60; {   \&quot;key\&quot;: \&quot;C84411ED-5639-4B48-83D0-B718BB9DA0F7\&quot;, // License key of software making the call   \&quot;meta\&quot;: {     \&quot;licensing\&quot;:   \&quot;VLS\&quot;,       // Information about the licensing system     \&quot;erp_name\&quot;:    \&quot;Visma ERP\&quot;, // Name of ERP     \&quot;erp_version\&quot;: \&quot;1.1\&quot;,       // Current version number of ERP     \&quot;erp_user\&quot;:    \&quot;rbaardse\&quot;   // Local ERP user name   } } &#x60;&#x60;&#x60;
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OAuthToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OAuthToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessToken' => 'string',
        'tokenType' => 'string',
        'expiresIn' => 'int',
        'refreshToken' => 'string',
        'scope' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessToken' => null,
        'tokenType' => null,
        'expiresIn' => 'int32',
        'refreshToken' => null,
        'scope' => null
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
        'accessToken' => 'access_token',
        'tokenType' => 'token_type',
        'expiresIn' => 'expires_in',
        'refreshToken' => 'refresh_token',
        'scope' => 'scope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'tokenType' => 'setTokenType',
        'expiresIn' => 'setExpiresIn',
        'refreshToken' => 'setRefreshToken',
        'scope' => 'setScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'tokenType' => 'getTokenType',
        'expiresIn' => 'getExpiresIn',
        'refreshToken' => 'getRefreshToken',
        'scope' => 'getScope'
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['tokenType'] = isset($data['tokenType']) ? $data['tokenType'] : null;
        $this->container['expiresIn'] = isset($data['expiresIn']) ? $data['expiresIn'] : null;
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
        }
        if ($this->container['tokenType'] === null) {
            $invalidProperties[] = "'tokenType' can't be null";
        }
        if ($this->container['expiresIn'] === null) {
            $invalidProperties[] = "'expiresIn' can't be null";
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
     * Gets accessToken
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string $accessToken The access token issued
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets tokenType
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
     * Sets tokenType
     *
     * @param string $tokenType The type of the token issued
     *
     * @return $this
     */
    public function setTokenType($tokenType)
    {
        $this->container['tokenType'] = $tokenType;

        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int $expiresIn The lifetime in seconds of the access token
     *
     * @return $this
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets refreshToken
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     *
     * @param string $refreshToken The refresh token, which can be used to obtain new access token
     *
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope List of scopes granted for token
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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


