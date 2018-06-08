<?php
    /**
     * @class  overpolModel
     * @author Goodgaym (jon50120@gmail.com)
     * @brief  overpol 모듈의 model class
     **/

    class overpolModel extends ModuleObject {

        function getOverpolInfo() {
            $oModuleModel = &getModel('module');

            $output = executeQuery('Overpol.getOverpol');
            if(!$output->data->module_srl) return;

            $module_info = $oModuleModel->getModuleInfoByModuleSrl($output->data->module_srl);
			// 최신글 갯수
			if(!$module_info->showing_documents_count) $module_info->showing_documents_count = 18;
            return $module_info;
        }                                                                          
    }
?>
