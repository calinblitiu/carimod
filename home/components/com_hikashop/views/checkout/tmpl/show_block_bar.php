<?php
/**
 * @package	HikaShop for Joomla!
 * @version	3.0.0
 * @author	hikashop.com
 * @copyright	(C) 2010-2017 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><div class="hikashop_wizardbar">
	<ul>
<?php
	$workflow = $this->checkoutHelper->checkout_workflow;
	foreach($workflow['steps'] as $k => $step) {
		$stepClass = ($k == $this->workflow_step) ? 'hikashop_cart_step_current' : ($k < $this->workflow_step ? 'hikashop_cart_step_finished' : '');
		$badgeClass = ($k == $this->workflow_step) ? 'badge-info' : ($k < $this->workflow_step ? 'badge-success' : '');
		$name = (isset($step['name'])) ? $step['name'] : JText::_('HIKASHOP_CHECKOUT_'.strtoupper($step['content'][0]['task']));

		if($k < $this->workflow_step) {
			$name = '<a href="'.hikashop_completeLink('checkout&task=show&cid='.($k+1)).'">'.$name.'</a>';
		}
?>
		<li class="<?php echo $stepClass; ?>">
			<span class="badge <?php echo $badgeClass; ?>"><?php echo ($k + 1); ?></span><?php echo $name; ?>
			<span class="hikashop_chevron"></span>
		</li>
<?php
	}
?>
	</ul>
</div>
