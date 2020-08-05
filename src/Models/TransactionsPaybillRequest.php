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
class TransactionsPaybillRequest implements JsonSerializable
{
    /**
     * This object must contain user's input if a previous `PATCH /transactions/paybill/{paybillSessionId}`
     * call returned any `Input` object.
     *
     * It must contains as many properties as received `Input`, with property name is equal to `Input` `id`,
     * and property value is user's input
     * @var object|null $inputs public property
     */
    public $inputs;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param object $inputs Initialization value for $this->inputs
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->inputs = func_get_arg(0);
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
        $json['inputs'] = $this->inputs;

        return array_merge($json, $this->additionalProperties);
    }
}
