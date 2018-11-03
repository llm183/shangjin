<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <title>支付宝红包赏金一键在线生成网</title> 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
</head>

<body>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
            <li role="presentation"><a href="index.php">缩短</a></li>
            <li role="presentation"><a href="expand.php">还原</a></li>
            <li role="presentation"><a href="about.php">关于</a></li>
        </ul>
        <h3 class="text-muted"><a href="index.php">小视频模版</a> </h3>
    </div>