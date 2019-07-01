<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criterion_category_availability.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about which locales a category is available in.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.CriterionCategoryLocaleAvailability</code>
 */
final class CriterionCategoryLocaleAvailability extends \Google\Protobuf\Internal\Message
{
    /**
     * Format of the locale availability. Can be LAUNCHED_TO_ALL (both country and
     * language will be empty), COUNTRY (only country will be set), LANGUAGE (only
     * language wil be set), COUNTRY_AND_LANGUAGE (both country and language will
     * be set).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.CriterionCategoryLocaleAvailabilityModeEnum.CriterionCategoryLocaleAvailabilityMode availability_mode = 1;</code>
     */
    private $availability_mode = 0;
    /**
     * Code of the country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     */
    private $country_code = null;
    /**
     * Code of the language.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 3;</code>
     */
    private $language_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $availability_mode
     *           Format of the locale availability. Can be LAUNCHED_TO_ALL (both country and
     *           language will be empty), COUNTRY (only country will be set), LANGUAGE (only
     *           language wil be set), COUNTRY_AND_LANGUAGE (both country and language will
     *           be set).
     *     @type \Google\Protobuf\StringValue $country_code
     *           Code of the country.
     *     @type \Google\Protobuf\StringValue $language_code
     *           Code of the language.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\CriterionCategoryAvailability::initOnce();
        parent::__construct($data);
    }

    /**
     * Format of the locale availability. Can be LAUNCHED_TO_ALL (both country and
     * language will be empty), COUNTRY (only country will be set), LANGUAGE (only
     * language wil be set), COUNTRY_AND_LANGUAGE (both country and language will
     * be set).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.CriterionCategoryLocaleAvailabilityModeEnum.CriterionCategoryLocaleAvailabilityMode availability_mode = 1;</code>
     * @return int
     */
    public function getAvailabilityMode()
    {
        return $this->availability_mode;
    }

    /**
     * Format of the locale availability. Can be LAUNCHED_TO_ALL (both country and
     * language will be empty), COUNTRY (only country will be set), LANGUAGE (only
     * language wil be set), COUNTRY_AND_LANGUAGE (both country and language will
     * be set).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.CriterionCategoryLocaleAvailabilityModeEnum.CriterionCategoryLocaleAvailabilityMode availability_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\CriterionCategoryLocaleAvailabilityModeEnum_CriterionCategoryLocaleAvailabilityMode::class);
        $this->availability_mode = $var;

        return $this;
    }

    /**
     * Code of the country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Returns the unboxed value from <code>getCountryCode()</code>

     * Code of the country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @return string|null
     */
    public function getCountryCodeUnwrapped()
    {
        $wrapper = $this->getCountryCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Code of the country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Code of the country.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCountryCode($wrappedVar);
    }

    /**
     * Code of the language.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Returns the unboxed value from <code>getLanguageCode()</code>

     * Code of the language.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 3;</code>
     * @return string|null
     */
    public function getLanguageCodeUnwrapped()
    {
        $wrapper = $this->getLanguageCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Code of the language.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Code of the language.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setLanguageCode($wrappedVar);
    }

}

