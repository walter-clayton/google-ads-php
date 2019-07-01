<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/user_interest.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user interest: a particular interest-based vertical to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.UserInterest</code>
 */
final class UserInterest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2;</code>
     */
    private $taxonomy_type = 0;
    /**
     * The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3;</code>
     */
    private $user_interest_id = null;
    /**
     * The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5;</code>
     */
    private $user_interest_parent = null;
    /**
     * True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6;</code>
     */
    private $launched_to_all = null;
    /**
     * Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.CriterionCategoryAvailability availabilities = 7;</code>
     */
    private $availabilities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the user interest.
     *           User interest resource names have the form:
     *           `customers/{customer_id}/userInterests/{user_interest_id}`
     *     @type int $taxonomy_type
     *           Taxonomy type of the user interest.
     *     @type \Google\Protobuf\Int64Value $user_interest_id
     *           The ID of the user interest.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the user interest.
     *     @type \Google\Protobuf\StringValue $user_interest_parent
     *           The parent of the user interest.
     *     @type \Google\Protobuf\BoolValue $launched_to_all
     *           True if the user interest is launched to all channels and locales.
     *     @type \Google\Ads\GoogleAds\V2\Common\CriterionCategoryAvailability[]|\Google\Protobuf\Internal\RepeatedField $availabilities
     *           Availability information of the user interest.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\UserInterest::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
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

    /**
     * Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2;</code>
     * @return int
     */
    public function getTaxonomyType()
    {
        return $this->taxonomy_type;
    }

    /**
     * Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTaxonomyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\UserInterestTaxonomyTypeEnum_UserInterestTaxonomyType::class);
        $this->taxonomy_type = $var;

        return $this;
    }

    /**
     * The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getUserInterestId()
    {
        return $this->user_interest_id;
    }

    /**
     * Returns the unboxed value from <code>getUserInterestId()</code>

     * The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3;</code>
     * @return int|string|null
     */
    public function getUserInterestIdUnwrapped()
    {
        $wrapper = $this->getUserInterestId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setUserInterestId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->user_interest_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value user_interest_id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setUserInterestIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setUserInterestId($wrappedVar);
    }

    /**
     * The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        $wrapper = $this->getName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setName($wrappedVar);
    }

    /**
     * The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUserInterestParent()
    {
        return $this->user_interest_parent;
    }

    /**
     * Returns the unboxed value from <code>getUserInterestParent()</code>

     * The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5;</code>
     * @return string|null
     */
    public function getUserInterestParentUnwrapped()
    {
        $wrapper = $this->getUserInterestParent();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUserInterestParent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->user_interest_parent = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The parent of the user interest.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_parent = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUserInterestParentUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setUserInterestParent($wrappedVar);
    }

    /**
     * True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getLaunchedToAll()
    {
        return $this->launched_to_all;
    }

    /**
     * Returns the unboxed value from <code>getLaunchedToAll()</code>

     * True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6;</code>
     * @return bool|null
     */
    public function getLaunchedToAllUnwrapped()
    {
        $wrapper = $this->getLaunchedToAll();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setLaunchedToAll($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->launched_to_all = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue launched_to_all = 6;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setLaunchedToAllUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setLaunchedToAll($wrappedVar);
    }

    /**
     * Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.CriterionCategoryAvailability availabilities = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.CriterionCategoryAvailability availabilities = 7;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\CriterionCategoryAvailability[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailabilities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\CriterionCategoryAvailability::class);
        $this->availabilities = $arr;

        return $this;
    }

}

