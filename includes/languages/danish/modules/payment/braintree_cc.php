<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2018 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_TITLE', 'Braintree Payment Solutions');
  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_PUBLIC_TITLE', 'Kreditkort');
  define('MODULE_PAYMENT_BRAINTREE_CC_TEXT_DESCRIPTION', '<i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://www.braintreepayments.com" target="_blank" rel="noreferrer">Besøg Braintree Payments hjemmeside</a>');

  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_PHP', 'The minimum PHP version this module supports is %s and will not load until the webserver has been installed with a newer version.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_PHP_EXTENSIONS', 'This module requires the following PHP extensions and will and will not load until PHP has been updated:<br><br>%s');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_MERCHANT_ACCOUNTS', 'This module will not load until a merchant account has been defined for the %s currency.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_ADMIN_CONFIGURATION', 'This module will not load until the Merchant ID, Public Key, Private Key, and Client Side Encryption Key parameters have been configured. Please edit and configure the settings of this module.');

  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_NEW', 'Indtast et nyt kort');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_LAST_4', 'Fire sidste cifre:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_OWNER', 'Kortets navn:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_NUMBER', 'Kortnummer:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_EXPIRY', 'Udløbsdato:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_CVV', 'Sikkerhedskode:');
  define('MODULE_PAYMENT_BRAINTREE_CC_CREDITCARD_SAVE', 'Gem kort til næste gang de skal betale?');

  define('MODULE_PAYMENT_BRAINTREE_CC_CURRENCY_CHARGE', 'Valutaen der i øjeblikket benyttes til at vise priser er %3$s. Der vil blive trukket totalt <span style="white-space: nowrap;">%1$s %2$s</span> fra deres kort for denne ordre.');

  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_TITLE', 'Der opstod en fejl i behandlingen af deres kort');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_GENERAL', 'Forsøg venligst igen, og hvis problemet opstår igen, benyt da venligst en anden betalingsmetode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDOWNER', 'Kortejerens navn skal oplyses for at gennemføre ordren. Forsøg venligst igen, og hvis problemet opstår igen, benyt da venligst en anden betalingsmetode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDNUMBER', 'Kortnummeret kunne ikke blive behandlet. Forsøg venligst igen, og hvis problemet opstår igen, benyt da venligst en anden betalingsmetode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDEXPIRES', 'Kortets udløbsdato kunne ikke behandles. Forsøg venligst igen, og hvis problemet opstår igen, benyt da venligst en anden betalingsmetode.');
  define('MODULE_PAYMENT_BRAINTREE_CC_ERROR_CARDCVV', 'Sikkerhedskoden kunne ikke behandles. Forsøg venligst igen, og hvis problemet opstår igen, benyt da venligst en anden betalingsmetode.');
?>
