<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 
require SYSTEM_ROOT . '/plugins/s_check/lib/geetestlib.php';
function s_check_regshow() {
	$s_check_regoption = option::xget("s_check","reg_check");
	if ($s_check_regoption==1){
		echo "<div class=\"box\">";
		$geetest = new GeetestLib();
		$geetest->set_captchaid("a757a567a6c660610521e79a429d7e4c");
		if ($geetest->register()) {
			echo $geetest->get_widget("embed");
		}
		echo "</div><br/>";
    }elseif($s_check_regoption==2){
		echo "<div class=\"box\">";
		$geetest = new GeetestLib();
		$geetest->set_captchaid("a757a567a6c660610521e79a429d7e4c");
		if ($geetest->register()) {
			echo $geetest->get_widget("float");
		}
		echo "</div><br/>";
	}
}


function s_check_regcheck() {
	if (option::xget("s_check","reg_check")!=0){
		$geetest = new GeetestLib();
		$geetest->set_privatekey("2d5be5ba4207f11d33f7ae5e14a1c33e");
		if (isset($_POST['geetest_challenge']) && isset($_POST['geetest_validate']) && isset($_POST['geetest_seccode'])) {
			$result = $geetest->validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode']);
		}
		if ($result == TRUE) {
		} else if ($result == FALSE) {
			msg('注册失败，请拖动滑块完成验证');
		} else {
			msg('未知错误');
		}
	}
}


function s_check_loginshow() {
	$s_check_loginoption = option::xget("s_check","login_check");
	if ($s_check_loginoption==1){
		echo "<div class=\"box\">";
		$geetest = new GeetestLib();
		$geetest->set_captchaid("a757a567a6c660610521e79a429d7e4c");
		if ($geetest->register()) {
			echo $geetest->get_widget("embed");
		}
		echo "</div><br/>";
	}elseif($s_check_loginoption==2){
		echo "<div class=\"box\">";
		$geetest = new GeetestLib();
		$geetest->set_captchaid("a757a567a6c660610521e79a429d7e4c");
		if ($geetest->register()) {
			echo $geetest->get_widget("float");
		}
		echo "</div><br/>";
	}
}
function s_check_logincheck() {
	if (option::xget("s_check","login_check")!=0){
		$geetest = new GeetestLib();
		$geetest->set_privatekey("2d5be5ba4207f11d33f7ae5e14a1c33e");
		if (isset($_POST['geetest_challenge']) && isset($_POST['geetest_validate']) && isset($_POST['geetest_seccode'])) {
			$result = $geetest->validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode']);
		}
		if ($result == TRUE) {
		} else if ($result == FALSE) {
			ReDirect("index.php?mod=login&error_msg=".urlencode('登陆失败，请拖动滑块完成验证'));
			die;
		} else {
			ReDirect("index.php?mod=login&error_msg=".urlencode('登陆失败，请拖动滑块完成验证'));
			die;
		}
	}
}	

function s_check_setting_navi() {
	?>
	<li><a href="index.php?mod=admin:setplug&plug=s_check"><span class="glyphicon glyphicon-lock"></span> 验证设置</a></li>
	<?php
}

addAction('navi_3','s_check_setting_navi');
addAction('login_page_2','s_check_loginshow');
addAction('reg_page_2','s_check_regshow');
addAction('admin_reg_1','s_check_regcheck');
addAction('admin_login_1','s_check_logincheck');
?>