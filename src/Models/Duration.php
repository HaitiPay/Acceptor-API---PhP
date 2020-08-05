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
class Duration implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $value public property
     */
    public $value;

    /**
     * Available periodicities
     * @var string|null $unit public property
     */
    public $unit;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $value Initialization value for $this->value
     * @param string  $unit  Initialization value for $this->unit
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->value = func_get_arg(0);
            $this->unit  = func_get_arg(1);
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
        $json['value'] = $this->value;
        $json['unit']  = $this->unit;

        return array_merge($json, $this->additionalProperties);
    }
}
