<?php exit;?>00157622338742f32537cb83faa11bc7a0dde35c6855s:9952:"a:2:{s:8:"template";s:9888:"<?php $__Template->display("themes/default/head"); ?>


<section class="villa-content villa-content-f">


    <ul class="cl pt-40 pb-40 villa-content-view">
        <li class="col-xs-12 col-sm-7 col-md-6">

            <p class="mg-0 f-14"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

            <img src="<?php echo $contentInfo["contentRightImg"];?>" class="img-responsive visible-xs xs-left-radius" alt="<?php echo $contentInfo["title"];?>" />

            <h2 id="jumpHere"><?php echo $contentInfo["title"];?></h2>


            <p class="f-14 c-999 mt-10 mb-10"><?php echo $contentInfo["content"];?></p>

            <form action="<?php echo U('DuxCms/Form/push');?>" method="post">
                <div>
                    <span>姓名</span>
                    <input type="text" placeholder="" name="name" required="" />

                    <span class="pl-5">人数</span>
                    <input type="number" placeholder="" name="visitNum" />
                </div>

                <div>
                    <span>日期</span>
                    <input type="text" placeholder="" name="visitTime" required="" />
                </div>

                <div>
                    <span>目的</span>
                    <input type="text" placeholder="" name="msg" />
                </div>

                <div>
                    <span>邮箱</span>
                    <input type="email" placeholder="" name="email" required="" />
                </div>

                <div class="validate">
                    <span>验证码</span>
                    <input name="checkcode" type="text" maxlength="4" size="4" placeholder="" required="" />
                    <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                </div>

                <div>
                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">
                    <button type="submit">预定别墅</button>
                </div>
                <!--<a href="">联系我们</a>-->


            </form>
        </li>
        <li class="hidden-xs col-sm-5 col-md-6" style="background: url(<?php echo $contentInfo["contentRightImg"];?>) center/cover no-repeat;">&nbsp;</li>
    </ul>

</section>

<section class="villa-content villa-content-c">
    <ul class="cl pt-10 pb-40 villa-content-view">

        <li class="hidden-xs col-sm-5 col-md-6" style="background: url(<?php echo $contentInfo["contentLeftImg"];?>) center/cover no-repeat;">&nbsp;</li>
        <li class="col-xs-12 col-sm-7 col-md-6">

            <h2>别墅设置</h2>

            <img src="<?php echo $contentInfo["contentLeftImg"];?>" class="img-responsive visible-xs xs-right-radius" alt="<?php echo $contentInfo["title"];?>" />

            <article>
                <p><b>面积：</b><?php echo $contentInfo["size"];?>(m<sup>2</sup>) &emsp;&emsp;&emsp;<b>容纳人数：</b><?php echo $contentInfo["containPeople"];?>(人)</p>
            </article>
            <article>
                <p><b>空间目的：</b></p>
                <p><?php echo $contentInfo["goal"];?></p>
            </article>

            <article>
                <p><b>可使用时间：</b><?php echo $contentInfo["timeAvailable"];?></p>
            </article>

            <article>
                <p><b>地址：</b></p>
                <p><?php echo $contentInfo["address"];?></p>
            </article>

            <article>
                <p><b>空间使用须知：</b></p>
                <p>（1）<?php echo $contentInfo["notice1"];?><br/><?php if ( $contentInfo['notice2'] ){ ?>（2）<?php echo $contentInfo["notice2"];?><br/><?php } ?><?php if ( $contentInfo['notice3'] ){ ?>（3）<?php echo $contentInfo["notice3"];?><br/><?php } ?><?php if ( $contentInfo['notice4'] ){ ?>（4）<?php echo $contentInfo["notice4"];?><br/><?php } ?><?php if ( $contentInfo['notice5'] ){ ?>（5）<?php echo $contentInfo["notice5"];?><?php } ?></p>
            </article>
        </li>
    </ul>

</section>

<section class="villa-content-e pb-40">
    <img src="<?php echo $contentInfo["midBanter"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />

    <div class="container">

        <div class="container-entertain">
            <h2 class="text-c">娱乐设施</h2>

            <article class="mt-20 cl">
                <div class="col-sm-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg1"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg1_2"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg1_3"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                        </div>

                        <div class="swiper-button-prev "><i class="Hui-iconfont Hui-iconfont-slider-left"></i></div><!--左箭头-->
                        <div class="swiper-button-next"><i class="Hui-iconfont Hui-iconfont-slider-right"></i></div><!--右箭头-->
                    </div>

                    <div class="pd-10 bg-fff r-box">
                        <p class="stying-head f-20 mb-5"><b><?php echo $contentInfo["entertainTitle1"];?></b></p>
                        <p class="f-14 style-content"><?php echo $contentInfo["entertainDetail1"];?></p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg2"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg2_2"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg2_3"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                        </div>
                        <div class="swiper-button-prev "><i class="Hui-iconfont Hui-iconfont-slider-left"></i></div><!--左箭头-->
                        <div class="swiper-button-next"><i class="Hui-iconfont Hui-iconfont-slider-right"></i></div><!--右箭头-->
                    </div>
                    <div class="pd-10 bg-fff r-box">
                        <p class="stying-head f-20 mb-5"><b><?php echo $contentInfo["entertainTitle2"];?></b></p>
                        <p class="f-14 style-content"><?php echo $contentInfo["entertainDetail2"];?></p>


                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg3"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg3_2"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $contentInfo["entertainImg3_3"];?>" class="img-responsive" alt="<?php echo $contentInfo["title"];?>" />
                            </div>
                        </div>
                        <div class="swiper-button-prev "><i class="Hui-iconfont Hui-iconfont-slider-left"></i></div><!--左箭头-->
                        <div class="swiper-button-next"><i class="Hui-iconfont Hui-iconfont-slider-right"></i></div><!--右箭头-->
                    </div>
                    <div class="pd-10 bg-fff r-box">
                        <p class="stying-head f-20 mb-5"><b><?php echo $contentInfo["entertainTitle3"];?></b></p>
                        <p class="f-14 style-content"><?php echo $contentInfo["entertainDetail3"];?></p>

                    </div>

                </div>
            </article>


            <div class="cl btns">
                <p class="col-xs-6"><a href="#jumpHere">立即预订</a></p>
                <p class="col-xs-6"><a target="_blank" href="<?php echo $contentInfo["cottageFiles"];?>">查看详细别墅介绍</a></p>
            </div>
        </div>

    </div>
</section>



<?php $__Template->display("themes/default/suggests"); ?>

<?php $__Template->display("themes/default/contact"); ?>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1544687387;}";