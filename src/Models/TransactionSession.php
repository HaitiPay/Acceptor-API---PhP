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
class TransactionSession implements JsonSerializable
{
    /**
     * Transaction session identifier
     * @required
     * @var string $token public property
     */
    public $token;

    /**
     * Transaction session status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @var \HaitiPayAcceptorAPILib\Models\Authentication[]|null $authentications public property
     */
    public $authentications;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $token           Initialization value for $this->token
     * @param string $status          Initialization value for $this->status
     * @param array  $authentications Initialization value for $this->authentications
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->token           = func_get_arg(0);
            $this->status          = func_get_arg(1);
            $this->authentications = func_get_arg(2);
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
        $json['token']           = $this->token;
        $json['status']          = $this->status;
        $json['authentications'] = $this->authentications;

        return array_merge($json, $this->additionalProperties);
    }
}
