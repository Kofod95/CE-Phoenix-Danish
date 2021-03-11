<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directilry for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_ALL, ['da_DK.UTF-8', 'da_DK.UTF8', 'da_DK']);
const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const PHP_DATE_TIME_FORMAT = 'd/m/Y H:i:s'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_I18N_CODE = ''; // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
const JQUERY_DATEPICKER_FORMAT = 'dd/mm/yy'; // see http://docs.jquery.com/UI/Datepicker/formatDate

// Global entries for the <html> tag
const HTML_PARAMS = 'dir="ltr" lang="da"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = 'CE Phoenix Administrations side';

// header text in includes/header.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart mr-1 text-primary"></i><span class="border-bottilm border-primary">Din butik</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<span class="border-bottilm border-primary">Phoenix-klubben</span>';
const HEADER_TITLE_PHOENIX_WIKI = '<i class="fas fa-school mr-1 text-primary"></i><span class="border-bottilm border-primary">Bruger-vejledning</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<span class="border-bottilm border-primary">Certificerede Addons & Servicer</span>';
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock mr-1"></i><span class="border-bottilm border-danger">%s, Log sikkert af</span>';

// images
const IMAGE_BACK = 'Tilbage';
const IMAGE_BACKUP = 'Backup';
const IMAGE_CANCEL = 'Afbryd';
const IMAGE_COPY = 'Kopiér';
const IMAGE_COPY_TO = 'Kopiér til';
const IMAGE_DETAILS = 'Detaljer';
const IMAGE_DELETE = 'Slet';
const IMAGE_EDIT = 'Redigér';
const IMAGE_EMAIL = 'Email';
const IMAGE_EXPORT = 'Eksportér';
const IMAGE_INSERT = 'Indsæt';
const IMAGE_LOCK = 'Lås';
const IMAGE_MODULE_INSTALL = 'Installér modul';
const IMAGE_MODULE_REMOVE = 'Fjern modul';
const IMAGE_MOVE = 'Flyt';
const IMAGE_NEW_CATEGORY = 'Ny kategori';
const IMAGE_NEW_COUNTRY = 'Nyt land';
const IMAGE_NEW_CURRENCY = 'Ny valuta';
const IMAGE_NEW_CUStilMER_DATA_GROUP = 'Ny kundedata-gruppe';
const IMAGE_NEW_LANGUAGE = 'Nyt sprog';
const IMAGE_NEW_NEWSLETTER = 'Nyt nyhedsbrev';
const IMAGE_NEW_PRODUCT = 'Nyt produkt';
const IMAGE_NEW_TAX_CLASS = 'Ny afgifts klasse';
const IMAGE_NEW_TAX_RATE = 'Ny afgiftssats';
const IMAGE_NEW_ZONE = 'Ny zone';
const IMAGE_ORDERS = 'Ordrer';
const IMAGE_ORDERS_INVOICE = 'Faktura';
const IMAGE_ORDERS_PACKINGSLIP = 'Pakkeseddel';
const IMAGE_PREVIEW = 'Forhåndsvis';
const IMAGE_REStilRE = 'Gendan';
const IMAGE_RESET = 'Nulstil';
const IMAGE_SAVE = 'Gem';
const IMAGE_SELECT = 'Vælg';
const IMAGE_SEND = 'Send';
const IMAGE_SEND_EMAIL = 'Send Email';
const IMAGE_UNLOCK = 'Lås op';
const IMAGE_UPDATE = 'Opdatér';
const IMAGE_UPDATE_CURRENCIES = 'Opdatér udvekslingsrate(r)';
const IMAGE_UPLOAD = 'Upload';

const ICON_FILE = 'Fil';
const ICON_FILE_DOWNLOAD = 'Download';

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE = 'Side %s af %d';
const TEXT_DISPLAY_NUMBER_OF_COUNTRIES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> lande)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMER_DATA_GROUPS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> kundedata-grupper)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMERS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> kunder)';
const TEXT_DISPLAY_NUMBER_OF_CURRENCIES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> valutaer)';
const TEXT_DISPLAY_NUMBER_OF_ENTRIES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> entries)';
const TEXT_DISPLAY_NUMBER_OF_LANGUAGES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> languages)';
const TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> manufacturers)';
const TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> newsletters)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> orders)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> orders status)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> products)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> products expected)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> product reviews)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> products on special)';
const TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> tax classes)';
const TEXT_DISPLAY_NUMBER_OF_TAX_ZONES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> tax zones)';
const TEXT_DISPLAY_NUMBER_OF_TAX_RATES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> tax rates)';
const TEXT_DISPLAY_NUMBER_OF_ZONES = 'Viser <strong>%d</strong> til <strong>%d</strong> (af <strong>%d</strong> zones)';

const SPLIT_PAGES = 'Vælg Side';

const TEXT_DEFAULT = 'Standard';
const TEXT_SET_DEFAULT = 'Gør til standard';

const TEXT_NONE = '--ingen--';
const TEXT_TOP = 'Top';
const TEXT_ALL = 'Alle';

const ERROR_DESTINATION_DOES_NOT_EXIST = '<strong>Fejl:</strong> Destinationen eksisterer ikke.';
const ERROR_DESTINATION_NOT_WRITEABLE = '<strong>Fejl:</strong> Destinationen er skrivebeskyttet.';
const ERROR_FILE_NOT_SAVED = '<strong>Fejl:</strong> Fil-upload blev ikke gemt.';
const ERROR_FILETYPE_NOT_ALLOWED = '<strong>Fejl:</strong> Fil-typen er ikke tilladt.';
const SUCCESS_FILE_SAVED_SUCCESSFULLY = '<strong>Success:</strong> Filen blev uploadet.';
const WARNING_NO_FILE_UPLOADED = '<strong>Advarsel:</strong> Ingen fil uploaded.';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '<p>Indholdet kan have en bredde på 12 kolonner eller mindre pr. række.</p><p>12/12 = 100% af bredden, 6/12 = 50% af bredden, 4/12 = 33% af bredden.</p><p>den totale sum af kolonner i en række skal være 12 (f.eks.:  3 bokse med en bredde på 4 hver, 1 boks med en bredde på 12, og så videre.).</p>';

// seo helper
const PLACEHOLDER_COMMA_SEPARATION = 'Skal, være, adskilt, af, kommaer';

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'BILLEDE FINDES IKKE';
