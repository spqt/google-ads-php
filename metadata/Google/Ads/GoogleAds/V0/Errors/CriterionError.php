<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/criterion_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Errors;

class CriterionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd1a0a34676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "72726f72732f637269746572696f6e5f6572726f722e70726f746f121e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f727322" .
            "a0180a12437269746572696f6e4572726f72456e756d2289180a0e437269" .
            "746572696f6e4572726f72120f0a0b554e5350454349464945441000120b" .
            "0a07554e4b4e4f574e1001121a0a16434f4e43524554455f545950455f52" .
            "455155495245441002121d0a19494e56414c49445f4558434c554445445f" .
            "43415445474f5259100312180a14494e56414c49445f4b4559574f52445f" .
            "54455854100412190a154b4559574f52445f544558545f544f4f5f4c4f4e" .
            "471005121e0a1a4b4559574f52445f4841535f544f4f5f4d414e595f574f" .
            "5244531006121d0a194b4559574f52445f4841535f494e56414c49445f43" .
            "48415253100712190a15494e56414c49445f504c4143454d454e545f5552" .
            "4c100812150a11494e56414c49445f555345525f4c495354100912190a15" .
            "494e56414c49445f555345525f494e544552455354100a12240a20494e56" .
            "414c49445f464f524d41545f464f525f504c4143454d454e545f55524c10" .
            "0b121d0a19504c4143454d454e545f55524c5f49535f544f4f5f4c4f4e47" .
            "100c12220a1e504c4143454d454e545f55524c5f4841535f494c4c454741" .
            "4c5f43484152100d122c0a28504c4143454d454e545f55524c5f4841535f" .
            "4d554c5449504c455f53495445535f494e5f4c494e45100e12390a35504c" .
            "4143454d454e545f49535f4e4f545f415641494c41424c455f464f525f54" .
            "4152474554494e475f4f525f4558434c5553494f4e100f12160a12494e56" .
            "414c49445f544f5049435f504154481010121e0a1a494e56414c49445f59" .
            "4f55545542455f4348414e4e454c5f49441011121c0a18494e56414c4944" .
            "5f594f55545542455f564944454f5f4944101212270a23594f5554554245" .
            "5f564552544943414c5f4348414e4e454c5f444550524543415445441013" .
            "122a0a26594f55545542455f44454d4f475241504849435f4348414e4e45" .
            "4c5f444550524543415445441014121b0a17594f55545542455f55524c5f" .
            "554e535550504f52544544101512200a1c43414e4e4f545f4558434c5544" .
            "455f43524954455249415f545950451016121c0a1843414e4e4f545f4144" .
            "445f43524954455249415f545950451017121a0a16494e56414c49445f50" .
            "524f445543545f46494c5445521018121b0a1750524f445543545f46494c" .
            "5445525f544f4f5f4c4f4e47101912240a2043414e4e4f545f4558434c55" .
            "44455f53494d494c41525f555345525f4c495354101a121f0a1b43414e4e" .
            "4f545f4144445f434c4f5345445f555345525f4c495354101b123a0a3643" .
            "414e4e4f545f4144445f444953504c41595f4f4e4c595f4c495354535f54" .
            "4f5f5345415243485f4f4e4c595f43414d504149474e53101c12350a3143" .
            "414e4e4f545f4144445f444953504c41595f4f4e4c595f4c495354535f54" .
            "4f5f5345415243485f43414d504149474e53101d12370a3343414e4e4f54" .
            "5f4144445f444953504c41595f4f4e4c595f4c495354535f544f5f53484f" .
            "5050494e475f43414d504149474e53101e12310a2d43414e4e4f545f4144" .
            "445f555345525f494e544552455354535f544f5f5345415243485f43414d" .
            "504149474e53101f12390a3543414e4e4f545f5345545f424944535f4f4e" .
            "5f435249544552494f4e5f545950455f494e5f5345415243485f43414d50" .
            "4149474e53102012370a3343414e4e4f545f4144445f55524c535f544f5f" .
            "435249544552494f4e5f545950455f464f525f43414d504149474e5f5459" .
            "5045102112160a12494e56414c49445f49505f4144445245535310221215" .
            "0a11494e56414c49445f49505f464f524d4154102312160a12494e56414c" .
            "49445f4d4f42494c455f4150501024121f0a1b494e56414c49445f4d4f42" .
            "494c455f4150505f43415445474f5259102512180a14494e56414c49445f" .
            "435249544552494f4e5f49441026121b0a1743414e4e4f545f5441524745" .
            "545f435249544552494f4e102712240a2043414e4e4f545f544152474554" .
            "5f4f42534f4c4554455f435249544552494f4e102812220a1e4352495445" .
            "52494f4e5f49445f414e445f545950455f4d49534d415443481029121c0a" .
            "18494e56414c49445f50524f58494d4954595f524144495553102a12220a" .
            "1e494e56414c49445f50524f58494d4954595f5241444955535f554e4954" .
            "53102b12200a1c494e56414c49445f535452454554414444524553535f4c" .
            "454e475448102c121b0a17494e56414c49445f434954594e414d455f4c45" .
            "4e475448102d121d0a19494e56414c49445f524547494f4e434f44455f4c" .
            "454e475448102e121d0a19494e56414c49445f524547494f4e4e414d455f" .
            "4c454e475448102f121d0a19494e56414c49445f504f5354414c434f4445" .
            "5f4c454e475448103012180a14494e56414c49445f434f554e5452595f43" .
            "4f4445103112140a10494e56414c49445f4c41544954554445103212150a" .
            "11494e56414c49445f4c4f4e474954554445103312360a3250524f58494d" .
            "4954595f47454f504f494e545f414e445f414444524553535f424f54485f" .
            "43414e4e4f545f42455f4e554c4c1034121d0a19494e56414c49445f5052" .
            "4f58494d4954595f414444524553531035121c0a18494e56414c49445f55" .
            "5345525f444f4d41494e5f4e414d45103612200a1c435249544552494f4e" .
            "5f504152414d455445525f544f4f5f4c4f4e47103712260a2241445f5343" .
            "484544554c455f54494d455f494e54455256414c535f4f5645524c415010" .
            "3812320a2e41445f5343484544554c455f494e54455256414c5f43414e4e" .
            "4f545f5350414e5f4d554c5449504c455f44415953103912250a2141445f" .
            "5343484544554c455f494e56414c49445f54494d455f494e54455256414c" .
            "103a12300a2c41445f5343484544554c455f45584345454445445f494e54" .
            "455256414c535f5045525f4441595f4c494d4954103b122f0a2b41445f53" .
            "43484544554c455f435249544552494f4e5f49445f4d49534d4154434849" .
            "4e475f4649454c4453103c12240a2043414e4e4f545f4249445f4d4f4449" .
            "46595f435249544552494f4e5f54595045103d12320a2e43414e4e4f545f" .
            "4249445f4d4f444946595f435249544552494f4e5f43414d504149474e5f" .
            "4f505445445f4f5554103e12280a2443414e4e4f545f4249445f4d4f4449" .
            "46595f4e454741544956455f435249544552494f4e103f121f0a1b424944" .
            "5f4d4f4449464945525f414c52454144595f455849535453104012170a13" .
            "464545445f49445f4e4f545f414c4c4f574544104112280a244143434f55" .
            "4e545f494e454c494749424c455f464f525f43524954455249415f545950" .
            "451042122e0a2a43524954455249415f545950455f494e56414c49445f46" .
            "4f525f42494444494e475f53545241544547591043121c0a1843414e4e4f" .
            "545f4558434c5544455f435249544552494f4e1044121b0a1743414e4e4f" .
            "545f52454d4f56455f435249544552494f4e1045121a0a1650524f445543" .
            "545f53434f50455f544f4f5f4c4f4e47104612250a2150524f445543545f" .
            "53434f50455f544f4f5f4d414e595f44494d454e53494f4e531047121e0a" .
            "1a50524f445543545f504152544954494f4e5f544f4f5f4c4f4e47104812" .
            "290a2550524f445543545f504152544954494f4e5f544f4f5f4d414e595f" .
            "44494d454e53494f4e531049121d0a19494e56414c49445f50524f445543" .
            "545f44494d454e53494f4e104a12220a1e494e56414c49445f50524f4455" .
            "43545f44494d454e53494f4e5f54595045104b12240a20494e56414c4944" .
            "5f50524f445543545f42494444494e475f43415445474f5259104c121c0a" .
            "184d495353494e475f53484f5050494e475f53455454494e47104d121d0a" .
            "19494e56414c49445f4d41544348494e475f46554e4354494f4e104e121f" .
            "0a1b4c4f434154494f4e5f46494c5445525f4e4f545f414c4c4f57454410" .
            "4f121b0a174c4f434154494f4e5f46494c5445525f494e56414c49441050" .
            "12320a2e43414e4e4f545f4154544143485f43524954455249415f41545f" .
            "43414d504149474e5f414e445f414447524f5550105112390a35484f5445" .
            "4c5f4c454e4754485f4f465f535441595f4f5645524c4150535f57495448" .
            "5f4558495354494e475f435249544552494f4e105212410a3d484f54454c" .
            "5f414456414e43455f424f4f4b494e475f57494e444f575f4f5645524c41" .
            "50535f574954485f4558495354494e475f435249544552494f4e1053122e" .
            "0a2a4649454c445f494e434f4d50415449424c455f574954485f4e454741" .
            "544956455f544152474554494e47105442c9010a22636f6d2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e6572726f72734213437269" .
            "746572696f6e4572726f7250726f746f50015a44676f6f676c652e676f6c" .
            "616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164" .
            "732f676f6f676c656164732f76302f6572726f72733b6572726f7273a202" .
            "03474141aa021e476f6f676c652e4164732e476f6f676c654164732e5630" .
            "2e4572726f7273ca021e476f6f676c655c4164735c476f6f676c65416473" .
            "5c56305c4572726f7273620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

