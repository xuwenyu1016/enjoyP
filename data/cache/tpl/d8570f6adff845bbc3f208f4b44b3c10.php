<?php exit;?>00157614264527aa1230df6a7a2bb0430fad959f9733s:9960:"a:2:{s:8:"template";s:9896:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong><?php echo $name;?>表单</strong>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label>名称</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="name" name="name" size="60" datatype="s" value="<?php echo $info["name"];?>">
                    <div class="input-note">当前表单的描述</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>表名</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="table" name="table" size="60" datatype="/^(?!\d)\w+$/" errormsg="请不要包含特殊字符！" value="<?php echo $info["table"];?>">
                    <div class="input-note">数据库中的表名</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>列表页</label>
                </div>
                <div class="field">
                    <div class="button-group button-group-small radio">
                        <?php if(!isset($info['show_list'])) $info['show_list'] = 1; ?>
                        <?php if ($info['show_list']){ ?>
                        <label class="button active"><input name="show_list" value="1" checked="checked" type="radio">
                        <?php }else{ ?>
                        <label class="button"><input name="show_list" value="1" type="radio">
                        <?php } ?>
                        <span class="icon icon-check"></span> 开启</label>
                        <?php if (!$info['show_list']){ ?>
                        <label class="button active"><input name="show_list" checked="checked" value="0" type="radio">
                        <?php }else{ ?>
                        <label class="button"><input name="show_list" value="0" type="radio">
                        <?php } ?>
                        <span class="icon icon-times"></span> 关闭</label>
                    </div>
                    <div class="input-note">关闭后前台将不能查看列表分页内容</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>详细页</label>
                </div>
                <div class="field">
                    <div class="button-group button-group-small radio">
                        <?php if(!isset($info['show_info'])) $info['show_info'] = 1; ?>
                        <?php if ($info['show_info']){ ?>
                        <label class="button active"><input name="show_info" value="1" checked="checked" type="radio">
                        <?php }else{ ?>
                        <label class="button"><input name="show_info" value="1" type="radio">
                        <?php } ?>
                        <span class="icon icon-check"></span> 开启</label>
                        <?php if (!$info['show_info']){ ?>
                        <label class="button active"><input name="show_info" checked="checked" value="0" type="radio">
                        <?php }else{ ?>
                        <label class="button"><input name="show_info" value="0" type="radio">
                        <?php } ?>
                        <span class="icon icon-times"></span> 关闭</label>
                    </div>
                    <div class="input-note">关闭后前台将不能查看表单详细内容</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>前台发布</label>
                </div>
                <div class="field">
                    <div class="button-group button-group-small radio">
                        <?php if(!isset($info['post_status'])) $info['post_status'] = 1; ?>
                        <?php if ($info['post_status']){ ?>
                        <label class="button active"><input name="post_status" value="1" checked="checked" type="radio">
                        <?php }else{ ?>
                        <label class="button"><input name="post_status" value="1" type="radio">
                        <?php } ?>
                        <span class="icon icon-check"></span> 开启</label>
                        <?php if (!$info['post_status']){ ?>
                        <label class="button active"><input name="post_status" checked="checked" value="0" type="radio">
                        <?php }else{ ?>
                        <label class="button"><input name="post_status" value="0" type="radio">
                        <?php } ?>
                        <span class="icon icon-times"></span> 关闭</label>
                    </div>
                    <div class="input-note">关闭后将不能从前台提交表单</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>提交成功后消息</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="post_msg" name="post_msg" size="60" datatype="*" errormsg="请填写成功返回消息"  value="<?php echo default_data($info['post_msg'],'表单提交成功！');?>">
                    <div class="input-note">表单提交成功后返回的消息</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>成功后返回地址</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="post_return_url" name="post_return_url" size="60" value="<?php echo $info["post_return_url"];?>">
                    <div class="input-note">不填将返回表单列表页</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>前台分页数</label>
                </div>
                <div class="field">
                    <input type="number" class="input" id="list_page" name="list_page" size="60" datatype="n" value="<?php echo default_data($info['list_page'],'10');?>">
                    <div class="input-note">分页数只能为数字</div>
                </div>
            </div>
             <div class="form-group">
                <div class="label">
                    <label>前台列表条件</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="list_where" name="list_where" size="60"  value="<?php echo $info["list_where"];?>">
                    <div class="input-note">标准SQL条件</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>内容排序</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="list_order" name="list_order" size="60" datatype="*" value="<?php echo default_data($info['list_order'],'data_id desc');?>">
                    <div class="input-note">针对前后台列表的分页排序</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">列表模板</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="tpl_list" name="tpl_list" size="36" datatype="*" value="<?php echo default_data($info['tpl_list'],'form_list');?>">
                    <select class="input js-assign" target="#tpl_list">
                        <option value="">请选择</option>
                        <?php foreach ($tplList as $vo) { ?>
                        <option value="<?php echo $vo["name"];?>"><?php echo $vo["file"];?></option>
                        <?php } ?>
                    </select>
                    <div class="input-note">前台表单列表所使用的模板</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">详细模板</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="tpl_info" name="tpl_info" size="36" datatype="*" value="<?php echo default_data($info['tpl_info'],'form_content');?>">
                    <select class="input js-assign" target="#tpl_info">
                        <option value="">请选择</option>
                        <?php foreach ($tplList as $vo) { ?>
                        <option value="<?php echo $vo["name"];?>"><?php echo $vo["file"];?></option>
                        <?php } ?>
                    </select>
                    <div class="input-note">前台表单列表所使用的模板</div>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <input type="hidden" name="fieldset_id" type="hidden" value="<?php echo $info["fieldset_id"];?>">
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxFormPage();
    });
</script>";s:12:"compile_time";i:1544606645;}";