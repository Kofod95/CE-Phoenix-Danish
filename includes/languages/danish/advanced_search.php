<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Avanceret søgning');
define('NAVBAR_TITLE_2', 'Søgeresultater');

define('HEADING_TITLE_1', 'Avanceret søgning');
define('HEADING_TITLE_2', 'Produkter der passer med deres søgekriterier');

define('HEADING_SEARCH_CRITERIA', 'Søgekriterier');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Søg i Produktbeskrivelser');
define('ENTRY_CATEGORIES', 'Kategorier');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Medtag underkategorier');
define('ENTRY_MANUFACTURERS', 'Producenter');
define('ENTRY_PRICE_FROM', 'Pris Fra');
define('ENTRY_PRICE_TO', 'Pris Til');
define('ENTRY_DATE_FROM', 'Dato Fra');
define('ENTRY_DATE_TO', 'Dato Til');

define('ENTRY_PRICE_FROM_TEXT', 'Fra');
define('ENTRY_PRICE_TO_TEXT', 'Til');

define('ENTRY_DATE', 'Dato');
define('ENTRY_PRICE', 'Pris');

define('TEXT_SEARCH_HELP_LINK', '<i class="fas fa-info-circle"></i> Hjælp til søgning');

define('TEXT_ALL_CATEGORIES', 'Alle Kategorier');
define('TEXT_ALL_MANUFACTURERS', 'Alle Producenter');

define('HEADING_SEARCH_HELP', 'Hjælp til søgning');
define('TEXT_SEARCH_HELP', 'Nøgleord kan adskilles med AND og/eller OR for at specificere søgningen.<br><br>For eksempel giver <u>Microsoft AND mus</u> resultater der indeholder begge ord. Modsat giver <u>mus OR tastatur</u> resultater der indeholder et eller begge ord.<br><br>Nøjagtige match fås ved at indramme nøgleord i anførselstegn.<br><br>For eksemple giver <u>"bærbar computer"</u> resultater der indeholder nøjagtig de ord.<br><br>Paranteser kan bruges for yderligere kontrol over resultaterne.<br><br>For eksempel giver <u>Microsoft AND (tastatur OR mus OR "ekstern harddisk")</u>. resultater med Microsoft og mindst en af nøgleordene i parantesen');
define('TEXT_CLOSE_WINDOW', '<u>Luk vindues</u> [x]');

define('TEXT_NO_PRODUCTS', 'Der er ingen produkter der passer med søgekriterierne.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Mindst et af felterne i søgeformularen skal udfyldes.');
define('ERROR_INVALID_FROM_DATE', 'Ugyldig Fra Dato.');
define('ERROR_INVALID_TO_DATE', 'Ugyldig Til Dato.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Til Datoen skal være større eller lig med Fra Datoen.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Pris Fra skal være et tal.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Pris Til skal være et tal.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Pris Til skal være større end eller lig med Pris Fra.');
define('ERROR_INVALID_KEYWORDS', 'Ugyldige nøgleord.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');
