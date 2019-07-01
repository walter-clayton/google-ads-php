<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/real_time_bidding_setting.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for Real-Time Bidding, a feature only available for campaigns
 * targeting the Ad Exchange network.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.RealTimeBiddingSetting</code>
 */
final class RealTimeBiddingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     */
    private $opt_in = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $opt_in
     *           Whether the campaign is opted in to real-time bidding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\RealTimeBiddingSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getOptIn()
    {
        return $this->opt_in;
    }

    /**
     * Returns the unboxed value from <code>getOptIn()</code>

     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @return bool|null
     */
    public function getOptInUnwrapped()
    {
        $wrapper = $this->getOptIn();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setOptIn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->opt_in = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the campaign is opted in to real-time bidding.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue opt_in = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setOptInUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setOptIn($wrappedVar);
    }

}

