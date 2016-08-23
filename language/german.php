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
	),



//Auswahl Multiselect für Flotte

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
		11		=>	'*V Marblehead*',
		12		=>	'*VII Atlanta*',
		13		=>	'*VII Indianapolis*',
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
		11		=>	'*VI Arizona*',
		12		=>	'*V Texas*',
		),
	'uscarrier'	=>array(
		4		=>	'IV Langley',
		5		=>	'V Bogue',
		6		=>	'VI Independence',
		7		=>	'VII Ranger',
		8		=>	'VIII Lexington',
		9		=>	'IX Essex',
		10		=>	'X Midway',
		11		=>	'*VII Saipan*',
		),

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
		11		=>	'*II Tachibana*',
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
		11		=>	'*VIII Atago'
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
		11		=>	'*II Mikasa*',
		12		=>	'*IV Ishizuchi*',
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
		11		=>	'*II Emden*',
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
		11		=>	'*VII Scharnhorst*',
		12		=>	'*VIII Tirpitz*',

		),
	'gercarrier'	=>array(
		0		=>	'-----',
		),

//Briten
	'gbdestroyer' => array(
		11		=>	'*III Campbeltown*',
		),
	'gbcruiser' => array(
		0		=>	'-----',
		),
	'gbbattleship'	=> array(
		11		=>	'*VI Warspite*'
		),
	'gbcarrier'	=>array(
		0		=>	'-----',
		),	
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
		11		=>	'*II Diana*',
		12		=>	'*III Aurora*',
		13		=>	'*V Murmansk*',
		14		=>	'*V Krasni Krim*',
		15		=>	'*VI Molotow*',
		16		=>	'*VIII Kutusow*',

		),
	'udssrbattleship'	=> array(
		0		=>	'-----',
		),
	'udssrcarrier'	=>array(
		0		=>	'-----',
		),

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
		'id_miss'			=> 'Wargamin ID und Realm angeben',
		'wargaming_level'	=>	'Wehrpass-Stufe',
		
		'uc_us_destroyer'	=> 'US Zerstörer',
		'uc_us_cruiser'		=> 'US Kreuzer',
		'uc_us_battleship'	=> 'US Schlachtschiff',
		'uc_us_carrier'		=> 'US Flugzeugträger',
		'uc_us_premium'		=> 'US Premiumschiffe',
		
		'uc_jpn_destroyer'	=> 'JPN Zerstörer',
		'uc_jpn_cruiser'	=> 'JPN Kreuzer',
		'uc_jpn_battleship'	=> 'JPN Schlachtschiff',
		'uc_jpn_carrier'	=> 'JPN Flugzeugträger',
		'uc_jpn_premium'	=> 'JPN Premiumschiffe',
		
//		'uc_ger_destroyer'	=> 'GER Zerstörer',
		'uc_ger_cruiser'	=> 'GER Kreuzer',
		'uc_ger_battleship'	=> 'GER Schlachtschiff',
//		'uc_ger_carrier'	=> 'GER Flugzeugträger',
		'uc_ger_premium'	=> 'GER Premiumschiffe',
		
		'uc_gb_destroyer'	=> 'GB Zerstörer',
//		'uc_gb_cruiser'		=> 'GB Kreuzer',
		'uc_gb_battleship'	=> 'GB Schlachtschiff',
//		'uc_gb_carrier'		=> 'GB Flugzeugträger',
		'uc_gb_premium'		=> 'GB Premiumschiffe',

		'uc_udssr_destroyer'	=> 'UDSSR Zerstörer',
		'uc_udssr_cruiser'		=> 'UDSSR Kreuzer',
//		'uc_udssr_battleship'	=> 'UDSSR Schlachtschiff',
//		'uc_udssr_carrier'		=> 'UDSSR Flugzeugträger',
		'uc_udssr_premium'		=> 'UDSSR Premiumschiffe',


//Achievement
		'RETRIBUTION'	=> 'Das ist nur ein Kratzer !',
		'FIGHTER'		=>	'Kämpfer !',	
		'ST_PARTICIPANT'		=>	'ST-Teilnehmer !',	
		'SUPPORT'		=>	'Unterstützer !',	
		'ONE_SOLDIER_IN_THE_FIELD'		=>	'Einzelkämpfer !',	
		'AT_PARTICIPANT'		=>	'AT-Veteran !',	
		'SEA_LEGEND'		=>	'Fluch der Ozeane !',	
		'MESSENGER'		=>	'Im dichtesten Gewühl !',	
		'UNSINKABLE'		=>	'Unsinkbar !',	
		'SCIENCE_OF_WINNING_ARSONIST'		=>	'Marinekriegsführung: Brandstiftung !',	
		'WGSPB_STAFF'		=>	'Entwickler !',	
		'SCIENCE_OF_WINNING_TACTICIAN'		=>	'Marinekriegsführung: Taktik !',	
		'ENGINEER'		=>	'Schiffskonstrukteur !',	
		'BATTLE_HERO'		=>	'Held der Schlacht !',	
		'WG_STAFF'		=>	'Wargaming !',	
		'MAIN_CALIBER'		=>	'Großkaliber !',	
		'HEADBUTT'		=>	'Sturkopf !',	
		'INSTANT_KILL'		=>	'Vernichtender Schlag !',	
		'JUNIOR_PLANNER'		=>	'Nachwuchsschiffsentwickler !',	
		'SCIENCE_OF_WINNING_HARD_EDGED'		=>	'Marinekriegsführung: Rammen !',	
		'ATBA_CALIBER'		=>	'Nahkampfexperte !',	
		'CBT_PARTICIPANT'		=>	'CBT-Veteran !',	
		'SCIENCE_OF_WINNING_TO_THE_BOTTOM'		=>	'Marinekriegsführung: Flutung !',	
		'VETERAN'		=>	'Veteran !',	
		'NO_DAY_WITHOUT_ADVENTURE'		=>	'Ein Tag ohne Abenteuer ist ein verschwendeter !',	
		'NEVER_ENOUGH_MONEY'		=>	'Tycoon !',	
		'MILLIONAIR'		=>	'Geldsäcke !',	
		'NO_PRICE_FOR_HEROISM'		=>	'Legende der Meere !',	
		'BW_PARTICIPANT'		=>	'BW-Teilnehmer !',	
		'DREADNOUGHT'		=>	'Dreadnought !',	
		'CAPITAL'		=>	'Grundkapital !',	
		'SCIENCE_OF_WINNING_BOMBARDIER'		=>	'Marinekriegsführung: Waffengrundlage !',	
		'CLEAR_SKY'		=>	'Klarer Himmel !',	
		'DOUBLE_KILL'		=>	'Doppelschlag !',	
		'WARRIOR'		=>	'Krake freigelassen !',	
		'WORKAHOLIC'		=>	'Zu allem bereit !',	
		'FIRST_BLOOD'		=>	'Erstes Blut !',	
		'DETONATED'		=>	'Detonation !',	
		'LIQUIDATOR'		=>	'Abwickler !',	
		'MERCENARY'		=>	'Arbeitspferd !',	
		'WITHERING'		=>	'Vernichter !',	
		'CHIEF_ENGINEER'		=>	'Oberster Schiffbauingenieur !',	
		'ARSONIST'		=>	'Brandstifter !',	
		'FIREPROOF'		=>	'Feuerfest !',	
		'AMAUTEUR'		=>	'Amateur !',	
		'SCIENCE_OF_WINNING_LUCKY'		=>	'Marinekriegsführung: Glückstreffer !',

// Achievement Tooltip-Descrition		
		'RETRIBUTION_DES'		=>	'Zerstören Sie ein gegnerisches Schiff, nachdem Ihr Schiff zerstört wurde.',
		'FIGHTER_DES'		=>	'Gewinnen Sie 50 Zufallsgefechte.',	
		'ST_PARTICIPANT_DES'		=>	'Die Entwickler danken für Ihre Teilnahme am Supertest.',	
		'SUPPORT_DES'		=>	'Beschädigen Sie mindestens 6 gegnerische Schiffe. Der verursachte Schaden an jedem Schiff muss 20% von dessen Ausgangs-TP übersteigen.',	
		'ONE_SOLDIER_IN_THE_FIELD_DES'		=>	'Stehen Sie alleine 4 gegnerischen Schiffen gegenüber und gewinnen Sie das Gefecht.',	
		'AT_PARTICIPANT_DES'		=>	'Die Entwickler danken für die Teilnahme am Alpha-Test.',	
		'SEA_LEGEND_DES'		=>	'Verdienen Sie 100 heroische Erfolge.',	
		'MESSENGER_DES'		=>	'Schließen Sie 5 Tagesaufträge ab.',	
		'UNSINKABLE_DES'		=>	'Erhalten Sie Schaden durch Wassereinbrüche, der 40% der Ausgangs-TP Ihres Schiffes übersteigt und überleben Sie das Gefecht.',	
		'SCIENCE_OF_WINNING_ARSONIST_DES'		=>	'Zerstören Sie ein gegnerisches Schiff, indem Sie es in Brand stecken.',	
		'WGSPB_STAFF_DES'		=>	'Mitarbeiter von Wargaming St. Petersburg',	
		'SCIENCE_OF_WINNING_TACTICIAN_DES'		=>	'Erobern Sie die gegnerische Basis.',	
		'ENGINEER_DES'		=>	'Erforschen Sie 10 Schiffe.',	
		'BATTLE_HERO_DES'		=>	'Verdienen Sie 10 heroische Erfolge.',	
		'WG_STAFF_DES'		=>	'Wargaming-Mitarbeiter',	
		'MAIN_CALIBER_DES'		=>	'Beschädigen Sie mindestens 4 gegnerische Schiffe. Der verursachte Schaden muss 30% der gesamten TP aller Schiffe des gegnerischen Teams übersteigen.',	
		'HEADBUTT_DES'		=>	'Zerstören Sie ein gegnerisches Schiff durch Rammen und überleben Sie.',	
		'INSTANT_KILL_DES'		=>	'Zerstören Sie ein gegnerisches Schiff mit einer einzigen Artilleriesalve, Torpedosalve oder Flugzeugattacke, die 50% der Ausgangs-TP des Schiffes übersteigt.',	
		'JUNIOR_PLANNER_DES'		=>	'Erforschen Sie ein neues Schiff.',	
		'SCIENCE_OF_WINNING_HARD_EDGED_DES'		=>	'Zerstören Sie ein gegnerisches Schiff durch Rammen.',	
		'ATBA_CALIBER_DES'		=>	'Beschädigen und zerstören Sie ein gegnerisches Schiff. Der vernichtende Schaden muss durch die Sekundärbatterie erfolgen.',	
		'CBT_PARTICIPANT_DES'		=>	'Die Entwickler danken für die Teilnahme am geschlossenen Beta-Test.',	
		'SCIENCE_OF_WINNING_TO_THE_BOTTOM_DES'		=>	'Zerstören Sie ein gegnerisches Schiff durch Wassereinbruch.',	
		'VETERAN_DES'		=>	'Gewinnen Sie 100 Zufallsgefechte.',	
		'NO_DAY_WITHOUT_ADVENTURE_DES'		=>	'Schließen Sie an 5 Tagen nacheinander mindestens je 1 Tagesauftrag ab.',	
		'NEVER_ENOUGH_MONEY_DES'		=>	'Verdienen Sie 10000000 Kreditpunkte.',	
		'MILLIONAIR_DES'		=>	'Verdienen Sie 1000000 Kreditpunkte.',	
		'NO_PRICE_FOR_HEROISM_DES'		=>	'Verdienen Sie 50 heroische Erfolge.',	
		'BW_PARTICIPANT_DES'		=>	'Die Entwickler danken für Ihre Teilnahme am Beta-Wochenende.',	
		'DREADNOUGHT_DES'		=>	'Erhalten Sie von mindestens 4 Gegnern Schaden, der 120% der Ausgangs-TP Ihres Schiffes übersteigt und überleben Sie das Gefecht.',	
		'CAPITAL_DES'		=>	'Verdienen Sie 100000 Kreditpunkte.',	
		'SCIENCE_OF_WINNING_BOMBARDIER_DES'		=>	'Verursachen Sie 1000000 Schadenspunkte an gegnerischen Schiffen.',	
		'CLEAR_SKY_DES'		=>	'Zerstören Sie in einem Gefecht mindestens 50% der gegnerischen Flugzeuge, inklusive von Kreuzern und Schlachtschiffen gestartete Flugboote. Zerstören Sie mindestens 30 Flugzeuge.',	
		'DOUBLE_KILL_DES'		=>	'Zerstören Sie mindestens 2 gegnerische Schiffe. Das zweite Ziel muss 10 Sekunden nach dem ersten zerstört werden.',	
		'WARRIOR_DES'		=>	'Zerstören Sie mindestens 5 gegnerische Schiffe.',	
		'WORKAHOLIC_DES'		=>	'Schließen Sie 100 Tagesaufträge ab.',	
		'FIRST_BLOOD_DES'		=>	'Zerstören Sie im Gefecht als erster ein gegnerisches Schiff.',	
		'DETONATED_DES'		=>	'Erhalten Sie Schaden am Magazin, der zu einer Detonation führt.',	
		'LIQUIDATOR_DES'		=>	'Verursachen Sie einen Wassereinbruch bei einem Schiff und zerstören Sie es. Der durch Überflutung verursachte Schaden muss 40% der Ausgangs-TP des zerstörten Schiffes übersteigen.',	
		'MERCENARY_DES'		=>	'Schließen Sie 50 Tagesaufträge ab.',	
		'WITHERING_DES'		=>	'Verursachen sie mindestens 60000 TP Schaden an gegnerischen Schiffen durch Brand und Wassereinbruch.',	
		'CHIEF_ENGINEER_DES'		=>	'Erforschen Sie 50 Schiffe.',	
		'ARSONIST_DES'		=>	'Stecken Sie ein gegnerisches Schiff in Brand und zerstören Sie es. Der Schaden durch Brand muss 40% der Ausgangs-TP des zerstörten Schiffs ausmachen.',	
		'FIREPROOF_DES'		=>	'Erhalten Sie Schaden durch Brände, der 40% der Ausgangs-TP Ihres Schiffes übersteigt und überleben Sie das Gefecht.',	
		'AMAUTEUR_DES'		=>	'Gewinnen Sie 10 Zufallsgefechte.',	
		'SCIENCE_OF_WINNING_LUCKY_DES'		=>	'Zerstören Sie ein gegnerisches Schiff, indem Sie dessen Munitionsbunker zur Detonation bringen.',
	),
);

?>