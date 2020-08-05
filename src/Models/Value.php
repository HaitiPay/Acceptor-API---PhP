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
class Value implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $content public property
     */
    public $content;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var integer|null $size public property
     */
    public $size;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $content Initialization value for $this->content
     * @param string  $name    Initialization value for $this->name
     * @param string  $type    Initialization value for $this->type
     * @param integer $size    Initialization value for $this->size
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->content = func_get_arg(0);
            $this->name    = func_get_arg(1);
            $this->type    = func_get_arg(2);
            $this->size    = func_get_arg(3);
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
        $json['content'] = $this->content;
        $json['name']    = $this->name;
        $json['type']    = $this->type;
        $json['size']    = $this->size;

        return array_merge($json, $this->additionalProperties);
    }
}
