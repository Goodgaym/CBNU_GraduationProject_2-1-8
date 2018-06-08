<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#JSPLUGIN:ui.calendar--><?php Context::loadJavascriptPlugin('ui.calendar'); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader uvHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[3]['dispTextyleToolStatisticsVisitor'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- contentNavigation -->
				<div class="contentNavigation">
					<ul class="sortDefault">
						<li<?php if($__Context->type=='day'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('type','day') ?>"><?php echo $__Context->lang->daily ?></a></li>
						<li<?php if($__Context->type=='week'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('type','week') ?>"><?php echo $__Context->lang->weekly ?></a></li>
						<li<?php if($__Context->type=='month'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('type','month') ?>"><?php echo $__Context->lang->monthly ?></a></li>
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
							<button type="button" class="prevData" onclick="location.href='<?php echo $__Context->before_url ?>';return false;"><span><?php echo $__Context->lang->before_day ?></span></button>
							<button type="button" class="nextData" onclick="location.href='<?php echo $__Context->after_url ?>';return false;"><span><?php echo $__Context->lang->after_day ?></span></button>
						</div>
					</div>
					<ul class="graphInfo">
						<?php if($__Context->type=='day'){ ?>
							<?php $__Context->_this=$__Context->lang->day_current ?>
							<?php $__Context->_last=$__Context->lang->day_before ?>
						<?php }else if($__Context->type=='month'){ ?>
							<?php $__Context->_this=$__Context->lang->this_month ?>
							<?php $__Context->_last=$__Context->lang->before_month ?>
						<?php }else{ ?>
							<?php $__Context->_this=$__Context->lang->this_week ?>
							<?php $__Context->_last=$__Context->lang->last_week ?>
						<?php } ?>
			
						<li><img src="/modules/textyle/tpl/img/graphToday.gif" width="5" height="5" alt="<?php echo $__Context->_this ?>" class="today" /> <?php echo $__Context->_this ?></li>
						<li><img src="/modules/textyle/tpl/img/graphYesterday.gif" width="5" height="5" alt="<?php echo $__Context->_last ?>" class="yesterday" /> <?php echo $__Context->_last ?></li>
					</ul>
				</div>
				<!-- /contentNavigation -->
				
				<!-- Flash Data -->
				<div class="flashGraph">
					<script>
					displayMultimedia('<?php echo getUrl() ?>modules/textyle/tpl/swf/MainContainer.swf','100%','285',{
							'menu':'false',
							'wmode':'transparent',
							<?php if($__Context->type=='day'){ ?>
							'flashvars':"width=770&dSet=02&baseURL=modules/textyle/tpl/swf/common/flash/statistics/&toDay=<?php echo $__Context->detail_status->today ?>&total=<?php echo $__Context->detail_status->total ?>&base64Code="+encodeURIComponent('<?php echo $__Context->xml ?>')+"&alertLabel="+encodeURIComponent('<?php echo $__Context->lang->none_visitor ?>')
							<?php }else{ ?>
							'flashvars':"width=770&dSet=02&baseURL=modules/textyle/tpl/swf/common/flash/statistics/&total=<?php echo $__Context->detail_status->total ?>&base64Code="+encodeURIComponent('<?php echo $__Context->xml ?>')+"&alertLabel="+encodeURIComponent('<?php echo $__Context->lang->none_visitor ?>')
							<?php } ?>
						});
				</script>
		</div>
		<!-- /Flash Data -->
		
		<!-- listHeader -->
		<div class="listHeader">
			<p class="info"><?php echo $__Context->lang->about_status[$__Context->type] ?></p>
		</div>
		<!-- /listHeader -->
	
		<?php if(!$__Context->type || $__Context->type=='day'){ ?>
		<!-- Table Data -->
		<table border="1" cellspacing="0" class="statisticData AM">
			<thead>
				<tr>
					<th scope="col" class="hm"><?php echo $__Context->lang->about_unit[$__Context->type] ?>(AM)</th>
					<th scope="col" class="uv"><?php echo $__Context->lang->visit_count ?></th>
					<th scope="col" class="pc"><?php echo $__Context->lang->visit_per ?></th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->detail_status->list&&count($__Context->detail_status->list))foreach($__Context->detail_status->list as $__Context->key => $__Context->val){ ?>
				<?php if($__Context->key<=11){ ?>
				<tr<?php if($__Context->val->selected){ ?> class="realTime" <?php } ?>>
					<td class="hm"><?php echo $__Context->key ?>:00</td>
					<td class="uv"><?php echo $__Context->val->val ?></td>
					<td class="pc"><?php echo number_format($__Context->val->val/ $__Context->detail_status->sum * 100) ?><span class="percent">%</span></td>
				</tr>
				<?php } ?>
				<?php } ?>
			</tbody>
		</table>
		<!-- /Table Data -->
		<?php } ?>
		<!-- Table Data -->
		<table border="1" cellspacing="0" class="statisticData <?php if(!$__Context->type || $__Context->type=='day'){ ?>PM<?php } ?>">
			<thead>
				<tr>
					<th scope="col" class="hm"><?php echo $__Context->lang->about_unit[$__Context->type];
if(!$__Context->type || $__Context->type=='day'){ ?>(PM)<?php } ?></th>
					<th scope="col" class="uv"><?php echo $__Context->lang->visit_count ?></th>
					<th scope="col" class="pc"><?php echo $__Context->lang->visit_per ?></th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->detail_status->list&&count($__Context->detail_status->list))foreach($__Context->detail_status->list as $__Context->key => $__Context->val){ ?>
				<?php if($__Context->key>11){ ?>
				<tr<?php if($__Context->val->selected){ ?> class="realTime" <?php } ?>>
					<td class="hm"><?php echo $__Context->key;
if(!$__Context->type || $__Context->type=='day'){ ?>:00<?php } ?></td>
					<td class="uv"><?php echo $__Context->val->val ?></td>
					<td class="pc"><?php echo number_format($__Context->val->val/ $__Context->detail_status->sum * 100) ?><span class="percent">%</span></td>
				</tr>
				<?php } ?>
				<?php } ?>
			</tbody>
		</table>
		<!-- /Table Data -->
		
	</div>
	<hr />
	<!-- /Content -->
	<!-- Extension -->
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
	<!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
