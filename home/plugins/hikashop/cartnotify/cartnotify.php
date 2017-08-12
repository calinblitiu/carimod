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
class plgHikashopCartnotify extends JPlugin
{
	public function __construct(&$subject, $config) {
		parent::__construct($subject, $config);

		if(isset($this->params))
			return;

		$plugin = JPluginHelper::getPlugin('hikashop', 'cartnotifiy');
		if(!HIKASHOP_J25) {
			jimport('joomla.html.parameter');
			$this->params = new JParameter(@$plugin->params);
		} else {
			$this->params = new JRegistry(@$plugin->params);
		}
	}

	public function onBeforeCompileHead() {
		$app = JFactory::getApplication();
		if($app->isAdmin())
			return;

		$reference = $this->params->get('notification_reference', 'global');
		if($reference == 'popup')
			return $this->initVex();

		$this->initCartNotificationScript();
	}

	protected function initCartNotificationScript() {
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
		$base = ($app->isAdmin()) ? '..' : JURI::base(true);

		if(HIKASHOP_J30)
			JHtml::_('jquery.framework');
		else
			hikashop_loadJslib('jquery');

		if(HIKASHOP_J25) {
			$doc->addScript($base.'/plugins/hikashop/cartnotify/media/notify.min.js');
			$doc->addStyleSheet($base.'/plugins/hikashop/cartnotify/media/notify-metro.css');
		} else {
			$doc->addScript($base.'/plugins/hikashop/media/notify.min.js');
			$doc->addStyleSheet($base.'/plugins/hikashop/media/notify-metro.css');
		}

		$reference = $this->params->get('notification_reference', 'global');

		$default_position = $this->params->get('notification_position', 'top right');
		if(!in_array($default_position, array('top right', 'top left', 'top center', 'right', 'bottom right', 'bottom left', 'bottom center', 'left')))
			$default_position = 'top right';

		$params = array(
			'arrowShow' => false,
			'globalPosition' => $default_position,
			'elementPosition' => $default_position,
			'clickToHide' => true
		);

		$delay = (int)$this->params->get('delay', 5000);
		if($delay > 0) {
			$params['autoHideDelay'] = (int)$delay;
			$params['autoHide'] = true;
		} else {
			$params['autoHide'] = false;
		}

		$js = '
jQuery.notify.defaults('.json_encode($params).');
window.cartNotifyParams = '.json_encode(array(
		'reference' => $reference,
		'img_url' => HIKASHOP_IMAGES.'icons/icon-32-newproduct.png',
		'title' => JText::_('PRODUCT_ADDED_TO_CART'),
		'text' => JText::_('PRODUCT_SUCCESSFULLY_ADDED_TO_CART'),
		'wishlist_title' => JText::_('PRODUCT_ADDED_TO_WISHLIST'),
		'wishlist_text' => JText::_('PRODUCT_SUCCESSFULLY_ADDED_TO_WISHLIST'),
		'err_title' => JText::_('PRODUCT_NOT_ADDED_TO_CART'),
		'err_text' => JText::_('PRODUCT_UNSUCCESSFULLY_ADDED_TO_CART'),
		'err_wishlist_title' =>  JText::_('PRODUCT_NOT_ADDED_TO_WISHLIST'),
		'err_wishlist_text' => JText::_('PRODUCT_UNSUCCESSFULLY_ADDED_TO_WISHLIST')
	)).';
';
		$doc->addScriptDeclaration($js);
	}

	protected function initVex() {
		hikashop_loadJslib('vex');

		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();

		$base = ($app->isAdmin()) ? '..' : JURI::base(true);
		if(HIKASHOP_J25) {
			$doc->addStyleSheet($base.'/plugins/hikashop/cartnotify/media/notify-metro.css');
		} else {
			$doc->addStyleSheet($base.'/plugins/hikashop/media/notify-metro.css');
		}

		$config = hikashop_config();
		$checkout_itemid = (int)$config->get('checkout_itemid', 0);
		$url_checkout = hikashop_completeLink('checkout'. (!empty($checkout_itemid) ? '&Itemid='.$checkout_itemid : ''), false, true);
		$link_to_checkout = (int)$this->params->get('checkout_button', 1);

		$options = array('message: content');

		if($link_to_checkout){
			$options[] = "buttons:[
	{text:'".JText::_('PROCEED_TO_CHECKOUT', true)."',type:'button',className: 'vex-dialog-button-primary',click: function proceedClick(){window.location = '".$url_checkout."';}},
	{text:'".JText::_('CONTINUE_SHOPPING', true)."',type: 'submit',className: 'vex-dialog-button-primary',click: function continueClick(){}}]";
		}

		$js = '
if(window.Oby) {
vex.defaultOptions.className = "vex-theme-default"
window.cartNotifyParams = '.json_encode(array(
	'img_url' => HIKASHOP_IMAGES.'icons/icon-32-newproduct.png',
	'title' => JText::_('PRODUCT_ADDED_TO_CART'),
	'text' => JText::_('PRODUCT_SUCCESSFULLY_ADDED_TO_CART'),
	'wishlist_title' => JText::_('PRODUCT_ADDED_TO_WISHLIST'),
	'wishlist_text' => JText::_('PRODUCT_SUCCESSFULLY_ADDED_TO_WISHLIST'),
	'err_title' => JText::_('PRODUCT_NOT_ADDED_TO_CART'),
	'err_text' => JText::_('PRODUCT_UNSUCCESSFULLY_ADDED_TO_CART'),
	'err_wishlist_title' => JText::_('PRODUCT_NOT_ADDED_TO_WISHLIST'),
	'err_wishlist_text' => JText::_('PRODUCT_UNSUCCESSFULLY_ADDED_TO_WISHLIST'),
)).';
window.Oby.registerAjax(["cart.updated","wishlist.updated"],function(params){
	var cart = (params.type == "cart"), p = window.cartNotifyParams, img_url = p.img_url, title = cart ? p.title : p.wishlist_title, text = cart ? p.text : p.wishlist_text, class_name = "info";
	if(params.notify === false)
		return;
	if(params.resp.ret == 0) {
		class_name = "warning";
		title = cart ? p.err_title : p.err_wishlist_title;
		text = cart ? p.err_text : p.err_wishlist_text;
	}
	if(params.resp.image)
		img_url = params.resp.image;
	if(params.resp.product_name)
		title = params.resp.product_name;
	if(params.resp.message)
		text = params.resp.message;

	var content = "";
	if(img_url == null) {
		content = "<div class=\"notifyjs-metro-lite-base\"><div class=\"text-wrapper\"><div class=\"title\">"+title+"</div><div class=\"text\">"+text+"</div></div></div>";
	} else {
		content = "<div class=\"notifyjs-metro-base\"><div class=\"image\"><img src=\""+img_url+"\" alt=\"\"/></div><div class=\"text-wrapper\"><div class=\"title\">"+title+"</div><div class=\"text\">"+text+"</div></div></div>";
	}
	vex.dialog.alert({'.implode(', ', $options).'});
	return true;
});
}
';
		$doc->addScriptDeclaration($js);
	}
}
