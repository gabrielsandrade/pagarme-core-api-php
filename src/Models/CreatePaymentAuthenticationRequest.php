<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *The payment authentication request
 */
class CreatePaymentAuthenticationRequest implements JsonSerializable
{
    /**
     * The Authentication type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Creates a 3D-S authentication payment
     * @required
     * @maps threed_secure
     * @var \PagarmeCoreApiLib\Models\CreateThreeDSecureRequest $threedSecure public property
     */
    public $threedSecure;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $type         Initialization value for $this->type
     * @param CreateThreeDSecureRequest $threedSecure Initialization value for $this->threedSecure
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type         = func_get_arg(0);
            $this->threedSecure = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']          = $this->type;
        $json['threed_secure'] = $this->threedSecure;

        return $json;
    }
}
