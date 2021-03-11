<?php
/*
  $Id$
 
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org
 
  Copyright (c) 2021 Phoenix Cart
 
  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL, ['da_DK.UTF-8', 'da_DK.UTF8', 'da_DK']);

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_FORMAT = 'dd/mm/yy'; // see http://docs.jquery.com/UI/Datepicker/formatDate

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the application's default currency (used when changing language)
const LANGUAGE_CURRENCY = 'DKK';

// Global entries for the <html> tag
const HTML_PARAMS = '';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Min Bruger';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Leveringsoplsyninger';
const CHECKOUT_BAR_PAYMENT = 'Betalingsoplysninger';
const CHECKOUT_BAR_CONFIRMATION = 'Bekræftelse';

// pull down default text
const PULL_DOWN_DEFAULT = 'Vælg Venligst';

// javascript messages
const JS_ERROR = 'Der er opstået en fejl under behandlingen af deres indtastninger. \n\nForetag venligst følgende rettelser:\n\n';

const JS_ERROR_NO_PAYMENT_MODULE_SELECTED = '* Vælg venligst en betalingsmåde for deres ordre.\n';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Vælg venligst en betalingsmåde for deres ordre.';

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE = 'Resultatsider:';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> produkter)';

const PREVNEXT_TITLE_FIRST_PAGE = 'Første Side';
const PREVNEXT_TITLE_PREVIOUS_PAGE = 'Forrige Side';
const PREVNEXT_TITLE_NEXT_PAGE = 'Næste Side';
const PREVNEXT_TITLE_LAST_PAGE = 'Sidste Side';
const PREVNEXT_TITLE_PAGE_NO = 'Side %d';
const PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE = 'Forrige %d Sider';
const PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE = 'Næste %d Sider';
const PREVNEXT_BUTTON_FIRST = '&lt;&lt;FØRSTE';
const PREVNEXT_BUTTON_PREV = '[&lt;&lt;&nbsp;FORRIGE]';
const PREVNEXT_BUTTON_NEXT = '[NÆSTE&nbsp;&gt;&gt;]';
const PREVNEXT_BUTTON_LAST = 'SIDSTE&gt;&gt;';

const IMAGE_BUTTON_ADD_ADDRESS = 'Tilføj Addresse';
const IMAGE_BUTTON_BACK = 'Tilbage';
const IMAGE_BUTTON_BUY_NOW = 'Køb nu';
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Skift Addresse';
const IMAGE_BUTTON_CHECKOUT = 'Gå til betaling';
const IMAGE_BUTTON_CONFIRM_ORDER = 'Bekærft Ordre';
const IMAGE_BUTTON_CONTINUE = 'Fortsæt';
const IMAGE_BUTTON_DELETE = 'Slet';
const IMAGE_BUTTON_LOGIN = 'Log Ind';
const IMAGE_BUTTON_IN_CART = 'Tilføj til Kurv';
const IMAGE_BUTTON_SEARCH = 'Søg';
const IMAGE_BUTTON_UPDATE = 'Opdatér';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Opdatér Præferencer';

const SMALL_IMAGE_BUTTON_DELETE = 'Slet';
const SMALL_IMAGE_BUTTON_EDIT = 'Redigér';
const SMALL_IMAGE_BUTTON_VIEW = 'Vis';
const SMALL_IMAGE_BUTTON_BUY = 'Køb';

const ICON_ARROW_RIGHT = 'mere';

const TEXT_SORT_PRODUCTS = 'Sortér produkter ';
const TEXT_DESCENDINGLY = 'faldende';
const TEXT_ASCENDINGLY = 'stigende';
const TEXT_BY = ' efter ';

const TEXT_UNKNOWN_TAX_RATE = 'Ukendt Afgiftssats';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'Den indtastede udløbsdato for deres kort er ugyldig. Check venligst datoen og prøv igen.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'Det indtastede kortnummer er ugyldigt. Check venligst nummeret og prøv igen.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'De første fire indtastede tal af kortnummeret er: %s. Hvis det nummer er korrekt, tager vi desværre ikke imod den type kort. Hvis det er forkert, så prøv venligst igen.';

// category views
const TEXT_VIEW = 'Vis: ';
const TEXT_VIEW_LIST = ' Liste';
const TEXT_VIEW_GRID = ' Gitter';

// search placeholder
const TEXT_SEARCH_PLACEHOLDER = 'Søg';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Påkrævede oplysninger';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// grid/list
const TEXT_SORT_BY = 'Sortér Efter ';
// moved from index
const TABLE_HEADING_IMAGE = '';
const TABLE_HEADING_MODEL = 'Model';
const TABLE_HEADING_PRODUCTS = 'Produktnavn';
const TABLE_HEADING_MANUFACTURER = 'Producent';
const TABLE_HEADING_QUANTITY = 'Lagerbeholdning';
const TABLE_HEADING_PRICE = 'Pris';
const TABLE_HEADING_WEIGHT = 'Vægt';
const TABLE_HEADING_BUY_NOW = 'Køb nu';
const TABLE_HEADING_LATEST_ADDED = 'Dato Tilføjet';
const TABLE_HEADING_ORDERED = 'Mest Populære';

// product notifications
const PRODUCT_SUBSCRIBED = '%s er blevet tilføjet til deres Notifikationsliste';
const PRODUCT_UNSUBSCRIBED = '%s er blevet fjernet fra deres Notifikationsliste';
const PRODUCT_ADDED = '%s er blevet tilføjet til deres Kurv';
const PRODUCT_REMOVED = '%s er blevet fjernet fra deres Kurv';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>JavaScript synes at være deaktiveret i deres browser.</strong></p>
<p>De er nødt til at aktivere JavaScript i deres browser, for at benytte funktionerne på denne hjemmeside.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="noreferrer">Klik her for instruktioner i at aktivere javascript i deres browser</a>.</p>
EOT;

// sitewide is-product
const IS_PRODUCT_SHOW_PRICE = '%s';
const IS_PRODUCT_SHOW_PRICE_SPECIAL = '<del>%s</del> <span class="text-danger">nu %s</span>';
const IS_PRODUCT_BUTTON_BUY = '<i class="fas fa-shopping-cart"></i>';
const IS_PRODUCT_BUTTON_VIEW = '<i class="fas fa-eye"></i> Vis';

// sitewide product listing
const LISTING_SORT_DOWN = '<i class="fas fa-level-down-alt text-primary"></i>';
const LISTING_SORT_UP = '<i class="fas fa-level-up-alt text-primary"></i>';
const LISTING_SORT_UNSELECTED = '<i class="fas fa-level-up-alt text-black-50"></i>';
// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Redigér</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = 'Noget vi skal have at vide?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Skriv deres eventuelle kommentar her...';
const TABLE_HEADING_OR = '-eller-';
