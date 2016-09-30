<?php

namespace Craft;

class LocaleCurrencyPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Locale currency filter');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Vangen & Plotz AS';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.vangenplotz.no';
    }

    public function addTwigExtension()  
    {
        Craft::import('plugins.localecurrency.twigextensions.LocaleCurrencyTwigExtension');

        return new LocaleCurrencyTwigExtension();
    }
}