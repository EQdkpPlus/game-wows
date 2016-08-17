<?php
/*	Project:	EQdkp-Plus
 *	Package:	World of Warships game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array =  array(
	'factions' => array(
		'us'	=> 'Vereinigte Staaten',	
		'jpn'	=> 'Japan',					
		'ger'	=> 'Deutschland',			
		'gb'	=> 'Groß Britanien',			
		'udssr'	=> 'Sowjetunion',
	),
	'roles' => array(
		1	=> 'Zerstörer',
		2	=> 'Kreuzer',
		3	=> 'Schlachtschiff',
		4	=> 'Flugzeugträger',
	),
	'classes' => array(
		1	=> 'Zerstörer',
		2	=> 'Kreuzer',
		3	=> 'Schlachtschiff',
		4	=> 'Flugzeugträger',
//		5	=> 'Premium',
	),

/* Schiffsnummer zusammengesetzt:   Rasse : Premium : Klasse : Stufe */

	'ships' => array(
		0			=> 'Wähle Schiff',
	// Zerstörer
		//US
		10100		=>	'-',
		10101		=>	'-',
		10102		=>	'II Sampson',
		10103		=>	'III Wickes',
		10104		=>	'IV Clemson',
		10105		=>	'V Nicholas',
		10105		=>	'VI Farragut',
		10107		=>	'VII Mahan',
		10108		=>	'VIII Benson',
		10109		=>	'IX Fletcher',
		10110		=>	'X Gearing',
		//Japan
		20100		=>	'-',
		20101		=>	'-',
		20102		=>	'II Umikaze',
		20103		=>	'III Wakatake',
		20104		=>	'IV Isokaze',
		20105		=>	'V Minekaze',
		20106		=>	'VI Mutsuki',
		20107		=>	'VII Hatsuharu',
		20108		=>	'VIII Fubuki',
		20109		=>	'IX Kagero',
		20110		=>	'X Shimakaze',
		
		//Deutschland
		
		//GB
		
		//UDSSR
		50101		=>	'',
		50102		=>	'II Storoschewoi',
		50103		=>	'III Derzki',
		50104		=>	'IV Isjaslaw',
		50105		=>	'V Gnewni',
		50106		=>	'VI Ognewoi',
		50107		=>	'VII Kiew',
		50108		=>	'VIII Taschkent',
		50109		=>	'IX Udaloi',
		50110		=>	'X Khabarowsk',
	

		//PremiumSchiffe
		51105		=>	'V Gremjaschtschi',
		
	//Kreuzer
		//US
		10200		=>	'-',
		10201		=>	'I Erie',
		10202		=>	'II Chester',
		10203		=>	'III St. Louis',
		10204		=>	'IV Phoenix',
		10205		=>	'V Omaha',
		10206		=>	'VI Cleveland',
		10207		=>	'VII Pensacola',
		10208		=>	'VIII New Orleans',
		10209		=>	'IX Baltimore',
		10210		=>	'X Des Moines',
		//Japan
		20200		=>	'-',
		20201		=>	'I Katori',
		20202		=>	'II Chikuma',
		20203		=>	'III Tenryu',
		20204		=>	'IV Kuma',
		20205		=>	'V Furutaka',
		20206		=>	'VI Aoba',
		20207		=>	'VII Myoko',
		20208		=>	'VIII Mogami',
		20209		=>	'IX Ibuki',
		20210		=>	'X Zao',
		
		//Deutschland
		
		//GB	
		
		//UDSSR
		50201		=>	'I Orlan',
		50202		=>	'II Nowik',
		50203		=>	'III Bogatyr',
		50204		=>	'IV Swietlana',
		50205		=>	'V Kirow',
		50206		=>	'VI Budjonny',
		50207		=>	'VII Schtschors',
		50208		=>	'VIII Tschapajew',
		50209		=>	'IX DM. Donskoi',
		50210		=>	'X Moskwa',
		
/*		
		//PremiumSchiffe
		11202		=>	'II Albany',
		11207		=>	'VII Atlanta',
		21208		=>	'VIII Katikami',
		51203		=>	'III Aurora',
		51205		=>	'V Murmansk',
*/		
	//Schlachtschiffe
		//US
		10300		=>	'-',
		10301		=>	'-',
		10302		=>	'-',
		10303		=>	'III South Carolina',
		10304		=>	'IV Wyoming',
		10305		=>	'V New York',
		10306		=>	'VI New Mexico',
		10307		=>	'VII Colorado',
		10308		=>	'VIII North Carolina',
		10309		=>	'IX Iowa',
		10310		=>	'X Montana',
		//Japan
		20300		=>	'-',
		20301		=>	'-',
		20302		=>	'-',
		20303		=>	'III Kawachi',
		20304		=>	'IV Myogi',
		20305		=>	'V Kongo',
		20306		=>	'VI Fuso',
		20307		=>	'VII Nagato',
		20308		=>	'VIII Amagi',
		20309		=>	'IX Izumo',
		20310		=>	'X Yamato',
		
		//Deutschland
		
		//GB	
		
		//UDSSR
		
		//PremiumSchiffe
//		41306		=>	'VI Warspite',

	//Flugzeugträger
		//US
		10400		=>	'-',
		10401		=>	'-',
		10402		=>	'-',
		10403		=>	'-',
		10404		=>	'IV Langley',
		10405		=>	'V Bogue',
		10406		=>	'VI Independence',
		10407		=>	'VII Ranger',
		10408		=>	'VIII Lexington',
		10409		=>	'IX Essex',
		10410		=>	'',
		//Japan
		20400		=>	'-',
		20401		=>	'-',
		20402		=>	'-',
		20403		=>	'-',
		20404		=>	'IV Hosho',
		20405		=>	'V Zuiho',
		20406		=>	'VI Ryujo',
		20407		=>	'VII Shokaku',
		20408		=>	'-',
		20409		=>	'-',
		20410		=>	'-',
		//Deutschland
		
		//GB	
		
		//UDSSR
		
		//PremiumSchiffe
	),

//Auswahl Multiselect

//USA
	'usdestroyer' => array(
		2		=>	'II Sampson',
		3		=>	'III Wickes',
		4		=>	'IV Clemson',
		5		=>	'V Nicholas',
		6		=>	'VI Farragut',
		7		=>	'VII Mahan',
		8		=>	'VIII Benson',
		9		=>	'IX Fletcher',
		10		=>	'X Gearing',
		),
	'uscruiser' => array(
		1		=>	'I Erie',
		2		=>	'II Chester',
		3		=>	'III St. Louis',
		4		=>	'IV Phoenix',
		5		=>	'V Omaha',
		6		=>	'VI Cleveland',
		7		=>	'VII Pensacola',
		8		=>	'VIII New Orleans',
		9		=>	'IX Baltimore',
		10		=>	'X Des Moines',
		),
	'usbattleship'	=> array(
		3		=>	'III South Carolina',
		4		=>	'IV Wyoming',
		5		=>	'V New York',
		6		=>	'VI New Mexico',
		7		=>	'VII Colorado',
		8		=>	'VIII North Carolina',
		9		=>	'IX Iowa',
		10		=>	'X Montana',
		),
	'uscarrier'	=>array(
		4		=>	'IV Langley',
		5		=>	'V Bogue',
		6		=>	'VI Independence',
		7		=>	'VII Ranger',
		8		=>	'VIII Lexington',
		9		=>	'IX Essex',
		10		=>	'X Midway',
		),

/*	'uspremium'	=>array(
		1		=>	'-',
		),	
		
*/	

//Japan	
	'jpndestroyer'	=> array(
		2		=>	'II Umikaze',
		3		=>	'III Wakatake',
		4		=>	'IV Isokaze',
		5		=>	'V Minekaze',
		6		=>	'VI Mutsuki',
		7		=>	'VII Hatsuharu',
		8		=>	'VIII Fubuki',
		9		=>	'IX Kagero',
		10		=>	'X Shimakaze',
		),
	'jpncruiser'	=> array(
		1		=>	'I Katori',
		2		=>	'II Chikuma',
		3		=>	'III Tenryu',
		4		=>	'IV Kuma',
		5		=>	'V Furutaka',
		6		=>	'VI Aoba',
		7		=>	'VII Myoko',
		8		=>	'VIII Mogami',
		9		=>	'IX Ibuki',
		10		=>	'X Zao',
		),
	'jpnbattleship'	=>array(
		3		=>	'III Kawachi',
		4		=>	'IV Myogi',
		5		=>	'V Kongo',
		6		=>	'VI Fuso',
		7		=>	'VII Nagato',
		8		=>	'VIII Amagi',
		9		=>	'IX Izumo',
		10		=>	'X Yamato',
		),
	'jpncarrier'	=>array(
		4		=>	'IV Hosho',
		5		=>	'V Zuiho',
		6		=>	'VI Ryujo',
		7		=>	'VII Hiryu',
		8		=>	'VIII Shokaku',
		9		=>	'IX Taiho',
		10		=>	'X Hakuryu',
		),
/*	'jpnpremium'	=>array(
		1		=>	'-',
		),
*/
// Deutschland	
	'gerdestroyer' => array(
		0		=>	'-----',
		),
	'gercruiser' => array(
		1		=>	'I Hermelin',
		2		=>	'II Dresden',
		3		=>	'III Kolberg',
		4		=>	'IV Karlsruhe',
		5		=>	'V Königsberg',
		6		=>	'VI Nürnberg',
		7		=>	'VII Yorck',
		8		=>	'VIII Hipper',
		9		=>	'IX Roon',
		10		=>	'X Hindenburg',
		),
	'gerbattleship'	=> array(
		3		=>	'III Nassau',
		4		=>	'IV Kaiser',
		5		=>	'V König Albert',
		6		=>	'VI Bayern',
		7		=>	'VII Gneisenau',
		8		=>	'VIII Bismarck',
		9		=>	'IX Friedrich der Große',
		10		=>	'X Großer Kurfürst',

		),
	'gercarrier'	=>array(
		0		=>	'-----',
		),

/*	'gerpremium'	=>array(
		1		=>	'-',
		),	
		
*/	

//Briten
	'gbdestroyer' => array(
		0		=>	'-----',
		),
	'gbcruiser' => array(
		0		=>	'-----',
		),
	'gbbattleship'	=> array(
		0		=>	'-----',
		),
	'gbcarrier'	=>array(
		0		=>	'-----',
		),

/*	'gbpremium'	=>array(
		1		=>	'-----',
		),	
		
*/

//Russland
	'udssrdestroyer' => array(
		2		=>	'II Storoschewoi',
		3		=>	'III Derzki',
		4		=>	'IV Isjaslaw',
		5		=>	'V Gnewni',
		6		=>	'VI Ognewoi',
		7		=>	'VII Kiew',
		8		=>	'VIII Taschkent',
		9		=>	'IX Udaloi',
		10		=>	'X Khabarowsk',
		),
	'udssrcruiser' => array(
		1		=>	'I Orlan',
		2		=>	'II Nowik',
		3		=>	'III Bogatyr',
		4		=>	'IV Swietlana',
		5		=>	'V Kirow',
		6		=>	'VI Budjonny',
		7		=>	'VII Schtschors',
		8		=>	'VIII Tschapajew',
		9		=>	'IX DM. Donskoi',
		10		=>	'X Moskwa',
		),
	'udssrbattleship'	=> array(
		0		=>	'-----',
		),
	'udssrcarrier'	=>array(
		0		=>	'-----',
		),

/*	'udssrpremium'	=>array(
		0		=>	'-----',
		),	
		
*/
	'lang' => array(
		'wows'				=>	'World of Warships',
		'uc_realm'			=>	'Realm',
		'uc_account_id'		=>	'Wargaming AccountID',
		'tab_fleet'			=>	'Flotte',
		'uc_cat_fleet'		=>	'Flotte',
		'uc_myfleet'		=> 'Meine Flotte',
		'uc_faction'		=> 'Bevorzugte Nation',
		'uc_class'			=> 'Bevorzugte Schiffsklasse',
		'uc_profil'			=> 'Profil',
		'uc_achievement'	=> 'Erfolge',
		
		'uc_us_destroyer'	=> 'US Zerstörer',
		'uc_us_cruiser'		=> 'US Kreuzer',
		'uc_us_battleship'	=> 'US Schlachtschiff',
		'uc_us_carrier'		=> 'US Flugzeugträger',
//		'uc_us_premium'		=> 'US Premiumschiffe',
		
		'uc_jpn_destroyer'	=> 'JPN Zerstörer',
		'uc_jpn_cruiser'	=> 'JPN Kreuzer',
		'uc_jpn_battleship'	=> 'JPN Schlachtschiff',
		'uc_jpn_carrier'	=> 'JPN Flugzeugträger',
//		'uc_jpn_premium'	=> 'JPN Premiumschiffe',
		
//		'uc_ger_destroyer'	=> 'GER Zerstörer',
		'uc_ger_cruiser'	=> 'GER Kreuzer',
//		'uc_ger_battleship'	=> 'GER Schlachtschiff',
//		'uc_ger_carrier'	=> 'GER Flugzeugträger',
//		'uc_ger_premium'	=> 'GER Premiumschiffe',
		
//		'uc_gb_destroyer'	=> 'GB Zerstörer',
//		'uc_gb_cruiser'		=> 'GB Kreuzer',
//		'uc_gb_battleship'	=> 'GB Schlachtschiff',
//		'uc_gb_carrier'		=> 'GB Flugzeugträger',
//		'uc_gb_premium'		=> 'GB Premiumschiffe',

		'uc_udssr_destroyer'	=> 'UDSSR Zerstörer',
		'uc_udssr_cruiser'		=> 'UDSSR Kreuzer',
//		'uc_udssr_battleship'	=> 'UDSSR Schlachtschiff',
//		'uc_udssr_carrier'		=> 'UDSSR Flugzeugträger',
//		'uc_udssr_premium'		=> 'UDSSR Premiumschiffe',

	),
);

?>