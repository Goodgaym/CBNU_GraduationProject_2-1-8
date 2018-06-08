<?php
    /**
     * @class  overpolAdminView
     * @author Overpol 모듈 만들기 예제
     * @brief  overpol 모듈의 admin view class
     **/

    class overpolAdminView extends overpol {

        /**
         * @brief 초기화
         **/
        function init() {
			// module_srl이 있으면 미리 체크하여 존재하는 모듈이면 module_info 세팅
			$module_srl = Context::get('module_srl');
			if(!$module_srl && $this->module_srl){
				$module_srl = $this->module_srl;
				Context::set('module_srl', $module_srl);
			}

			// module model 객체 생성
			$oModuleModel = &getModel('module');

			// module_srl이 넘어오면 해당 모듈의 정보를 미리 구해 놓음
			// 브라우저 타이틀, 관리자, 레이아웃 등 xe_modulestable의 값과 정보
			if($module_srl){
				$module_info = $oModuleModel->getModuleInfoByModuleSrl($module_srl);
				$this->module_info = $module_info;
				Context::set('module_info', $module_info);
			}

            // 관리자 템플릿 파일의 경로 설정 (tpl)
            $template_path = sprintf("%stpl/",$this->module_path);
            $this->setTemplatePath($template_path);
        }

        /**
         * @brief 관리자 목록
         **/
        function dispOverpolAdminList() {
			// 페이지 네비게이션을 위한 설정
			$page = Context::get('page');
			if(!$page)$page = 1;
			$args->page = $page;
			
			// Overpol admin model 객체 생성
			$oOverpolAdminModel = &getAdminModel('Overpol');
			// Overpol module_srl 목록 가져옴
			$output = $oOverpolAdminModel->getOverpolAdminList($args);

			// 템플릿에 전해주기 위해 set함
			Context::set('overpol_list', $output->data);
			Context::set('page_navigation', $output->page_navigation);
			
			// 관리자 목록(mid) 보기 템플릿 지정(tpl/index.html)
            $this->setTemplateFile('index');
		}
		
        /**
         * @brief 모듈(mid) insert/update 화면 출력
         **/
		function dispOverpolAdminInsert(){
			
			// 스킨 목록을 구해옴
			$oModuleModel = &getModel('module');
			$skin_list = $oModuleModel -> getSkins($this->module_path);
			Context::set('skin_list',$skin_list);

			// 레이아웃 목록을 구해옴
			$oLayoutModel = &getModel('layout');
			$layout_list = $oLayoutModel->getLayoutList();
			Context::set('layout_list', $layout_list);

			// 템플릿 파일 지정
			$this->setTemplateFile('overpol_admin_insert');
		}

		/**
		 * @ brief 선택된 모듈의 정보 출력은 곧바로 정보 입력으로 변경한다
		 **/
		function dispOverpolAdminInfo() {
			$this->dispOverpolAdminInsert();
		}

		/**
		 * @ brief 모듈(mid) 삭제 화면 출력
		 **/
		function dispOverpolAdminDelete(){

			// 삭제를 요청하는 module_srl 확인하고 없으면 관리자 목록 보기
			if(!Context::get('module_srl')) return $this->dispOverpolAdminList();

			// 선택된 모듈의 정보를 set 함
			$module_info = Context::get('module_info');
			Context::set('module_info', $module_info);

			// 템플릿 파일 지정
			$this->setTemplateFile('overpol_admin_delete');
		}

		function dispOverpolAdminGrantInfo(){
			$oModuleAdminModel = &getAdminModel('module');
			$grant_content = $oModuleAdminModel->getModuleGrantHTML($this->module_info->module_srl, $this->xml_info->grant);
			Context::set('grant_content', $grant_content);

			$this->setTemplateFile('grant_list');
		}

		function dispOverpolAdminSkinInfo(){
			$oModuleAdminModel = &getAdminModel('module');
			$skin_content = $oModuleAdminModel->getModuleSkinHTML($this->module_info->module_srl);
			Context::set('skin_content', $skin_content);

			$this->setTemplateFile('skin_info');
		}
	}
?>