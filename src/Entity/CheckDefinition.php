<?php
/**
 * CheckDefinition
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
 * CheckDefinition Class Doc Comment
 *
 * @category Class
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'friendlyName' => 'string',
        'friendlyNames' => '\Vertaislaina\Maventa\AutoXChange\Entity\Translation[]',
        'title' => 'string',
        'titles' => '\Vertaislaina\Maventa\AutoXChange\Entity\Translation[]',
        'description' => 'string',
        'descriptions' => '\Vertaislaina\Maventa\AutoXChange\Entity\Translation[]',
        'docDescription' => 'string',
        'resourceType' => 'string',
        'scope' => 'string',
        'scopes' => '\Vertaislaina\Maventa\AutoXChange\Entity\Translation[]',
        'sources' => '\Vertaislaina\Maventa\AutoXChange\Entity\Source[]',
        'metadata' => '\Vertaislaina\Maventa\AutoXChange\Entity\WarningListMetadata',
        'possibleResults' => '\Vertaislaina\Maventa\AutoXChange\Entity\ResultDefinition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'friendlyName' => null,
        'friendlyNames' => null,
        'title' => null,
        'titles' => null,
        'description' => null,
        'descriptions' => null,
        'docDescription' => null,
        'resourceType' => null,
        'scope' => null,
        'scopes' => null,
        'sources' => null,
        'metadata' => null,
        'possibleResults' => null
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
        'name' => 'name',
        'friendlyName' => 'friendly_name',
        'friendlyNames' => 'friendly_names',
        'title' => 'title',
        'titles' => 'titles',
        'description' => 'description',
        'descriptions' => 'descriptions',
        'docDescription' => 'doc_description',
        'resourceType' => 'resource_type',
        'scope' => 'scope',
        'scopes' => 'scopes',
        'sources' => 'sources',
        'metadata' => 'metadata',
        'possibleResults' => 'possible_results'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'friendlyName' => 'setFriendlyName',
        'friendlyNames' => 'setFriendlyNames',
        'title' => 'setTitle',
        'titles' => 'setTitles',
        'description' => 'setDescription',
        'descriptions' => 'setDescriptions',
        'docDescription' => 'setDocDescription',
        'resourceType' => 'setResourceType',
        'scope' => 'setScope',
        'scopes' => 'setScopes',
        'sources' => 'setSources',
        'metadata' => 'setMetadata',
        'possibleResults' => 'setPossibleResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'friendlyName' => 'getFriendlyName',
        'friendlyNames' => 'getFriendlyNames',
        'title' => 'getTitle',
        'titles' => 'getTitles',
        'description' => 'getDescription',
        'descriptions' => 'getDescriptions',
        'docDescription' => 'getDocDescription',
        'resourceType' => 'getResourceType',
        'scope' => 'getScope',
        'scopes' => 'getScopes',
        'sources' => 'getSources',
        'metadata' => 'getMetadata',
        'possibleResults' => 'getPossibleResults'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['friendlyName'] = isset($data['friendlyName']) ? $data['friendlyName'] : null;
        $this->container['friendlyNames'] = isset($data['friendlyNames']) ? $data['friendlyNames'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['titles'] = isset($data['titles']) ? $data['titles'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['docDescription'] = isset($data['docDescription']) ? $data['docDescription'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['possibleResults'] = isset($data['possibleResults']) ? $data['possibleResults'] : null;
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
     * @param string $name Check name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets friendlyName
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->container['friendlyName'];
    }

    /**
     * Sets friendlyName
     *
     * @param string $friendlyName Check friendly name
     *
     * @return $this
     */
    public function setFriendlyName($friendlyName)
    {
        $this->container['friendlyName'] = $friendlyName;

        return $this;
    }

    /**
     * Gets friendlyNames
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Translation[]
     */
    public function getFriendlyNames()
    {
        return $this->container['friendlyNames'];
    }

    /**
     * Sets friendlyNames
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Translation[] $friendlyNames Check friendly name, translated in all supported languages
     *
     * @return $this
     */
    public function setFriendlyNames($friendlyNames)
    {
        $this->container['friendlyNames'] = $friendlyNames;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Check title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets titles
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Translation[]
     */
    public function getTitles()
    {
        return $this->container['titles'];
    }

    /**
     * Sets titles
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Translation[] $titles Check title, translated in all supported languages
     *
     * @return $this
     */
    public function setTitles($titles)
    {
        $this->container['titles'] = $titles;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Check description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets descriptions
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Translation[]
     */
    public function getDescriptions()
    {
        return $this->container['descriptions'];
    }

    /**
     * Sets descriptions
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Translation[] $descriptions Check description, translated in all supported languages
     *
     * @return $this
     */
    public function setDescriptions($descriptions)
    {
        $this->container['descriptions'] = $descriptions;

        return $this;
    }

    /**
     * Gets docDescription
     *
     * @return string
     */
    public function getDocDescription()
    {
        return $this->container['docDescription'];
    }

    /**
     * Sets docDescription
     *
     * @param string $docDescription Check documentation description
     *
     * @return $this
     */
    public function setDocDescription($docDescription)
    {
        $this->container['docDescription'] = $docDescription;

        return $this;
    }

    /**
     * Gets resourceType
     *
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
     * Sets resourceType
     *
     * @param string $resourceType Resource type the check is run for
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;

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
     * @param string $scope Resource scope the check is run for
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Translation[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Translation[] $scopes Resource scope the check is run for, translated in all supported languages
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\Source[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\Source[] $sources Sources used when running the check
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\WarningListMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\WarningListMetadata $metadata Additional data about the check
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets possibleResults
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\ResultDefinition[]
     */
    public function getPossibleResults()
    {
        return $this->container['possibleResults'];
    }

    /**
     * Sets possibleResults
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\ResultDefinition[] $possibleResults List of possible results of the check
     *
     * @return $this
     */
    public function setPossibleResults($possibleResults)
    {
        $this->container['possibleResults'] = $possibleResults;

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


