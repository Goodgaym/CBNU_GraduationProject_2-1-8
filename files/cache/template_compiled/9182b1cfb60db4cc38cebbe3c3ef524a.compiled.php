<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/skins/default/css/bootstrap.min.css--><?php $__tmp=array('modules/member/skins/default/css/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/skins/default/js/jquery-1.11.3.min.js--><?php $__tmp=array('modules/member/skins/default/js/jquery-1.11.3.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/skins/default/js/bootstrap.min.js--><?php $__tmp=array('modules/member/skins/default/js/bootstrap.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/skins/default/css/login.overpol.css--><?php $__tmp=array('modules/member/skins/default/css/login.overpol.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/tpl/js/signup_check.js--><?php $__tmp=array('modules/member/tpl/js/signup_check.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<!-- 유저 가입 -->
<!--#Meta:/member.js--><?php $__tmp=array('/member.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section class="login_widget xm">
	<div class="ly_dimmed"></div>
	<div class="signin">
		<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
		<?php Context::addJsFile("./files/ruleset/insertMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="signup_user" class="form-horizontal margin20" action="./" method="POST" role="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@insertMember" />
			<input type="hidden" name="act" value="procMemberInsert" />
			<input type="hidden" name="xe_validator_id" value="modules/member/skins" />
			<input type="hidden" name="success_return_url" value="<?php echo getUrl('act','dispMemberInfo') ?>" />
			<h2 class="font_white text-center" style="margin-bottom : 25px">SIGN UP</h2>
			<div class="form-group">
				<div class="col-md-12 control">
					<a class="inside-linker" href="<?php echo getUrl('act', 'dispMemberLoginForm') ?>">
						<i class="xi-user-add"></i>
						<span>로그인 하기</span>
					</a>
				</div>
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-envelope"></i>
				</span>
				<div class="controls">
					<input type="text" |cond="$__Context->identifierForm->name!='email_address'" class="email form-control" placeholder="example@gmail.com"
					 type="email" |cond="$__Context->identifierForm->name=='email_address'" name="<?php echo $__Context->identifierForm->name ?>" id="<?php echo $__Context->identifierForm->name ?>"
					 value="<?php echo $__Context->identifierForm->value ?>" required />
				</div>
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i>
				</span>
				<div class="controls">
					<input type="password" class="password form-control" id="password" name="password" value="" placeholder="********" required
					/>
				</div>
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i>
				</span>
				<div class="controls">
					<input type="password" class="password form-control" id="password2" name="password2" value="" placeholder="********" required/>
				</div>
			</div>
			<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){;
if($__Context->formTag->name != 'signature'){ ?><div class="input-group">
				<span class="input-group-addon">
					<label for="<?php echo $__Context->formTag->name ?>" class="control-label"><?php echo $__Context->formTag->title ?></label>
				</span>
				<div class="controls"><?php echo $__Context->formTag->inputTag ?></div>
			</div><?php }} ?>
			<!--
							   <div class="input-group">
								   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								   <input type="text" class="name form-control" name="name" value="" maxlength="10" placeholder="홍길동">          
							   </div>
									
							   <div class="input-group">
								  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								   <input type="text" class="phonenumber form-control" name="phonenumber" value="" maxlength="13" placeholder="010-1234-5678">    
							</div>
									
							  <div class="input-group">
								   <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								   <input type="text" class="birthday form-control" name="birthday" value="" maxlength="8" placeholder="19930415">    
							</div>
									<div class="form-group text-center">
										<label for="male" class="inside_text" style="margin-right:10px">
											   <input type="radio" name="sex" id="inlineCheckbox1" value="male" style="margin-right:5px"/>남성 </label>
										<label for="female" class="inside_text">
											   <input type="radio" name="sex" id="inlineCheckbox2" value="female" style="margin-right:5px"/>여성 </label>
									   </div>
							-->
			<div class="btnArea footer text-center">
				<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn-signup btn btn-round btn-lg btn-neutral" />
			</div>
		</form>
	</div>
	<script>
		jQuery(function ($) {
			// label for setup
			$('.control-label[for]').each(function () {
				var $this = $(this);
				if ($this.attr('for') == '') {
					$this.attr('for', $this.next().children(':visible:first').attr('id'));
				}
			});
		});
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
</section>
</div>