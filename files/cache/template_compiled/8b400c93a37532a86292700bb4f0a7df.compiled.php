<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/calendar.css--><?php $__tmp=array('modules/textyle/tpl/css/calendar.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.calendar--><?php Context::loadJavascriptPlugin('ui.calendar'); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader popularHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[3]['dispTextyleToolStatisticsPopular'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- contentNavigation -->
				<div class="contentNavigation">
					<ul class="sortDefault">
						<li class="active"><?php echo $__Context->lang->monthly ?></li>
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
					<p class="info"><?php echo $__Context->lang->about_popular ?></p>
				</div>
				<!-- /listHeader -->
				
				<!-- Table Data -->
				<table border="1" cellspacing="0" summary="<?php echo $__Context->lang->popular_rank ?>" class="tableData">
					<thead>
						<tr>
							<th scope="col"><?php echo $__Context->lang->rank ?></th>
							<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
							<th scope="col"<?php if($__Context->sort_index=='comment_count'){ ?> class="sum"<?php } ?>><?php echo $__Context->lang->comment ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","comment_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
							<th scope="col"<?php if($__Context->sort_index=='trackback_count'){ ?> class="sum"<?php } ?>><?php echo $__Context->lang->trackback ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","trackback_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
							<th scope="col"<?php if($__Context->sort_index=='readed_count'){ ?> class="sum"<?php } ?>><?php echo $__Context->lang->read ?><button type="button" class="btnTableDataSort" onclick="document.location.href='<?php echo getUrl("sort_index","readed_count") ?>'"><span><?php echo $__Context->lang->order_desc ?></span></button></th>
							<th scope="col"><?php echo $__Context->lang->regdate ?></th>
						</tr>
					</thead>
					<?php if(count($__Context->post_list)==0){ ?>								
					<tbody>
						<tr>
							<td class="noData" colspan="6"><p><?php echo $__Context->lang->no_popular ?></p></td>
						</tr>
					</tbody>
					<?php }else{ ?>
					<tbody class="top3">
						<?php $__Context->_item_count=0 ?>
						<?php if($__Context->post_list&&count($__Context->post_list))foreach($__Context->post_list as $__Context->no => $__Context->post){ ?>
							<?php if($__Context->_item_count == 3 && count($__Context->post_list) > 3){ ?>
								</tbody><tbody>
							<?php } ?>
						<tr>
							<td class="rank"><?php echo $__Context->_item_count+1 ?></td>
							<td class="title postTitle"><a href="<?php echo $__Context->post->getPermanentUrl() ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->post->getTitle() ?></a></td> 
							<td class="small<?php if($__Context->sort_index=='comment_count'){ ?> sum<?php } ?>"><?php echo $__Context->post->getCommentCount() ?></td>
							<td class="small<?php if($__Context->sort_index=='trackback_count'){ ?> sum<?php } ?>"><?php echo $__Context->post->getTrackbackCount() ?></td>
							<td class="small<?php if($__Context->sort_index=='readed_count'){ ?> sum<?php } ?>"><?php echo $__Context->post->get('readed_count') ?></td>
							<td class="small"><?php echo zdate($__Context->post->get('last_update'),'Y.m.d') ?></td>
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
