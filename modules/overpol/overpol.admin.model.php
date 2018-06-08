<?php
	/**
	 * @ class	overpolAdminModel
	 * @ author	Goodgaym (jon50120@gmail.com)
	 * @ brief	overpol 모듈의 admin model class
	 **/

	class overpolAdminModel extends overpol{
		/**
		 * @ brief	초기화
		 **/
		function init(){
		}
		
		function getOverpolAdminList($args){
			$output = executeQueryArray('overpol.getOverpol', $args);
			return $output;
		}

	}
?>