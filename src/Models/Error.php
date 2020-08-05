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
class Error implements JsonSerializable
{
    /**
     * error code
     * @required
     * @var integer $code public property
     */
    public $code;

    /**
     * This is an error message, it can be shown to the end user
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * More technical message about the error, to ease debugging of what went wrong. It should not be shown
     * to the end user
     * @var string|null $hint public property
     */
    public $hint;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $code    Initialization value for $this->code
     * @param string  $message Initialization value for $this->message
     * @param string  $hint    Initialization value for $this->hint
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->code    = func_get_arg(0);
            $this->message = func_get_arg(1);
            $this->hint    = func_get_arg(2);
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
        $json['code']    = $this->code;
        $json['message'] = $this->message;
        $json['hint']    = $this->hint;

        return array_merge($json, $this->additionalProperties);
    }
}
