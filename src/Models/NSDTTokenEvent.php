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
class NSDTTokenEvent implements JsonSerializable
{
    /**
     * Event id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Event type
     * @required
     * @var string $event public property
     */
    public $event;

    /**
     * Event data encoded in json
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\Data2 $data public property
     */
    public $data;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id    Initialization value for $this->id
     * @param string $event Initialization value for $this->event
     * @param Data2  $data  Initialization value for $this->data
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id    = func_get_arg(0);
            $this->event = func_get_arg(1);
            $this->data  = func_get_arg(2);
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
        $json['id']    = $this->id;
        $json['event'] = $this->event;
        $json['data']  = $this->data;

        return array_merge($json, $this->additionalProperties);
    }
}
