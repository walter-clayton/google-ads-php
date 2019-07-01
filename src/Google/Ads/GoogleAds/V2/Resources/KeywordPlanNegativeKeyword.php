<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/keyword_plan_negative_keyword.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Plan negative keyword.
 * Max number of keyword plan negative keywords per plan: 1000.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.KeywordPlanNegativeKeyword</code>
 */
final class KeywordPlanNegativeKeyword extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan negative keyword.
     * KeywordPlanNegativeKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     */
    private $keyword_plan_campaign = null;
    /**
     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     */
    private $text = null;
    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     */
    private $match_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the Keyword Plan negative keyword.
     *           KeywordPlanNegativeKeyword resource names have the form:
     *           `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
     *     @type \Google\Protobuf\StringValue $keyword_plan_campaign
     *           The Keyword Plan campaign to which this negative keyword belongs.
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the Keyword Plan negative keyword.
     *     @type \Google\Protobuf\StringValue $text
     *           The keyword text.
     *     @type int $match_type
     *           The keyword match type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\KeywordPlanNegativeKeyword::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan negative keyword.
     * KeywordPlanNegativeKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the Keyword Plan negative keyword.
     * KeywordPlanNegativeKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
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
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getKeywordPlanCampaign()
    {
        return $this->keyword_plan_campaign;
    }

    /**
     * Returns the unboxed value from <code>getKeywordPlanCampaign()</code>

     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     * @return string|null
     */
    public function getKeywordPlanCampaignUnwrapped()
    {
        $wrapper = $this->getKeywordPlanCampaign();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setKeywordPlanCampaignUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setKeywordPlanCampaign($wrappedVar);
    }

    /**
     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        $wrapper = $this->getId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setId($wrappedVar);
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        $wrapper = $this->getText();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setText($wrappedVar);
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\KeywordMatchTypeEnum_KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

}

