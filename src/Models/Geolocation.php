<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;

/**
 *a geolocalized location (latitude/longitude)
 */
class Geolocation implements JsonSerializable
{
    /**
     * the location latitude
     * @required
     * @var double $latitude public property
     */
    public $latitude;

    /**
     * the location longitude
     * @required
     * @var double $longitude public property
     */
    public $longitude;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param double $latitude  Initialization value for $this->latitude
     * @param double $longitude Initialization value for $this->longitude
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->latitude  = func_get_arg(0);
            $this->longitude = func_get_arg(1);
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
        $json['latitude']  = $this->latitude;
        $json['longitude'] = $this->longitude;

        return array_merge($json, $this->additionalProperties);
    }
}
