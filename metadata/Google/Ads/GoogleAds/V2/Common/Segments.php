<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/segments.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Common;

class Segments
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\AdNetworkType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ClickType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ConversionActionCategory::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ConversionAttributionEventType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ConversionLagBucket::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ConversionOrAdjustmentLagBucket::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\DayOfWeek::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\Device::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ExternalConversionSource::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\HotelDateSelectionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\HotelRateType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\MonthOfYear::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\PlaceholderType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ProductChannel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ProductChannelExclusivity::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\ProductCondition::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\SearchEngineResultsPageType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\SearchTermMatchType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\Slot::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a94360a2d676f6f676c652f6164732f676f6f676c656164732f76322f63" .
            "6f6d6d6f6e2f7365676d656e74732e70726f746f121e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e636f6d6d6f6e1a33676f6f676c65" .
            "2f6164732f676f6f676c656164732f76322f656e756d732f61645f6e6574" .
            "776f726b5f747970652e70726f746f1a2e676f6f676c652f6164732f676f" .
            "6f676c656164732f76322f656e756d732f636c69636b5f747970652e7072" .
            "6f746f1a3e676f6f676c652f6164732f676f6f676c656164732f76322f65" .
            "6e756d732f636f6e76657273696f6e5f616374696f6e5f63617465676f72" .
            "792e70726f746f1a45676f6f676c652f6164732f676f6f676c656164732f" .
            "76322f656e756d732f636f6e76657273696f6e5f6174747269627574696f" .
            "6e5f6576656e745f747970652e70726f746f1a39676f6f676c652f616473" .
            "2f676f6f676c656164732f76322f656e756d732f636f6e76657273696f6e" .
            "5f6c61675f6275636b65742e70726f746f1a47676f6f676c652f6164732f" .
            "676f6f676c656164732f76322f656e756d732f636f6e76657273696f6e5f" .
            "6f725f61646a7573746d656e745f6c61675f6275636b65742e70726f746f" .
            "1a2f676f6f676c652f6164732f676f6f676c656164732f76322f656e756d" .
            "732f6461795f6f665f7765656b2e70726f746f1a2a676f6f676c652f6164" .
            "732f676f6f676c656164732f76322f656e756d732f6465766963652e7072" .
            "6f746f1a3e676f6f676c652f6164732f676f6f676c656164732f76322f65" .
            "6e756d732f65787465726e616c5f636f6e76657273696f6e5f736f757263" .
            "652e70726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f" .
            "76322f656e756d732f686f74656c5f646174655f73656c656374696f6e5f" .
            "747970652e70726f746f1a33676f6f676c652f6164732f676f6f676c6561" .
            "64732f76322f656e756d732f686f74656c5f726174655f747970652e7072" .
            "6f746f1a31676f6f676c652f6164732f676f6f676c656164732f76322f65" .
            "6e756d732f6d6f6e74685f6f665f796561722e70726f746f1a34676f6f67" .
            "6c652f6164732f676f6f676c656164732f76322f656e756d732f706c6163" .
            "65686f6c6465725f747970652e70726f746f1a33676f6f676c652f616473" .
            "2f676f6f676c656164732f76322f656e756d732f70726f647563745f6368" .
            "616e6e656c2e70726f746f1a3f676f6f676c652f6164732f676f6f676c65" .
            "6164732f76322f656e756d732f70726f647563745f6368616e6e656c5f65" .
            "78636c757369766974792e70726f746f1a35676f6f676c652f6164732f67" .
            "6f6f676c656164732f76322f656e756d732f70726f647563745f636f6e64" .
            "6974696f6e2e70726f746f1a43676f6f676c652f6164732f676f6f676c65" .
            "6164732f76322f656e756d732f7365617263685f656e67696e655f726573" .
            "756c74735f706167655f747970652e70726f746f1a3a676f6f676c652f61" .
            "64732f676f6f676c656164732f76322f656e756d732f7365617263685f74" .
            "65726d5f6d617463685f747970652e70726f746f1a28676f6f676c652f61" .
            "64732f676f6f676c656164732f76322f656e756d732f736c6f742e70726f" .
            "746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70" .
            "726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70" .
            "726f746f22cf290a085365676d656e747312570a0f61645f6e6574776f72" .
            "6b5f7479706518032001280e323e2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e656e756d732e41644e6574776f726b54797065456e" .
            "756d2e41644e6574776f726b54797065124a0a0a636c69636b5f74797065" .
            "181a2001280e32362e676f6f676c652e6164732e676f6f676c656164732e" .
            "76322e656e756d732e436c69636b54797065456e756d2e436c69636b5479" .
            "706512370a11636f6e76657273696f6e5f616374696f6e18342001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "780a1a636f6e76657273696f6e5f616374696f6e5f63617465676f727918" .
            "352001280e32542e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e656e756d732e436f6e76657273696f6e416374696f6e43617465676f" .
            "7279456e756d2e436f6e76657273696f6e416374696f6e43617465676f72" .
            "79123c0a16636f6e76657273696f6e5f616374696f6e5f6e616d65183620" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c756512390a15636f6e76657273696f6e5f61646a7573746d656e74181b" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c" .
            "7565128b010a21636f6e76657273696f6e5f6174747269627574696f6e5f" .
            "6576656e745f7479706518022001280e32602e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e656e756d732e436f6e76657273696f6e41" .
            "74747269627574696f6e4576656e7454797065456e756d2e436f6e766572" .
            "73696f6e4174747269627574696f6e4576656e745479706512690a15636f" .
            "6e76657273696f6e5f6c61675f6275636b657418322001280e324a2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e656e756d732e436f" .
            "6e76657273696f6e4c61674275636b6574456e756d2e436f6e7665727369" .
            "6f6e4c61674275636b6574128f010a23636f6e76657273696f6e5f6f725f" .
            "61646a7573746d656e745f6c61675f6275636b657418332001280e32622e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e" .
            "436f6e76657273696f6e4f7241646a7573746d656e744c61674275636b65" .
            "74456e756d2e436f6e76657273696f6e4f7241646a7573746d656e744c61" .
            "674275636b6574122a0a046461746518042001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c7565124b0a0b6461795f6f" .
            "665f7765656b18052001280e32362e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e656e756d732e4461794f665765656b456e756d2e44" .
            "61794f665765656b12400a0664657669636518012001280e32302e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e656e756d732e446576" .
            "696365456e756d2e44657669636512780a1a65787465726e616c5f636f6e" .
            "76657273696f6e5f736f7572636518372001280e32542e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e656e756d732e45787465726e61" .
            "6c436f6e76657273696f6e536f75726365456e756d2e45787465726e616c" .
            "436f6e76657273696f6e536f7572636512380a1267656f5f746172676574" .
            "5f616972706f727418412001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c756512370a1167656f5f7461726765745f63" .
            "616e746f6e184c2001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512350a0f67656f5f7461726765745f63697479" .
            "183e2001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512380a1267656f5f7461726765745f636f756e747279184d" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512370a1167656f5f7461726765745f636f756e74791844200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512390a1367656f5f7461726765745f646973747269637418452001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12360a1067656f5f7461726765745f6d6574726f183f2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512470a21" .
            "67656f5f7461726765745f6d6f73745f73706563696669635f6c6f636174" .
            "696f6e18482001280b321c2e676f6f676c652e70726f746f6275662e5374" .
            "72696e6756616c7565123c0a1667656f5f7461726765745f706f7374616c" .
            "5f636f646518472001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512390a1367656f5f7461726765745f70726f76" .
            "696e6365184b2001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756512370a1167656f5f7461726765745f726567696f" .
            "6e18402001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512360a1067656f5f7461726765745f7374617465184320" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c7565123e0a19686f74656c5f626f6f6b696e675f77696e646f775f6461" .
            "797318062001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c756512340a0f686f74656c5f63656e7465725f696418072001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "6512390a13686f74656c5f636865636b5f696e5f6461746518082001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "125a0a1a686f74656c5f636865636b5f696e5f6461795f6f665f7765656b" .
            "18092001280e32362e676f6f676c652e6164732e676f6f676c656164732e" .
            "76322e656e756d732e4461794f665765656b456e756d2e4461794f665765" .
            "656b12300a0a686f74656c5f63697479180a2001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512300a0b686f7465" .
            "6c5f636c617373180b2001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74333256616c756512330a0d686f74656c5f636f756e74727918" .
            "0c2001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512730a19686f74656c5f646174655f73656c656374696f6e5f" .
            "74797065180d2001280e32502e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76322e656e756d732e486f74656c4461746553656c656374696f" .
            "6e54797065456e756d2e486f74656c4461746553656c656374696f6e5479" .
            "706512390a14686f74656c5f6c656e6774685f6f665f73746179180e2001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c75" .
            "6512380a12686f74656c5f726174655f72756c655f696418492001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "570a0f686f74656c5f726174655f74797065184a2001280e323e2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e656e756d732e486f74" .
            "656c5261746554797065456e756d2e486f74656c52617465547970651231" .
            "0a0b686f74656c5f7374617465180f2001280b321c2e676f6f676c652e70" .
            "726f746f6275662e537472696e6756616c756512290a04686f7572181020" .
            "01280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c" .
            "756512410a1d696e746572616374696f6e5f6f6e5f746869735f65787465" .
            "6e73696f6e18312001280b321a2e676f6f676c652e70726f746f6275662e" .
            "426f6f6c56616c756512380a076b6579776f7264183d2001280b32272e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e" .
            "4b6579776f7264122b0a056d6f6e746818112001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512510a0d6d6f6e74" .
            "685f6f665f7965617218122001280e323a2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76322e656e756d732e4d6f6e74684f665965617245" .
            "6e756d2e4d6f6e74684f665965617212360a10706172746e65725f686f74" .
            "656c5f696418132001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c7565125c0a10706c616365686f6c6465725f747970" .
            "6518142001280e32422e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e656e756d732e506c616365686f6c64657254797065456e756d2e" .
            "506c616365686f6c64657254797065123b0a1570726f647563745f616767" .
            "72656761746f725f6964181c2001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e55496e74363456616c756512450a1f70726f647563745f6269" .
            "6464696e675f63617465676f72795f6c6576656c3118382001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756512450a" .
            "1f70726f647563745f62696464696e675f63617465676f72795f6c657665" .
            "6c3218392001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512450a1f70726f647563745f62696464696e675f6361" .
            "7465676f72795f6c6576656c33183a2001280b321c2e676f6f676c652e70" .
            "726f746f6275662e537472696e6756616c756512450a1f70726f64756374" .
            "5f62696464696e675f63617465676f72795f6c6576656c34183b2001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12450a1f70726f647563745f62696464696e675f63617465676f72795f6c" .
            "6576656c35183c2001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512330a0d70726f647563745f6272616e64181d" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512590a0f70726f647563745f6368616e6e656c181e2001280e32" .
            "402e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d" .
            "732e50726f647563744368616e6e656c456e756d2e50726f647563744368" .
            "616e6e656c127b0a1b70726f647563745f6368616e6e656c5f6578636c75" .
            "736976697479181f2001280e32562e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e656e756d732e50726f647563744368616e6e656c45" .
            "78636c75736976697479456e756d2e50726f647563744368616e6e656c45" .
            "78636c75736976697479125f0a1170726f647563745f636f6e646974696f" .
            "6e18202001280e32442e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e656e756d732e50726f64756374436f6e646974696f6e456e756d" .
            "2e50726f64756374436f6e646974696f6e12350a0f70726f647563745f63" .
            "6f756e74727918212001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c7565123f0a1970726f647563745f637573746f6d" .
            "5f6174747269627574653018222001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c7565123f0a1970726f647563745f63" .
            "7573746f6d5f6174747269627574653118232001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565123f0a1970726f64" .
            "7563745f637573746f6d5f6174747269627574653218242001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c7565123f0a" .
            "1970726f647563745f637573746f6d5f6174747269627574653318252001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "7565123f0a1970726f647563745f637573746f6d5f617474726962757465" .
            "3418262001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512350a0f70726f647563745f6974656d5f696418272001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756512360a1070726f647563745f6c616e677561676518282001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651239" .
            "0a1370726f647563745f6d65726368616e745f696418292001280b321c2e" .
            "676f6f676c652e70726f746f6275662e55496e74363456616c756512360a" .
            "1070726f647563745f73746f72655f6964182a2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512330a0d70726f" .
            "647563745f7469746c65182b2001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512350a0f70726f647563745f7479" .
            "70655f6c31182c2001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512350a0f70726f647563745f747970655f6c32" .
            "182d2001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512350a0f70726f647563745f747970655f6c33182e200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512350a0f70726f647563745f747970655f6c34182f2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512350a0f" .
            "70726f647563745f747970655f6c3518302001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c7565122d0a077175617274" .
            "657218152001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c75651283010a1f7365617263685f656e67696e655f726573" .
            "756c74735f706167655f7479706518462001280e325a2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e656e756d732e53656172636845" .
            "6e67696e65526573756c74735061676554797065456e756d2e5365617263" .
            "68456e67696e65526573756c74735061676554797065126a0a1673656172" .
            "63685f7465726d5f6d617463685f7479706518162001280e324a2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e656e756d732e536561" .
            "7263685465726d4d6174636854797065456e756d2e536561726368546572" .
            "6d4d6174636854797065123a0a04736c6f7418172001280e322c2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e656e756d732e536c6f" .
            "74456e756d2e536c6f74122d0a077765627061676518422001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c7565122a0a" .
            "047765656b18182001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512290a047965617218192001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74333256616c7565227e0a074b65" .
            "79776f726412380a1261645f67726f75705f637269746572696f6e180120" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c756512390a04696e666f18022001280b322b2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76322e636f6d6d6f6e2e4b6579776f7264496e" .
            "666f42e8010a22636f6d2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76322e636f6d6d6f6e420d5365676d656e747350726f746f50015a44" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f6164732f676f6f676c656164732f76322f636f6d6d6f" .
            "6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f" .
            "6f676c654164732e56322e436f6d6d6f6eca021e476f6f676c655c416473" .
            "5c476f6f676c654164735c56325c436f6d6d6f6eea0222476f6f676c653a" .
            "3a4164733a3a476f6f676c654164733a3a56323a3a436f6d6d6f6e620670" .
            "726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

