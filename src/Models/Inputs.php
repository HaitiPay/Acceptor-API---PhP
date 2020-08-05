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
class Inputs implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\NumberInput $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\SelectInput $periodicity public property
     */
    public $periodicity;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param NumberInput $value       Initialization value for $this->value
     * @param SelectInput $periodicity Initialization value for $this->periodicity
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->value       = func_get_arg(0);
            $this->periodicity = func_get_arg(1);
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
        $json['value']       = $this->value;
        $json['periodicity'] = $this->periodicity;

        return array_merge($json, $this->additionalProperties);
    }
}
