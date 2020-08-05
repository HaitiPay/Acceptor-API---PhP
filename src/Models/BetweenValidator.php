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
class BetweenValidator implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $min public property
     */
    public $min;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $max public property
     */
    public $max;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type Initialization value for $this->type
     * @param double $min  Initialization value for $this->min
     * @param double $max  Initialization value for $this->max
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->type = func_get_arg(0);
            $this->min  = func_get_arg(1);
            $this->max  = func_get_arg(2);
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
        $json['type'] = $this->type;
        $json['min']  = $this->min;
        $json['max']  = $this->max;

        return array_merge($json, $this->additionalProperties);
    }
}
