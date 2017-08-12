<?php
/**
 * @package	HikaShop for Joomla!
 * @version	3.0.0
 * @author	hikashop.com
 * @copyright	(C) 2010-2017 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
class emailController extends hikashopController {
	var $type = 'mail';

	function __construct($config = array())
	{
		parent::__construct($config);
		$this->modify_views[]='emailtemplate';
		$this->modify[]='saveemailtemplate';
	}
	public function test() {
	}

	public function edit() {
		return false;
	}

	public function remove() {
		return $this->listing();
	}

	public function getUploadSetting($upload_key, $caller = '') {
	}

	public function manageUpload($upload_key, &$ret, $uploadConfig, $caller = '') {
		if(empty($ret))
			return;
	}

	function emailtemplate(){
		JRequest::setVar( 'layout', 'emailtemplate'  );
		return parent::display();
	}

	function saveemailtemplate(){
		JRequest::checkToken() || die( 'Invalid Token' );
		$file = JRequest::getCmd('file');
		$email_name = JRequest::getCmd('email_name');
		$fileName = JFile::makeSafe($file);
		$coreTemplateFiles = array('admin','admin_notification','default','user_notification');

		jimport('joomla.filesystem.file');
		$path = HIKASHOP_MEDIA.'mail'.DS.'template'.DS.$fileName.'.html.php';

		if(!JPath::check($path) || $fileName == 'none') {
			hikashop_display(JText::sprintf('FAIL_SAVE','invalid filename'),'error');
			return $this->emailtemplate();
		}
		$templatecontent = JRequest::getString('templatecontent');

		if(in_array($fileName, $coreTemplateFiles)) {
			hikashop_display(JText::sprintf('FAIL_SAVE',': "'.$fileName.'" is a core file, please choose another name'),'error');
			return $this->emailtemplate();
		}
		if(JFile::write($path, $templatecontent))
			hikashop_display(JText::_('HIKASHOP_SUCC_SAVED'),'success');
		else
			hikashop_display(JText::sprintf('FAIL_SAVE',$path),'error');

		return $this->emailtemplate();
	}
}
