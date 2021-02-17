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
 *Response object for getting a period
 */
class GetPeriodResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps start_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $startAt public property
     */
    public $startAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps end_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $endAt public property
     */
    public $endAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps billing_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $billingAt public property
     */
    public $billingAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagarmeCoreApiLib\Models\GetSubscriptionResponse $subscription public property
     */
    public $subscription;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $duration public property
     */
    public $duration;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @var string $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps updated_at
     * @var string $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $cycle public property
     */
    public $cycle;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime                $startAt      Initialization value for $this->startAt
     * @param \DateTime                $endAt        Initialization value for $this->endAt
     * @param string                   $id           Initialization value for $this->id
     * @param \DateTime                $billingAt    Initialization value for $this->billingAt
     * @param GetSubscriptionResponse  $subscription Initialization value for $this->subscription
     * @param string                   $status       Initialization value for $this->status
     * @param integer                  $duration     Initialization value for $this->duration
     * @param string                   $createdAt    Initialization value for $this->createdAt
     * @param string                   $updatedAt    Initialization value for $this->updatedAt
     * @param integer                  $cycle        Initialization value for $this->cycle
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->startAt      = func_get_arg(0);
            $this->endAt        = func_get_arg(1);
            $this->id           = func_get_arg(2);
            $this->billingAt    = func_get_arg(3);
            $this->subscription = func_get_arg(4);
            $this->status       = func_get_arg(5);
            $this->duration     = func_get_arg(6);
            $this->createdAt    = func_get_arg(7);
            $this->updatedAt    = func_get_arg(8);
            $this->cycle        = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['start_at']     = DateTimeHelper::toRfc3339DateTime($this->startAt);
        $json['end_at']       = DateTimeHelper::toRfc3339DateTime($this->endAt);
        $json['id']           = $this->id;
        $json['billing_at']   = DateTimeHelper::toRfc3339DateTime($this->billingAt);
        $json['subscription'] = $this->subscription;
        $json['status']       = $this->status;
        $json['duration']     = $this->duration;
        $json['created_at']   = $this->createdAt;
        $json['updated_at']   = $this->updatedAt;
        $json['cycle']        = $this->cycle;

        return $json;
    }
}
