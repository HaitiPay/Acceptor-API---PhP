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
class TransactionsPaybillResponse2 implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\TransactionAccounting $transaction public property
     */
    public $transaction;

    /**
     * information to display to the user
     * @var string|null $info public property
     */
    public $info;

    /**
     * additional information to display to the user
     * @var string|null $additional public property
     */
    public $additional;

    /**
     * Voucher generated for this bill payment, if any
     * @var string|null $voucher public property
     */
    public $voucher;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param TransactionAccounting $transaction Initialization value for $this->transaction
     * @param string                $info        Initialization value for $this->info
     * @param string                $additional  Initialization value for $this->additional
     * @param string                $voucher     Initialization value for $this->voucher
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->transaction = func_get_arg(0);
            $this->info        = func_get_arg(1);
            $this->additional  = func_get_arg(2);
            $this->voucher     = func_get_arg(3);
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
        $json['transaction'] = $this->transaction;
        $json['info']        = $this->info;
        $json['additional']  = $this->additional;
        $json['voucher']     = $this->voucher;

        return array_merge($json, $this->additionalProperties);
    }
}
