<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/merchant_center_link_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for Merchant Center link mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.MutateMerchantCenterLinkResponse</code>
 */
final class MutateMerchantCenterLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.MutateMerchantCenterLinkResult result = 2;</code>
     */
    private $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Services\MutateMerchantCenterLinkResult $result
     *           Result for the mutate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\MerchantCenterLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.MutateMerchantCenterLinkResult result = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Services\MutateMerchantCenterLinkResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.MutateMerchantCenterLinkResult result = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Services\MutateMerchantCenterLinkResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Services\MutateMerchantCenterLinkResult::class);
        $this->result = $var;

        return $this;
    }

}

