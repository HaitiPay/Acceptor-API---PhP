<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;
use HaitiPayAcceptorAPILib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class TransactionAccounting implements JsonSerializable
{
    /**
     * HaitiPay transaction id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @factory \HaitiPayAcceptorAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $date public property
     */
    public $date;

    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\Type $type public property
     */
    public $type;

    /**
     * Client custom data (external) for TransactionId
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing your
     * additional information about the object in a structured format.
     * @var object|null $externalData public property
     */
    public $externalData;

    /**
     * User defined transaction label
     * @var string|null $label public property
     */
    public $label;

    /**
     * Transaction description
     * @var string|null $description public property
     */
    public $description;

    /**
     * a geolocalized location (latitude/longitude)
     * @var \HaitiPayAcceptorAPILib\Models\Geolocation|null $geolocation public property
     */
    public $geolocation;

    /**
     * @todo Write general description for this property
     * @var \HaitiPayAcceptorAPILib\Models\Amount|null $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\AccountingEntry[] $detailedAccounting public property
     */
    public $detailedAccounting;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string       $id                 Initialization value for $this->id
     * @param \DateTime    $date               Initialization value for $this->date
     * @param Type         $type               Initialization value for $this->type
     * @param string       $externalId         Initialization value for $this->externalId
     * @param object       $externalData       Initialization value for $this->externalData
     * @param string       $label              Initialization value for $this->label
     * @param string       $description        Initialization value for $this->description
     * @param Geolocation  $geolocation        Initialization value for $this->geolocation
     * @param Amount       $amount             Initialization value for $this->amount
     * @param array        $detailedAccounting Initialization value for $this->detailedAccounting
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->id                 = func_get_arg(0);
            $this->date               = func_get_arg(1);
            $this->type               = func_get_arg(2);
            $this->externalId         = func_get_arg(3);
            $this->externalData       = func_get_arg(4);
            $this->label              = func_get_arg(5);
            $this->description        = func_get_arg(6);
            $this->geolocation        = func_get_arg(7);
            $this->amount             = func_get_arg(8);
            $this->detailedAccounting = func_get_arg(9);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                 = $this->id;
        $json['date']               = DateTimeHelper::toRfc3339DateTime($this->date);
        $json['type']               = $this->type;
        $json['externalId']         = $this->externalId;
        $json['externalData']       = $this->externalData;
        $json['label']              = $this->label;
        $json['description']        = $this->description;
        $json['geolocation']        = $this->geolocation;
        $json['amount']             = $this->amount;
        $json['detailedAccounting'] = $this->detailedAccounting;

        return array_merge($json, $this->additionalProperties);
    }
}
