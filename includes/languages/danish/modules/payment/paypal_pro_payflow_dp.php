<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_TEXT_TITLE', 'PayPal Payments Pro (Payflow Edition)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_TEXT_PUBLIC_TITLE', 'Kreditkort eller Debit-kort');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_TEXT_DESCRIPTION', '<i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://www.paypal.com" target="_blank" rel="noreferrer">Besøg PayPals hjemmeside</a>');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_EXPRESS_MODULE', 'PayPal mandates the PayPal Express Checkout (Payflow Edition) payment module be enabled if this module is to be activated. This module will not load until the PayPal Express Checkout (Payflow Edition) module has been installed.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_ADMIN_CURL', 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_ADMIN_CONFIGURATION', 'This module will not load until the Vendor and Password parameters have been configured. Please edit and configure the settings of this module.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_CARD_OWNER_FIRSTNAME', 'Kortejerens fornavn:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_CARD_OWNER_LASTNAME', 'Kortejerens efternavn:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_CARD_NUMBER', 'Kortnummer:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_CARD_EXPIRES', 'Kortets udløbsdato:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_CARD_CVC', 'Kortets sikkerhedskode (CVV2):');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_ALL_FIELDS_REQUIRED', 'Fejl: Alle betalingsinformations-felter er påkrævet.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_GENERAL', 'Fejl: Et generelt problem opstod med transaktionen. Forsøg venligst igen.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_CFG_ERROR', 'Fejl: Betalingsmodul-konfigurations-fejl. Vær venlig at sikre at login-oplysningerne er korrekte.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_ADDRESS', 'Fejl: Et match mellem leveringsadressens by, stat og postnummer mislykkedes. Forsøg venligst igen.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_DECLINED', 'Fejl: Transaktionen er blevet afvist. Forsøg venligst igen.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_ERROR_INVALID_CREDIT_CARD', 'Fejl: De oplyste kort-informationer er ugyldige. Forsøg venligst igen.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_LINK_TITLE', 'Test API-Server-forbindelsen');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_TITLE', 'API-Server-forbindelses test');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_GENERAL_TEXT', 'Tester forbindelsen til serveren..');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_BUTTON_CLOSE', 'Luk');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_TIME', 'Forbindelses tid:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_SUCCESS', 'Success!');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_FAILED', 'Mislykkedes! Vær venlig at kontrollere SSL-Certifikats-indstillingerne og prøv igen.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_DP_DIALOG_CONNECTION_ERROR', 'Der opstod en fejl. Vær venlig at opdatere siden, kontrollere deres indstillinger og prøv igen.');
?>
