<?php
/**
 * Invoice
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
 * ### Changelog #### 2020-05-29 05:41 UTC id:bc15c059 (0.85.37-bc15c059) - Validate SSNs before calling Vipps and Yes2All lookups - Preserve the scope aliases given in the request  #### 2020-05-27 04:35 UTC id:8ccb6ed2 (0.85.37) - Limit the available scopes for unverified companies  #### 2020-05-22 04:28 UTC id:925897a2 - Load available checks from the Analysis API - List ATG mandates  #### 2020-05-06 09:36 UTC id:3586aec0 - Graceful handling of invalid VAT numbers in supplier activation lookup  #### 2020-05-05 09:16 UTC id:2095eb8b - Only present /v1/invoices sources as INTERNAL, EXTERNAL or SCAN   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.56
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'status' => 'string',
        'reference' => 'string',
        'number' => 'string',
        'sender' => '\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceSenderParty',
        'recipient' => '\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceRecipientParty',
        'receivedAt' => '\DateTime',
        'createdAt' => '\DateTime',
        'date' => '\DateTime',
        'dateDue' => '\DateTime',
        'sourceFormat' => 'string',
        'sum' => 'float',
        'sumTax' => 'float',
        'currency' => 'string',
        'origin' => 'string',
        'destination' => 'string',
        'comment' => 'string',
        'files' => '\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceFile[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'status' => null,
        'reference' => null,
        'number' => null,
        'sender' => null,
        'recipient' => null,
        'receivedAt' => 'date-time',
        'createdAt' => 'date-time',
        'date' => 'date',
        'dateDue' => 'date',
        'sourceFormat' => null,
        'sum' => 'float',
        'sumTax' => 'float',
        'currency' => null,
        'origin' => null,
        'destination' => null,
        'comment' => null,
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
        'status' => 'status',
        'reference' => 'reference',
        'number' => 'number',
        'sender' => 'sender',
        'recipient' => 'recipient',
        'receivedAt' => 'received_at',
        'createdAt' => 'created_at',
        'date' => 'date',
        'dateDue' => 'date_due',
        'sourceFormat' => 'source_format',
        'sum' => 'sum',
        'sumTax' => 'sum_tax',
        'currency' => 'currency',
        'origin' => 'origin',
        'destination' => 'destination',
        'comment' => 'comment',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'reference' => 'setReference',
        'number' => 'setNumber',
        'sender' => 'setSender',
        'recipient' => 'setRecipient',
        'receivedAt' => 'setReceivedAt',
        'createdAt' => 'setCreatedAt',
        'date' => 'setDate',
        'dateDue' => 'setDateDue',
        'sourceFormat' => 'setSourceFormat',
        'sum' => 'setSum',
        'sumTax' => 'setSumTax',
        'currency' => 'setCurrency',
        'origin' => 'setOrigin',
        'destination' => 'setDestination',
        'comment' => 'setComment',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'reference' => 'getReference',
        'number' => 'getNumber',
        'sender' => 'getSender',
        'recipient' => 'getRecipient',
        'receivedAt' => 'getReceivedAt',
        'createdAt' => 'getCreatedAt',
        'date' => 'getDate',
        'dateDue' => 'getDateDue',
        'sourceFormat' => 'getSourceFormat',
        'sum' => 'getSum',
        'sumTax' => 'getSumTax',
        'currency' => 'getCurrency',
        'origin' => 'getOrigin',
        'destination' => 'getDestination',
        'comment' => 'getComment',
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

    const STATUS_PENDING = 'PENDING';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_FAILED = 'FAILED';
    const ORIGIN_INTERNAL = 'INTERNAL';
    const ORIGIN_EXTERNAL = 'EXTERNAL';
    const ORIGIN_SCAN = 'SCAN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_DELIVERED,
            self::STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_INTERNAL,
            self::ORIGIN_EXTERNAL,
            self::ORIGIN_SCAN,
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['receivedAt'] = isset($data['receivedAt']) ? $data['receivedAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['dateDue'] = isset($data['dateDue']) ? $data['dateDue'] : null;
        $this->container['sourceFormat'] = isset($data['sourceFormat']) ? $data['sourceFormat'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['sumTax'] = isset($data['sumTax']) ? $data['sumTax'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sourceFormat'] === null) {
            $invalidProperties[] = "'sourceFormat' can't be null";
        }
        if ($this->container['sum'] === null) {
            $invalidProperties[] = "'sum' can't be null";
        }
        if ($this->container['sumTax'] === null) {
            $invalidProperties[] = "'sumTax' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
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
     * @param string $id Invoice ID
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
     * @param string $reference Reference number
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
     * @param string $number Invoice number
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceSenderParty
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceSenderParty $sender Sending party
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
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceRecipientParty
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceRecipientParty $recipient Recipient party
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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
     * @param \DateTime $receivedAt The timestamp when invoice was received
     *
     * @return $this
     */
    public function setReceivedAt($receivedAt)
    {
        $this->container['receivedAt'] = $receivedAt;

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
     * @param \DateTime $createdAt The timestamp when invoice was created
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Invoice date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets dateDue
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->container['dateDue'];
    }

    /**
     * Sets dateDue
     *
     * @param \DateTime $dateDue Invoice due date
     *
     * @return $this
     */
    public function setDateDue($dateDue)
    {
        $this->container['dateDue'] = $dateDue;

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
     * @param string $sourceFormat Format the invoice was created from
     *
     * @return $this
     */
    public function setSourceFormat($sourceFormat)
    {
        $this->container['sourceFormat'] = $sourceFormat;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return float
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param float $sum Invoice sum
     *
     * @return $this
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets sumTax
     *
     * @return float
     */
    public function getSumTax()
    {
        return $this->container['sumTax'];
    }

    /**
     * Sets sumTax
     *
     * @param float $sumTax Invoice sum with tax
     *
     * @return $this
     */
    public function setSumTax($sumTax)
    {
        $this->container['sumTax'] = $sumTax;

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
     * @param string $currency Invoice currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin Invoice origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($origin) && !in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination Invoice destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Custom comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceFile[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceFile[] $files Files attached to the invoice
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


