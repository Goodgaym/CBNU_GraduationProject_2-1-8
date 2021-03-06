<?php if(!defined("__XE__"))exit;
echo Context::addHtmlHeader('<meta name="viewport" content="width=device-width, user-scalable=yes">') ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--#Meta:layouts/overpol_layout/css/bootstrap.min.css--><?php $__tmp=array('layouts/overpol_layout/css/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/overpol_layout/js/jquery-1.11.3.min.js--><?php $__tmp=array('layouts/overpol_layout/js/jquery-1.11.3.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/overpol_layout/js/bootstrap.min.js--><?php $__tmp=array('layouts/overpol_layout/js/bootstrap.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/overpol_layout/js/xe_official.js--><?php $__tmp=array('layouts/overpol_layout/js/xe_official.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/overpol_layout/js/overpol.js--><?php $__tmp=array('layouts/overpol_layout/js/overpol.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/overpol_layout/css/default.css--><?php $__tmp=array('layouts/overpol_layout/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->content_fixed_width === 'index'){ ?>
	<?php  $__Context->layout_info->content_fixed_width = (!$__Context->_is_indexmodule) ? 'Y' : 'N'; ?>
<?php } ?>
<?php if($__Context->layout_info->content_fixed_width === 'Y'){ ?>
	<?php  $__Context->_body_class[] = 'fixed-width' ?>
<?php } ?>
<?php  $__Context->_fixed_width_act = array( 
	'dispMemberSignUpForm', 
	'dispMemberLoginForm', 
	'dispMemberFindAccount', 
	'dispMemberInfo', 
	'dispMemberModifyPassword',
	'dispMemberModifyEmailAddress', 
	'dispMemberModifyInfo', 
	'dispMemberLeave', 
	'dispMemberScrappedDocument', 
	'dispMemberSavedDocument',
	'dispMemberOwnDocument', 
	'dispCommunicationFriend', 
	'dispCommunicationMessages', 
	'dispNcenterliteUserConfig', 
	'dispNcenterliteNotifyList',
	'dispLoginxeclientListProvider', 
	'dispAjaxboardNotificationConfig', 
	'IS' 
) ?>
<?php if(in_array($__Context->act, $__Context->_fixed_width_act)){ ?>
	<?php  $__Context->_body_class[] = 'fixed-width' ?> 
	<?php  $__Context->layout_info->sidebar_position = 'none' ?> 
	<?php  $__Context->sub_header_title = 'Membership' ?> 
	<?php  $__Context->layout_info->use_demo = 'N' ?>
	<?php if($__Context->act === 'IS'){ ?>
		<?php  $__Context->sub_header_title = 'Search' ?>
	<?php } ?>
<?php } ?>
<?php if($__Context->layout_info->menu_fixed === 'Y'){ ?>
	<?php  $__Context->_container_class[] = 'fixed_header' ?>
<?php } ?>
<!-- HEADER -->
<div class="header_wrap xe-clearfix">
	<nav class="navbar navbar-default">
		<div class="container">
			<header class="header <?php echo $__Context->_visual_class ?>">
				
				<a href="<?php if($__Context->layout_info->logo_url){;
echo $__Context->layout_info->logo_url;
}else{;
echo getUrl('');
} ?>">
					<div class="navbar-header logo">
						<img src="<?php echo $__Context->layout_info->logo_image ?>">
					</div>
				</a>
				
				<div class="menu-box">
					<div class="menu-login">
						<?php if($__Context->logged_info->is_admin == 'Y'){ ?><div>
							<a href="<?php echo getUrl('', 'module', 'admin') ?>" target="_blank" title="<?php echo $__Context->lang->cmd_management ?>">
								<i class="xi-cog"></i>
								<span class="blind"><?php echo $__Context->lang->cmd_management ?></span>
							</a>
						</div><?php } ?>
				
						<?php if($__Context->is_logged){ ?>
						<a href="<?php echo getUrl('act','disMemberInfo') ?>" class="login_after">
							<?php echo $__Context->logged_info->nick_name ?>
						</a>
						<a href="<?php echo getUrl('act', 'dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a>
						<?php }else{ ?>
						<a href="<?php echo getUrl('act', 'dispMemberLoginForm') ?>" id="ly_btn">
							<i class="xi-user-add"></i>
							<span class="blind">SignIn / SignUp</span>
						</a>
						<?php } ?>
					</div>
					
					<!-- GNB -->
					<div id="gnb">
						<ul>
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
								<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
								<?php if($__Context->val1['list']){ ?><ul>
									<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
										<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
									</li><?php } ?>
								</ul><?php } ?>
							</li><?php } ?>
						</ul>
					</div>
					<!-- /GNB -->
				</div>
			</header>
		</div>
	</nav>
</div>
<!-- END:HEADER -->
<!-- BODY -->
<div class="body {$_body_class">
	<!-- CONTENT -->
	<div class="container">
		<div class="row">
			<div class="content" id="content">
				<?php echo $__Context->content ?>
			</div>
		</div>
	</div>
	<!-- /CONTENT -->
</div>
<!-- END:BODY -->
<div class="footer">
	<p>
		<a href="http://xpressengine.com/" target="_blank">
		</a>
	</p>
</div>
<!-- Login widget -->
<?php if($__Context->layout_info->use_login_widget != 'N'){ ?><section class="login_widget" style="display:none" |cond="$__Context->XE_VALIDATOR_ID != 'layouts/xedition/layout/1' || !$__Context->XE_VALIDATOR_MESSAGE">
	<!--#Meta:layouts/overpol_layout/css/login.overpol.css--><?php $__tmp=array('layouts/overpol_layout/css/login.overpol.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<div class="ly_dimmed"></div>
	<div class="signin">
		<div id="loginbox">
			<div class="inside-form margin20">
				<h2 class="text-center">SIGN IN</h2>
				<form action="<?php echo getUrl('', 'act', 'procMemberLogin') ?>" class="form-horizontal" method="POST" role="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="act" value="procMemberLogin" />
					<input type="hidden" name="success_return_url" value="<?php echo getCurrentPageUrl() ?>" />
					<input type="hidden" name="xe_validator_id" value="layouts/xedition/layout/1" />
					<fieldset>
						<legend class="blind"><?php echo $__Context->lang->cmd_login ?></legend>
						<div style="margin-top: 25px" class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="text" name="user_id" id="uemail" class="form-control" required="true" placeholder="Email" />
						</div>
						<div style="margin-bottom: 5px" class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</span>
							<input type="password" name="password" id="upw" class="form-control" required="true" placeholder="Password" />
						</div>
						<?php if($__Context->XE_VALIDATOR_ID == 'layouts/xedition/layout/1' && $__Context->XE_VALIDATOR_MESSAGE){ ?><div class="control-group">
							<p class="error"><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
						</div><?php } ?>
						<div class="form-group">
							<div class="col-md-12 control">
								<a class="inside-linker" href="#">비밀번호를 잊었나요?</a>
							</div>
							<div class="col-md-12 control">
								<a class="inside-linker" href="#" onClick="$('#loginbox').hide(); $('#accountbox').show()">아이디가 없으신가요?</a>
							</div>
						</div>
						<!-- Button -->
						<div class="control-group text-center">
							<button type="submit" class="btn btn-round btn-lg btn-neutral btn_submit"><?php echo $__Context->lang->cmd_login ?></button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<!--가입 선택 -->
		<div id="accountbox" style="display:none;" class="mainbox">
			<form id="account" class="form-horizontal" method="POST" role="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<div class="inside-form margin20">
					<h2 class="font_white text-center" style="margin-bottom : 25px">SIGN UP</h2>
					<div class="form-group">
						<div class="col-md-12 control">
							<a class="inside-linker" href="#" onClick="$('#accountbox').hide(); $('#loginbox').show()">로그인 하기</a>
						</div>
					</div>
					<div class="form-group" align="center">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<a href="<?php echo getUrl('act', 'dispMemberSignUpForm') ?>">
								<img src="/layouts/overpol_layout/images/signup_norm.png" onClick="$('#accountbox').hide();">
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<a href="<?php echo getUrl('act', 'dispMemberSignUpForm') ?>">
								<img src="/layouts/overpol_layout/images/signup_corp.png" onClick="$('#accountbox').hide();">
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
		<script>
			(function ($) {
				$(function () {
					var option = {
						changeMonth: true, changeYear: true, gotoCurrent: false, yearRange: '-100:+10', dateFormat: 'yy-mm-dd', onSelect: function () {
							$(this).prev('input[type="hidden"]').val(this.value.replace(/-/g, ""))
						}
					};
					$.extend(option, $.datepicker.regional['<?php echo $__Context->lang_type ?>']);
					$(".inputDate").datepicker(option);
					$(".dateRemover").click(function () {
						$(this).prevAll('input').val('');
						return false;
					});
				});
			})(jQuery);
		</script>
</section><?php } ?>
</div>
<!-- 기업 가입 -->
<div id="signupbox_corp" style="display:none;" class="mainbox">
	<form id="signup_corp" class="form-horizontal" method="POST" role="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<div class="inside-form margin20">
			<h2 class="font_white text-center" style="margin-bottom : 25px">SIGN UP</h2>
			<div class="form-group">
				<div class="col-md-12 control">
					<a class="inside-linker" href="#" onClick="$('#signupbox_corp').hide(); $('#loginbox').show()">로그인 하기</a>
				</div>
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-envelope"></i>
				</span>
				<input type="text" class="email form-control" name="username" value="" placeholder="example@gmail.com">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i>
				</span>
				<input type="password" class="password form-control" name="passwd" value="" maxlength="20" placeholder="********">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-user"></i>
				</span>
				<input type="text" class="name form-control" name="name" value="" maxlength="10" placeholder="홍길동">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-earphone"></i>
				</span>
				<input type="text" class="phonenumber form-control" name="phonenumber" value="" maxlength="13" placeholder="010-1234-5678">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-briefcase"></i>
				</span>
				<input type="text" class="corpname form-control" name="corpname" value="" placeholder="회사명">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-phone-alt"></i>
				</span>
				<input type="text" class="corpphonenumber form-control" name="corpphonenumber" value="" placeholder="회사전화번호">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-tasks"></i>
				</span>
				<input type="text" class="corppart form-control" name="corppart" value="" placeholder="부서">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-tag"></i>
				</span>
				<input type="text" class="corprank form-control" name="corprank" value="" placeholder="직급">
			</div>
			<div class="footer text-center">
				<a href="#" class="btn-signup btn btn-round btn-lg btn-neutral">가입하기</a>
			</div>
		</div>
	</form>
</div>
</div>
<script>
	jQuery(function ($) {
		var keep_msg = $("#warning");
		$(".chk_label").on("mouseenter mouseleave focusin focusout", function (e) {
			if (e.type == "mouseenter" || e.type == "focusin") {
				keep_msg.show();
			}
			else {
				keep_msg.hide();
			}
		});
		$("#ly_login_btn, #ly_btn").click(function () {
			$(".login_widget").show();
			return false;
		});
		$(".btn_ly_popup").click(function () {
			$(".login_widget").hide();
			return false;
		});
		$("input").blur(function () {
			var $this = $(this);
			if ($this.val()) {
				$this.addClass("used");
			}
			else {
				$this.removeClass("used");
			}
		});
	});
</script>
</section>
<!-- /Login widget -->