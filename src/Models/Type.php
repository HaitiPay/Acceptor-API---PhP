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
class Type implements JsonSerializable
{
    /**
     * Transaction type
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $value Initialization value for $this->value
     * @param string $label Initialization value for $this->label
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->value = func_get_arg(0);
            $this->label = func_get_arg(1);
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
        $json['label'] = $this->label;

        return array_merge($json, $this->additionalProperties);
    }
}
