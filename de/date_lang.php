<?php

/*
 * Date format, translated
 * To use with the a date field through tags
 * This format uses days and months translation like defined in this file, if the PHP date format code is used.
 *
 *
 * Example of usage : 
 * 		$lang['dateformat_short'] = 'd m Y';	View call : <ion:date format="short" />		Output : 15 01 2011
 * 		$lang['dateformat_medium'] = 'd M Y'; 	View call : <ion:date format="medium" />	Output : 15 jan 2011
 * 		$lang['dateformat_long'] = 'l F d Y';	View call : <ion:date format="long" />		Output : saturday january 15 2011
 *
 * You can create your own format and call it in views :
 *		$lang['dateformat_complete'] = 'l F d Y H:i:s';		View call : <ion:date format="complete" />		Output : saturday january 15 2011 20:54:21

 *
 */
$lang['dateformat_short'] = 'd.m.Y';
$lang['dateformat_medium'] = 'd M Y';
$lang['dateformat_long'] = 'l, d F Y';

$lang['dateformat_complete'] = 'l, d F Y \a\t H\hi';

/* 
 * PHP day date format 'D' translations
 * Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
 * Ex : <articles:date format="D" manip="ucase" />
 */
$lang['mon'] = 'Mon';
$lang['tue'] = 'Die';
$lang['wed'] = 'Mit';
$lang['thu'] = 'Don';
$lang['fri'] = 'Fre';
$lang['sat'] = 'Sam';
$lang['sun'] = 'Son';

/* 
 * PHP day date format 'l' translations
 */
$lang['monday'] = 'Montag';
$lang['tuesday'] = 'Dienstag';
$lang['wednesday'] = 'Mittwoch';
$lang['thursday'] = 'Donnerstag';
$lang['friday'] = 'Freitag';
$lang['saturday'] = 'Samstag';
$lang['sunday'] = 'Sonntag';

/* 
 * PHP month date format 'M' translations
 */
$lang['jan'] = 'Jan';
$lang['feb'] = 'Feb';
$lang['mar'] = 'Mar';
$lang['apr'] = 'Apr';
$lang['may'] = 'May';
$lang['jun'] = 'Jun';
$lang['jul'] = 'Jul';
$lang['aug'] = 'Aug';
$lang['sep'] = 'Sep';
$lang['oct'] = 'Okt';
$lang['nov'] = 'Nov';
$lang['dec'] = 'Dez';

/* 
 * PHP month date format 'F' translations
 */
$lang['january'] = 'Januar';
$lang['february'] = 'Februar';
$lang['march'] = 'März';
$lang['april'] = 'April';
$lang['may'] = 'Mai';
$lang['june'] = 'Juni';
$lang['july'] = 'Juli';
$lang['august'] = 'August';
$lang['september'] = 'September';
$lang['october'] = 'Oktober';
$lang['november'] = 'November';
$lang['december'] = 'Dezember';


?>