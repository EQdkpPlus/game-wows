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
	$usdestroyername =  array( //Namen i.o.
		2		=>	'Sampson',
		3		=>	'Wickes',
		4		=>	'Clemson',
		5		=>	'Nicholas',
		6		=>	'Farragut',
		7		=>	'Mahan',
		8		=>	'Benson',
		9		=>	'Fletcher',
		10		=>	'Gearing',
		);
	$usdestroyerdata =  array( //Daten i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0'),
		2 => array(	1 	=> '10',2 	=> '20',3 	=> '9', 4 	=> '2', 5 	=> '65',6 	=> '96'),
		3 => array(	1 	=> '11',2 	=> '20',3 	=> '13',4 	=> '2', 5 	=> '78',6 	=> '92'),
		4 => array(	1 	=> '13',2	=> '20',3 	=> '22',4	=> '2',	5	=> '85',6	=> '90'),
		5 => array(	1 	=> '19',2	=> '26',3	=> '21',4	=> '2',	5	=> '89',6	=> '92'),
		6 => array(	1	=> '19',2	=> '27',3	=> '13',4	=> '12',5	=> '87',6	=> '87'),
		7 => array(	1	=> '22',2	=> '27',3	=> '24',4	=> '12',5	=> '80',6	=> '85'),
		8 => array(	1	=> '24',2	=> '27',3	=> '16',4	=> '12',5	=> '90',6	=> '88'),
		9 => array(	1	=> '27',2	=> '28',3	=> '20',4	=> '23',5	=> '82',6	=> '87'),
		10 => array(1	=> '35',2	=> '29',3	=> '37',4	=> '35',5	=> '86',6	=> '85'),
	);
 	$uscruisername =  array( // Namen i.o.
		1		=>	'Erie',
		2		=>	'Chester',
		3		=>	'St. Louis',
		4		=>	'Phoenix',
		5		=>	'Omaha',
		6		=>	'Cleveland',
		7		=>	'Pensacola',
		8		=>	'New Orleans',
		9		=>	'Baltimore',
		10		=>	'Des Moines',
		);
	$uscruiserdata =  array( //Daten n.i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '20',3 	=> '9', 4 	=> '2', 5 	=> '65',6 	=> '96'),
		3 => array(	1 	=> '0',2 	=> '20',3 	=> '13',4 	=> '2', 5 	=> '78',6 	=> '92'),
		4 => array(	1 	=> '0',2	=> '20',3 	=> '22',4	=> '2',	5	=> '85',6	=> '90'),
		5 => array(	1 	=> '19',2	=> '26',3	=> '21',4	=> '2',	5	=> '89',6	=> '92'),
		6 => array(	1	=> '19',2	=> '27',3	=> '13',4	=> '12',5	=> '87',6	=> '87'),
		7 => array(	1	=> '22',2	=> '27',3	=> '24',4	=> '12',5	=> '80',6	=> '85'),
		8 => array(	1	=> '24',2	=> '27',3	=> '16',4	=> '12',5	=> '90',6	=> '88'),
		9 => array(	1	=> '27',2	=> '28',3	=> '20',4	=> '23',5	=> '82',6	=> '87'),
		10 => array(1	=> '35',2	=> '29',3	=> '37',4	=> '35',5	=> '86',6	=> '85'),
	);
	$usbattleshipname =  array( // Namen i.o.
		3		=>	'South Carolina',
		4		=>	'Wyoming',
		5		=>	'New York',
		6		=>	'New Mexico',
		7		=>	'Colorado',
		8		=>	'North Carolina',
		9		=>	'Iowa',
		10		=>	'Montana',
		);
	$usbattleshipdata =  array( //Daten n.i.o.
		0 => array	(1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0'),
		1 => array	(1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0'),
		2 => array	(1 	=> '0',2 	=> '20',3 	=> '9', 4 	=> '2', 5 	=> '65',6 	=> '96'),
		3 => array(	1 	=> '0', 2 	=> '0',3 	=> '9', 4  	=> '0', 5 	=> '0', 6 	=> '0',),
		4 => array	(1 	=> '0',2	=> '20',3 	=> '22',4	=> '2',	5	=> '85',6	=> '90'),
		5 => array	(1 	=> '19',2	=> '26',3	=> '21',4	=> '2',	5	=> '89',6	=> '92'),
		6 => array	(1	=> '19',2	=> '27',3	=> '13',4	=> '12',5	=> '87',6	=> '87'),
		7 => array	(1	=> '22',2	=> '27',3	=> '24',4	=> '12',5	=> '80',6	=> '85'),
		8 => array	(1	=> '24',2	=> '27',3	=> '16',4	=> '12',5	=> '90',6	=> '88'),
		9 => array	(1	=> '27',2	=> '28',3	=> '20',4	=> '23',5	=> '82',6	=> '87'),
		10 => array	(1	=> '35',2	=> '29',3	=> '37',4	=> '35',5	=> '86',6	=> '85'),
	);
	$uscarriername =  array( // Namen i.o.
		4		=>	'Langley',
		5		=>	'Bogue',
		6		=>	'Independence',
		7		=>	'Ranger',
		8		=>	'Lexington',
		9		=>	'Essex',
		10		=>	'Midway',
		);
	$uscarrierdata =  array( //Daten i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	4 	=> '0', 5 	=> '0', 6 	=> '0', 7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0', 7 	=> '0'),
		2 => array(	1 	=> '0', 2 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0', 7 	=> '0'),
		3 => array(	1 	=> '0', 2 	=> '0', 4  	=> '0', 5 	=> '0', 6 	=> '0', 7 	=> '0'),
		4 => array(	1 	=> '40',2	=> '4', 4	=> '0',	5	=> '7', 6	=> '67',7 	=> '11'),
		5 => array(	1 	=> '43', 2 	=> '3', 4  	=> '24', 5 	=> '9', 6 	=> '59', 7 	=> '12'),
		6 => array(	1 	=> '45', 2 	=> '3', 4  	=> '29', 5 	=> '50', 6 	=> '57', 7 	=> '20'),
		7 => array(	1 	=> '56', 2 	=> '5', 4  	=> '28', 5 	=> '39', 6 	=> '35', 7 	=> '30'),
		8 => array(	1 	=> '69', 2 	=> '7', 4  	=> '61', 5 	=> '53', 6 	=> '16', 7 	=> '43'),
		9 => array(	1 	=> '70', 2 	=> '6', 4  	=> '49', 5 	=> '51', 6 	=> '29', 7 	=> '45'),
		10 => array(	1 	=> '87', 2 	=> '7', 4  	=> '71', 5 	=> '52', 6 	=> '5', 7 	=> '74'),
	);
	$uspremiumname =  array( // Namen i.o.
	//	2		=>	'Albany',
		7		=>	'Atlanta',
		);
	$uspremiumdata =  array( //Daten i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '0',3 	=> '0', 4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		3 => array(	1 	=> '0',2 	=> '0',3 	=> '13',4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		4 => array(	1 	=> '0',2	=> '0',3 	=> '22',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		5 => array(	1 	=> '0',2	=> '0',3	=> '21',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		6 => array(	1	=> '0',2	=> '0',3	=> '13',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		7 => array(	1	=> '39',2	=> '30',3	=> '16',4	=> '37',5	=> '66',6	=> '65'),
		8 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		9 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		10 => array(1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
	);
 ?>