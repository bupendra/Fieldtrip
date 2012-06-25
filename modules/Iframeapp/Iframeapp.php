<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class Iframeapp extends SugarBean {
	
	var $disable_vardefs = true;
	
	function Iframeapp(){
	}	

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}	

}
?>
