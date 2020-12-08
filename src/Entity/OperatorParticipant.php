<?php
/**
 * OperatorParticipant
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
 * OperatorParticipant Class Doc Comment
 *
 * @category Class
 * @description Fetch participant by id
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperatorParticipant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OperatorParticipant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'status' => 'string',
        'lastEvent' => '\Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfileEvent',
        'profiles' => 'string[]',
        'profileVersion' => 'string',
        'endpointId' => 'string',
        'scheme' => 'string',
        'network' => 'string',
        'role' => 'string',
        'name' => 'string',
        'email' => 'string',
        'country' => 'string',
        'externalId' => 'string',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'status' => null,
        'lastEvent' => null,
        'profiles' => null,
        'profileVersion' => null,
        'endpointId' => null,
        'scheme' => null,
        'network' => null,
        'role' => null,
        'name' => null,
        'email' => null,
        'country' => null,
        'externalId' => null,
        'updatedAt' => 'date-time'
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
        'id' => 'id',
        'status' => 'status',
        'lastEvent' => 'last_event',
        'profiles' => 'profiles',
        'profileVersion' => 'profile_version',
        'endpointId' => 'endpoint_id',
        'scheme' => 'scheme',
        'network' => 'network',
        'role' => 'role',
        'name' => 'name',
        'email' => 'email',
        'country' => 'country',
        'externalId' => 'external_id',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'lastEvent' => 'setLastEvent',
        'profiles' => 'setProfiles',
        'profileVersion' => 'setProfileVersion',
        'endpointId' => 'setEndpointId',
        'scheme' => 'setScheme',
        'network' => 'setNetwork',
        'role' => 'setRole',
        'name' => 'setName',
        'email' => 'setEmail',
        'country' => 'setCountry',
        'externalId' => 'setExternalId',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'lastEvent' => 'getLastEvent',
        'profiles' => 'getProfiles',
        'profileVersion' => 'getProfileVersion',
        'endpointId' => 'getEndpointId',
        'scheme' => 'getScheme',
        'network' => 'getNetwork',
        'role' => 'getRole',
        'name' => 'getName',
        'email' => 'getEmail',
        'country' => 'getCountry',
        'externalId' => 'getExternalId',
        'updatedAt' => 'getUpdatedAt'
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

    const STATUS_ACTIVE = 'active';
    const STATUS_PENDING = 'pending';
    const STATUS_ERROR = 'error';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING,
            self::STATUS_ERROR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastEvent'] = isset($data['lastEvent']) ? $data['lastEvent'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['profileVersion'] = isset($data['profileVersion']) ? $data['profileVersion'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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

        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['externalId'] === null) {
            $invalidProperties[] = "'externalId' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Profile unique id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $status Status of profile registration
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
     * Gets lastEvent
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfileEvent
     */
    public function getLastEvent()
    {
        return $this->container['lastEvent'];
    }

    /**
     * Sets lastEvent
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfileEvent $lastEvent Latest error related event for the registration
     *
     * @return $this
     */
    public function setLastEvent($lastEvent)
    {
        $this->container['lastEvent'] = $lastEvent;

        return $this;
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
     * @param string $network The participants network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role Role of the participant in the network. For example SENDER or RECEIVER.
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the participant
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address for the participant
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Two letter country code of the party
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string $externalId Unique external id for the participant
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt Last update timestamp
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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


