<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * City the hotel is located in.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.HotelCityInfo</code>
 */
final class HotelCityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_criterion = 1;</code>
     */
    private $city_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $city_criterion
     *           The Geo Target Constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_criterion = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCityCriterion()
    {
        return $this->city_criterion;
    }

    /**
     * Returns the unboxed value from <code>getCityCriterion()</code>

     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_criterion = 1;</code>
     * @return string|null
     */
    public function getCityCriterionUnwrapped()
    {
        $wrapper = $this->getCityCriterion();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_criterion = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCityCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_criterion = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCityCriterionUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCityCriterion($wrappedVar);
    }

}

