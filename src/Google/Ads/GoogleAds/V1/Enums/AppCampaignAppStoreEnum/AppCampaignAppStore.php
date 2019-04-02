<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/app_campaign_app_store.proto

namespace Google\Ads\GoogleAds\V1\Enums\AppCampaignAppStoreEnum;

/**
 * Enum describing app campaign app store.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AppCampaignAppStoreEnum.AppCampaignAppStore</code>
 */
class AppCampaignAppStore
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Apple app store.
     *
     * Generated from protobuf enum <code>APPLE_APP_STORE = 2;</code>
     */
    const APPLE_APP_STORE = 2;
    /**
     * Google play.
     *
     * Generated from protobuf enum <code>GOOGLE_APP_STORE = 3;</code>
     */
    const GOOGLE_APP_STORE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppCampaignAppStore::class, \Google\Ads\GoogleAds\V1\Enums\AppCampaignAppStoreEnum_AppCampaignAppStore::class);
