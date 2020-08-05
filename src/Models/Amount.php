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
class Amount implements JsonSerializable
{
    /**
     * Amount without separator and symbol
     * @required
     * @var integer $value public property
     */
    public $value;

    /**
     * Three-letter ISO currency code, in uppercase. Read more at https://fr.wikipedia.org/wiki/ISO_4217.
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $value    Initialization value for $this->value
     * @param string  $currency Initialization value for $this->currency
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->value    = func_get_arg(0);
            $this->currency = func_get_arg(1);
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
        $json['value']    = $this->value;
        $json['currency'] = $this->currency;

        return array_merge($json, $this->additionalProperties);
    }
}
