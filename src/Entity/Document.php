<?php
/**
 * Document
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
 * ### Changelog #### 2020-06-03 06:23 UTC id:e2bcb9d7 (0.85.39) - Preserve the scope aliases given in the POST /oauth2/token request  #### 2020-06-03 04:49 UTC id:432da59e (0.85.38)  #### 2020-05-27 04:35 UTC id:8ccb6ed2 (0.85.37) - Limit the available scopes for unverified companies  #### 2020-05-22 04:28 UTC id:925897a2 - Load available checks from the Analysis API - List ATG mandates  #### 2020-05-06 09:36 UTC id:3586aec0 - Graceful handling of invalid VAT numbers in supplier activation lookup   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.39
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
 * Document Class Doc Comment
 *
 * @category Class
 * @description Document details
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Document implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'documentIdentifier' => 'string',
        'processIdentifier' => 'string',
        'status' => 'string',
        'reference' => 'string',
        'number' => 'string',
        'sender' => '\Vertaislaina\Maventa\AutoXChange\Entity\DocumentParty',
        'recipient' => '\Vertaislaina\Maventa\AutoXChange\Entity\DocumentRecipientParty',
        'createdAt' => '\DateTime',
        'deliveredAt' => '\DateTime',
        'receivedAt' => '\DateTime',
        'lastEvent' => '\Vertaislaina\Maventa\AutoXChange\Entity\DocumentEvent',
        'sourceFormat' => 'string',
        'supportedFormats' => 'string[]',
        'transmissionId' => 'string',
        'transmissionAt' => '\DateTime',
        'network' => 'string',
        'externalId' => 'string',
        'files' => '\Vertaislaina\Maventa\AutoXChange\Entity\DocumentFileInDocument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'documentIdentifier' => null,
        'processIdentifier' => null,
        'status' => null,
        'reference' => null,
        'number' => null,
        'sender' => null,
        'recipient' => null,
        'createdAt' => 'date-time',
        'deliveredAt' => 'date-time',
        'receivedAt' => 'date-time',
        'lastEvent' => null,
        'sourceFormat' => null,
        'supportedFormats' => null,
        'transmissionId' => null,
        'transmissionAt' => 'date-time',
        'network' => null,
        'externalId' => null,
        'files' => null
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
        'type' => 'type',
        'documentIdentifier' => 'document_identifier',
        'processIdentifier' => 'process_identifier',
        'status' => 'status',
        'reference' => 'reference',
        'number' => 'number',
        'sender' => 'sender',
        'recipient' => 'recipient',
        'createdAt' => 'created_at',
        'deliveredAt' => 'delivered_at',
        'receivedAt' => 'received_at',
        'lastEvent' => 'last_event',
        'sourceFormat' => 'source_format',
        'supportedFormats' => 'supported_formats',
        'transmissionId' => 'transmission_id',
        'transmissionAt' => 'transmission_at',
        'network' => 'network',
        'externalId' => 'external_id',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'documentIdentifier' => 'setDocumentIdentifier',
        'processIdentifier' => 'setProcessIdentifier',
        'status' => 'setStatus',
        'reference' => 'setReference',
        'number' => 'setNumber',
        'sender' => 'setSender',
        'recipient' => 'setRecipient',
        'createdAt' => 'setCreatedAt',
        'deliveredAt' => 'setDeliveredAt',
        'receivedAt' => 'setReceivedAt',
        'lastEvent' => 'setLastEvent',
        'sourceFormat' => 'setSourceFormat',
        'supportedFormats' => 'setSupportedFormats',
        'transmissionId' => 'setTransmissionId',
        'transmissionAt' => 'setTransmissionAt',
        'network' => 'setNetwork',
        'externalId' => 'setExternalId',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'documentIdentifier' => 'getDocumentIdentifier',
        'processIdentifier' => 'getProcessIdentifier',
        'status' => 'getStatus',
        'reference' => 'getReference',
        'number' => 'getNumber',
        'sender' => 'getSender',
        'recipient' => 'getRecipient',
        'createdAt' => 'getCreatedAt',
        'deliveredAt' => 'getDeliveredAt',
        'receivedAt' => 'getReceivedAt',
        'lastEvent' => 'getLastEvent',
        'sourceFormat' => 'getSourceFormat',
        'supportedFormats' => 'getSupportedFormats',
        'transmissionId' => 'getTransmissionId',
        'transmissionAt' => 'getTransmissionAt',
        'network' => 'getNetwork',
        'externalId' => 'getExternalId',
        'files' => 'getFiles'
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

    const TYPE_UNKNOWN = 'UNKNOWN';
    const TYPE_INVOICE = 'INVOICE';
    const TYPE_CREDIT_NOTE = 'CREDIT_NOTE';
    const TYPE_ORDER = 'ORDER';
    const TYPE_ORDER_RESPONSE = 'ORDER_RESPONSE';
    const TYPE_CATALOGUE = 'CATALOGUE';
    const TYPE_CATALOGUE_RESPONSE = 'CATALOGUE_RESPONSE';
    const TYPE_SELF_BILLING_INVOICE = 'SELF_BILLING_INVOICE';
    const TYPE_DESPATCH_ADVICE = 'DESPATCH_ADVICE';
    const TYPE_RECEIPT = 'RECEIPT';
    const TYPE_VOUCHER = 'VOUCHER';
    const TYPE_BANK_FILE = 'BANK_FILE';
    const TYPE_REMINDER = 'REMINDER';
    const TYPE_EXPRESSION_OF_INTEREST_REQUEST = 'EXPRESSION_OF_INTEREST_REQUEST';
    const TYPE_EXPRESSION_OF_INTEREST_RESPONSE = 'EXPRESSION_OF_INTEREST_RESPONSE';
    const TYPE_TENDER_STATUS_REQUEST = 'TENDER_STATUS_REQUEST';
    const TYPE_CALL_FOR_TENDERS = 'CALL_FOR_TENDERS';
    const TYPE_TENDER = 'TENDER';
    const TYPE_TENDER_RECEIPT = 'TENDER_RECEIPT';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_RESERVED = 'RESERVED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_CONFIRMED_DELIVERY = 'CONFIRMED_DELIVERY';
    const STATUS_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_INVOICE,
            self::TYPE_CREDIT_NOTE,
            self::TYPE_ORDER,
            self::TYPE_ORDER_RESPONSE,
            self::TYPE_CATALOGUE,
            self::TYPE_CATALOGUE_RESPONSE,
            self::TYPE_SELF_BILLING_INVOICE,
            self::TYPE_DESPATCH_ADVICE,
            self::TYPE_RECEIPT,
            self::TYPE_VOUCHER,
            self::TYPE_BANK_FILE,
            self::TYPE_REMINDER,
            self::TYPE_EXPRESSION_OF_INTEREST_REQUEST,
            self::TYPE_EXPRESSION_OF_INTEREST_RESPONSE,
            self::TYPE_TENDER_STATUS_REQUEST,
            self::TYPE_CALL_FOR_TENDERS,
            self::TYPE_TENDER,
            self::TYPE_TENDER_RECEIPT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_RESERVED,
            self::STATUS_DELIVERED,
            self::STATUS_CONFIRMED_DELIVERY,
            self::STATUS_FAILED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['documentIdentifier'] = isset($data['documentIdentifier']) ? $data['documentIdentifier'] : null;
        $this->container['processIdentifier'] = isset($data['processIdentifier']) ? $data['processIdentifier'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['deliveredAt'] = isset($data['deliveredAt']) ? $data['deliveredAt'] : null;
        $this->container['receivedAt'] = isset($data['receivedAt']) ? $data['receivedAt'] : null;
        $this->container['lastEvent'] = isset($data['lastEvent']) ? $data['lastEvent'] : null;
        $this->container['sourceFormat'] = isset($data['sourceFormat']) ? $data['sourceFormat'] : null;
        $this->container['supportedFormats'] = isset($data['supportedFormats']) ? $data['supportedFormats'] : null;
        $this->container['transmissionId'] = isset($data['transmissionId']) ? $data['transmissionId'] : null;
        $this->container['transmissionAt'] = isset($data['transmissionAt']) ? $data['transmissionAt'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @param string $id Id as a GUID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of document
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets documentIdentifier
     *
     * @return string
     */
    public function getDocumentIdentifier()
    {
        return $this->container['documentIdentifier'];
    }

    /**
     * Sets documentIdentifier
     *
     * @param string $documentIdentifier Document identifier
     *
     * @return $this
     */
    public function setDocumentIdentifier($documentIdentifier)
    {
        $this->container['documentIdentifier'] = $documentIdentifier;

        return $this;
    }

    /**
     * Gets processIdentifier
     *
     * @return string
     */
    public function getProcessIdentifier()
    {
        return $this->container['processIdentifier'];
    }

    /**
     * Sets processIdentifier
     *
     * @param string $processIdentifier Process identifier
     *
     * @return $this
     */
    public function setProcessIdentifier($processIdentifier)
    {
        $this->container['processIdentifier'] = $processIdentifier;

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
     * @param string $status Current status of document
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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Document reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Document number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DocumentParty
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DocumentParty $sender Document sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DocumentRecipientParty
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DocumentRecipientParty $recipient Document recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt Document creation time
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets deliveredAt
     *
     * @return \DateTime
     */
    public function getDeliveredAt()
    {
        return $this->container['deliveredAt'];
    }

    /**
     * Sets deliveredAt
     *
     * @param \DateTime $deliveredAt The timestamp when sent document was delivered to the destination route
     *
     * @return $this
     */
    public function setDeliveredAt($deliveredAt)
    {
        $this->container['deliveredAt'] = $deliveredAt;

        return $this;
    }

    /**
     * Gets receivedAt
     *
     * @return \DateTime
     */
    public function getReceivedAt()
    {
        return $this->container['receivedAt'];
    }

    /**
     * Sets receivedAt
     *
     * @param \DateTime $receivedAt The timestamp when received document was delivered to the recipient
     *
     * @return $this
     */
    public function setReceivedAt($receivedAt)
    {
        $this->container['receivedAt'] = $receivedAt;

        return $this;
    }

    /**
     * Gets lastEvent
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DocumentEvent
     */
    public function getLastEvent()
    {
        return $this->container['lastEvent'];
    }

    /**
     * Sets lastEvent
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DocumentEvent $lastEvent Latest event information
     *
     * @return $this
     */
    public function setLastEvent($lastEvent)
    {
        $this->container['lastEvent'] = $lastEvent;

        return $this;
    }

    /**
     * Gets sourceFormat
     *
     * @return string
     */
    public function getSourceFormat()
    {
        return $this->container['sourceFormat'];
    }

    /**
     * Sets sourceFormat
     *
     * @param string $sourceFormat Source format of the document
     *
     * @return $this
     */
    public function setSourceFormat($sourceFormat)
    {
        $this->container['sourceFormat'] = $sourceFormat;

        return $this;
    }

    /**
     * Gets supportedFormats
     *
     * @return string[]
     */
    public function getSupportedFormats()
    {
        return $this->container['supportedFormats'];
    }

    /**
     * Sets supportedFormats
     *
     * @param string[] $supportedFormats Supported document formats
     *
     * @return $this
     */
    public function setSupportedFormats($supportedFormats)
    {
        $this->container['supportedFormats'] = $supportedFormats;

        return $this;
    }

    /**
     * Gets transmissionId
     *
     * @return string
     */
    public function getTransmissionId()
    {
        return $this->container['transmissionId'];
    }

    /**
     * Sets transmissionId
     *
     * @param string $transmissionId Transmission id
     *
     * @return $this
     */
    public function setTransmissionId($transmissionId)
    {
        $this->container['transmissionId'] = $transmissionId;

        return $this;
    }

    /**
     * Gets transmissionAt
     *
     * @return \DateTime
     */
    public function getTransmissionAt()
    {
        return $this->container['transmissionAt'];
    }

    /**
     * Sets transmissionAt
     *
     * @param \DateTime $transmissionAt Document transmission time
     *
     * @return $this
     */
    public function setTransmissionAt($transmissionAt)
    {
        $this->container['transmissionAt'] = $transmissionAt;

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
     * @param string $network The network document is originated from
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

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
     * @param string $externalId External identifier linked to the document
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\DocumentFileInDocument[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\DocumentFileInDocument[] $files Files related to the document
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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


