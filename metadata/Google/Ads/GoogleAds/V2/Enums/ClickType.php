<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/enums/click_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Enums;

class ClickType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae60e0a2e676f6f676c652f6164732f676f6f676c656164732f76322f65" .
            "6e756d732f636c69636b5f747970652e70726f746f121d676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e656e756d7322a60c0a0d436c69" .
            "636b54797065456e756d22940c0a09436c69636b54797065120f0a0b554e" .
            "5350454349464945441000120b0a07554e4b4e4f574e100112100a0c4150" .
            "505f444545504c494e4b1002120f0a0b42524541444352554d4253100312" .
            "120a0e42524f414442414e445f504c414e100412110a0d43414c4c5f5452" .
            "41434b494e47100512090a0543414c4c531006121a0a16434c49434b5f4f" .
            "4e5f454e474147454d454e545f4144100712120a0e4745545f4449524543" .
            "54494f4e53100812160a124c4f434154494f4e5f455850414e53494f4e10" .
            "0912180a144c4f434154494f4e5f464f524d41545f43414c4c100a121e0a" .
            "1a4c4f434154494f4e5f464f524d41545f444952454354494f4e53100b12" .
            "190a154c4f434154494f4e5f464f524d41545f494d414745100c12200a1c" .
            "4c4f434154494f4e5f464f524d41545f4c414e44494e475f50414745100d" .
            "12170a134c4f434154494f4e5f464f524d41545f4d4150100e121e0a1a4c" .
            "4f434154494f4e5f464f524d41545f53544f52455f494e464f100f12180a" .
            "144c4f434154494f4e5f464f524d41545f54455854101012180a144d4f42" .
            "494c455f43414c4c5f545241434b494e47101112100a0c4f464645525f50" .
            "52494e5453101212090a054f544845521013121c0a1850524f445543545f" .
            "455854454e53494f4e5f434c49434b531014121d0a1950524f445543545f" .
            "4c495354494e475f41445f434c49434b531015120d0a09534954454c494e" .
            "4b53101612110a0d53544f52455f4c4f4341544f521017120e0a0a55524c" .
            "5f434c49434b531019121a0a16564944454f5f4150505f53544f52455f43" .
            "4c49434b53101a121f0a1b564944454f5f43414c4c5f544f5f414354494f" .
            "4e5f434c49434b53101b12250a21564944454f5f434152445f414354494f" .
            "4e5f484541444c494e455f434c49434b53101c12180a14564944454f5f45" .
            "4e445f4341505f434c49434b53101d12180a14564944454f5f5745425349" .
            "54455f434c49434b53101e12140a1056495355414c5f534954454c494e4b" .
            "53101f12110a0d574952454c4553535f504c414e1020121c0a1850524f44" .
            "5543545f4c495354494e475f41445f4c4f43414c102112290a2550524f44" .
            "5543545f4c495354494e475f41445f4d554c54494348414e4e454c5f4c4f" .
            "43414c1022122a0a2650524f445543545f4c495354494e475f41445f4d55" .
            "4c54494348414e4e454c5f4f4e4c494e451023121e0a1a50524f44554354" .
            "5f4c495354494e475f4144535f434f55504f4e102412230a1f50524f4455" .
            "43545f4c495354494e475f41445f5452414e5341435441424c451025121b" .
            "0a1750524f445543545f41445f4150505f444545504c494e4b1026121d0a" .
            "1953484f57434153455f41445f43415445474f52595f4c494e4b10271225" .
            "0a2153484f57434153455f41445f4c4f43414c5f53544f524546524f4e54" .
            "5f4c494e4b102812230a1f53484f57434153455f41445f4f4e4c494e455f" .
            "50524f445543545f4c494e4b102a12220a1e53484f57434153455f41445f" .
            "4c4f43414c5f50524f445543545f4c494e4b102b12170a1350524f4d4f54" .
            "494f4e5f455854454e53494f4e102c12210a1d535749504541424c455f47" .
            "414c4c4552595f41445f484541444c494e45102d121f0a1b535749504541" .
            "424c455f47414c4c4552595f41445f535749504553102e12210a1d535749" .
            "504541424c455f47414c4c4552595f41445f5345455f4d4f5245102f1225" .
            "0a21535749504541424c455f47414c4c4552595f41445f534954454c494e" .
            "4b5f4f4e45103012250a21535749504541424c455f47414c4c4552595f41" .
            "445f534954454c494e4b5f54574f103112270a23535749504541424c455f" .
            "47414c4c4552595f41445f534954454c494e4b5f5448524545103212260a" .
            "22535749504541424c455f47414c4c4552595f41445f534954454c494e4b" .
            "5f464f5552103312260a22535749504541424c455f47414c4c4552595f41" .
            "445f534954454c494e4b5f464956451034120f0a0b484f54454c5f505249" .
            "4345103512130a0f50524943455f455854454e53494f4e103612270a2348" .
            "4f54454c5f424f4f4b5f4f4e5f474f4f474c455f524f4f4d5f53454c4543" .
            "54494f4e1037121f0a1b53484f5050494e475f434f4d50415249534f4e5f" .
            "4c495354494e47103842e3010a21636f6d2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76322e656e756d73420e436c69636b547970655072" .
            "6f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76" .
            "322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e41" .
            "64732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c65" .
            "5c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f67" .
            "6c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d7362" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

