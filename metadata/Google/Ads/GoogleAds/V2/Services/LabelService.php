<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/label_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Services;

class LabelService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Label::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad50b0a34676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f6c6162656c5f736572766963652e70726f746f122067" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e73657276696365" .
            "731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f74" .
            "6f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e" .
            "70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572" .
            "732e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f" .
            "746f1a17676f6f676c652f6170692f636c69656e742e70726f746f22280a" .
            "0f4765744c6162656c5265717565737412150a0d7265736f757263655f6e" .
            "616d6518012001280922a0010a134d75746174654c6162656c7352657175" .
            "65737412130a0b637573746f6d65725f696418012001280912440a0a6f70" .
            "65726174696f6e7318022003280b32302e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e73657276696365732e4c6162656c4f70657261" .
            "74696f6e12170a0f7061727469616c5f6661696c75726518032001280812" .
            "150a0d76616c69646174655f6f6e6c7918042001280822d8010a0e4c6162" .
            "656c4f7065726174696f6e122f0a0b7570646174655f6d61736b18042001" .
            "280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b" .
            "123a0a0663726561746518012001280b32282e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e7265736f75726365732e4c6162656c4800" .
            "123a0a0675706461746518022001280b32282e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e7265736f75726365732e4c6162656c4800" .
            "12100a0672656d6f76651803200128094800420b0a096f7065726174696f" .
            "6e228f010a144d75746174654c6162656c73526573706f6e736512310a15" .
            "7061727469616c5f6661696c7572655f6572726f7218032001280b32122e" .
            "676f6f676c652e7270632e53746174757312440a07726573756c74731802" .
            "2003280b32332e676f6f676c652e6164732e676f6f676c656164732e7632" .
            "2e73657276696365732e4d75746174654c6162656c526573756c74222a0a" .
            "114d75746174654c6162656c526573756c7412150a0d7265736f75726365" .
            "5f6e616d6518012001280932ff020a0c4c6162656c536572766963651299" .
            "010a084765744c6162656c12312e676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e73657276696365732e4765744c6162656c5265717565" .
            "73741a282e676f6f676c652e6164732e676f6f676c656164732e76322e72" .
            "65736f75726365732e4c6162656c223082d3e493022a12282f76322f7b72" .
            "65736f757263655f6e616d653d637573746f6d6572732f2a2f6c6162656c" .
            "732f2a7d12b5010a0c4d75746174654c6162656c7312352e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76322e73657276696365732e4d7574" .
            "6174654c6162656c73526571756573741a362e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e73657276696365732e4d75746174654c61" .
            "62656c73526573706f6e7365223682d3e4930230222b2f76322f63757374" .
            "6f6d6572732f7b637573746f6d65725f69643d2a7d2f6c6162656c733a6d" .
            "75746174653a012a1a1bca4118676f6f676c656164732e676f6f676c6561" .
            "7069732e636f6d42f8010a24636f6d2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76322e736572766963657342114c6162656c5365727669" .
            "636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c6561" .
            "64732f76322f73657276696365733b7365727669636573a20203474141aa" .
            "0220476f6f676c652e4164732e476f6f676c654164732e56322e53657276" .
            "69636573ca0220476f6f676c655c4164735c476f6f676c654164735c5632" .
            "5c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c" .
            "654164733a3a56323a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

