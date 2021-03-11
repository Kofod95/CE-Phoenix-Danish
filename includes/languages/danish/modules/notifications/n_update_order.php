<?php
/*
  $Id$
 
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org
 
  Copyright (c) 2021 Phoenix Cart
 
  Released under the GNU General Public License
*/

const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_TITLE = 'Opdatér ordrerstatus';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DESCRIPTION = 'Send en notifikation, når ordrestatus opdateres.';

const MODULE_NOTIFICATIONS_UPDATE_ORDER_SEPARATOR = '------------------------------------------------------';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_SUBJECT = 'Ordreopdatering';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_ORDER_NUMBER = 'Ordre nummer:  %d';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_INVOICE_URL = 'Detaljeret Faktura:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_DATE_ORDERED = 'Dato bestilt:  %s';
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_STATUS_UPDATE = <<<'EOT'
Deres ordre er blevet opdateret til følgende status.
Ny status: %s
Besvar venligst denne email, hvis de har spørgsmål.
EOT;
const MODULE_NOTIFICATIONS_UPDATE_ORDER_TEXT_COMMENTS_UPDATE = 'Kommentarerne til deres ordre er' . "\n\n%s\n\n";