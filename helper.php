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

/**
 * JR - EGPEXRates Helper Class.
 *
 * @package		Joomla.Site
 * @subpakage	JR.EGPEXRates
 */
class modJRExRatesHelper {

    public static function getRates($params) {
        $apiKey = $params->get('jsonrates_apikey');
        $currencyBase = $params->get('currency_base', 'USD');
        $data = file_get_contents(
                'http://jsonrates.com/get/?' .
                'base='. $currencyBase .
                '&apiKey='. $apiKey
        );
        $json = json_decode($data);
        return  $json->rates;
    }    
}
