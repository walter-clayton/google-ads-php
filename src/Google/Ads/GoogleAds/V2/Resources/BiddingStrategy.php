<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/bidding_strategy.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bidding strategy.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.BiddingStrategy</code>
 */
final class BiddingStrategy extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the bidding strategy.
     * Bidding strategy resource names have the form:
     * `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the bidding strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The status of the bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.BiddingStrategyStatusEnum.BiddingStrategyStatus status = 15;</code>
     */
    private $status = 0;
    /**
     * The type of the bidding strategy.
     * Create a bidding strategy by setting the bidding scheme.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.BiddingStrategyTypeEnum.BiddingStrategyType type = 5;</code>
     */
    private $type = 0;
    /**
     * The number of campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value campaign_count = 13;</code>
     */
    private $campaign_count = null;
    /**
     * The number of non-removed campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value non_removed_campaign_count = 14;</code>
     */
    private $non_removed_campaign_count = null;
    protected $scheme;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the bidding strategy.
     *           Bidding strategy resource names have the form:
     *           `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the bidding strategy.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the bidding strategy.
     *           All bidding strategies within an account must be named distinctly.
     *           The length of this string should be between 1 and 255, inclusive,
     *           in UTF-8 bytes, (trimmed).
     *     @type int $status
     *           The status of the bidding strategy.
     *           This field is read-only.
     *     @type int $type
     *           The type of the bidding strategy.
     *           Create a bidding strategy by setting the bidding scheme.
     *           This field is read-only.
     *     @type \Google\Protobuf\Int64Value $campaign_count
     *           The number of campaigns attached to this bidding strategy.
     *           This field is read-only.
     *     @type \Google\Protobuf\Int64Value $non_removed_campaign_count
     *           The number of non-removed campaigns attached to this bidding strategy.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V2\Common\EnhancedCpc $enhanced_cpc
     *           A bidding strategy that raises bids for clicks that seem more likely to
     *           lead to a conversion and lowers them for clicks where they seem less
     *           likely.
     *     @type \Google\Ads\GoogleAds\V2\Common\PageOnePromoted $page_one_promoted
     *           A bidding strategy that sets max CPC bids to target impressions on
     *           page one or page one promoted slots on google.com.
     *           This field is deprecated. Creating a new bidding strategy with this
     *           field or attaching bidding strategies with this field to a campaign will
     *           fail. Mutates to strategies that already have this scheme populated are
     *           allowed.
     *     @type \Google\Ads\GoogleAds\V2\Common\TargetCpa $target_cpa
     *           A bidding strategy that sets bids to help get as many conversions as
     *           possible at the target cost-per-acquisition (CPA) you set.
     *     @type \Google\Ads\GoogleAds\V2\Common\TargetImpressionShare $target_impression_share
     *           A bidding strategy that automatically optimizes towards a desired
     *           percentage of impressions.
     *     @type \Google\Ads\GoogleAds\V2\Common\TargetOutrankShare $target_outrank_share
     *           A bidding strategy that sets bids based on the target fraction of
     *           auctions where the advertiser should outrank a specific competitor.
     *           This field is deprecated. Creating a new bidding strategy with this
     *           field or attaching bidding strategies with this field to a campaign will
     *           fail. Mutates to strategies that already have this scheme populated are
     *           allowed.
     *     @type \Google\Ads\GoogleAds\V2\Common\TargetRoas $target_roas
     *           A bidding strategy that helps you maximize revenue while averaging a
     *           specific target Return On Ad Spend (ROAS).
     *     @type \Google\Ads\GoogleAds\V2\Common\TargetSpend $target_spend
     *           A bid strategy that sets your bids to help get as many clicks as
     *           possible within your budget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\BiddingStrategy::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the bidding strategy.
     * Bidding strategy resource names have the form:
     * `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the bidding strategy.
     * Bidding strategy resource names have the form:
     * `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
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
     * The ID of the bidding strategy.
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

     * The ID of the bidding strategy.
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
     * The ID of the bidding strategy.
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

     * The ID of the bidding strategy.
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
     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
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

     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
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
     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
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

     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
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
     * The status of the bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.BiddingStrategyStatusEnum.BiddingStrategyStatus status = 15;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.BiddingStrategyStatusEnum.BiddingStrategyStatus status = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\BiddingStrategyStatusEnum_BiddingStrategyStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The type of the bidding strategy.
     * Create a bidding strategy by setting the bidding scheme.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.BiddingStrategyTypeEnum.BiddingStrategyType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the bidding strategy.
     * Create a bidding strategy by setting the bidding scheme.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.BiddingStrategyTypeEnum.BiddingStrategyType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\BiddingStrategyTypeEnum_BiddingStrategyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The number of campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value campaign_count = 13;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCampaignCount()
    {
        return $this->campaign_count;
    }

    /**
     * Returns the unboxed value from <code>getCampaignCount()</code>

     * The number of campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value campaign_count = 13;</code>
     * @return int|string|null
     */
    public function getCampaignCountUnwrapped()
    {
        $wrapper = $this->getCampaignCount();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The number of campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value campaign_count = 13;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCampaignCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->campaign_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The number of campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value campaign_count = 13;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCampaignCountUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setCampaignCount($wrappedVar);
    }

    /**
     * The number of non-removed campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value non_removed_campaign_count = 14;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getNonRemovedCampaignCount()
    {
        return $this->non_removed_campaign_count;
    }

    /**
     * Returns the unboxed value from <code>getNonRemovedCampaignCount()</code>

     * The number of non-removed campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value non_removed_campaign_count = 14;</code>
     * @return int|string|null
     */
    public function getNonRemovedCampaignCountUnwrapped()
    {
        $wrapper = $this->getNonRemovedCampaignCount();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The number of non-removed campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value non_removed_campaign_count = 14;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setNonRemovedCampaignCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->non_removed_campaign_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The number of non-removed campaigns attached to this bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value non_removed_campaign_count = 14;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setNonRemovedCampaignCountUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setNonRemovedCampaignCount($wrappedVar);
    }

    /**
     * A bidding strategy that raises bids for clicks that seem more likely to
     * lead to a conversion and lowers them for clicks where they seem less
     * likely.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.EnhancedCpc enhanced_cpc = 7;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\EnhancedCpc
     */
    public function getEnhancedCpc()
    {
        return $this->readOneof(7);
    }

    /**
     * A bidding strategy that raises bids for clicks that seem more likely to
     * lead to a conversion and lowers them for clicks where they seem less
     * likely.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.EnhancedCpc enhanced_cpc = 7;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\EnhancedCpc $var
     * @return $this
     */
    public function setEnhancedCpc($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\EnhancedCpc::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A bidding strategy that sets max CPC bids to target impressions on
     * page one or page one promoted slots on google.com.
     * This field is deprecated. Creating a new bidding strategy with this
     * field or attaching bidding strategies with this field to a campaign will
     * fail. Mutates to strategies that already have this scheme populated are
     * allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.PageOnePromoted page_one_promoted = 8;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\PageOnePromoted
     */
    public function getPageOnePromoted()
    {
        return $this->readOneof(8);
    }

    /**
     * A bidding strategy that sets max CPC bids to target impressions on
     * page one or page one promoted slots on google.com.
     * This field is deprecated. Creating a new bidding strategy with this
     * field or attaching bidding strategies with this field to a campaign will
     * fail. Mutates to strategies that already have this scheme populated are
     * allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.PageOnePromoted page_one_promoted = 8;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\PageOnePromoted $var
     * @return $this
     */
    public function setPageOnePromoted($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\PageOnePromoted::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A bidding strategy that sets bids to help get as many conversions as
     * possible at the target cost-per-acquisition (CPA) you set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetCpa target_cpa = 9;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\TargetCpa
     */
    public function getTargetCpa()
    {
        return $this->readOneof(9);
    }

    /**
     * A bidding strategy that sets bids to help get as many conversions as
     * possible at the target cost-per-acquisition (CPA) you set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetCpa target_cpa = 9;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TargetCpa $var
     * @return $this
     */
    public function setTargetCpa($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\TargetCpa::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * A bidding strategy that automatically optimizes towards a desired
     * percentage of impressions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetImpressionShare target_impression_share = 48;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\TargetImpressionShare
     */
    public function getTargetImpressionShare()
    {
        return $this->readOneof(48);
    }

    /**
     * A bidding strategy that automatically optimizes towards a desired
     * percentage of impressions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetImpressionShare target_impression_share = 48;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TargetImpressionShare $var
     * @return $this
     */
    public function setTargetImpressionShare($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\TargetImpressionShare::class);
        $this->writeOneof(48, $var);

        return $this;
    }

    /**
     * A bidding strategy that sets bids based on the target fraction of
     * auctions where the advertiser should outrank a specific competitor.
     * This field is deprecated. Creating a new bidding strategy with this
     * field or attaching bidding strategies with this field to a campaign will
     * fail. Mutates to strategies that already have this scheme populated are
     * allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetOutrankShare target_outrank_share = 10;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\TargetOutrankShare
     */
    public function getTargetOutrankShare()
    {
        return $this->readOneof(10);
    }

    /**
     * A bidding strategy that sets bids based on the target fraction of
     * auctions where the advertiser should outrank a specific competitor.
     * This field is deprecated. Creating a new bidding strategy with this
     * field or attaching bidding strategies with this field to a campaign will
     * fail. Mutates to strategies that already have this scheme populated are
     * allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetOutrankShare target_outrank_share = 10;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TargetOutrankShare $var
     * @return $this
     */
    public function setTargetOutrankShare($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\TargetOutrankShare::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * A bidding strategy that helps you maximize revenue while averaging a
     * specific target Return On Ad Spend (ROAS).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetRoas target_roas = 11;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\TargetRoas
     */
    public function getTargetRoas()
    {
        return $this->readOneof(11);
    }

    /**
     * A bidding strategy that helps you maximize revenue while averaging a
     * specific target Return On Ad Spend (ROAS).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetRoas target_roas = 11;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TargetRoas $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\TargetRoas::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A bid strategy that sets your bids to help get as many clicks as
     * possible within your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetSpend target_spend = 12;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\TargetSpend
     */
    public function getTargetSpend()
    {
        return $this->readOneof(12);
    }

    /**
     * A bid strategy that sets your bids to help get as many clicks as
     * possible within your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.TargetSpend target_spend = 12;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\TargetSpend $var
     * @return $this
     */
    public function setTargetSpend($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\TargetSpend::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->whichOneof("scheme");
    }

}

