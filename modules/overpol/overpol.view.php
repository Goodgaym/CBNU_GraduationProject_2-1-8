<?php
    /**
     * @class  overpolView
     * @author Goodgaym (jon50120@gmail.com)
     * @brief overpol 모듈의 view class
     **/

	class overpolView extends overpol{
		
		/**
		 * @ brief 초기화
		 */
		function init(){
			$oOverpolModel = &getModel('overpol');	// 블로그 허브 모델 생성
			$this->module_info = $oOverpolModel->getOverpolInfo();	// 오버폴 인포 가져오기
			
            Context::set('module_info', $this->module_info);	// Module_info set
            Context::set('module_srl', $this->module_info->module_srl);	// Module_srl set

			// 스킨 경로를 미리 template_path 라는 변수로 설정, 스킨이 존재하지 않으면 default로 변경
			$template_path = sprintf("%sskins/%s/", $this->module_path, $this->module_info->skin);
			if(!is_dir($template_path)||!$this->modulte_info->skin){
				$this->module_info->skin = 'default';
				$template_path = sprintf("%sskins/%s/", $this->module_path, $this->module_info->skin);
			}
			$this->setTemplatePath($template_path);
		}
		/**
		 * @ brief 목록
		 */
        function dispOverpolHub() {
            $oTextyleModel = &getModel('textyle');
            $oDocumentModel = &getModel('document');

            $page = (int)Context::get('page');
            if(!$page) $page = 1;
            Context::set('page', $page);

            $hub = $this->getOverpolSubContent();

            $args->page = $page;
            $args->page_count = 10;
            $args->list_count = $this->module_info->newest_textyles_count;
            $output = executeQueryArray('overpol.getOverpols',$args);
            Context::set('page_navigation', $output->page_navigation);

            if(count($output->data)) {
                foreach($output->data as $key => $val) {
                    $val->photo_src = $oTextyleModel->getTextylePhotoSrc($val->member_srl);
                    $hub->textyles[$val->module_srl] = $val;
                }

                $module_srls = array_keys($hub->textyles);

                if(count($module_srls)) {
                    unset($args);
                    $args->module_srls = implode(',',$module_srls);

                    // 게시글 수 구하기
                    $output = executeQueryArray('overpol.getOverpolDocumentCount', $args);
                    if($output->data) {
                        foreach($output->data as $key => $val) {
                            $hub->textyles[$val->module_srl]->document_count = $val->count;
                        }
                    }

                    // 댓글 수 구하기
                    $output = executeQueryArray('Overpol.getOverpolCommentCount', $args);
                    if($output->data) {
                        foreach($output->data as $key => $val) {
                            $hub->textyles[$val->module_srl]->comment_count = $val->count;
                        }
                    }
                }
			}
            // 최근글 구함
            unset($args);
            $args->list_count = $this->module_info->sub_newest_textyles_count;
            $output = executeQueryArray('textylehub.getNewestPost',$args);
            if($output->data) {
                foreach($output->data as $key => $attribute) {
                    $document_srl = $attribute->document_srl;
                    if(!$GLOBALS['XE_DOCUMENT_LIST'][$document_srl]) {
                        $oDocument = null;
                        $oDocument = new documentItem();
                        $oDocument->setAttribute($attribute, false);
                        if($is_admin) $oDocument->setGrant();
                        $GLOBALS['XE_DOCUMENT_LIST'][$document_srl] = $oDocument;
                    }

                    $output->data[$key] = $GLOBALS['XE_DOCUMENT_LIST'][$document_srl];
                }
            }
            $oDocumentModel->setToAllDocumentExtraVars();
            $hub->newest_posts = $output->data;

            Context::set('hub', $hub);

            $this->setTemplateFile('index');
		}

        function dispOverpolSearch() {
            $oDocumentModel = &getModel('document');

            $page = (int)Context::get('page');
            if(!$page) $page = 1;
            Context::set('page', $page);

            $hub = $this->getOverpolSubContent();

            // 최근글 구함
            $args->page = $page;
            $args->page_count = 10;
            $args->list_count = $this->module_info->newest_documents_count;
			$args->status = 'PUBLIC';	//2011.03.04 비밀글 안뽑아오기 - cherryfilter

            $search_target = trim(Context::get('search_target'));
            $search_keyword = trim(Context::get('search_keyword'));
            if(in_array($search_target,array('title','content','tag','category')) && $search_keyword) {
                $search_keyword = explode(' ',$search_keyword);
                for($i=0,$c=count($search_keyword);$i<$c;$i++) {
                    $k = trim($search_keyword[$i]);
                    if(!$k) continue;
                    $sk[] = $k;
                }
                if(count($sk)) $args->{'s_'.$search_target} = implode('%', $sk);
			}
			
            $output = executeQueryArray('overpol.getNewestPost',$args);
            if($output->data) {
                foreach($output->data as $key => $attribute) {
                    $document_srl = $attribute->document_srl;
                    if(!$GLOBALS['XE_DOCUMENT_LIST'][$document_srl]) {
                        $oDocument = null;
                        $oDocument = new documentItem();
                        $oDocument->setAttribute($attribute, false);
                        if($is_admin) $oDocument->setGrant();
                        $GLOBALS['XE_DOCUMENT_LIST'][$document_srl] = $oDocument;
                    }

                    $output->data[$key] = $GLOBALS['XE_DOCUMENT_LIST'][$document_srl];
                }
            }
            $oDocumentModel->setToAllDocumentExtraVars();

            $hub->posts = $output->data;
            Context::set('page_navigation', $output->page_navigation);

            Context::set('hub', $hub);

            $this->setTemplateFile('list');
		}
		
        function dispOverpolResume() {
            $oDocumentModel = &getModel('document');

            $page = (int)Context::get('page');
            if(!$page) $page = 1;
            Context::set('page', $page);

            $hub = $this->getOverpolSubContent();

            // 최근글 구함
            $args->page = $page;
            $args->page_count = 10;
            $args->list_count = $this->module_info->newest_documents_count;
			$args->status = 'PUBLIC';	//2011.03.04 비밀글 안뽑아오기 - cherryfilter

            $search_keyword = '이력서';
            if($search_keyword) {
                $search_keyword = explode(' ',$search_keyword);
                for($i=0,$c=count($search_keyword);$i<$c;$i++) {
                    $k = trim($search_keyword[$i]);
                    if(!$k) continue;
                    $sk[] = $k;
                }
                if(count($sk)) $args->{'s_category'} = implode('%', $sk);
			}
			
            $output = executeQueryArray('overpol.getNewestPost',$args);
            if($output->data) {
                foreach($output->data as $key => $attribute) {
                    $document_srl = $attribute->document_srl;
                    if(!$GLOBALS['XE_DOCUMENT_LIST'][$document_srl]) {
                        $oDocument = null;
                        $oDocument = new documentItem();
                        $oDocument->setAttribute($attribute, false);
                        if($is_admin) $oDocument->setGrant();
                        $GLOBALS['XE_DOCUMENT_LIST'][$document_srl] = $oDocument;
                    }

                    $output->data[$key] = $GLOBALS['XE_DOCUMENT_LIST'][$document_srl];
                }
            }
            $oDocumentModel->setToAllDocumentExtraVars();

            $hub->posts = $output->data;
            Context::set('page_navigation', $output->page_navigation);

            Context::set('hub', $hub);

            $this->setTemplateFile('list_not');
		}

        function dispOverpolPorfolio() {
            $oDocumentModel = &getModel('document');

            $page = (int)Context::get('page');
            if(!$page) $page = 1;
            Context::set('page', $page);

            $hub = $this->getOverpolSubContent();

            // 최근글 구함
            $args->page = $page;
            $args->page_count = 10;
            $args->list_count = $this->module_info->newest_documents_count;
			$args->status = 'PUBLIC';	//2011.03.04 비밀글 안뽑아오기 - cherryfilter

            $search_keyword = '포트폴리오';
            if($search_keyword) {
                $search_keyword = explode(' ',$search_keyword);
                for($i=0,$c=count($search_keyword);$i<$c;$i++) {
                    $k = trim($search_keyword[$i]);
                    if(!$k) continue;
                    $sk[] = $k;
                }
                if(count($sk)) $args->{'s_category'} = implode('%', $sk);
			}
			
            $output = executeQueryArray('overpol.getNewestPost',$args);
            if($output->data) {
                foreach($output->data as $key => $attribute) {
                    $document_srl = $attribute->document_srl;
                    if(!$GLOBALS['XE_DOCUMENT_LIST'][$document_srl]) {
                        $oDocument = null;
                        $oDocument = new documentItem();
                        $oDocument->setAttribute($attribute, false);
                        if($is_admin) $oDocument->setGrant();
                        $GLOBALS['XE_DOCUMENT_LIST'][$document_srl] = $oDocument;
                    }

                    $output->data[$key] = $GLOBALS['XE_DOCUMENT_LIST'][$document_srl];
                }
            }
            $oDocumentModel->setToAllDocumentExtraVars();

            $hub->posts = $output->data;
            Context::set('page_navigation', $output->page_navigation);

            Context::set('hub', $hub);

            $this->setTemplateFile('list_not');
		}

        function getOverpolSubContent() {
            $oTextyleModel = &getModel('textyle');	// 텍스타일 모델 불러오기
            $oCommentModel = &getModel('comment');	// 코멘트 모델 불러오기

            $is_logged = Context::get('is_logged');	// is_logged 불러오기
            $logged_info = Context::get('logged_info');

			// get created textyle count for administrator
			// 관리자를 위하여 생성된 텍스타일의 수를 얻음
            if($logged_info->is_admin == 'Y') {
                $output = executeQuery('overpol.getOverpolCount');
                $hub->total_textyle_count = (int)($output->data->count);
            }

			// get logged user's own textyle
			// 로그된 사용자에게 텍스타일 얻기 
            if($is_logged) {
                $args->member_srl = $logged_info->member_srl;
                $output = executeQueryArray('overpol.getOwnTextyle', $args);
                $hub->own_textyle = $output->data;
                $hub->own_textyle_count = count($output->data);;
            } else {
                $hub->own_textyle_count = 0;
            }

			// check creation grant
			// 만든 사람의 권한 체크
            $hub->enable_creation = $this->grant->create;
            if($logged_info->is_admin != 'Y' && (!$hub->enable_creation || $this->module_info->textyle_creation_count<=$hub->own_textyle_count)) $hub->enable_creation = false;

			// newest comments
			// 최근 댓글 들
            unset($args);
            $args->list_count = $this->module_info->newest_comments_count;
            $output = executeQueryArray('overpol.getNewestComment',$args);
            if($output->data) {
                foreach($output->data as $key => $val) {
                    unset($oComment);
                    $oComment = $oCommentModel->getComment();
                    $oComment->setAttribute($val);
                    $hub->newest_comment[] = $oComment;
                }
            }

            // 태그 추출
            $args->list_count = $list_cnt;
            $output = executeQueryArray('overpol.getPopularTags',$args);
            if($output->data) {
                $tags = array();
                $max = 0;
                $min = 99999999;
                foreach($output->data as $key => $val) {
                    $tag = trim($val->tag);
                    if(!$tag) continue;
                    $count = $val->count;
                    if($max < $count) $max = $count;
                    if($min > $count) $min = $count;
                    $tags[] = $val;
                }
                $mid2 = $min+(int)(($max-$min)/2);
                $mid1 = $mid2+(int)(($max-$mid2)/2);
                $mid3 = $min+(int)(($mid2-$min)/2);

                foreach($tags as $key => $item) {
                    if($item->count > $mid1) $rank = 1;
                    elseif($item->count > $mid2) $rank = 2;
                    elseif($item->count > $mid3) $rank = 3;
                    else $rank= 4;

                    $tags[$key]->rank = $rank;
                }
                shuffle($tags);
                $hub->tags = $tags;
            }

            // 업데이트 된 블로그 구함
            unset($args);
            $args->list_count = $this->module_info->sub_newest_textyles_count;
            $output = executeQueryArray('overpol.getUpdatedTextyle',$args);
            if(count($output->data)) {
                foreach($output->data as $key => $val) {
                    $document_srls[] = $val->document_srl;
                }
                if(count($document_srls)) {
                    unset($args);
                    $args->document_srls = implode(',',$document_srls);
                    $output = executeQueryArray('overpol.getUpdatedTextyles', $args);
                    if(count($output->data)) {
                        foreach($output->data as $key => $val) {
                            $val->photo_src = $oTextyleModel->getTextylePhotoSrc($val->member_srl);
                            $hub->updated_textyles[] = $val;
                        }
                    }
                }
            }
            return $hub;
        }
	}
?>