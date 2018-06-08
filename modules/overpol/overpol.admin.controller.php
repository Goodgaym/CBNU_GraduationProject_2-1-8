<?php
	/**
	 * @ class	overpoldminController
	 * @ author	Goodgaym (jon50120@gmail.com)
	 * @ brief	overpol 모듈의 admin controller class
	 **/

	 class overpolAdminController extends overpol {
		 
		/**
		 * @ brief	초기화 
		 **/
		function init(){
            $oOverpolModel = &getModel('Overpol');
            $this->module_info = $oOverpolModel->getOverpolInfo();
            Context::set('module_info', $this->module_info);
		}

		/**
		 * @ brief overpol 모듈(mid) 추가
		 **/
		function procOverpolAdminInsert($args = null){
			// module 모듈의 model/controller 객체 생성
			$oModuleController = &getController('module');
			$oModuleModel = &getModel('module');

			// request 값을 모두 받음
			$args = Context::getRequestVars();
			$args->module ='Overpol';

			// module_srl이 넘어오면 원 모듈이 있는지 확인
			if($args->module_srl){
				$module_info = $oModuleModel->getModuleInfoByModuleSrl($args->module_srl);
				if($module_info->module_srl != $args->module_srl) unset ($args->moudle_srl);
			}

			// module_srl 값의 존재 여부에 따라 insert/update
			if(!$args->module_srl){
				$output = $oModuleController->insertModule($args);
				$msg_code = 'success_registed';
			} else {
				$output = $oModuleController->updateModule($args);
				$msg_code = 'success_updated';
			}
			// 오류가 있으면 리턴
			if(!$output->toBool()) return $output;

			// $this객체에 add()로 변수를 등록하여 호출하여 XMLRPC로 리턴시 값을 추가함
			$this->add('page', Context::get('page'));
			$this->add('module_srl', $output->get('module_srl'));
			$this->setMessage($msg_code);
		}
		/**
		 * @ brief	overpol 모듈(mid) 삭제
		 */
		function procOverpolAdminDelete(){
			// 삭제를 요청하는 module_srl 확인
			$module_srl = Context::get('module_srl');

			// 원본을 찾아 삭제 
			$output = $oModuleController = &getController('module');
			$output = $oModuleController->deleteModule($module_srl);
			if(!$output->toBool()) return $output;

			$this->add('module','overpol');
			$this->add('page', Context::get('page'));
			$this->setMessage('success_deleted');
			
		}
	}
?>