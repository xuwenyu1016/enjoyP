<?php exit;?>0015761400897184bb8ac1742200c70a82b60af42e34s:4394:"a:2:{s:8:"template";s:4330:"<section class="style-choice pt-40 pb-40 index-slide">
    <div class="container">
        <div class="title-dashed">
            <h2 class="text-c pb-5 pt-5">更多别墅</h2>
            <p class="text-c capitalize f-14 mb-5">villas</p>
        </div>

        <div class="index-slide-box cl hidden-xs">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>2, "sub"=>true, "limit"=>3, "expand_id"=>3, "order"=>"views asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <article class="mt-30 col-sm-4 col-xs-12">
                <div class="">
                    <a>
                        <img src="<?php echo $list["indexLeftImg"];?>" class="img-responsive" alt="<?php echo $list["indexLeftImgCaption"];?>" />
                        <p class="caption f-14"><?php echo $list["indexLeftImgCaption"];?></p>
                    </a>
                    <a>
                        <div class="pd-20 bg-fff style-choice-article">
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

            </article>
            <?php } ?>

        </div>

        <div class="swiper-container visible-xs">
            <div class="swiper-wrapper">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>2, "sub"=>true, "limit"=>3, "expand_id"=>3, "order"=>"views asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <div class="swiper-slide">
                    <div class="index-slide-box cl">
                        <article class="mt-30 col-sm-4 col-xs-12">
                            <div class="">
                                <a>
                                    <img src="<?php echo $list["indexLeftImg"];?>" class="img-responsive" alt="<?php echo $list["indexLeftImgCaption"];?>" />
                                    <p class="caption f-14"><?php echo $list["indexLeftImgCaption"];?></p>
                                </a>
                                <a>
                                    <div class="pd-20 bg-fff style-choice-article">
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


";s:12:"compile_time";i:1544604089;}";