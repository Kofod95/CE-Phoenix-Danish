<?php
/*
  $Id$
 
  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org
 
  Copyright (c) 2021 Phoenix Cart
 
  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Sikkerheds Check');
define('HEADING_TITLE', 'Sikkerheds Check');

define('TEXT_INFORMATION', 'Vi kan se at deres browser har genereret et anderledes SSL Session ID og brugt på vores sikre sider.<br><br>Af sikkerhedsmæssige grunde, er de nødt til at logge ind på deres bruger igen for at fortsætte med at handle online.<br><br>Nogle browsere sp som Konqueror 3.1 kan ikke generere et sikkert SSL Session ID automatisk, hvilket vi kræver. Hvis de bruger en sådan browser, anbefaler vi at de skifter til en anden så som <a class="btn btn-light btn-sm" role="button" href="http://www.microsoft.com/ie/" target="_blank" rel="noreferrer">Microsoft Internet Explorer</a> eller <a class="btn btn-light btn-sm" role="button" href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank rel="noreferrer">Netscape</a> eller <a class="btn btn-light btn-sm" role="button" href="http://www.mozilla.org/releases/" target="_blank" rel="noreferrer">Mozilla</a> for at fortsætte deres online handel.<br><br>Dette er et sikkerhedshensyn vi har taget til deres fordel, og vi undskylder på forhånd, hvis det fører til ulejlighed.<br><br> <a class="btn btn-success btn-sm" role="button" href="' . tep_href_link('contact_us.php', '', 'SSL') . '">Kontakt indehaveren</a> hvis de har spørgsmål til dette krav.');

define('BOX_INFORMATION_HEADING', 'Privatliv og Sikkerhed');
define('BOX_INFORMATION', 'Vi validerer SSL Session ID\'et der automatisk genereres af deres browser på alle de sikre sider på denne server.<br><br>Denne validering sikrer, at det er dem, der navigerer på denne side med deres bruger, og ikke en anden.');

