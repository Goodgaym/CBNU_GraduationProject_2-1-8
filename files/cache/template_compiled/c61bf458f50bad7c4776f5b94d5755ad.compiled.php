<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/calendar.css--><?php $__tmp=array('modules/textyle/tpl/css/calendar.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.calendar--><?php Context::loadJavascriptPlugin('ui.calendar'); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader suporterHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[3]['dispTextyleToolStatisticsSupporter'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- contentNavigation -->
				<div class="contentNavigation">
					<ul class="sortDefault">
						<li class="active">&nbsp;</li>
					</ul>
					<div class="cNavigation">
						<div class="calendar">
							<div id="calendar-holder"></div>
							<button type="button" class="btnCalendar"><span><?php echo $__Context->lang->calendar ?></span></button>
							<h4 class="h4" id="str_selected_date"><?php echo $__Context->disp_selected_date ?></h4>
                            <input type="hidden" class="inputDate" value="<?php echo zdate($__Context->selected_date,'Y-m-d') ?>" />
							<script>
								jQuery(function($){
                                    <?php  $__Context->_s = array_pop($__Context->lang->unit_week) ?>
									$('#calendar-holder').calendar({
										type : '<?php echo $__Context->type ?>',
										button : '#calendar-holder+button.btnCalendar',
										activeDate : "<?php echo zdate($__Context->selected_date,'Y/m/d') ?>",
										select : function(year, month, date) {
											var str = year+'.'+(month>9?'':'0')+month+'.'+(date>9?'':'0')+date;
											$("#str_selected_date").text(str);
											moveDate();
										},
										lang : {
											weekdays : '<?php echo $__Context->_s ?>,<?php echo implode(',',$__Context->lang->unit_week) ?>',
											today : '<?php echo $__Context->lang->today ?>',
											prevmonth : '<?php echo $__Context->lang->before_month ?>',
											nextmonth : '<?php echo $__Context->lang->after_month ?>',
											close : '<?php echo $__Context->lang->cmd_close ?>'
										}
									});
								});
                            </script>
							<button type="button" class="prevData" onclick="location.href='<?php echo $__Context->before_url ?>';return false;"><span><?php echo $__Context->lang->before_month ?></span></button>
							<button type="button" class="nextData" onclick="location.href='<?php echo $__Context->after_url ?>';return false;"><span><?php echo $__Context->lang->after_month ?></span></button>
						</div>
					</div>
				</div>
				<!-- /contentNavigation -->
				
				<!-- listHeader -->
				<div class="listHeader">
					<p class="info"><?php echo $__Context->lang->about_supporter ?></p>
				</div>
				<!-- /listHeader -->
				
				<!-- Table Data -->
				<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->supporter_rank ?>" class="tableData">
					<thead>
						<tr>
							<th scope="col"><?php echo $__Context->lang->rank ?></th>
							<th scope="col"><?php echo $__Context->lang->user ?></th>
							<th scope="col"<?php if($__Context->sort_index=='comment_count'){ ?> class="sum"<?php } ?>><?php echo $__Context->lang->comment ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","comment_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
							<th scope="col"<?php if($__Context->sort_index=='trackback_count'){ ?> class="sum"<?php } ?>><?php echo $__Context->lang->trackback ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","trackback_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
							<th scope="col"<?php if($__Context->sort_index=='guestbook_count'){ ?> class="sum"<?php } ?>><?php echo $__Context->lang->guestbook ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","guestbook_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
							<th scope="col<?php if($__Context->sort_index=='total_count'){ ?> class="sum"<?php } ?>"><?php echo $__Context->lang->summary ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","total_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
						</tr>
					</thead>
					<?php if(count($__Context->supporter_list)==0){ ?>								
					<tbody>
						<tr>
							<td class="noData" colspan="6"><p><?php echo $__Context->lang->no_supporter ?></p></td>
						</tr>
					</tbody>
					<?php }else{ ?>
					<tbody class="top3">
						<?php $__Context->_item_count=0 ?>
						<?php if($__Context->supporter_list&&count($__Context->supporter_list))foreach($__Context->supporter_list as $__Context->no => $__Context->v){ ?>
							<?php if($__Context->_item_count == 3 && count($__Context->supporter_list) > 3){ ?>
								</tbody>
								<tbody>
							<?php } ?>
						<tr>
							<td class="rank"><?php echo $__Context->_item_count+1 ?></td>
							<td class="user">
								<?php if($__Context->v->profile_image){ ?>
								<img src="<?php echo $__Context->v->profile_image ?>" alt="{htmlspeciachars($v->nick_name}" class="thumb member_<?php echo $__Context->v->member_srl ?>" /><?php echo $__Context->v->nick_name ?></a>
								<?php }else{ ?>
									<span class="member_<?php echo $__Context->v->member_srl ?>"><?php echo $__Context->v->nick_name ?></span>
								<?php } ?>
							</td>
							<td class="small<?php if($__Context->sort_index=='comment_count'){ ?> sum<?php } ?>"><?php echo $__Context->v->comment_count ?></td>
							<td class="small<?php if($__Context->sort_index=='trackback_count'){ ?> sum<?php } ?>"><?php echo $__Context->v->trackback_count ?></td>
							<td class="small<?php if($__Context->sort_index=='guestbook_count'){ ?> sum<?php } ?>"><?php echo $__Context->v->guestbook_count ?></td>
							<td class="small<?php if($__Context->sort_index=='total_count'){ ?> sum<?php } ?>"><?php echo $__Context->v->total_count ?></td>
						</tr>
						<?php $__Context->_item_count++ ?>
						<?php } ?>
					</tbody>
					<?php } ?>
				</table>
				<!-- /Table Data -->
				
			</div>
			<hr />
			<!-- /Content -->
			
			<!-- Extension -->
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
			<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
