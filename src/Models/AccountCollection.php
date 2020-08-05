<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;

/**
 *Sorted and paginated list of accounts
 */
class AccountCollection implements JsonSerializable
{
    /**
     * collection of accounts
     * @var \HaitiPayAcceptorAPILib\Models\Account[]|null $items public property
     */
    public $items;

    /**
     * the number of elements returned in `items` array
     * @var integer|null $count public property
     */
    public $count;

    /**
     * the total number of objects in collection
     * @var integer|null $total public property
     */
    public $total;

    /**
     * Pagination start (from 0)
     * @var integer|null $offset public property
     */
    public $offset;

    /**
     * Number of results to display (default 20)
     * @var integer|null $limit public property
     */
    public $limit;

    /**
     * Field to define sort order
     * @var string|null $sort public property
     */
    public $sort;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array   $items  Initialization value for $this->items
     * @param integer $count  Initialization value for $this->count
     * @param integer $total  Initialization value for $this->total
     * @param integer $offset Initialization value for $this->offset
     * @param integer $limit  Initialization value for $this->limit
     * @param string  $sort   Initialization value for $this->sort
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 6:
                $this->items  = func_get_arg(0);
                $this->count  = func_get_arg(1);
                $this->total  = func_get_arg(2);
                $this->offset = func_get_arg(3);
                $this->limit  = func_get_arg(4);
                $this->sort   = func_get_arg(5);
                break;

            default:
                $this->offset = 0;
                $this->limit = 20;
                $this->sort = 'id';
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
        $json['items']  = $this->items;
        $json['count']  = $this->count;
        $json['total']  = $this->total;
        $json['offset'] = $this->offset;
        $json['limit']  = $this->limit;
        $json['sort']   = $this->sort;

        return array_merge($json, $this->additionalProperties);
    }
}
