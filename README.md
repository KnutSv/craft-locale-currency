# LocaleCurrency

This plugin adds a Twig filter that you can apply to numbers. You can define currency prefix and/or suffix to the number and you can add/override locale-specific number formatting

## Config
To override the default config, just add a config file to `craft/config`:

`craft/config/localecurrency.php`

`currencyPrefix` is added before the price
`currencySuffix` is added after the price

For each locale you can choose a `groupChar` to separate 1000s, and a `decimalChar` to separate whole number and decimals.

```php
  <?php

  /**
   * Locale currency Configuration
   */

  return array(
    'currencyPrefix' => '',
    'currencySuffix' => ' EUR',
    'languages' => array(
      'dk' => array(
        'groupChar' => ' ',
        'decimalChar' => ','
      ),
      'fi' => array(
        'groupChar' => ' ',
        'decimalChar' => ','
      ),
      'no' => array(
        'groupChar' => '.',
        'decimalChar' => ','
      )
    )
  );
```

## Note
This plugin has not been extensively tested