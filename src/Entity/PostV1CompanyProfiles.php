<?php
/**
 * PostV1CompanyProfiles
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
 * ### Changelog #### 2020-05-27 04:35 UTC id:8ccb6ed2 (0.85.37) - Limit the available scopes for unverified companies  #### 2020-05-22 04:28 UTC id:925897a2 - Load available checks from the Analysis API - List ATG mandates  #### 2020-05-06 09:36 UTC id:3586aec0 - Graceful handling of invalid VAT numbers in supplier activation lookup  #### 2020-05-05 09:16 UTC id:2095eb8b - Only present /v1/invoices sources as INTERNAL, EXTERNAL or SCAN  #### 2020-05-04 06:49 UTC id:4dc71ee6 - Improve handling of the license information given in the requests - Present only attachments as files for invoices - Treat invoices from VismaScanner and Go2UBL as scan origins   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.37
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
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
 * PostV1CompanyProfiles Class Doc Comment
 *
 * @category Class
 * @description Create network registration request
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostV1CompanyProfiles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'postV1CompanyProfiles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profiles' => 'string[]',
        'profileVersion' => 'string',
        'endpointId' => 'string',
        'scheme' => 'string',
        'network' => 'string',
        'networkSettings' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profiles' => null,
        'profileVersion' => null,
        'endpointId' => null,
        'scheme' => null,
        'network' => null,
        'networkSettings' => null
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
        'profiles' => 'profiles',
        'profileVersion' => 'profile_version',
        'endpointId' => 'endpoint_id',
        'scheme' => 'scheme',
        'network' => 'network',
        'networkSettings' => 'network_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profiles' => 'setProfiles',
        'profileVersion' => 'setProfileVersion',
        'endpointId' => 'setEndpointId',
        'scheme' => 'setScheme',
        'network' => 'setNetwork',
        'networkSettings' => 'setNetworkSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profiles' => 'getProfiles',
        'profileVersion' => 'getProfileVersion',
        'endpointId' => 'getEndpointId',
        'scheme' => 'getScheme',
        'network' => 'getNetwork',
        'networkSettings' => 'getNetworkSettings'
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
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['profileVersion'] = isset($data['profileVersion']) ? $data['profileVersion'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['networkSettings'] = isset($data['networkSettings']) ? $data['networkSettings'] : null;
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
     * Gets profiles
     *
     * @return string[]
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param string[] $profiles List of profile names
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets profileVersion
     *
     * @return string
     */
    public function getProfileVersion()
    {
        return $this->container['profileVersion'];
    }

    /**
     * Sets profileVersion
     *
     * @param string $profileVersion Profile version, eg. EHF30, PEPPOLBIS30
     *
     * @return $this
     */
    public function setProfileVersion($profileVersion)
    {
        $this->container['profileVersion'] = $profileVersion;

        return $this;
    }

    /**
     * Gets endpointId
     *
     * @return string
     */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
     * Sets endpointId
     *
     * @param string $endpointId Endpoint identifier
     *
     * @return $this
     */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string $scheme ISO6523 code of the endpoint_id scheme. eg. 0192 for NO:ORG
     *
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network Target network, defaults to PEPPOL
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets networkSettings
     *
     * @return object
     */
    public function getNetworkSettings()
    {
        return $this->container['networkSettings'];
    }

    /**
     * Sets networkSettings
     *
     * @param object $networkSettings Additional network settings
     *
     * @return $this
     */
    public function setNetworkSettings($networkSettings)
    {
        $this->container['networkSettings'] = $networkSettings;

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


