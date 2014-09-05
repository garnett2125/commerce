<?php

/**
 * @file
 * Contains \Drupal\commerce_price\CurrencyImporterInterface.
 */

namespace Drupal\commerce_price;

/**
 * Defines a currency importer.
 */
interface CurrencyImporterInterface {

  /**
   * Returns all importable currencies.
   *
   * @return Array
   *   Array of importable currencies.
   */
  public function getImportableCurrencies();

  /**
   * Creates a new currency object for the given currency code.
   *
   * @param string $currency_code
   *   The currency code.
   * @return \Drupal\commerce_price\Entity\CommerceCurrency|bool
   *   The new currency or false if the currency is already imported.
   */
  public function importCurrency($currency_code);

  /**
   * Imports translations for the currency entity.
   *
   * @param \Drupal\commerce_price\Entity\CommerceCurrency[] $currencies
   *   Array of currencies to import translations for.
   * @param \Drupal\language\ConfigurableLanguageManagerInterface[] $languages
   *   Array of languages to import.
   * @return \Drupal\commerce_price\Entity\CommerceCurrency|bool
   *  The currency entity or false if the site is not multilingual.
   */
  public function importCurrencyTranslations($currencies = array(), $languages = array());

}