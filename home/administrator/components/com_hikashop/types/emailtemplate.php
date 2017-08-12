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
class hikashopEmailtemplateType {
	var $type = 'component';

	public function load($type = null) {
		$this->values = array(
			JHTML::_('select.option', '',JText::_('HIKA_NONE'))
		);

		if(!isset($type))
			return true;

		jimport('joomla.filesystem.folder');
		$regex = '^([-_A-Za-z0-9]*)\.html.php$';
		$allTemplateFiles = JFolder::files( HIKASHOP_MEDIA.DS.'mail'.DS.'template', $regex);
		foreach($allTemplateFiles as $oneFile) {
			preg_match('#'.$regex.'#i', $oneFile, $results);
			$this->values[] = JHTML::_('select.option', $results[1], $results[1]);
		}
	}

	public function display($map, $value) {
		$type = JRequest::getCmd('mail_name',false);

		if(JRequest::getCmd('mail_name',false) == false)
			$type = $this->type;

		$this->load($type);

		$html = JHTML::_('select.genericlist',   $this->values, $map, 'class="inputbox" size="1"', 'value', 'text', $value, 'template' );

		$popupHelper = hikashop_get('helper.popup');
		$html .= $popupHelper->display(
			'<img src="'. HIKASHOP_IMAGES.'edit.png" alt="'.JText::_('HIKA_EDIT').'"/>',
			'TEMPLATE',
			'\''.'index.php?option=com_hikashop&amp;tmpl=component&amp;ctrl=email&amp;task=emailtemplate&amp;file=\'+document.getElementById(\'template\').value+\'&amp;email_name='.$type.'\'',
			'hikashop_edit_template',
			760,480, '', '', 'link',true
		);

		$html .= $popupHelper->display(
			'<img src="'. HIKASHOP_IMAGES.'plus.png" style="vertical-align:middle;" alt="'.JText::_('HIKA_NEW').'"/>',
			'TEMPLATE',
			hikashop_completeLink('email&task=emailtemplate&email_name='.$type, true),
			'hikashop_new_template',
			760,480, '', '', 'link'
		);

		return $html;
	}
}
