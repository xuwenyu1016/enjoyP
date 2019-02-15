<?php exit;?>001576209334deb319e21c699dc8e4c1fd484029d06fs:3206:"a:2:{s:8:"template";s:3142:"<section class="contact pt-40 pb-40" id="contactForm">
    <div class="container">

        <div class="title-dashed">
            <h2 class="text-c pb-5 pt-5">联系我们</h2>
            <p class="text-c capitalize f-14 mb-5">contact us</p>
        </div>

        <ul class="mt-30 cl">
            <li class="col-sm-4 col-xs-4">
                <img src="/public/assets/images/29.png" class="img-responsive" alt="" />
                <p class="text-c contacts f-16 mt-10 mb-5">电话 | phone</p>
                <p class="text-c contact-infos f-14">Nick:15216898758</p>
            </li>
            <li class="col-sm-4 col-xs-4">
                <img src="/public/assets/images/30.png" class="img-responsive" alt="" />
                <p class="text-c contacts f-16 mt-10 mb-5">邮件 | E-mail</p>
                <p class="text-c contact-infos f-14">15216898758@163.com</p>
            </li>
            <li class="col-sm-4 col-xs-4">
                <img src="/public/assets/images/31.png" class="img-responsive" alt="" />
                <p class="text-c contacts f-16 mt-10 mb-5">微信公众号</p>
                <p class="text-c contact-infos f-14">ijuparty(爱聚派轰趴馆)</p>
            </li>
        </ul>

        <article class="contact-container mt-30 cl">
            <div class="col-sm-8 col-xs-8">
                <p class="f-16"><b>或者留下您的联系方式：</b></p>
                <form action="<?php echo U('DuxCms/Form/push');?>" method="post">
                    <div>
                        <input type="text" name="name" placeholder="姓名" required="" />
                        <input type="tel" name="tel" placeholder="手机号" required="" />
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="邮箱" />
                    </div>
                    <div>
                        <textarea name="msg" placeholder="留言"></textarea>
                    </div>

                    <div>
                        <article>
                            <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" required="" />
                            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                        </article>

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">

                        <button class="c-white f-16" type="submit">提交信息</button>
                    </div>



                </form>
            </div>
            <div class="col-sm-4 col-xs-4">
                <img src="/public/assets/images/32.png" class="img-responsive" alt="" />
                <p class="f-20 text-c"><b>扫描二维码进行咨询</b></p>
            </div>
        </article>
    </div>
</section>";s:12:"compile_time";i:1544673334;}";