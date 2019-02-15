<?php exit;?>0015761425204787d000610ce84755bf0ce7ba5dbbebs:2746:"a:2:{s:8:"template";s:2682:"<?php $__Template->display("themes/default/head"); ?>

<section class="strategy-container pt-40 pb-40">
    <div class="container">

        <p class="mg-0 f-14"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="strategy-article">

            <article class="pd-30">
                <h2 class="text-c pb-10 pt-5 f-24"><?php echo $contentInfo["title"];?></h2>
                <p class="text-c f-14">时间：<?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?></p>

                <div class="article-box"><?php echo $contentInfo["content"];?></div>

                <ul class="pt-10 pb-10 pre-next-line">
                    <li class="col-sm-6">
                        <div class="f-14"><span>上一篇：</span>
                            <?php if (empty($prevInfo['aurl'])){ ?>
                            <a class="am-link-muted ">暂无</a>
                            <?php }else{ ?>
                            <a href="<?php echo $prevInfo["aurl"];?>" class=""><?php echo $prevInfo["title"];?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="col-sm-6">

                        <div class="f-14"><span>下一篇：</span>
                            <?php if (empty($nextInfo['aurl'])){ ?>
                            <a class="">暂无</a>
                            <?php }else{ ?>
                            <a href="<?php echo $nextInfo["aurl"];?>" class=""><?php echo $nextInfo["title"];?></a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </article>

            <aside class="pd-20">
                <p class="f-16"><b>更多精彩内容</b></p>
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>1, "sub"=>true, "limit"=>3, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="img-responsive" />
                    <p class="f-14 mt-5 mb-15"><?php echo $list["title"];?></p>
                </a>
                <?php } ?>
            </aside>

        </div>
    </div>

</section>

<?php $__Template->display("themes/default/suggests"); ?>

<?php $__Template->display("themes/default/contact"); ?>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1544606520;}";