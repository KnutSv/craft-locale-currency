<?php
namespace Craft;

use Twig_Extension;  
use Twig_Filter_Method;

class LocaleCurrencyTwigExtension extends \Twig_Extension  
{
    public function getName()
    {
        return 'LocaleCurrency';
    }

    public function getFilters()
    {
        return array(
            'localeCurrency' => new Twig_Filter_Method($this, 'localeCurrency'),
        );
    }

    public function localeCurrency($number)
    {

        $siteCurrencyPrefix = craft()->config->get('currencyPrefix', 'localecurrency');
        $siteCurrencySuffix = craft()->config->get('currencySuffix', 'localecurrency');
        $languageLocaleSettings = craft()->config->get('languages', 'localecurrency')[craft()->language];

        $decimals = (isset($languageLocaleSettings['decimals'])) ? $languageLocaleSettings['decimals'] : 2;
        $decimalChar = (isset($languageLocaleSettings['decimalChar'])) ? $languageLocaleSettings['decimalChar'] : '.';
        $groupChar = (isset($languageLocaleSettings['groupChar'])) ? $languageLocaleSettings['groupChar'] : ' ';


        return $siteCurrencyPrefix . number_format($number, $decimals, $decimalChar, $groupChar) . $siteCurrencySuffix;
    }
}