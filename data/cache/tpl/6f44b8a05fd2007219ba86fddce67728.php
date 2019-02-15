<?php exit;?>0015772549025ef8211a1dbc16f77febf46ee618dae8s:4916:"a:2:{s:8:"template";s:4852:"<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,user-scalable=no" name="viewport">
    <title><?php echo $media["title"];?></title>
    <meta name="keywords" content="<?php echo $media["keywords"];?>"/>
    <meta name="description" content="<?php echo $media["description"];?>"/>

    <link rel="Bookmark" href="/public/assets/images/0.png" >
    <link rel="Shortcut Icon" href="/public/assets/images/0.png" />

    <link rel="stylesheet" type="text/css" href="/public/assets/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/assets/lib/Hui-iconfont/1.0.8/iconfont.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/assets/css/swiper.min.css" />

    <link rel="stylesheet" type="text/css" href="http://releases.flowplayer.org/7.0.4/skin/skin.css">

    <link rel="stylesheet" type="text/css" href="/public/assets/css/app.css" />

</head>

<body>

<header class="pt-5 pb-5">
    <div class="container">
        <h1 class="pd-0">
            <a href="/"><img src="/public/assets/images/34.png" class="img-responsive" alt="<?php echo $media["keywords"];?>" /></a>
        </h1>


        <p class="mt-5 mb-5 f-14 pt-5">
            <button class="active" onClick="modaldemo()">我有活动</button>
            <!--<span>我有空间</span>-->
            <!--<span>登陆 | 注册</span>-->
        </p>

        <div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content radius">
                    <div class="modal-header">
                        <h3 class="modal-title">我有活动</h3>
                        <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
                    </div>
                    <div class="modal-body">
                        <p>活动信息</p>
                        <form action="<?php echo U('DuxCms/Form/push');?>" method="post">
                            <div>
                                <span>姓名</span>
                                <input type="text" placeholder="" name="name" required="" />

                            </div>
                            <div>
                                <span>电话</span>
                                <input type="text" placeholder="" name="tel" required="" />

                            </div>
                            <div>
                                <span>邮箱</span>
                                <input type="email" placeholder="" name="email" required="" />
                            </div>
                            <div>
                                <span>您的活动关于</span>
                                <select type="text" placeholder="" name="activity" >
                                    <option value="团建" selected>团建</option>
                                    <option value="聚会">聚会</option>
                                    <option value="摄影">摄影</option>
                                    <option value="周末游">周末游</option>
                                    <option value="办婚礼">办婚礼</option>
                                    <option value="会议">会议</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                            <div>
                                <span>备注</span>
                                <textarea type="text" placeholder="" name="msg" ></textarea>
                            </div>



                            <div class="validate">
                                <span>验证码</span>
                                <input name="checkcode" type="text" maxlength="4" size="4" placeholder="" required="" />
                                <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                            </div>

                            <div>
                                <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                                <input type="hidden" name="table" value="guestbook">
                                <button type="submit">提交</button>
                            </div>
                            <!--<a href="">联系我们</a>-->


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>";s:12:"compile_time";i:1545718902;}";