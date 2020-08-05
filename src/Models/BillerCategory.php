<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;

/**
 *Category of bill issuers
 */
class BillerCategory implements JsonSerializable
{
    /**
     * Bill category identifier
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Bill category name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Type of node in bill issuers tree
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $children public property
     */
    public $children;

    /**
     * Logo of the bill Category
     * @var string|null $logoUrl public property
     */
    public $logoUrl;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id       Initialization value for $this->id
     * @param string $name     Initialization value for $this->name
     * @param string $type     Initialization value for $this->type
     * @param array  $children Initialization value for $this->children
     * @param string $logoUrl  Initialization value for $this->logoUrl
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id       = func_get_arg(0);
            $this->name     = func_get_arg(1);
            $this->type     = func_get_arg(2);
            $this->children = func_get_arg(3);
            $this->logoUrl  = func_get_arg(4);
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
        $json['id']       = $this->id;
        $json['name']     = $this->name;
        $json['type']     = $this->type;
        $json['children'] = $this->children;
        $json['logoUrl']  = $this->logoUrl;

        return array_merge($json, $this->additionalProperties);
    }
}
