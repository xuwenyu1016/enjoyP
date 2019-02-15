<?php exit;?>001576139151072e20e36325135abcbd9cc5ad0b1bffs:11613:"a:2:{s:8:"template";s:11548:"<?php $__Template->display("themes/default/head"); ?>

<section class="banter pos-r">
    <div class="container">
        <h1 class="text-c c-white">爱聚派，给你与众不同</h1>
        <h3 class="text-c c-white capitalize">enjoy party, out of the ordinary</h3>
    </div>

    <div class="features pos-a pos-left">
        <ul class="container cl pd-25 radius">
            <li class="col-sm-4 col-xs-4">
                <article>
                    <img src="/public/assets/images/5.png" class="img-responsive lazyload" alt="" />
                    <div class="pl-10">
                        <p class="f-16 mt-5 mb-5">别墅风格任你选</p>
                        <p class="f-14 mt-5 mb-5">1个需求，多种风格<br/>轻松挑选满意户型</p>
                    </div>
                </article>
            </li>
            <li class="col-sm-4 col-xs-4">
                <article>
                    <img src="/public/assets/images/6.png" class="img-responsive" alt="" />
                    <div class="pl-10">
                        <p class="f-16 mt-5 mb-5">优质管家服务</p>
                        <p class="f-14 mt-5 mb-5">1对1服务<br/>专属于你的管家服务</p>
                    </div>
                </article>
            </li>
            <li class="col-sm-4 col-xs-4">
                <article>
                    <img src="/public/assets/images/7.png" class="img-responsive" alt="" />
                    <div class="pl-10">
                        <p class="f-16 mt-5 mb-5">安全保障</p>
                        <p class="f-14 mt-5 mb-5">提前排除隐患<br/>检查设施安全保护</p>
                    </div>
                </article>
            </li>
        </ul>
    </div>
</section>

<section class="firm-intro pt-30 pb-40">
    <div class="container cl">
        <div class="col-sm-6 pr-15">
            <img src="/public/assets/images/8.png" class="img-responsive" alt="" />
        </div>
        <div class="col-sm-6 pl-15">
            <img src="/public/assets/images/34.png" class="img-responsive" alt="" />

            <h2 class="text-l pb-5">接近离尘不离城的美境</h2>
            <h2 class="text-c pt-5">回归最原本的自己</h2>

            <p class="f-14">爱聚派以爱之名，聚集每一个客户的快乐。我们甄选行业内无可挑剔的别墅，包括自带网红气质的心动小屋、森林童话般的向往小屋、大气私密的月神庄园等等，我们用真诚与细致的服务，让每一个客户度过一个美好的假期。在这里，你可以享受到全新的设备，优质的别墅，重要的是，1对1的服务。我们的一切都是——以爱之名。</p>
            <p class="f-14">每一位爱聚派的管家欢迎您的莅临，也许一切的缘分，从一通电话开始.......</p>

            <a class="consult c-bt-b c-white text-c lh-30 f-14 mt-15">立即咨询</a>
        </div>
    </div>
</section>

<section class="style-choice pt-40 pb-40 index-slide">
    <div class="container">
        <div class="title-dashed">
            <h2 class="text-c pb-5 pt-5">别墅介绍</h2>
            <p class="text-c capitalize f-14 mb-5">villa introductino</p>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>2, "sub"=>true, "limit"=>3, "expand_id"=>3));  if(is_array($listList)) foreach($listList as $list){ ?>
                <div class="swiper-slide">
                    <div class="index-slide-box">
                        <article class="mt-30 cl">
                            <div class="col-sm-6 col-xs-8">
                                <a>
                                    <img src="<?php echo $list["indexLeftImg"];?>" class="img-responsive" alt="<?php echo $list["indexLeftImgCaption"];?>" />
                                    <p class="caption f-14"><?php echo $list["indexLeftImgCaption"];?></p>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-4">
                                <a>
                                    <img src="<?php echo $list["rightImg1"];?>" class="img-responsive" alt="<?php echo $list["rightImg1caption"];?>" />
                                    <p class="caption"><?php echo $list["rightImg1caption"];?></p>
                                </a>
                            </div>

                            <div class="col-sm-3">
                                <a>
                                    <img src="<?php echo $list["rightImg2"];?>" class="img-responsive" alt="<?php echo $list["rightImg2caption"];?>" />
                                    <p class="caption"><?php echo $list["rightImg2caption"];?></p>
                                </a>
                            </div>
                        </article>
                        <article class="mt-30 cl">
                            <div class="col-sm-6 col-xs-8">
                                <a href="<?php echo $list["aurl"];?>">
                                    <div class="pd-15 bg-fff style-choice-article">
                                        <p class="stying-head f-22 mb-5 mt-5 text-l"><b><?php echo $list["title"];?></b></p>
                                        <p class="tags mt-10">
                                            <?php $a = $list['keywords'];$arr = explode(',', $a); ?>
                                            <?php foreach ($arr as $a): ?><span><?=$a; ?></span><?php endforeach; ?>
                                        </p>
                                        <p class="f-14 style-content mt-15"><?php echo $list["description"];?></p>
                                        <p class="ending-tags mt-20 f-14"><img src="/public/assets/images/18.png" class="mr-10" alt="" /> 适合：<?php echo $list["numRange"];?>人
                                            <img src="/public/assets/images/19.png" class="ml-10 mr-10" alt="" /> 行程：<?php echo $list["days"];?>天</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-4">
                                <a>
                                    <img src="<?php echo $list["rightImg3"];?>" class="img-responsive" alt="<?php echo $list["rightImg3caption"];?>" />
                                    <p class="caption"><?php echo $list["rightImg3caption"];?></p>
                                </a>
                            </div>

                            <div class="col-sm-3">
                                <a>
                                    <img src="<?php echo $list["rightImg4"];?>" class="img-responsive" alt="<?php echo $list["rightImg4caption"];?>" />
                                    <p class="caption"><?php echo $list["rightImg4caption"];?></p>
                                </a>
                            </div>


                        </article>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="swiper-button-prev"></div><!--左箭头-->
            <div class="swiper-button-next"></div><!--右箭头-->
        </div>

    </div>
</section>

<section class="desire pt-40 pb-40">
    <div class="container">
        <div class="title-dashed">
            <h2 class="text-c pb-5 pt-5">活动回忆录</h2>
            <p class="text-c capitalize f-14 mb-5">activity memoirs</p>
        </div>

        <ul class="mt-30 cl mb-30">
            <li class="col-sm-6">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "sub"=>true, "limit"=>50, "expand_id"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
                <?php if ( $list["strategyChoice"]['list'][$list["strategyChoice"]['value'][0]] ==  '轰趴回忆'  ){ ?>
                <a href="<?php echo $list["aurl"];?>" class="pd-5">
                    <article class="pos-r">
                        <img src="<?php echo $list["image"];?>" class="img-responsive" alt="<?php echo $list["title"];?>" />
                        <p class="pos-a c-white f-14 pt-10 pb-10"><span><?php echo $list["description"];?></span></p>
                    </article>
                </a>
                <?php } ?>
                <?php } ?>
            </li>
            <li class="col-sm-6">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "sub"=>true, "limit"=>50, "expand_id"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
                <?php if ( $list["strategyChoice"]['list'][$list["strategyChoice"]['value'][0]] ==  '轰趴回忆'  ){ ?>
                <a class="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" class="img-responsive" alt="<?php echo $list["title"];?>" />

                    <article class="pl-30 pr-30 pos-r">
                        <p class="f-14"><?php echo $list["description"];?></p>
                    </article>
                </a>
                <?php } ?>
                <?php } ?>

            </li>
        </ul>

        <a href="/gongluezixun/select/strategyChoice-3.html?class_id=1" class="checkMore text-c f-16">查看更多活动回忆录 >> </a>
    </div>
</section>

<section class="needs">
    <div class="title-dashed">
        <h2 class="text-c pb-5 pt-5">攻略资讯</h2>
        <p class="text-c capitalize f-14 mb-5">strategy information</p>
    </div>

    <ul class="mt-30 cl">
        <li class="col-sm-3 col-xs-3">
            <a href="/gongluezixun/select/strategyChoice-1.html?class_id=1" class="pd-5">

                <article>
                    <div>
                        <p class=""><span>活动优惠</span><span class="f-20 capitalize">activities discounts</span></p>
                    </div>
                </article>

            </a>

        </li>
        <li class="col-sm-3 col-xs-3">
            <a href="/gongluezixun/select/strategyChoice-2.html?class_id=1" class="pd-5">

                <article>
                    <div>
                        <p class=""><span>派对精选</span><span class="f-20 capitalize">party selection</span></p>
                    </div>
                </article>
            </a>

        </li>
        <li class="col-sm-3 col-xs-3">
            <a href="/gongluezixun/select/strategyChoice-3.html?class_id=1" class="pd-5">

                <article>
                    <div>
                        <p class=""><span>轰趴回忆</span><span class="f-20 capitalize">party memories</span></p>
                    </div>
                </article>
            </a>

        </li>
        <li class="col-sm-3 col-xs-3">
            <a href="/gongluezixun/select/strategyChoice-4.html?class_id=1" class="pd-5">

                <article>
                    <div>
                        <p class=""><span>社群畅想</span><span class="f-20 capitalize">community imagination</span></p>
                    </div>
                </article>
            </a>

        </li>
    </ul>

</section>



<?php $__Template->display("themes/default/contact"); ?>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1544603151;}";