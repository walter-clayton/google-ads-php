<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An allocation of a part of the budget on a given product.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.ProductAllocation</code>
 */
class ProductAllocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Selected product for planning. The product codes returned are within the
     * set of the ones returned by ListPlannableProducts when using the same
     * location id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     */
    protected $plannable_product_code = null;
    /**
     * The value to be allocated for the suggested product in requested currency.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     */
    protected $budget_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $plannable_product_code
     *           Selected product for planning. The product codes returned are within the
     *           set of the ones returned by ListPlannableProducts when using the same
     *           location id.
     *     @type \Google\Protobuf\Int64Value $budget_micros
     *           The value to be allocated for the suggested product in requested currency.
     *           Amount in micros. One million is equivalent to one unit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Selected product for planning. The product codes returned are within the
     * set of the ones returned by ListPlannableProducts when using the same
     * location id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPlannableProductCode()
    {
        return $this->plannable_product_code;
    }

    /**
     * Returns the unboxed value from <code>getPlannableProductCode()</code>

     * Selected product for planning. The product codes returned are within the
     * set of the ones returned by ListPlannableProducts when using the same
     * location id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @return string|null
     */
    public function getPlannableProductCodeUnwrapped()
    {
        return $this->readWrapperValue("plannable_product_code");
    }

    /**
     * Selected product for planning. The product codes returned are within the
     * set of the ones returned by ListPlannableProducts when using the same
     * location id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPlannableProductCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->plannable_product_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Selected product for planning. The product codes returned are within the
     * set of the ones returned by ListPlannableProducts when using the same
     * location id.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPlannableProductCodeUnwrapped($var)
    {
        $this->writeWrapperValue("plannable_product_code", $var);
        return $this;}

    /**
     * The value to be allocated for the suggested product in requested currency.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getBudgetMicros()
    {
        return $this->budget_micros;
    }

    /**
     * Returns the unboxed value from <code>getBudgetMicros()</code>

     * The value to be allocated for the suggested product in requested currency.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @return int|string|null
     */
    public function getBudgetMicrosUnwrapped()
    {
        return $this->readWrapperValue("budget_micros");
    }

    /**
     * The value to be allocated for the suggested product in requested currency.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setBudgetMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->budget_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The value to be allocated for the suggested product in requested currency.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setBudgetMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("budget_micros", $var);
        return $this;}

}

