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

// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$document = JFactory::getDocument();
$document->addStyleSheet('modules/mod_jrexrates/assets/css/jrexrates.css');

$rates = modJRExRatesHelper::getRates($params);
$currenciesList = $params->get('currency_list', array());
$inverseRates = $params->get('inverse_rates', '1');
$currencyLabel = $params->get('currency_label', 'S');
$class_sfx = htmlspecialchars($params->get('class_sfx'));

require(JModuleHelper::getLayoutPath('mod_jrexrates', $params->get('layout', 'default')));