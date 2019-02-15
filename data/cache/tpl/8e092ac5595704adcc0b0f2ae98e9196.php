<?php exit;?>001576139416ba45fad00fddefdea645d526e7b7f466s:2125:"a:2:{s:8:"template";s:2061:"<?php $__Template->display("themes/default/head"); ?>

<section class="strategy-container pt-40 pb-40">
    <div class="container">

        <p class="mg-0 f-14"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="title-dashed">
            <h2 class="text-c pb-5 pt-5">攻略资讯</h2>
            <p class="text-c capitalize f-14 mb-5">strategy information</p>
        </div>

        <ul class="mt-30 mb-20 strategy-choice">
            <?php foreach ($condition as $vo) { ?>

            <li class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">
                <a href="<?php echo $vo["url"];?>" class="text-c f-16">全部</a>
            </li>
            <?php foreach ($vo["config"] as $v) { ?>
            <li <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                <a href="<?php echo $v["url"];?>" class="text-c f-16"><?php echo $v["name"];?></a>
            </li>
            <?php } ?>

            <?php } ?>
        </ul>

        <div class="strategy-box">
            <?php foreach ($pageList as $vo) { ?>

            <article>
                <a href="<?php echo $vo["aurl"];?>">
                    <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" width="250" alt="<?php echo $vo["title"];?>" />

                    <div class="pl-30">
                        <p class="f-24 pt-5 pb-5"><b><?php echo $vo["title"];?></b></p>
                        <p class="f-14 pt-5"><?php echo $vo["description"];?></p>

                        <span class="f-16 text-c">点击阅读 >></span>
                    </div>

                </a>
            </article>
            <?php } ?>

            <div class="pages f-14 mt-20"><?php echo $page;?></div>
        </div>
    </div>

</section>

<?php $__Template->display("themes/default/suggests"); ?>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1544603416;}";