<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/Controller/SugarController.php');
class IframeappController extends SugarController
{
    
	function action_listview(){
		$this->view = 'edit';
	}

	function action_saveconfig() {
		global $current_user;
		
		if($_POST['update_url']==1)
			$current_user->setPreference('iframe_src', $_POST['iframe_url'], 0, 'global', $current_user);
			
		$current_user->setPreference('iframe_height', $_POST['iframe_height'], 0, 'global', $current_user);
		
		SugarApplication::redirect('index.php?module=Iframeapp&action=index');
	}

	function action_detail()
	{
		$this->view = 'edit';
	}
}
