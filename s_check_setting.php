<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

?>
<h2>验证设置</h2><br/>
<form action="setting.php?mod=plugin:s_check" method="post">
<div class="table-responsive">
<table class="table table-hover">
<tbody>
<tr>
<td>注册验证<br/></td><td>
<input type="radio" name="reg_check" value="1" <?php if(option::xget('s_check','reg_check') == 1) { echo 'checked'; } ?>> 嵌入式验证模块<br/>
<input type="radio" name="reg_check" value="2" <?php if(option::xget('s_check','reg_check') == 2) { echo 'checked'; } ?>> 浮动式验证模块<br/>
<input type="radio" name="reg_check" value="0" <?php if(option::xget('s_check','reg_check') == 0) { echo 'checked'; } ?>> 关闭注册验证
</td>
</tr>
<tr>
<td>登陆验证<br/></td><td>
<input type="radio" name="login_check" value="1" <?php if(option::xget('s_check','login_check') == 1) { echo 'checked'; } ?>> 嵌入式验证模块<br/>
<input type="radio" name="login_check" value="2" <?php if(option::xget('s_check','login_check') == 2) { echo 'checked'; } ?>> 浮动式验证模块<br/>
<input type="radio" name="login_check" value="0" <?php if(option::xget('s_check','login_check') == 0) { echo 'checked'; } ?>> 关闭登陆验证<br/>
</td>
</tr>
</tbody>
</table>
</div>
<input type="submit" class="btn btn-primary" value="提交更改">
</form>
