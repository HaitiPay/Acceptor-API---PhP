<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class TransactionsPaymentRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\Amount $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @var \HaitiPayAcceptorAPILib\Models\ClientIdentifier|null $clientIdentifier public property
     */
    public $clientIdentifier;

    /**
     * a geolocalized location (latitude/longitude)
     * @var \HaitiPayAcceptorAPILib\Models\Geolocation|null $location public property
     */
    public $location;

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
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param Amount           $amount           Initialization value for $this->amount
     * @param ClientIdentifier $clientIdentifier Initialization value for $this->clientIdentifier
     * @param Geolocation      $location         Initialization value for $this->location
     * @param string           $externalId       Initialization value for $this->externalId
     * @param object           $externalData     Initialization value for $this->externalData
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->amount           = func_get_arg(0);
            $this->clientIdentifier = func_get_arg(1);
            $this->location         = func_get_arg(2);
            $this->externalId       = func_get_arg(3);
            $this->externalData     = func_get_arg(4);
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
        $json['amount']           = $this->amount;
        $json['clientIdentifier'] = $this->clientIdentifier;
        $json['location']         = $this->location;
        $json['externalId']       = $this->externalId;
        $json['externalData']     = $this->externalData;

        return array_merge($json, $this->additionalProperties);
    }
}
