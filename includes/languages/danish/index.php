<?php
/*
  $Id$
 
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org
 
  Copyright (c) 2021 Phoenix Cart
 
  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Nye produkter i %s');

define('TEXT_NO_PRODUCTS', 'Der er ingen produkter tilgængelige i denne kategori.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Antal produkter: ');
define('TEXT_SHOW', '<strong>Vis:</strong>');
define('TEXT_BUY', 'Køb 1 \'');
define('TEXT_NOW', '\' nu');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorier');
define('TEXT_ALL_MANUFACTURERS', 'Alle Producenter');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Index-side Titel');
  define('META_SEO_DESCRIPTION', 'Dette er den beskrivelse af deres side der bliver brugt som META Beskrivelses Element');
}

