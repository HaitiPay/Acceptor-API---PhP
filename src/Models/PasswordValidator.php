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
class PasswordValidator implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var integer|null $minLength public property
     */
    public $minLength;

    /**
     * regexp in PCRE format. Password must match this regexp
     * @var string|null $regexp public property
     */
    public $regexp;

    /**
     * regexp in PCRE format. Password must not match this regexp
     * @var string|null $forbidRegex public property
     */
    public $forbidRegex;

    /**
     * if true, you cannot choose a date as a password
     * @var bool|null $forbidDates public property
     */
    public $forbidDates;

    /**
     * list of forbidden passwords
     * @var array|null $blacklist public property
     */
    public $blacklist;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $type        Initialization value for $this->type
     * @param integer $minLength   Initialization value for $this->minLength
     * @param string  $regexp      Initialization value for $this->regexp
     * @param string  $forbidRegex Initialization value for $this->forbidRegex
     * @param bool    $forbidDates Initialization value for $this->forbidDates
     * @param array   $blacklist   Initialization value for $this->blacklist
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->type        = func_get_arg(0);
            $this->minLength   = func_get_arg(1);
            $this->regexp      = func_get_arg(2);
            $this->forbidRegex = func_get_arg(3);
            $this->forbidDates = func_get_arg(4);
            $this->blacklist   = func_get_arg(5);
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
        $json['type']        = $this->type;
        $json['minLength']   = $this->minLength;
        $json['regexp']      = $this->regexp;
        $json['forbidRegex'] = $this->forbidRegex;
        $json['forbidDates'] = $this->forbidDates;
        $json['blacklist']   = $this->blacklist;

        return array_merge($json, $this->additionalProperties);
    }
}
