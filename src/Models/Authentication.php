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
class Authentication implements JsonSerializable
{
    /**
     * Authentication mode
     * @required
     * @var string $mode public property
     */
    public $mode;

    /**
     * Authentication status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Authentication mode
     * @var string|null $fallback public property
     */
    public $fallback;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mode     Initialization value for $this->mode
     * @param string $status   Initialization value for $this->status
     * @param string $fallback Initialization value for $this->fallback
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->mode     = func_get_arg(0);
            $this->status   = func_get_arg(1);
            $this->fallback = func_get_arg(2);
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
        $json['mode']     = $this->mode;
        $json['status']   = $this->status;
        $json['fallback'] = $this->fallback;

        return array_merge($json, $this->additionalProperties);
    }
}
