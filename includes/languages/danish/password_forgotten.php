<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Log ind');
define('NAVBAR_TITLE_2', 'Glemt kodeord');

define('HEADING_TITLE', 'Jeg har glemt mit kodeord!');

define('TEXT_MAIN', 'Hvis de har glemt deres kodeord, skal de indtaste deres e-mail-addresse nedenfor, så sender vi dem instruktioner til sikkert at ændre deres kodeord.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Tjek venligst deres e-mail for instruktioner til at ændre deres kodeord. Instruktionerne indeholder et link der er gyldigt i 24 timer eller indtil deres kodeord er blevet opdateret.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Fejl: E-Mail-addressen blev ikke fundet i vores system, forsøg venligst igen.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Nyt Kodeord');
define('EMAIL_PASSWORD_RESET_BODY', 'Et nyt kodeord er blevet efterspurgt til deres bruger på ' . STORE_NAME . '.' . "\n\n" . 'Følg venligst dette unikke link til sikkert at skifte deres kodeord' . "\n\n" . '%s' . "\n\n" . 'Dette link er gyldigt i 24 timer, eller indtil deres kodeord er blevet ændret.' . "\n\n" . 'Ønsker de hjælp til nogle af vores online tjenester, bedes de venligst kontakte indehaveren: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Fejl: Et link til at nulstille kodeordet er allerede blevet sendt. Forsøg venligst igen om %s minutter.');

define('IMAGE_BUTTON_RESET_PASSWORD', 'Nulstil mit kodeord');
