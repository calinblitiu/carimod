<?php
/**
 * @package	HikaShop for Joomla!
 * @version	3.0.0
 * @author	hikashop.com
 * @copyright	(C) 2010-2017 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><form action="<?php echo hikashop_completeLink('checkout&task=show&cid='. ($this->step).$this->cartIdParam); ?>" method="post" id="hikashop_checkout_form" name="hikashop_checkout_form" enctype="multipart/form-data" onsubmit="if(window.checkout.onFormSubmit){ return window.checkout.onFormSubmit(this); }">
<input type="hidden" name="task" value="submitstep"/>
<input type="hidden" name="<?php echo hikashop_getFormToken(); ?>" id="hikashop_checkout_token" value="1"/>
<input type="hidden" name="cart_id" value="<?php echo $this->cart_id; ?>"/>
<input type="submit" style="display:none;"/>
<div id="hikashop_checkout" class="hikashop_checkout_page hikashop_checkout_page_step<?php echo $this->step; ?>"><?php

if((int)$this->config->get('display_checkout_bar', 2) > 0) {
	echo $this->displayBlock('bar', 0, array());
}

foreach($this->workflow['steps'][$this->workflow_step]['content'] as $k => $content) {
	echo $this->displayBlock($content['task'], $k, @$content['params']);
}

echo $this->displayBlock('buttons', 0, array());

$doc = JFactory::getDocument();
$doc->addScript(HIKASHOP_JS.'checkout.js');
$js = '
window.checkout.token = "'.hikashop_getFormToken().'";
window.checkout.urls.show = "'.hikashop_completeLink('checkout&task=showblock'.$this->cartIdParam.'&tmpl=ajax&Itemid='.$this->itemid, false, false, true).'";
window.checkout.urls.submit = "'.hikashop_completeLink('checkout&task=submitblock'.$this->cartIdParam.'&tmpl=ajax&Itemid='.$this->itemid, false, false, true).'";
window.checkout.urls.submitstep = "'.hikashop_completeLink('checkout&task=submitstep'.$this->cartIdParam.'&tmpl=ajax&Itemid='.$this->itemid, false, false, true).'";
window.Oby.registerAjax("checkout.step.completed",function(params){ document.getElementById("hikashop_checkout_form").submit(); });
';
$doc->addScriptDeclaration($js);
?>
</div>
</form>
