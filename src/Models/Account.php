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
class Account implements JsonSerializable
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
     * @var \HaitiPayAcceptorAPILib\Models\Amount $balance public property
     */
    public $balance;

    /**
     * @todo Write general description for this property
     * @required
     * @var \HaitiPayAcceptorAPILib\Models\Amount $availableBalance public property
     */
    public $availableBalance;

    /**
     * The account status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * The account label
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * @todo Write general description for this property
     * @required
     * @factory \HaitiPayAcceptorAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * External id (from the calling system)
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * @todo Write general description for this property
     * @var string|null $iban public property
     */
    public $iban;

    /**
     * @todo Write general description for this property
     * @var string|null $bic public property
     */
    public $bic;

    /**
     * @todo Write general description for this property
     * @factory \HaitiPayAcceptorAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastUsedAt public property
     */
    public $lastUsedAt;

    /**
     * @todo Write general description for this property
     * @factory \HaitiPayAcceptorAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deletedAt public property
     */
    public $deletedAt;

    /**
     * Account Type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * brand's merchant for dedicated account
     * @var string|null $merchant public property
     */
    public $merchant;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id               Initialization value for $this->id
     * @param Amount    $balance          Initialization value for $this->balance
     * @param Amount    $availableBalance Initialization value for $this->availableBalance
     * @param string    $status           Initialization value for $this->status
     * @param string    $label            Initialization value for $this->label
     * @param \DateTime $createdAt        Initialization value for $this->createdAt
     * @param string    $externalId       Initialization value for $this->externalId
     * @param string    $iban             Initialization value for $this->iban
     * @param string    $bic              Initialization value for $this->bic
     * @param \DateTime $lastUsedAt       Initialization value for $this->lastUsedAt
     * @param \DateTime $deletedAt        Initialization value for $this->deletedAt
     * @param string    $type             Initialization value for $this->type
     * @param string    $merchant         Initialization value for $this->merchant
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->id               = func_get_arg(0);
            $this->balance          = func_get_arg(1);
            $this->availableBalance = func_get_arg(2);
            $this->status           = func_get_arg(3);
            $this->label            = func_get_arg(4);
            $this->createdAt        = func_get_arg(5);
            $this->externalId       = func_get_arg(6);
            $this->iban             = func_get_arg(7);
            $this->bic              = func_get_arg(8);
            $this->lastUsedAt       = func_get_arg(9);
            $this->deletedAt        = func_get_arg(10);
            $this->type             = func_get_arg(11);
            $this->merchant         = func_get_arg(12);
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
        $json['id']               = $this->id;
        $json['balance']          = $this->balance;
        $json['availableBalance'] = $this->availableBalance;
        $json['status']           = $this->status;
        $json['label']            = $this->label;
        $json['createdAt']        = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['externalId']       = $this->externalId;
        $json['iban']             = $this->iban;
        $json['bic']              = $this->bic;
        $json['lastUsedAt']       = isset($this->lastUsedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->lastUsedAt) : null;
        $json['deletedAt']        = isset($this->deletedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->deletedAt) : null;
        $json['type']             = $this->type;
        $json['merchant']         = $this->merchant;

        return array_merge($json, $this->additionalProperties);
    }
}
