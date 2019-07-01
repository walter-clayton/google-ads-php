<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criterion_category_availability.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Common;

class CriterionCategoryAvailability
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\AdvertisingChannelSubType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\AdvertisingChannelType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\CriterionCategoryChannelAvailabilityMode::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\CriterionCategoryLocaleAvailabilityMode::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aef0c0a44676f6f676c652f6164732f676f6f676c656164732f76322f63" .
            "6f6d6d6f6e2f637269746572696f6e5f63617465676f72795f617661696c" .
            "6162696c6974792e70726f746f121e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e636f6d6d6f6e1a3c676f6f676c652f6164732f676f" .
            "6f676c656164732f76322f656e756d732f6164766572746973696e675f63" .
            "68616e6e656c5f747970652e70726f746f1a50676f6f676c652f6164732f" .
            "676f6f676c656164732f76322f656e756d732f637269746572696f6e5f63" .
            "617465676f72795f6368616e6e656c5f617661696c6162696c6974795f6d" .
            "6f64652e70726f746f1a4f676f6f676c652f6164732f676f6f676c656164" .
            "732f76322f656e756d732f637269746572696f6e5f63617465676f72795f" .
            "6c6f63616c655f617661696c6162696c6974795f6d6f64652e70726f746f" .
            "1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f" .
            "746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f" .
            "746f22cb010a1d437269746572696f6e43617465676f7279417661696c61" .
            "62696c69747912550a076368616e6e656c18012001280b32442e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e437269" .
            "746572696f6e43617465676f72794368616e6e656c417661696c6162696c" .
            "69747912530a066c6f63616c6518022003280b32432e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e636f6d6d6f6e2e43726974657269" .
            "6f6e43617465676f72794c6f63616c65417661696c6162696c69747922f0" .
            "030a24437269746572696f6e43617465676f72794368616e6e656c417661" .
            "696c6162696c697479128f010a11617661696c6162696c6974795f6d6f64" .
            "6518012001280e32742e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e656e756d732e437269746572696f6e43617465676f7279436861" .
            "6e6e656c417661696c6162696c6974794d6f6465456e756d2e4372697465" .
            "72696f6e43617465676f72794368616e6e656c417661696c6162696c6974" .
            "794d6f646512720a186164766572746973696e675f6368616e6e656c5f74" .
            "79706518022001280e32502e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e656e756d732e4164766572746973696e674368616e6e656c" .
            "54797065456e756d2e4164766572746973696e674368616e6e656c547970" .
            "65127c0a1c6164766572746973696e675f6368616e6e656c5f7375625f74" .
            "79706518032003280e32562e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e656e756d732e4164766572746973696e674368616e6e656c" .
            "53756254797065456e756d2e4164766572746973696e674368616e6e656c" .
            "5375625479706512440a20696e636c7564655f64656661756c745f636861" .
            "6e6e656c5f7375625f7479706518042001280b321a2e676f6f676c652e70" .
            "726f746f6275662e426f6f6c56616c7565229e020a23437269746572696f" .
            "6e43617465676f72794c6f63616c65417661696c6162696c697479128d01" .
            "0a11617661696c6162696c6974795f6d6f646518012001280e32722e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e656e756d732e4372" .
            "69746572696f6e43617465676f72794c6f63616c65417661696c6162696c" .
            "6974794d6f6465456e756d2e437269746572696f6e43617465676f72794c" .
            "6f63616c65417661696c6162696c6974794d6f646512320a0c636f756e74" .
            "72795f636f646518022001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512330a0d6c616e67756167655f636f6465" .
            "18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756542fd010a22636f6d2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e636f6d6d6f6e4222437269746572696f6e43617465" .
            "676f7279417661696c6162696c69747950726f746f50015a44676f6f676c" .
            "652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c656170" .
            "69732f6164732f676f6f676c656164732f76322f636f6d6d6f6e3b636f6d" .
            "6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c6541" .
            "64732e56322e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f67" .
            "6c654164735c56325c436f6d6d6f6eea0222476f6f676c653a3a4164733a" .
            "3a476f6f676c654164733a3a56323a3a436f6d6d6f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

