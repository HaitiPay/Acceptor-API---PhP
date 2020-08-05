<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;
use HaitiPayAcceptorAPILib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class AccountingEntry implements JsonSerializable
{
    /**
     * HaitiPay accounting entry id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @factory \HaitiPayAcceptorAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $date public property
     */
    public $date;

    /**
     * Account identifier
     * @required
     * @var string $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\Amount $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\Amount $balance public property
     */
    public $balance;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id          Initialization value for $this->id
     * @param \DateTime $date        Initialization value for $this->date
     * @param string    $accountId   Initialization value for $this->accountId
     * @param string    $description Initialization value for $this->description
     * @param Amount    $amount      Initialization value for $this->amount
     * @param Amount    $balance     Initialization value for $this->balance
     * @param string    $type        Initialization value for $this->type
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->date        = func_get_arg(1);
            $this->accountId   = func_get_arg(2);
            $this->description = func_get_arg(3);
            $this->amount      = func_get_arg(4);
            $this->balance     = func_get_arg(5);
            $this->type        = func_get_arg(6);
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
        $json['date']        = DateTimeHelper::toRfc3339DateTime($this->date);
        $json['accountId']   = $this->accountId;
        $json['description'] = $this->description;
        $json['amount']      = $this->amount;
        $json['balance']     = $this->balance;
        $json['type']        = $this->type;

        return array_merge($json, $this->additionalProperties);
    }
}
