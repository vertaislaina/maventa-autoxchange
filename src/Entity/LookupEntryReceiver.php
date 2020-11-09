<?php
/**
 * LookupEntryReceiver
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
 * ### Changelog #### 2020-11-09 05:46 UTC id:95a45363 (0.85.82) - Dedicated endpoint for enabling the receivables service  #### 2020-11-06 09:47 UTC id:d7e59da1 (0.85.81) - Added SPROOM receiver lookup  #### 2020-11-06 06:36 UTC id:467d5078 (0.85.80) - Fix documented reponse code for PATCH /odp/companies/:id - Publish document transaction events for improving billing  #### 2020-11-04 06:05 UTC id:a0878f66 (0.85.79) - Optimize GET /v1/documents for big page sizes  #### 2020-10-28 13:17 UTC id:5d9c56d0 (0.85.78) - Do not use bid only when looking in Peppol directory   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.82
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
 * LookupEntryReceiver Class Doc Comment
 *
 * @category Class
 * @description Lookup for B2B document receivers
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookupEntryReceiver implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookupEntryReceiver';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eia' => 'string',
        'identifier' => '\Vertaislaina\Maventa\AutoXChange\Entity\Identifier',
        'network' => 'string',
        'operator' => 'string',
        'documentTypes' => '\Vertaislaina\Maventa\AutoXChange\Entity\DocumentType[]',
        'participant' => '\Vertaislaina\Maventa\AutoXChange\Entity\Participant'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eia' => null,
        'identifier' => null,
        'network' => null,
        'operator' => null,
        'documentTypes' => null,
        'participant' => null
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
        'eia' => 'eia',
        'identifier' => 'identifier',
        'network' => 'network',
        'operator' => 'operator',
        'documentTypes' => 'document_types',
        'participant' => 'participant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eia' => 'setEia',
        'identifier' => 'setIdentifier',
        'network' => 'setNetwork',
        'operator' => 'setOperator',
        'documentTypes' => 'setDocumentTypes',
        'participant' => 'setParticipant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eia' => 'getEia',
        'identifier' => 'getIdentifier',
        'network' => 'getNetwork',
        'operator' => 'getOperator',
        'documentTypes' => 'getDocumentTypes',
        'participant' => 'getParticipant'
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
        $this->container['eia'] = isset($data['eia']) ? $data['eia'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['documentTypes'] = isset($data['documentTypes']) ? $data['documentTypes'] : null;
        $this->container['participant'] = isset($data['participant']) ? $data['participant'] : null;
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
     * Gets eia
     *
     * @return string
     */
    public function getEia()
    {
        return $this->container['eia'];
    }

    /**
     * Sets eia
     *
     * @param string $eia Full Electronic Address eg: 0192:123456789
     *
     * @return $this
     */
    public function setEia($eia)
    {
        $this->container['eia'] = $eia;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Identifier
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Identifier $identifier Information about the EIA
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
     * @param string $network Network the address belongs to
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator Operator the address belongs to
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets documentTypes
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DocumentType[]
     */
    public function getDocumentTypes()
    {
        return $this->container['documentTypes'];
    }

    /**
     * Sets documentTypes
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DocumentType[] $documentTypes Document profiles supported
     *
     * @return $this
     */
    public function setDocumentTypes($documentTypes)
    {
        $this->container['documentTypes'] = $documentTypes;

        return $this;
    }

    /**
     * Gets participant
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Participant
     */
    public function getParticipant()
    {
        return $this->container['participant'];
    }

    /**
     * Sets participant
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Participant $participant Extra information about the participant
     *
     * @return $this
     */
    public function setParticipant($participant)
    {
        $this->container['participant'] = $participant;

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


