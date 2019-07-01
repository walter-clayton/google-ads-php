<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/errors/errors.proto

namespace Google\Ads\GoogleAds\V2\Errors;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the part of the request proto that caused the error.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.errors.ErrorLocation</code>
 */
final class ErrorLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * A field path that indicates which field was invalid in the request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.errors.ErrorLocation.FieldPathElement field_path_elements = 2;</code>
     */
    private $field_path_elements;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Errors\ErrorLocation\FieldPathElement[]|\Google\Protobuf\Internal\RepeatedField $field_path_elements
     *           A field path that indicates which field was invalid in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Errors\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * A field path that indicates which field was invalid in the request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.errors.ErrorLocation.FieldPathElement field_path_elements = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldPathElements()
    {
        return $this->field_path_elements;
    }

    /**
     * A field path that indicates which field was invalid in the request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.errors.ErrorLocation.FieldPathElement field_path_elements = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Errors\ErrorLocation\FieldPathElement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldPathElements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Errors\ErrorLocation\FieldPathElement::class);
        $this->field_path_elements = $arr;

        return $this;
    }

}

