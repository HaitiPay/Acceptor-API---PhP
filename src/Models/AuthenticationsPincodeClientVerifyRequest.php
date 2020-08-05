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
class AuthenticationsPincodeClientVerifyRequest implements JsonSerializable
{
    /**
     * The client pincode
     * @required
     * @var string $pincode public property
     */
    public $pincode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $pincode Initialization value for $this->pincode
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->pincode = func_get_arg(0);
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
        $json['pincode'] = $this->pincode;

        return array_merge($json, $this->additionalProperties);
    }
}
