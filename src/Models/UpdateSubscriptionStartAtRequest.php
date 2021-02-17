<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;
use PagarmeCoreApiLib\Utils\DateTimeHelper;

/**
 *Request for updating the start date from a subscription
 */
class UpdateSubscriptionStartAtRequest implements JsonSerializable
{
    /**
     * The date when the subscription periods will start
     * @required
     * @maps start_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $startAt public property
     */
    public $startAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $startAt Initialization value for $this->startAt
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->startAt = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['start_at'] = DateTimeHelper::toRfc3339DateTime($this->startAt);

        return $json;
    }
}
