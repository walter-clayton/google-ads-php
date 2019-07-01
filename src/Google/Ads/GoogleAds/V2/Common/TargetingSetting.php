<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/targeting_setting.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for the targeting-related features, at the campaign and ad group
 * levels. For more details about the targeting setting, visit
 * https://support.google.com/google-ads/answer/7365594
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.TargetingSetting</code>
 */
final class TargetingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The per-targeting-dimension setting to restrict the reach of your campaign
     * or ad group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.TargetRestriction target_restrictions = 1;</code>
     */
    private $target_restrictions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Common\TargetRestriction[]|\Google\Protobuf\Internal\RepeatedField $target_restrictions
     *           The per-targeting-dimension setting to restrict the reach of your campaign
     *           or ad group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\TargetingSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * The per-targeting-dimension setting to restrict the reach of your campaign
     * or ad group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.TargetRestriction target_restrictions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetRestrictions()
    {
        return $this->target_restrictions;
    }

    /**
     * The per-targeting-dimension setting to restrict the reach of your campaign
     * or ad group.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.TargetRestriction target_restrictions = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TargetRestriction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetRestrictions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\TargetRestriction::class);
        $this->target_restrictions = $arr;

        return $this;
    }

}

