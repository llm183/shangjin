<?php
include_once 'header.inc.php';
?>

        <script>
            var qrcode = "https://qr.alipay.com/c1x07526telvbnjaqqmmd65";
            function Ptmeform() {
                var system = {
                    win: false,
                    mac: false,
                    xll: false
                };
                var p = navigator.platform;
                system.win = p.indexOf("Win") == 0;
                system.mac = p.indexOf("Mac") == 0;
                if (system.win || system.mac) {
                    return false;
                } else {
                    return true;
                }
            }
            if (!Ptmeform()) {
                location.href = 'pc.html'/*tpa=http://odaji.emuban.com/pc.php?u=*/;
            }
        </script>
    <style>
        .stepTitle {
            background-color: #009CEF;
        }

        table td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        .button-inline{
            display: inline-block;
        }
        /* div{
            -webkit-user-select: none;
        } */
    </style>

    <link rel="stylesheet" href="css/sm.min.css">
    <link rel="stylesheet" href="css/app.css" />
    <style>
        .stepTitle{
            background-color: #009CEF;
        }
    table td{
        border:1px solid #ccc;
        padding: 10px;
    }
        /* div{
            -webkit-user-select: none;
        } */
    </style>



	<body>

                <div class="stepTitle"><H2><font  color="#FFFFFF">支付宝红包二维码转链接</font></H2></div>
                <p style="text-align:center;padding:0 30px;">在线生成支付宝红包一键领取链接，支持手机QQ、微信、微博、手机浏览器。制作转账红包卡片高级玩法加Q群:176562624</p>
                </p>
                     <p style="text-align:center">
                        <canvas id="canvas" style="display:none"></canvas>
                    </p>
                    <p style="text-align:center">
                         <span style="color:#999;display:inline-block;margin-bottom:10px;">点击“选择文件”按钮上传二维码或者手动输入二维码链接</span>
                        <div align="center"><input type="file" id="uploadBtn" class="uploadBtn" name="imageFile"/></div>
                   </p>
   <form name="sina" method="get" action="short.php" onsubmit="return urlcheck()" >
                <div class="stepContent">
                    <div class="common-row">
                        <input type="text" id="url" name="url" class="form-control" placeholder="获取不了请手动入二维码识别后的链接" value="">
                  </div>
        <h2><div align="center"><font  color="#009CEF"><p><button class="btn btn-lg btn-primary" type="submit"  >生成自动领红包链接</button></p></font></div></h2>
        </form>
                </div>
     <script type='text/javascript' src='js/zepto.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/md5.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/hprose.min.js' charset='utf-8'></script>

    <script>
        var get_timestamp = function () {
            var timestamp = 0;
            timestamp = Date.parse(new Date());// 获取当前时间戳(以s为单位)
            timestamp = timestamp / 1000;
            return timestamp;
        };

        //config
        var api_id = 'qr14194882';
        var api_key = '20180914196956';
        var timestamp = get_timestamp();
        var client = hprose.Client.create('http://hprose.wwei.cn/qrcode.html', ['qrencode', 'qrdecode']);
        var imgurl;
        var imgdata;
        $("#uploadBtn").change(function (e) {
            var dom = $("#uploadBtn")[0];
            var reader = new FileReader();
            reader.onload = (function (file) {
                return function (e) {
                    //console.info(this.result); //这个就是base64的数据了
                    //开始解码 ----------
                    var timestamp = get_timestamp();
                    imgurl = '';
                    imgdata = this.result;
                    var signature = md5(api_key + timestamp + imgurl + 　imgdata);
                    client.ready(function (qrcode) {
                        qrcode.qrdecode(api_id, signature, timestamp, imgurl, imgdata)
                            .then(function (result) {
                                if (result.status != 1) {
                                    alert(result.msg);
                                    return;
                                }
                                //成功
                                $("#url").val(result.data.raw_text);
                            }, function (e) {
                                console.error(e);
                            });
                    },
                        function (e) {
                            console.error(e);
                        });

                };
            })(e.target.files[0]);
            reader.readAsDataURL(e.target.files[0]);
        });


</script>


<?php
include_once 'footer.inc.php';
?>
