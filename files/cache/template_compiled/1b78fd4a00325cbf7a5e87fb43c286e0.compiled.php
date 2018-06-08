<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/editor/skins/dreditor/css/dreditor.css--><?php $__tmp=array('modules/editor/skins/dreditor/css/dreditor.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/dreditor/css/style@content.css--><?php $__tmp=array('modules/editor/skins/dreditor/css/style@content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/dreditor/css/button.css--><?php $__tmp=array('modules/editor/skins/dreditor/css/button.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/js/editor_common.js--><?php $__tmp=array('modules/editor/tpl/js/editor_common.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#Meta:modules/editor/skins/dreditor/js/Xpress_Editor.js--><?php $__tmp=array('modules/editor/skins/dreditor/js/Xpress_Editor.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/dreditor/js/DrEditor.js--><?php $__tmp=array('modules/editor/skins/dreditor/js/DrEditor.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/dreditor/js/xe_interface.js--><?php $__tmp=array('modules/editor/skins/dreditor/js/xe_interface.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(file_exists(_XE_PATH_.'modules/material/material.class.php')){ ?>
    <?php $__Context->material_exists = true ?>
<?php }else{ ?>
    <?php $__Context->material_exists = false ?>
<?php } ?>
<?php $__Context->cookie_tool=explode(',', $__Context->_COOKIE['DrEditorToolbar']) ?>
<?php $__Context->default_tool=explode(',', 'hx,txt,material,link,list,quote,img,movie,file,hr,index') ?>
<?php $__Context->external_components=array_keys($__Context->drComponentList) ?>
<?php $__Context->enable_tool=array_unique(array_merge($__Context->cookie_tool, $__Context->default_tool, $__Context->external_components)) ?>
<!-- 자동저장용 폼 -->
<?php if($__Context->enable_autosave){ ?>
<input type="hidden" name="_saved_doc_title" value="<?php echo htmlspecialchars($__Context->saved_doc->title) ?>" />
<input type="hidden" name="_saved_doc_content" value="<?php echo htmlspecialchars($__Context->saved_doc->content) ?>" />
<input type="hidden" name="_saved_doc_message" value="<?php echo $__Context->lang->msg_load_saved_doc ?>" />
<div style="display:none"><p class="editor_autosaved_message" id="editor_autosaved_message_<?php echo $__Context->editor_sequence ?>" style="display:none"></p></div>
<?php } ?>
<!-- 폼을 알아내기 위한 더미 -->
<input type="hidden" name="editor_sequence" id="dreditor_dummy_<?php echo $__Context->editor_sequence ?>" value="<?php echo $__Context->editor_sequence ?>" />
<!-- 에디터 -->
<div id="DrEditor<?php echo $__Context->editor_sequence ?>" class="textyleEditor">
<!-- class="textyleEditor" | class="textyleEditor keepClose" -->
	<div class="editorContainer">
		<!-- Editor Area -->
		<div class="editorArea textyleContent"></div>
		<!-- Writer Area -->
		<div class="writeArea textyleContent">
			<div class="wArea hx">
			<!-- class="wArea hx" | class="wArea hx open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->title ?></legend>
					<ul>
						<li class="h3"><input name="hx" type="radio" value="h3" id="h3" class="inputRadio" checked="checked" /><label for="h3"><?php echo $__Context->lang->edit->title1 ?></label></li>
						<li class="h4"><input name="hx" type="radio" value="h4" id="h4" class="inputRadio" /><label for="h4"><?php echo $__Context->lang->edit->title2 ?></label></li>
						<li class="h5"><input name="hx" type="radio" value="h5" id="h5" class="inputRadio" /><label for="h5"><?php echo $__Context->lang->edit->title3 ?></label></li>
					</ul>
					<input name="" type="text" class="inputTitle h3" value="<?php echo $__Context->lang->edit->insert_dr_title ?>" title="<?php echo $__Context->lang->edit->insert_dr_title ?>" />
					<!-- class="inputTitle h3" | class="inputTitle h4" | class="inputTitle h5" -->
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<ul class="eTool">
						<li class="edit"><button type="button"><?php echo $__Context->lang->cmd_edit ?></button></li>
						<li class="move"><button type="button"><span><?php echo $__Context->lang->cmd_move ?></span></button></li>
						<li class="delete"><button type="button"><span><?php echo $__Context->lang->cmd_delete ?></span></button></li>
					</ul>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea txt">
			<!-- class="wArea txt" | class="wArea txt open" -->
				<fieldset>
					<legend>Text</legend>
					<input type="hidden" />
					<div class="txEditor">
						<ul class="toolbar tool">
							<li class="xpress_xeditor_ui_undo undo"><button type="button" title="Ctrl+Z:<?php echo $__Context->lang->edit->undo ?>"><span><?php echo $__Context->lang->edit->undo ?></span></button></li>
							<li class="xpress_xeditor_ui_redo redo"><button type="button" title="Ctrl+Y:<?php echo $__Context->lang->edit->redo ?>"><span><?php echo $__Context->lang->edit->redo ?></span></button></li>
							<li class="vRule xpress_xeditor_ui_fontName">
								<select class="xpress_xeditor_ui_fontName_select">
									<option value=""><?php echo $__Context->lang->edit->fontname ?></option>
									<?php if($__Context->lang->edit->fontlist&&count($__Context->lang->edit->fontlist))foreach($__Context->lang->edit->fontlist as $__Context->key=>$__Context->obj){ ?>
									<option value="<?php echo $__Context->key ?>" style="font-family:<?php echo $__Context->key ?>"><?php echo $__Context->obj ?></option>
									<?php } ?>
								</select>
							</li>
							<li class="fSize xpress_xeditor_ui_fontSize">
								<select class="xpress_xeditor_ui_fontSize_select">
									<option><?php echo $__Context->lang->edit->fontsize ?></option>
									<option value="9px" class="font9px">9px</option>
									<option value="10px" class="font10px">10px</option>
									<option value="11px" class="font11px">11px</option>
									<option value="12px" class="font12px">12px</option>
									<option value="14px" class="font14px">14px</option>
									<option value="16px" class="font16px">16px</option>
									<option value="18px" class="font18px">18px</option>
									<option value="20px" class="font20px">20px</option>
									<option value="24px" class="font24px">24px</option>
									<option value="28px" class="font28px">28px</option>
									<option value="32px" class="font32px">32px</option>
									<option value="36px" class="font36px">36px</option>
								</select>
							</li>
							<li class="xpress_xeditor_ui_lineHeight">
								<select class="xpress_xeditor_ui_lineHeight_select">
									<option value=""><?php echo $__Context->lang->edit->lineheight ?></option>
									<option value="1">100%</option>
									<option value="1.2">120%</option>
									<option value="1.4">140%</option>
									<option value="1.6">160%</option>
									<option value="1.8">180%</option>
									<option value="2">200%</option>
								</select>
							</li>
							<li class="strong vRule xpress_xeditor_ui_bold"><button type="button"><span><?php echo $__Context->lang->edit->bold ?></span></button></li>
							<li class="em xpress_xeditor_ui_italic"><button type="button"><span><?php echo $__Context->lang->edit->italic ?></span></button></li>
							<li class="underline xpress_xeditor_ui_underline"><button type="button"><span><?php echo $__Context->lang->edit->underline ?></span></button></li>
							<li class="del xpress_xeditor_ui_lineThrough"><button type="button"><span><?php echo $__Context->lang->edit->strike ?></span></button></li>
							<li class="aHref vRule xpress_xeditor_ui_hyperlink">
								<button type="button" title="<?php echo $__Context->lang->edit->url ?>"><span><?php echo $__Context->lang->edit->url ?></span></button>
								<!-- URL 레이어 -->
								<div class="uri xpress_xeditor_hyperlink_layer" style="display:none;">
									<fieldset>
										<h3><?php echo $__Context->lang->edit->hyperlink ?></h3>
										<input name="" class="link" type="text" value="http://" title="URL" />
										<p><input name="" id="target" type="checkbox" value="" /><label for="target"><?php echo $__Context->lang->edit->target_blank ?></label></p>
										<div class="btn_area">
											<span class="buttonGray small"><button type="button" class="confirm" title="<?php echo $__Context->lang->cmd_confirm ?>"><?php echo $__Context->lang->cmd_confirm ?></button></span>
											<span class="buttonGray small"><button type="button" class="cancel" title="<?php echo $__Context->lang->cmd_cancel ?>"><?php echo $__Context->lang->cmd_cancel ?></button></span>
										</div>
									</fieldset>
								</div>
								<!-- /URL 레이어 -->
							</li>
							<li class="fColor xpress_xeditor_ui_fontColor">
								<button type="button" title="<?php echo $__Context->lang->edit->help_fontcolor ?>"><span><?php echo $__Context->lang->edit->fontcolor ?></span></button>
								<!-- 팔레트 레이어 -->
								<div class="xpress_xeditor_fontcolor_layer" style="display:none;">
									<ul class="palette xpress_xeditor_color_palette">
										<li><button type="button" title="#ff0000" style="background:#ff0000"><span>#ff0000</span></button></li>
										<li><button type="button" title="#ff6c00" style="background:#ff6c00"><span>#ff6c00</span></button></li>
										<li><button type="button" title="#ffaa00" style="background:#ffaa00"><span>#ffaa00</span></button></li>
										<li><button type="button" title="#ffef00" style="background:#ffef00"><span>#ffef00</span></button></li>
										<li><button type="button" title="#a6cf00" style="background:#a6cf00"><span>#a6cf00</span></button></li>
										<li><button type="button" title="#009e25" style="background:#009e25"><span>#009e25</span></button></li>
										<li><button type="button" title="#00b0a2" style="background:#00b0a2"><span>#00b0a2</span></button></li>
										<li><button type="button" title="#0075c8" style="background:#0075c8"><span>#0075c8</span></button></li>
										<li><button type="button" title="#3a32c3" style="background:#3a32c3"><span>#3a32c3</span></button></li>
										<li><button type="button" title="#7820b9" style="background:#7820b9"><span>#7820b9</span></button></li>
										<li><button type="button" title="#ef007c" style="background:#ef007c"><span>#ef007c</span></button></li>
										<li><button type="button" title="#000000" style="background:#000000"><span>#000000</span></button></li>
										<li><button type="button" title="#252525" style="background:#252525"><span>#252525</span></button></li>
										<li><button type="button" title="#464646" style="background:#464646"><span>#464646</span></button></li>
										<li><button type="button" title="#636363" style="background:#636363"><span>#636363</span></button></li>
										<li><button type="button" title="#7d7d7d" style="background:#7d7d7d"><span>#7d7d7d</span></button></li>
										<li><button type="button" title="#9a9a9a" style="background:#9a9a9a"><span>#9a9a9a</span></button></li>
										<li><button type="button" title="#ffe8e8" style="background:#ffe8e8"><span>#ffe8e8</span></button></li>
										<li><button type="button" title="#f7e2d2" style="background:#f7e2d2"><span>#f7e2d2</span></button></li>
										<li><button type="button" title="#f5eddc" style="background:#f5eddc"><span>#f5eddc</span></button></li>
										<li><button type="button" title="#f5f4e0" style="background:#f5f4e0"><span>#f5f4e0</span></button></li>
										<li><button type="button" title="#edf2c2" style="background:#edf2c2"><span>#edf2c2</span></button></li>
										<li><button type="button" title="#def7e5" style="background:#def7e5"><span>#def7e5</span></button></li>
										<li><button type="button" title="#d9eeec" style="background:#d9eeec"><span>#d9eeec</span></button></li>
										<li><button type="button" title="#c9e0f0" style="background:#c9e0f0"><span>#c9e0f0</span></button></li>
										<li><button type="button" title="#d6d4eb" style="background:#d6d4eb"><span>#d6d4eb</span></button></li>
										<li><button type="button" title="#e7dbed" style="background:#e7dbed"><span>#e7dbed</span></button></li>
										<li><button type="button" title="#f1e2ea" style="background:#f1e2ea"><span>#f1e2ea</span></button></li>
										<li><button type="button" title="#acacac" style="background:#acacac"><span>#acacac</span></button></li>
										<li><button type="button" title="#c2c2c2" style="background:#c2c2c2"><span>#c2c2c2</span></button></li>
										<li><button type="button" title="#cccccc" style="background:#cccccc"><span>#cccccc</span></button></li>
										<li><button type="button" title="#e1e1e1" style="background:#e1e1e1"><span>#e1e1e1</span></button></li>
										<li><button type="button" title="#ebebeb" style="background:#ebebeb"><span>#ebebeb</span></button></li>
										<li><button type="button" title="#ffffff" style="background:#ffffff"><span>#ffffff</span></button></li>
										<li><button type="button" title="#e97d81" style="background:#e97d81"><span>#e97d81</span></button></li>
										<li><button type="button" title="#e19b73" style="background:#e19b73"><span>#e19b73</span></button></li>
										<li><button type="button" title="#d1b274" style="background:#d1b274"><span>#d1b274</span></button></li>
										<li><button type="button" title="#cfcca2" style="background:#cfcca2"><span>#cfcca2</span></button></li>
										<li><button type="button" title="#cfcca2" style="background:#cfcca2"><span>#cfcca2</span></button></li>
										<li><button type="button" title="#61b977" style="background:#61b977"><span>#61b977</span></button></li>
										<li><button type="button" title="#53aea8" style="background:#53aea8"><span>#53aea8</span></button></li>
										<li><button type="button" title="#518fbb" style="background:#518fbb"><span>#518fbb</span></button></li>
										<li><button type="button" title="#6a65bb" style="background:#6a65bb"><span>#6a65bb</span></button></li>
										<li><button type="button" title="#9a54ce" style="background:#9a54ce"><span>#9a54ce</span></button></li>
										<li><button type="button" title="#e573ae" style="background:#e573ae"><span>#e573ae</span></button></li>
										<li><button type="button" title="#5a504b" style="background:#5a504b"><span>#5a504b</span></button></li>
										<li><button type="button" title="#767b86" style="background:#767b86"><span>#767b86</span></button></li>
										<li><button type="button" title="#00ffff" style="background:#00ffff"><span>#00ffff</span></button></li>
										<li><button type="button" title="#00ff00" style="background:#00ff00"><span>#00ff00</span></button></li>
										<li><button type="button" title="#a0f000" style="background:#a0f000"><span>#a0f000</span></button></li>
										<li><button type="button" title="#ffff00" style="background:#ffff00"><span>#ffff00</span></button></li>
										<li><button type="button" title="#951015" style="background:#951015"><span>#951015</span></button></li>
										<li><button type="button" title="#6e391a" style="background:#6e391a"><span>#6e391a</span></button></li>
										<li><button type="button" title="#785c25" style="background:#785c25"><span>#785c25</span></button></li>
										<li><button type="button" title="#5f5b25" style="background:#5f5b25"><span>#5f5b25</span></button></li>
										<li><button type="button" title="#4c511f" style="background:#4c511f"><span>#4c511f</span></button></li>
										<li><button type="button" title="#1c4827" style="background:#1c4827"><span>#1c4827</span></button></li>
										<li><button type="button" title="#0d514c" style="background:#0d514c"><span>#0d514c</span></button></li>
										<li><button type="button" title="#1b496a" style="background:#1b496a"><span>#1b496a</span></button></li>
										<li><button type="button" title="#2b285f" style="background:#2b285f"><span>#2b285f</span></button></li>
										<li><button type="button" title="#45245b" style="background:#45245b"><span>#45245b</span></button></li>
										<li><button type="button" title="#721947" style="background:#721947"><span>#721947</span></button></li>
										<li><button type="button" title="#352e2c" style="background:#352e2c"><span>#352e2c</span></button></li>
										<li><button type="button" title="#3c3f45" style="background:#3c3f45"><span>#3c3f45</span></button></li>
										<li><button type="button" title="#00aaff" style="background:#00aaff"><span>#00aaff</span></button></li>
										<li><button type="button" title="#0000ff" style="background:#0000ff"><span>#0000ff</span></button></li>
										<li><button type="button" title="#a800ff" style="background:#a800ff"><span>#a800ff</span></button></li>
										<li><button type="button" title="#ff00ff" style="background:#ff00ff"><span>#ff00ff</span></button></li>
									</ul>
								</div>
								<!-- /팔레트 레이어 -->
							</li>
							<li class="bgColor xpress_xeditor_ui_bgColor">
								<button type="button" title="<?php echo $__Context->lang->edit->help_fontbgcolor ?>"><span><?php echo $__Context->lang->edit->fontbgcolor ?></span></button>
								<div class="xpress_xeditor_bgcolor_layer" style="display:none;"></div>
							</li>
							<li class="left vRule xpress_xeditor_ui_justifyleft">
								<button type="button" title="<?php echo $__Context->lang->edit->help_align_left ?>"><span><?php echo $__Context->lang->edit->align_left ?></span></button>
							</li>
							<li class="center xpress_xeditor_ui_justifycenter">
								<button type="button" title="<?php echo $__Context->lang->edit->help_align_center ?>"><span><?php echo $__Context->lang->edit->align_center ?></span></button>
							</li>
							<li class="right xpress_xeditor_ui_justifyright">
								<button type="button" title="<?php echo $__Context->lang->edit->help_align_right ?>"><span><?php echo $__Context->lang->edit->align_right ?></span></button>
							</li>
							<li class="justify xpress_xeditor_ui_justifyfull">
								<button type="button" title="<?php echo $__Context->lang->edit->help_align_justify ?>"><span><?php echo $__Context->lang->edit->align_justify ?></span></button>
							</li>
							<li class="character vRule xpress_xeditor_ui_sCharacter">
								<button type="button" title="<?php echo $__Context->lang->edit->special_character ?>"><span><?php echo $__Context->lang->edit->special_character ?></span></button>
								<!-- 특수문자 레이어 -->
								<div class="layer xpress_xeditor_sCharacter_layer" style="display:none">
									<h3><?php echo $__Context->lang->edit->insert_special_character ?></h3>
									<button type="button" class="close" title="<?php echo $__Context->lang->edit->close_special_character ?>"><span><?php echo $__Context->lang->edit->close_special_character ?></span></button>
									<ul class="nav">
										<li><a href="#character1" class="on"><?php echo $__Context->lang->edit->symbol ?></a></li>
										<li><a href="#character2"><?php echo $__Context->lang->edit->number_unit ?></a></li>
										<li><a href="#character3"><?php echo $__Context->lang->edit->circle_bracket ?></a></li>
										<li><a href="#character4"><?php echo $__Context->lang->edit->korean ?></a></li>
										<li><a href="#character5"><?php echo $__Context->lang->edit->greece ?>,<?php echo $__Context->lang->edit->Latin ?></a></li>
										<li><a href="#character6"><?php echo $__Context->lang->edit->japan ?></a></li>
									</ul>
									<ul style="display: block;" id="character1" class="list"></ul>
									<ul style="display: none;" id="character2" class="list"></ul>
									<ul style="display: none;" id="character3" class="list"></ul>
									<ul style="display: none;" id="character4" class="list"></ul>
									<ul style="display: none;" id="character5" class="list"></ul>
									<ul style="display: none;" id="character6" class="list"></ul>
									<p>
										<label for="preview"><?php echo $__Context->lang->edit->selected_symbol ?></label>
										<input id="preview" name="" type="text" />
										<button type="button" title="<?php echo $__Context->lang->confirm ?>"><span><?php echo $__Context->lang->confirm ?></span></button>
									</p>
									<button type="button" class="close" title="<?php echo $__Context->lang->edit->close_special_character ?>"><span><?php echo $__Context->lang->edit->close_special_character ?></span></button>
								</div>
								<!-- /특수문자 레이어 -->
							</li>
						</ul>
						<div class="inputRichText xpress_xeditor_editing_area_container">
							<iframe src="<?php echo $__Context->editor_path ?>blank.html" frameborder="0" scrolling="yes" title="<?php echo $__Context->lang->edit->richtext_area ?>"></iframe>
						</div>
						<div class="resizeVertical xpress_xeditor_editingArea_verticalResizer">
							<button type="button"><span><?php echo $__Context->lang->edit->edit_height_control ?></span></button>
						</div>
					</div>
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea link">
			<!-- class="wArea link" | class="wArea link open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->link ?></legend>
					<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->insert_site_name ?>" />
					<input name="" type="text" class="inputLink" value="" title="http://" />
					<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->insert_explain ?>" />
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea list">
			<!-- class="wArea list" | class="wArea list open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->cmd_list ?></legend>
					<ul class="toolbar">
						<li><button type="button" class="type_disc"><span>disc</span></button></li>
						<li><button type="button" class="type_circle"><span>circle</span></button></li>
						<li><button type="button" class="type_square"><span>square</span></button></li>
						<li><button type="button" class="type_decimal"><span>decimal</span></button></li>
						<li><button type="button" class="type_lower-alpha"><span>lower alpha</span></button></li>
						<li><button type="button" class="type_upper-alpha"><span>upper alpha</span></button></li>
						<li><button type="button" class="type_lower-roman"><span>lower roman</span></button></li>
						<li><button type="button" class="type_upper-roman"><span>upper roman</span></button></li>
					</ul>
					<div class="listArea"></div>
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
						<p class="info"><?php echo $__Context->lang->edit->list_explain ?></p>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea quote">
			<!-- class="wArea blockquote" | class="wArea blockquote open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->blockquote ?></legend>
					<textarea name="" cols="50" rows="5" class="inputTextarea" title="<?php echo $__Context->lang->edit->insert_blockquote ?>"></textarea>
					<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->insert_cite ?>" />
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea img">
			<!-- class="wArea img" | class="wArea img open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->image ?></legend>
					<input name="Filedata" type="file" class="inputFile" title="<?php echo $__Context->lang->edit->find_image ?>" />
					<p class="uploading"><?php echo $__Context->lang->edit->uploading ?> <button type="button"><?php echo $__Context->lang->cmd_cancel ?></button> <span></span></p>
					<p class="info"><?php echo sprintf($__Context->lang->edit->uploading_info,($__Context->file_config->allowed_filesize/(1024*1024))) ?></p>
					<div class="hr"></div>
					<div class="image">
						<img src="" alt="<?php echo $__Context->lang->edit->uploaded_image ?>" />
					</div>
					<div class="align">
						<dl>
							<dt><?php echo $__Context->lang->edit->image_align ?> :</dt>
							<dd>
								<input type="radio" name="align" id="img_align_left" value="left" /><label for="img_align_left"><?php echo $__Context->lang->edit->align_left ?></label>
								<input type="radio" name="align" id="img_align_center" value="center" /><label for="img_align_center"><?php echo $__Context->lang->edit->align_center ?></label>
								<input type="radio" name="align" id="img_align_right" value="right" /><label for="img_align_right"><?php echo $__Context->lang->edit->align_right ?></label>
							</dd>
						</dl>
					</div>
					<div class="resize">
						<dl>
							<dt><?php echo $__Context->lang->edit->image_width ?> :</dt>
							<dd><em></em> px → <input name="" type="text" class="width copy" value="" title="" /> px <span class="buttonGray medium"><button type="button" class="btn_resize"><?php echo $__Context->lang->edit->resize ?></button></span> <span class="resizeInfo"><?php echo $__Context->lang->edit->resize_info ?></span></dd>
						</dl>
						<p class="resizeError"><?php echo $__Context->lang->edit->resize_error ?></p>
					</div>
					<input name="" type="text" class="inputText desc" value="" title="<?php echo $__Context->lang->edit->insert_image_explain ?>" />
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea movie">
			<!-- class="wArea mov" | class="wArea mov open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->mov ?></legend>
					<textarea name="" cols="50" rows="5" class="inputTextarea" title="<?php echo $__Context->lang->edit->insert_mov ?>"></textarea>
					<textarea name="" cols="50" rows="5" class="inputTextarea" title="<?php echo $__Context->lang->edit->insert_mov_explain ?>"></textarea>
					<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->insert_cite ?>" />
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<?php if($__Context->allow_fileupload){ ?>
			<!--#Meta:modules/editor/skins/dreditor/js/uploader.js--><?php $__tmp=array('modules/editor/skins/dreditor/js/uploader.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<!--#Meta:modules/editor/tpl/js/swfupload.js--><?php $__tmp=array('modules/editor/tpl/js/swfupload.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<script type="text/javascript">//<![CDATA[
                uploaderSettings=
                    {
					"editorSequence" : <?php echo $__Context->editor_sequence ?>,
					"sessionName" : "<?php echo session_name() ?>",
					"allowedFileSize" : "<?php echo $__Context->file_config->allowed_filesize ?>",
					"allowedFileTypes" : "<?php echo $__Context->file_config->allowed_filetypes ?>",
					"allowedFileTypesDescription" : "<?php echo $__Context->file_config->allowed_filetypes ?>",
					"insertedFiles" : <?php echo (int)$__Context->files_count ?>,
					"replaceButtonID" : "swfUploadButton<?php echo $__Context->editor_sequence ?>",
					"fileListAreaID" : "uploaded_file_list_<?php echo $__Context->editor_sequence ?>",
					"previewAreaID" : "preview_uploaded_<?php echo $__Context->editor_sequence ?>",
					"uploaderStatusID" : "uploader_status_<?php echo $__Context->editor_sequence ?>"
				};
				//reloadFileList(editorUploadSettings);
			//]]></script>
			<div class="wArea file">
			<!-- class="wArea file" | class="wArea file open" -->
				<fieldset>
				<legend><?php echo $__Context->lang->edit->file ?></legend>
                 <span id="swfUploadButton<?php echo $__Context->editor_sequence ?>" class="buttonFileUpload"><button type="button"><?php echo $__Context->lang->edit->file_select ?></button></span>
					<p class="info"><?php echo sprintf($__Context->lang->edit->file_uploadinfo,($__Context->file_config->allowed_filesize/(1024*1024)),($__Context->file_config->allowed_attach_size/(1024*1024))) ?> <!--button type="button" class="help">파일 업로드에 문제가 발생하는 경우 클릭.</button--></p>
					<!--input name="" type="file" class="inputFile" title="파일 찾기" /-->
					<!-- class="inputFile" | class="inputFile open" -->
					<div class="hr"></div>
					<dl class="attachedFile">
						<dd style="display:none"><strong>{filename}</strong> <em>{filesize}</em> <button type="button" class="buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></button></dd>
					</dl>
					<p class="summary"><?php echo $__Context->lang->edit->file_total ?> <em class="filesize">{total_filesize}</em></p>
					<div class="hr"></div>
					<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->insert_file_explain ?>" />
					<input name="" type="text" class="inputText" value="" title="<?php echo $__Context->lang->edit->insert_cite ?>" />
					<div class="buttonArea">
				<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<?php } ?>
			<div class="wArea hr">
			<!-- class="wArea hr" | class="wArea hr open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->hr ?></legend>
					<ul>
						<li><span class="hRule"></span><input name="hr" type="radio" value="hline" id="hr1" class="inputRadio" checked="checked" /> <label for="hr1"><?php echo $__Context->lang->edit->hr_simple ?></label></li>
					</ul>
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea index">
			<!-- class="wArea index" | class="wArea index open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->toc ?></legend>
					<div class="buttonArea">
						<span class="buttonGray medium strong"><button type="button" title="Ctrl+Enter"><img src="/modules/editor/skins/dreditor/img/iconCheckSmall.gif" width="12" height="8" alt="" class="icon" /><?php echo $__Context->lang->cmd_confirm ?></button></span>
						<span class="buttonGray medium"><button type="button" title="ESC"><img src="/modules/editor/skins/dreditor/img/buttonCloseLayerX.gif" width="7" height="7" alt="" class="icon" /><?php echo $__Context->lang->cmd_cancel ?></button></span>
						<p class="info"><?php echo $__Context->lang->edit->toc_explain ?></p>
					</div>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea mArea material">
			<!-- class="mArea" | class="mArea open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->materials ?></legend>
					<h4 class="h4"><?php echo $__Context->lang->edit->materials ?></h4>
					<div class="controls">
						<span class="buttonDrEditor black"><button type="button" class="_reload"><?php echo $__Context->lang->edit->refresh ?></button></span>
						<span class="buttonDrEditor black"><button type="button" class="_close"><?php echo $__Context->lang->edit->close_materials ?></button></span>
					</div>
					<p class="noData"><?php echo $__Context->lang->edit->no_materials ?></p>
					<div class="_container">
						<dl>
							<dt>{regdate}</dt>
							<dd>
								<div class="eArea">{content}</div>
								<span class="buttonDrEditor green small"><button type="button"><?php echo $__Context->lang->edit->insert ?></button></span>
							</dd>
						</dl>
					</div>
					<!-- pagenate -->
					<div class="paginate">
						<button type="button" class="prev" title="<?php echo $__Context->lang->edit->paging_prev_help ?>"><span><?php echo $__Context->lang->edit->paging_prev ?></span></button>
						<button type="button" class="next" title="<?php echo $__Context->lang->edit->paging_next_help ?>"><span><?php echo $__Context->lang->edit->paging_next ?></span></button>
						<span>{current}/{total}</span>
					</div>
					<!-- pagenate -->
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<div class="wArea mArea help">
			<!-- class="mArea" | class="mArea open" -->
				<fieldset>
					<legend><?php echo $__Context->lang->edit->help ?></legend>
					<h4 class="h4"><?php echo $__Context->lang->edit->help ?></h4>
					<div class="controls">
						<span class="buttonDrEditor black"><button type="button"><?php echo $__Context->lang->edit->close_help ?></button></span>
					</div>
					<dl>
						<dt><?php echo $__Context->lang->edit->help_first_dt_1 ?></dt>
						<dd><?php echo $__Context->lang->edit->help_first_dd_1 ?></dd>
						<dt><?php echo $__Context->lang->edit->help_first_dt_2 ?></dt>
						<dd><?php echo $__Context->lang->edit->help_first_dd_2 ?></dd>
						<dt><?php echo $__Context->lang->edit->help_first_dt_3 ?></dt>
						<dd><?php echo $__Context->lang->edit->help_first_dd_3 ?></dd>
						<dt><?php echo $__Context->lang->edit->help_first_dt_4 ?></dt>
						<dd><?php echo $__Context->lang->edit->help_first_dd_4 ?></dd>
						<dt><?php echo $__Context->lang->edit->help_first_dt_5 ?></dt>
						<dd><?php echo $__Context->lang->edit->help_first_dd_5 ?></dd>
					</dl>
					<span class="cap capTL"></span>
					<span class="cap capTR"></span>
					<span class="cap capBL"></span>
					<span class="cap capBR"></span>
				</fieldset>
			</div>
			<!-- wArea blank-->
			<div class="wArea blank">
			<!-- class="wArea blank" | class="wArea blank open" -->
				<h4 class="h4"><?php echo $__Context->lang->edit->help_first_title ?></h4>
				<dl>
					<dt><?php echo $__Context->lang->edit->help_first_dt_1 ?></dt>
					<dd><?php echo $__Context->lang->edit->help_first_dd_1 ?></dd>
					<dt><?php echo $__Context->lang->edit->help_first_dt_2 ?></dt>
					<dd><?php echo $__Context->lang->edit->help_first_dd_2 ?></dd>
					<dt><?php echo $__Context->lang->edit->help_first_dt_3 ?></dt>
					<dd><?php echo $__Context->lang->edit->help_first_dd_3 ?></dd>
					<dt><?php echo $__Context->lang->edit->help_first_dt_4 ?></dt>
					<dd><?php echo $__Context->lang->edit->help_first_dd_4 ?></dd>
					<dt><?php echo $__Context->lang->edit->help_first_dt_5 ?></dt>
					<dd><?php echo $__Context->lang->edit->help_first_dd_5 ?></dd>
				</dl>
				<p class="drEditorBugReport"><a href="http://dreditor.xpressengine.net/?mid=issuetracker&act=dispIssuetrackerViewIssue" target="_blank" title="<?php echo $__Context->lang->edit->cmd_new_window ?>"><?php echo $__Context->lang->edit->help_bug_report ?></a></p>
				<span class="cap capTL"></span>
				<span class="cap capTR"></span>
				<span class="cap capBL"></span>
				<span class="cap capBR"></span>
			</div>
			<!-- /wArea blank-->
			<!-- External Components -->
			<?php if($__Context->drComponentList&&count($__Context->drComponentList))foreach($__Context->drComponentList as $__Context->k=>$__Context->v){ ?>
			<?php echo $__Context->v->html ?>
			<?php } ?>
			<!-- /External Components -->
			<!-- wToolbar -->
			<div class="wToolbarContainer">
			<!-- class="wToolbarContainer" | class="wToolbarContainer more" -->
				<div class="wToolbar">
				<!-- class="wToolbar" | class="wToolbar hx | txt | link | list | quote | img | movie | file | hr | index | material | help" -->
					<ul>
						<!--<li class="close"><button type="button" title="<?php echo $__Context->lang->edit->close_toolbar ?>(~)"></button></li>-->
						<?php if($__Context->enable_tool&&count($__Context->enable_tool))foreach($__Context->enable_tool as $__Context->k => $__Context->v){ ?>
							<?php if($__Context->k<9){ ?>
								<?php $__Context->_title = $__Context->lang->edit->help_shortcut.'('.($__Context->k+1).')' ?>
							<?php }else{ ?>
								<?php $__Context->_title = '' ?>
							<?php } ?>
							<?php if($__Context->v=='hx'){ ?>
							<li class="hx"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->title_title ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='txt'){ ?>
							<li class="txt"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->text ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='link'){ ?>
							<li class="link"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->link ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='list'){ ?>
							<li class="list"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->list ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='quote'){ ?>
							<li class="quote"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->blockquote ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='img'){ ?>
							<li class="img"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->image ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='movie'){ ?>
							<li class="movie"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->mov ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='file' && $__Context->allow_fileupload){ ?>
							<li class="file"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->file ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='hr'){ ?>
							<li class="hr"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->hr ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='index'){ ?>
							<li class="index"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->toc ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->v=='material'){ ?>
							<li class="material"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->lang->edit->material ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php }elseif($__Context->drComponentList[$__Context->v]){ ?>
							<li class="<?php echo $__Context->v ?>"><button type="button" title="<?php echo $__Context->_title ?>"><span><?php echo $__Context->drComponentList[$__Context->v]->title ?></span></button><span class="dragable"><?php echo $__Context->lang->edit->move_button ?></span></li>
							<?php } ?>
						<?php } ?>
						<li class="help"><button type="button"><span><?php echo $__Context->lang->edit->help ?></span></button></li>
						<li class="more"><button type="button" title="(0)"><span><?php echo $__Context->lang->edit->more ?></span></button></li>
					</ul>
					<div class="shortcut">
						<ul>
						<li><span>1</span></li>
						<li><span>2</span></li>
						<li><span>3</span></li>
						<li><span>4</span></li>
						<li><span>5</span></li>
						<li><span>6</span></li>
						<li><span>7</span></li>
						<li><span>8</span></li>
						<li><span>9</span></li>
						<li class="more"><span>0</span></li>
					</ul>
					</div>
					<span class="cap capLeft"></span>
					<span class="cap capRight"></span>
					<span class="top topLeft"></span>
					<span class="top topRight"></span>
					<span class="arrow"></span>
				</div>
			</div>
			<!-- /wToolbar -->
		</div>
		<!-- /Editor Area -->
	</div>
</div>
<!-- /에디터 -->
<!-- 에디터 활성화 -->
<script type="text/javascript">//<![CDATA[
var editor_path = "<?php echo $__Context->editor_path ?>";
var auto_saved_msg = "<?php echo $__Context->lang->msg_auto_saved ?>";
var delete_dr_confirm_msg = "<?php echo $__Context->lang->edit->msg_dr_delete_confirm ?>";
var no_selected_object_msg = "<?php echo $__Context->lang->edit->msg_no_selected_object ?>";
var insert_value_msg = "<?php echo $__Context->lang->edit->msg_insert_value ?>";
var submit_without_saving_msg = "<?php echo $__Context->lang->edit->confirm_submit_without_saving ?>";
var msg_close_before_write = "<?php echo $__Context->lang->msg_close_before_write ?>";
if (typeof(xe.lang) == 'undefined') xe.lang = {};
xe.lang.attached_files = '<?php echo $__Context->lang->edit->attached_files ?>';
xe.lang.shortcut = '<?php echo $__Context->lang->edit->help_shortcut ?>';
xe.lang.drag_this = '<?php echo $__Context->lang->edit->drag_this ?>';
editorStart_xe(
	'<?php echo $__Context->editor_sequence ?>',
	'<?php echo $__Context->editor_primary_key_name ?>',
	'<?php echo $__Context->editor_content_key_name ?>',
	'<?php echo $__Context->editor_height ?>',
	'<?php echo $__Context->colorset ?>',
	'<?php echo $__Context->content_style ?>',
	'<?php echo $__Context->content_font ?>',
	'<?php echo $__Context->content_font_size ?>'
);
//]]></script>
