<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_ad_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Services;

class KeywordPlanAdGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\KeywordPlanAdGroup::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abc0d0a44676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f6b6579776f72645f706c616e5f61645f67726f75705f" .
            "736572766963652e70726f746f1220676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e73657276696365731a1c676f6f676c652f6170692f" .
            "616e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f74" .
            "6f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f" .
            "7270632f7374617475732e70726f746f1a17676f6f676c652f6170692f63" .
            "6c69656e742e70726f746f22350a1c4765744b6579776f7264506c616e41" .
            "6447726f75705265717565737412150a0d7265736f757263655f6e616d65" .
            "18012001280922ba010a204d75746174654b6579776f7264506c616e4164" .
            "47726f7570735265717565737412130a0b637573746f6d65725f69641801" .
            "2001280912510a0a6f7065726174696f6e7318022003280b323d2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e73657276696365732e" .
            "4b6579776f7264506c616e416447726f75704f7065726174696f6e12170a" .
            "0f7061727469616c5f6661696c75726518032001280812150a0d76616c69" .
            "646174655f6f6e6c7918042001280822ff010a1b4b6579776f7264506c61" .
            "6e416447726f75704f7065726174696f6e122f0a0b7570646174655f6d61" .
            "736b18042001280b321a2e676f6f676c652e70726f746f6275662e466965" .
            "6c644d61736b12470a0663726561746518012001280b32352e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e7265736f75726365732e4b" .
            "6579776f7264506c616e416447726f7570480012470a0675706461746518" .
            "022001280b32352e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e7265736f75726365732e4b6579776f7264506c616e416447726f7570" .
            "480012100a0672656d6f76651803200128094800420b0a096f7065726174" .
            "696f6e22a9010a214d75746174654b6579776f7264506c616e416447726f" .
            "757073526573706f6e736512310a157061727469616c5f6661696c757265" .
            "5f6572726f7218032001280b32122e676f6f676c652e7270632e53746174" .
            "757312510a07726573756c747318022003280b32402e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e73657276696365732e4d75746174" .
            "654b6579776f7264506c616e416447726f7570526573756c7422370a1e4d" .
            "75746174654b6579776f7264506c616e416447726f7570526573756c7412" .
            "150a0d7265736f757263655f6e616d6518012001280932f4030a194b6579" .
            "776f7264506c616e416447726f75705365727669636512cd010a15476574" .
            "4b6579776f7264506c616e416447726f7570123e2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e73657276696365732e4765744b6579" .
            "776f7264506c616e416447726f7570526571756573741a352e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e7265736f75726365732e4b" .
            "6579776f7264506c616e416447726f7570223d82d3e493023712352f7632" .
            "2f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f6b65" .
            "79776f7264506c616e416447726f7570732f2a7d12e9010a194d75746174" .
            "654b6579776f7264506c616e416447726f75707312422e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e73657276696365732e4d757461" .
            "74654b6579776f7264506c616e416447726f757073526571756573741a43" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e7365727669" .
            "6365732e4d75746174654b6579776f7264506c616e416447726f75707352" .
            "6573706f6e7365224382d3e493023d22382f76322f637573746f6d657273" .
            "2f7b637573746f6d65725f69643d2a7d2f6b6579776f7264506c616e4164" .
            "47726f7570733a6d75746174653a012a1a1bca4118676f6f676c65616473" .
            "2e676f6f676c65617069732e636f6d4285020a24636f6d2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76322e7365727669636573421e4b65" .
            "79776f7264506c616e416447726f75705365727669636550726f746f5001" .
            "5a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f67" .
            "6f6f676c65617069732f6164732f676f6f676c656164732f76322f736572" .
            "76696365733b7365727669636573a20203474141aa0220476f6f676c652e" .
            "4164732e476f6f676c654164732e56322e5365727669636573ca0220476f" .
            "6f676c655c4164735c476f6f676c654164735c56325c5365727669636573" .
            "ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a" .
            "3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

