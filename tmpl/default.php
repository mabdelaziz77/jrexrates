<?php

/**
 * @version		1.0.0
 * @package		JoomReem.ExchangeRates
 * @author              Mohamed Abdelaziz - http://www.joomreem.com
 * @copyright           Copyright (c)  2015 JoomReem. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
defined('_JEXEC') or die;
$oddEven = 'odd';
?>
<div class="jrer-curr-list <?php echo $class_sfx?>">
<?php foreach ($currenciesList as $currency): ?>
    <div class="jrer-curr-entry <?php echo $oddEven; ?>">
        <div class="jrer-curr-name"><?php echo $currencyLabel=='F'?JText::_('MOD_JRER_'.$currency):$currency; ?></div>
        <?php if ($inverseRates == '1') :?>
        <div class="jrer-curr-value"><?php echo round(1 / (float) $rates->$currency , 3);?></div>
        <?php else: ?>
        <div class="jrer-curr-value"><?php echo round( $rates->$currency , 3);?></div>
        <?php endif; ?>
    </div>
    <?php $oddEven = $oddEven=='odd'?'even':'odd'; ?>
<?php endforeach;?>    
</div>