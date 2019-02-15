<?php

//安达整理制作，有问题请在群里发，需要duxcms二次开发及问题解决的联系QQ：81070149 注明 duxcms
?>
<input name="checkcode" type="text" maxlength="4" size="4" >
<img title="点击刷新" src="{url('duxcms/ValidateCode/index')}" align="absbottom" onclick="this.src='{url('duxcms/ValidateCode/index')}&'+Math.random();"></img>
<input type="hidden" name="token" value="<!--echo{app="DuxCms" label="formToken" table="guestbook"}-->">
<input type="hidden" name="table" value="guestbook">
<button type="submit">提交</button>