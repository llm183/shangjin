<?php
include_once 'header.inc.php';
?>
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


                <div class="stepTitle"><H2><font  color="#FFFFFF">支付宝红包二维码转链接</font></H2></div>
                <p style="text-align:center;padding:0 30px;">在线生成支付宝红包一键领取链接，支持手机QQ、微信、微博、手机浏览器。制作转账红包卡片高级玩法加Q群:176562624</p>
                </p>
       <form name="sina" method="get" action="short.php" onsubmit="return urlcheck()" >
        <p class="lead ">
            <input name="url" class="form-control" placeholder="在这里输入支付宝红包短链接" >
        </p>
        <p><div align="center"><button class="btn btn-lg btn-primary" type="submit"  >立即缩短</button></div></p>
        </form>
      </div>


<?php
include_once 'footer.inc.php';
?>