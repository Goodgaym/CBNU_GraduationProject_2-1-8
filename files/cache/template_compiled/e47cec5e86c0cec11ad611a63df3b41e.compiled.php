<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_header.html') ?>
<!--#Meta:modules/textyle/tpl/css/pagination.css--><?php $__tmp=array('modules/textyle/tpl/css/pagination.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.calendar--><?php Context::loadJavascriptPlugin('ui.calendar'); ?>
			<!-- Content -->
			<div id="content">
				
				<!-- contentHeader -->
				<div class="contentHeader refererHeader">
					<h3 class="h3"><?php echo $__Context->lang->textyle_second_menus[3]['dispTextyleToolStatisticsVisitRoute'] ?></h3>
				</div>
				<!-- /contentHeader -->
				
				<!-- contentNavigation -->
				<div class="contentNavigation">
					<ul class="sortDefault">
						<li<?php if($__Context->type=='day'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('type','day', 'host_srl','') ?>"><?php echo $__Context->lang->daily ?></a></li>
						<li<?php if($__Context->type=='week'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('type','week', 'host_srl','') ?>"><?php echo $__Context->lang->weekly ?></a></li>
						<li<?php if($__Context->type=='month'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('type','month', 'host_srl','') ?>"><?php echo $__Context->lang->monthly ?></a></li>
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
                <!-- listHeader -->
                <div class="listHeader">
                    <p class="info"><?php echo $__Context->lang->about_referer ?></p>
                </div>
                <!-- /listHeader -->
                    
                <!-- Table Data -->
                <?php if($__Context->host_srl){ ?>
                <h4 class="refererDomain">
                    <?php echo $__Context->lang->host ?> : <a href="http://<?php echo $__Context->referer_host->host ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->referer_host->host ?></a>
                    <span class="btnGray medium"><button type="button" onclick="location.href='<?php echo getUrl('page','','host_srl','') ?>';return false;"><?php echo $__Context->lang->cmd_back ?></button></span>
                </h4>
                <table border="1" cellspacing="0" summary="" class="tableData">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo $__Context->lang->rank ?></th>
                            <th scope="col" class="quarter"><?php echo $__Context->lang->referer ?></th>
                            <th scope="col" class="quarter"><?php echo $__Context->lang->link_word ?></th>
                            <th scope="col" class="title quarter"><?php echo $__Context->lang->link_document ?></th>
                            <th scope="col"><?php echo $__Context->lang->visitor ?></th>
                        </tr>
                    </thead>
                    <?php $__Context->_idx = 1; ?>
                    <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key => $__Context->val){ ?>
                    <?php if($__Context->page<2 &&($__Context->_idx == 1 || $__Context->_idx == 4)){ ?><tbody<?php if($__Context->_idx==1){ ?> class="top3"<?php } ?>><?php } ?>
                        <tr>
                            <td class="rank"><?php echo $__Context->_idx ?></td>
                            <td class="uri quarter"><a href="<?php echo $__Context->val->get('referer_url') ?>" onclick="window.open(this.href);return false;"><?php echo htmlspecialchars(cut_str($__Context->val->get('referer_url'),40,'...')) ?></a></td>
                            <td class="title quarter"><?php echo htmlspecialchars(urldecode($__Context->val->get('link_word'))) ?>&nbsp;</td>
                            <td class="title postTitle quarter"><a href="<?php echo $__Context->val->getPermanentUrl() ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->val->getTitle() ?></a></td>
                            <td class="graph"><?php echo number_format($__Context->val->get('visitor')) ?><span class="fullBarReferer"><img src="/modules/textyle/tpl/img/graphReferer.gif" alt="" style="width:<?php echo sprintf("%02d",$__Context->val->get('visitor')/$__Context->max_visitor*100) ?>%" /></span></td>
                        </tr>
                    <?php if($__Context->page<2 && $__Context->_idx==3){ ?></tbody><?php } ?>
                    <?php $__Context->_idx++ ?>
                    <?php } ?>
                </table>
                <?php }else{ ?>
                <table border="1" cellspacing="0" summary="" class="tableData">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo $__Context->lang->rank ?></th>
                            <th scope="col"><?php echo $__Context->lang->host ?></th>
                            <th scope="col" class="title"><?php echo $__Context->lang->link_document ?></th>
                            <th scope="col"><?php echo $__Context->lang->visitor ?></th>
                        </tr>
                    </thead>
                    <?php $__Context->_idx = 1; ?>
                    <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key => $__Context->val){ ?>
                    <?php if($__Context->page<2 &&($__Context->_idx == 1 || $__Context->_idx == 4)){ ?><tbody<?php if($__Context->_idx==1){ ?> class="top3"<?php } ?>><?php } ?>
                        <tr>
                            <td class="rank"><?php echo $__Context->_idx ?></td>
                            <td class="uri"><a href="<?php echo getUrl('page','1','host_srl',$__Context->val->get('host_srl')) ?>"><?php echo htmlspecialchars(cut_str($__Context->val->get('host'),40,'...')) ?></a></td>
                            <td class="title postTitle"><a href="<?php echo $__Context->val->getPermanentUrl() ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->val->getTitle() ?></a></td>
                            <td class="graph"><?php echo number_format($__Context->val->get('visitor')) ?><span class="fullBarReferer"><img src="/modules/textyle/tpl/img/graphReferer.gif" alt="" style="width:<?php echo sprintf("%02d",$__Context->val->get('visitor')/$__Context->max_visitor*100) ?>%" /></span></td>
                        </tr>
                    <?php if($__Context->page<2 && $__Context->_idx==3){ ?></tbody><?php } ?>
                    <?php $__Context->_idx++ ?>
                    <?php } ?>
                </table>
                <?php } ?>
                <!-- /Table Data -->
				<?php if($__Context->page_navigation){ ?>
                <div class="listFooter">
                    <!-- Pagination -->
                    <div class="pagination">
                        <a href="<?php echo getUrl('page','','mid',$__Context->mid) ?>" class="prev"><span><?php echo $__Context->lang->first_page ?></span></a>
                        <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
                            <?php if($__Context->page == $__Context->page_no){ ?>
                                <strong><?php echo $__Context->page_no ?></strong> 
                            <?php }else{ ?>
                                <a href="<?php echo getUrl('page',$__Context->page_no,'mid',$__Context->mid) ?>"><?php echo $__Context->page_no ?></a> 
                            <?php } ?>
                        <?php } ?>
                        <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="next"><span><?php echo $__Context->lang->last_page ?></span></a>
                    </div>
                    <!-- /Pagination -->
				</div>
				<?php } ?>
            </div>
            <hr />
            <!-- /Content -->
            <!-- Extension -->
            <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_menu.html') ?>
            <!-- Extension -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/textyle/tpl','_tool_footer.html') ?>
