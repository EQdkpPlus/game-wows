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
$english_array =  array(
	'factions' => array(
		'us'	=> 'United States',	
		'jpn'	=> 'Japan',					
		'ger'	=> 'Germany',			
		'gb'	=> 'United Kingdom',			
		'udssr'	=> 'Soviet Union',
	),
	'roles' => array(
		1	=> 'Destroyer',
		2	=> 'Cruiser',
		3	=> 'Battleship',
		4	=> 'Carrier',
	),
	'classes' => array(
		1	=> 'Destroyer',
		2	=> 'Cruiser',
		3	=> 'Battleship',
		4	=> 'Carrier',
	),



//Selection for Fleet

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
		1		=>	'I Hashidate',
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

// Germany	
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

// Britain
	'gbdestroyer' => array(
		11		=>	'*III Campbeltown*',
		),
	'gbcruiser' => array(
		1		=>	'I Black Swan',
		2		=>	'II Weymouth',
		3		=>	'III Caledon',
		4		=>	'IV Danae',
		5		=>	'V Emerald',
		6		=>	'VI Leander',
		7		=>	'VII Fiji',
		8		=>	'VIII Edinburgh',
		9		=>	'IX Neptune',
		10		=>	'X Minotaur',
		),
	'gbbattleship'	=> array(
		11		=>	'*VI Warspite*'
		),
	'gbcarrier'	=>array(
		0		=>	'-----',
		),	
// Soviet Union
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
		'tab_fleet'			=>	'Fleet',
		'uc_cat_fleet'		=>	'Fleet',
		'uc_myfleet'		=> 'My Fleet',
		'uc_faction'		=> 'Preferred Nation',
		'uc_class'			=> 'preferred Shipclass',
		'uc_profil'			=> 'Profil',
		'uc_achievement'	=> 'Achievements',
		'id_miss'			=> 'Specify Wargamin ID and Realm',
		'wargaming_level'	=>	'Rank',
		//Events
		'event_1'				=>	'Random Battle',
		'event_2'				=>	'Co-op Battle',
		'event_3'				=>	'Ranked Battle',
		'event_4'				=>	'Team Battle',
		
		
		'uc_us_destroyer'	=> 'US Destoyer',
		'uc_us_cruiser'		=> 'US Cruiser',
		'uc_us_battleship'	=> 'US Battleship',
		'uc_us_carrier'		=> 'US Carrier',
		
		'uc_jpn_destroyer'	=> 'JPN Destoyer',
		'uc_jpn_cruiser'	=> 'JPN Cruiser',
		'uc_jpn_battleship'	=> 'JPN Battleship',
		'uc_jpn_carrier'	=> 'JPN Carrier',
		'uc_jpn_premium'	=> 'JPN Premiumschiffe',
		
//		'uc_ger_destroyer'	=> 'GER Destoyer',
		'uc_ger_cruiser'	=> 'GER Cruiser',
		'uc_ger_battleship'	=> 'GER Battleship',
//		'uc_ger_carrier'	=> 'GER Carrier',
		
		'uc_gb_destroyer'	=> 'GB Destoyer',
		'uc_gb_cruiser'		=> 'GB Cruiser',
		'uc_gb_battleship'	=> 'GB Battleship',
//		'uc_gb_carrier'		=> 'GB Carrier',

		'uc_udssr_destroyer'	=> 'UDSSR Destoyer',
		'uc_udssr_cruiser'		=> 'UDSSR Cruiser',
//		'uc_udssr_battleship'	=> 'UDSSR Battleship',
//		'uc_udssr_carrier'		=> 'UDSSR Carrier',


//Achievement
		'RETRIBUTION'	=> 'Its Just a Flesh Wound!',
		'FIGHTER'		=>	'Warrior',	
		'ST_PARTICIPANT'		=>	'ST Participant',	
		'SUPPORT'		=>	'Confederate',	
		'ONE_SOLDIER_IN_THE_FIELD'		=>	'Solo Warrior',	
		'AT_PARTICIPANT'		=>	'AT Veteran',	
		'SEA_LEGEND'		=>	'Bane of the Oceans',	
		'MESSENGER'		=>	'In the Thick of It',	
		'UNSINKABLE'		=>	'Unsinkable',	
		'SCIENCE_OF_WINNING_ARSONIST'		=>	'Naval Warfare. Arson',	
		'WGSPB_STAFF'		=>	'Developer',	
		'SCIENCE_OF_WINNING_TACTICIAN'		=>	'Naval Warfare. Tactics',	
		'ENGINEER'		=>	'Naval Constructor',	
		'BATTLE_HERO'		=>	'Battle Hero',	
		'WG_STAFF'		=>	'Wargaming',	
		'MAIN_CALIBER'		=>	'High Caliber',	
		'HEADBUTT'		=>	'Die-Hard',	
		'INSTANT_KILL'		=>	'Devastating Strike',	
		'JUNIOR_PLANNER'		=>	'Junior Naval Designer',	
		'SCIENCE_OF_WINNING_HARD_EDGED'		=>	'Naval Warfare. Ramming',	
		'ATBA_CALIBER'		=>	'Close Quarters Expert',	
		'CBT_PARTICIPANT'		=>	'CBT Veteran',	
		'SCIENCE_OF_WINNING_TO_THE_BOTTOM'		=>	'Naval Warfare. Flooding',	
		'VETERAN'		=>	'Veteran',	
		'NO_DAY_WITHOUT_ADVENTURE'		=>	'A Day Without Adventure Is a Wasted One',	
		'NEVER_ENOUGH_MONEY'		=>	'Business Magnate',	
		'MILLIONAIR'		=>	'Moneybags',	
		'NO_PRICE_FOR_HEROISM'		=>	'Legend of the Seas',	
		'BW_PARTICIPANT'		=>	'BW Participant',	
		'DREADNOUGHT'		=>	'Dreadnought',	
		'CAPITAL'		=>	'Initial Capital',	
		'SCIENCE_OF_WINNING_BOMBARDIER'		=>	'Naval Warfare. Weaponry Basics',	
		'CLEAR_SKY'		=>	'Clear Sky',	
		'DOUBLE_KILL'		=>	'Double Strike',	
		'WARRIOR'		=>	'Kraken Unleashed!',	
		'WORKAHOLIC'		=>	'Ready for Anything',	
		'FIRST_BLOOD'		=>	'First Blood',	
		'DETONATED'		=>	'Detonation',	
		'LIQUIDATOR'		=>	'Liquidator',	
		'MERCENARY'		=>	'Workhorse',	
		'WITHERING'		=>	'Witherer',	
		'CHIEF_ENGINEER'		=>	'Chief Naval Architect',	
		'ARSONIST'		=>	'Arsonist',	
		'FIREPROOF'		=>	'Fireproof',	
		'AMAUTEUR'		=>	'Amateur',	
		'SCIENCE_OF_WINNING_LUCKY'		=>	'Naval Warfare. Lucky Shot',
		'BD2016_RUN_FOREST'	=>	'Run! Admiral! Run!',
		'BD2016_KING_OF_PARTY'	=>	'King of the Party',
		'BD2016_WRONG_SOW'	=>	'A shot in the dark',
		'BD2016_MANNERS'	=>	'Manners Maketh Man',
		'BD2016_SNATCH'		=>	'Big Roll',
		'BD2016_PARTY_ANIMAL'	=>	'Life and Soul of the Party',
		'BD2016_RISE_OF_THE_MACHINES'	=>	'Rise of the Machines',
		'BD2016_FESTIV_SOUP'	=>	'Festive Soup',
		'BD2016_FIRESHOW'	=>	'Fire Show',
		'BD2016_PARTY_CHECK_IN'	=>	'Queue Jumper',
		
		
// Achievement Tooltip-Descrition		
		'RETRIBUTION_DES'		=>	'Destroy an enemy ship after your ship has been destroyed.',
		'FIGHTER_DES'		=>	'Win 50 Random Battles.',	
		'ST_PARTICIPANT_DES'		=>	'The developers thank you for participating in the Supertest.',	
		'SUPPORT_DES'		=>	'Damage at least 6 enemy ships. Damage caused to each ship must exceed 20% of her normal HP.',	
		'ONE_SOLDIER_IN_THE_FIELD_DES'		=>	'Stand alone against at least 4 enemy ships and win the battle.',	
		'AT_PARTICIPANT_DES'		=>	'The developers thank you for participating in the Alpha Test.',	
		'SEA_LEGEND_DES'		=>	'Receive any 100 heroic achievements.',	
		'MESSENGER_DES'		=>	'Complete 5 daily missions.',	
		'UNSINKABLE_DES'		=>	'Receive damage from flooding that exceeds 40% of your ships normal HP and survive the battle.',	
		'SCIENCE_OF_WINNING_ARSONIST_DES'		=>	'Destroy an enemy ship by setting her on fire.',	
		'WGSPB_STAFF_DES'		=>	'Wargaming St. Petersburg Employee',	
		'SCIENCE_OF_WINNING_TACTICIAN_DES'		=>	'Capture the enemy base.',	
		'ENGINEER_DES'		=>	'Research 10 ships.',	
		'BATTLE_HERO_DES'		=>	'Receive any 10 heroic achievements.',	
		'WG_STAFF_DES'		=>	'Wargaming Employee',	
		'MAIN_CALIBER_DES'		=>	'Damage at least 4 enemy ships. Damage caused must exceed 30% of the total HP of all the ships in the enemy team.',	
		'HEADBUTT_DES'		=>	'Destroy an enemy ship by ramming and survive.',	
		'INSTANT_KILL_DES'		=>	'Destroy an enemy ship with a single artillery salvo, torpedo salvo, or aircraft attack by causing damage over 50% of the destroyed ships normal HP.',	
		'JUNIOR_PLANNER_DES'		=>	'Research a new ship.',	
		'SCIENCE_OF_WINNING_HARD_EDGED_DES'		=>	'Destroy an enemy ship by ramming.',	
		'ATBA_CALIBER_DES'		=>	'Damage and destroy an enemy ship. The final direct damage must be caused by secondary battery guns.',	
		'CBT_PARTICIPANT_DES'		=>	'The developers thank you for participating in the Closed Beta Test.',	
		'SCIENCE_OF_WINNING_TO_THE_BOTTOM_DES'		=>	'Destroy an enemy ship by flooding.',	
		'VETERAN_DES'		=>	'Win 100 Random Battles.',	
		'NO_DAY_WITHOUT_ADVENTURE_DES'		=>	'Complete at least 1 daily mission per day for 5 days in a row.',	
		'NEVER_ENOUGH_MONEY_DES'		=>	'Earn 10000000 credits.',	
		'MILLIONAIR_DES'		=>	'Earn 1000000 credits',	
		'NO_PRICE_FOR_HEROISM_DES'		=>	'Receive any 50 heroic achievements.',	
		'BW_PARTICIPANT_DES'		=>	'The developers thank you for participating in the Beta Weekend.',	
		'DREADNOUGHT_DES'		=>	'Receive damage exceeding 120% of your ships normal HP from 4 or more enemies and survive the battle.',	
		'CAPITAL_DES'		=>	'Earn 100000 credits.',	
		'SCIENCE_OF_WINNING_BOMBARDIER_DES'		=>	'Cause 1000000 HP of damage to enemy ships.',	
		'CLEAR_SKY_DES'		=>	'In a single battle, destroy more than 50% of enemy aircraft, including floatplanes launched from cruisers and battleships. You must destroy at least 30 aircraft.',	
		'DOUBLE_KILL_DES'		=>	'Destroy 2 enemy ships. The second target must be destroyed within 10 seconds after the first one.',	
		'WARRIOR_DES'		=>	'Destroy 5 or more enemy ships.',	
		'WORKAHOLIC_DES'		=>	'Complete 100 daily missions.',	
		'FIRST_BLOOD_DES'		=>	'Be the first to destroy an enemy ship in battle.',	
		'DETONATED_DES'		=>	'Receive damage to the magazine resulting in detonation.',	
		'LIQUIDATOR_DES'		=>	'Cause flooding on an enemy ship and destroy her. Damage caused by flooding must exceed 40% of the destroyed ships normal HP.',	
		'MERCENARY_DES'		=>	'Complete 50 daily missions.',	
		'WITHERING_DES'		=>	'Cause at least 60000 HP of fire and flooding damage to enemy ships.',	
		'CHIEF_ENGINEER_DES'		=>	'Research 50 ships.',	
		'ARSONIST_DES'		=>	'Set an enemy ship on fire and destroy her. Damage caused by fire must exceed 40% of the destroyed ships normal HP.',	
		'FIREPROOF_DES'		=>	'Receive damage caused by fire that exceeds 40% of your ships normal HP and survive the battle.',	
		'AMAUTEUR_DES'		=>	'Win 10 Random Battles.',	
		'SCIENCE_OF_WINNING_LUCKY_DES'		=>	'Destroy an enemy ship by causing damage to her magazine, resulting in its detonation.',
		'BD2016_RUN_FOREST'	=>	'You did it!',
		'BD2016_KING_OF_PARTY'	=>	'You did it!',
		'BD2016_WRONG_SOW'	=>	'You did it!',
		'BD2016_MANNERS'	=>	'You did it!',
		'BD2016_SNATCH'		=>	'You did it!',
		'BD2016_PARTY_ANIMAL'	=>	'You did it!',
		'BD2016_RISE_OF_THE_MACHINES'	=>	'You did it!',
		'BD2016_FESTIV_SOUP'	=>	'You did it!',
		'BD2016_FIRESHOW'	=>	'You did it!',
		'BD2016_PARTY_CHECK_IN'	=>	'You did it!',
	),
);

?>