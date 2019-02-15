<?php exit;?>00157621292218639d2683c34c650760bd7c94cdd390s:2942:"a:2:{s:8:"template";s:2878:"<?php $__Template->display("themes/default/head"); ?>

<section class="banter pos-r mb-15">
    <div class="container">
        <h1 class="text-c c-white">爱聚派，给你与众不同</h1>
        <h3 class="text-c c-white capitalize">enjoy party, out of the ordinary</h3>
    </div>
</section>

<section class="villa-content guestbook pb-20">
    <div class="container">
        <div class="title-dashed">
            <h2 class="text-c pb-5 pt-5">联系我们</h2>
            <p class="text-c capitalize f-14 mb-5">contact us</p>
        </div>

        <p class="f-14">爱聚派以爱之名，聚集每一个客户的快乐。我们甄选行业内无可挑剔的别墅，包括自带网红气质的心动小屋、森林童话般的向往小屋、大气私密的月神庄园等等，我们用真诚与细致的服务，让每一个客户度过一个美好的假期。在这里，你可以享受到全新的设备，优质的别墅，重要的是，1对1的服务。我们的一切都是——以爱之名。</p>
        <!--<p class="f-14">每一位爱聚派的管家欢迎您的莅临，也许一切的缘分，从一通电话开始.......</p>-->

        <p>留下您的联系方式</p>

        <form action="<?php echo U('DuxCms/Form/push');?>" method="post">
            <div>
                <!--<span>姓名</span>-->
                <input type="text" placeholder="姓名" name="name" required="" />

                <!--<span class="pl-5">手机号</span>-->
                <input type="tel" placeholder="手机号" name="tel" />
            </div>

            <div>
                <!--<span>邮箱</span>-->
                <input type="email" placeholder="邮箱" name="email" required="" />
            </div>

            <div>
                <!--<span>留言</span>-->
                <textarea type="text" placeholder="留言" name="msg" ></textarea>
            </div>

            <div class="validate">
                <!--<span>验证码</span>-->
                <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" required="" />
                <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
            </div>

            <div>
                <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                <input type="hidden" name="table" value="guestbook">
                <button type="submit">提交信息</button>
            </div>
            <!--<a href="">联系我们</a>-->


        </form>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1544676922;}";