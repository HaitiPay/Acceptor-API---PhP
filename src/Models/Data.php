<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;

/**
 *Event data encoded in json
 */
class Data implements JsonSerializable
{
    /**
     * - `RINGING` : User phone number was called, it has not picked up yet
     * - `CONNECTED` : User picked up.
     * - `SUCCESS` : Authentication was successfully validated.
     * - `ANSWERING_MACHINE` : User answering machine was detected by the server
     * - `HANG_UP` : User hanged up before server was able to validate the authentication
     * - `TIMEOUT` : Server hanged up
     * - `ERROR` : Authentication failed
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $status Initialization value for $this->status
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->status = func_get_arg(0);
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
        $json['status'] = $this->status;

        return array_merge($json, $this->additionalProperties);
    }
}
