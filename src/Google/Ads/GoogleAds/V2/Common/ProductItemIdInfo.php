<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Item id of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ProductItemIdInfo</code>
 */
final class ProductItemIdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Value of the id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $value
     *           Value of the id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Value of the id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the unboxed value from <code>getValue()</code>

     * Value of the id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @return string|null
     */
    public function getValueUnwrapped()
    {
        $wrapper = $this->getValue();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Value of the id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Value of the id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setValueUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setValue($wrappedVar);
    }

}

