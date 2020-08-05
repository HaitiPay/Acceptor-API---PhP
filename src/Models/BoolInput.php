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
class BoolInput implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var string|null $label public property
     */
    public $label;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @var bool|null $required public property
     */
    public $required;

    /**
     * @todo Write general description for this property
     * @var array|null $validators public property
     */
    public $validators;

    /**
     * If true, this input cannot be change
     * @var bool|null $disabled public property
     */
    public $disabled;

    /**
     * @todo Write general description for this property
     * @var bool|null $value public property
     */
    public $value;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id          Initialization value for $this->id
     * @param string $type        Initialization value for $this->type
     * @param string $label       Initialization value for $this->label
     * @param string $description Initialization value for $this->description
     * @param bool   $required    Initialization value for $this->required
     * @param array  $validators  Initialization value for $this->validators
     * @param bool   $disabled    Initialization value for $this->disabled
     * @param bool   $value       Initialization value for $this->value
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 8:
                $this->id          = func_get_arg(0);
                $this->type        = func_get_arg(1);
                $this->label       = func_get_arg(2);
                $this->description = func_get_arg(3);
                $this->required    = func_get_arg(4);
                $this->validators  = func_get_arg(5);
                $this->disabled    = func_get_arg(6);
                $this->value       = func_get_arg(7);
                break;

            default:
                $this->disabled = false;
                break;
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
        $json['id']          = $this->id;
        $json['type']        = $this->type;
        $json['label']       = $this->label;
        $json['description'] = $this->description;
        $json['required']    = $this->required;
        $json['validators']  = $this->validators;
        $json['disabled']    = $this->disabled;
        $json['value']       = $this->value;

        return array_merge($json, $this->additionalProperties);
    }
}
