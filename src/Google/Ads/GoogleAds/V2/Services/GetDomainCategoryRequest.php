<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/domain_category_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DomainCategoryService.GetDomainCategory][google.ads.googleads.v2.services.DomainCategoryService.GetDomainCategory].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GetDomainCategoryRequest</code>
 */
final class GetDomainCategoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the domain category to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Resource name of the domain category to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\DomainCategoryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the domain category to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Resource name of the domain category to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

