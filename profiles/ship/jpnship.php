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
	$jpndestroyername =  array( //Namen i.o.
		2		=>	'Umikaze',
		3		=>	'Wakatake',
		4		=>	'Isokaze',
		5		=>	'Minekaze',
		6		=>	'Mutsuki',
		7		=>	'Hatsuharu',
		8		=>	'Fubuki',
		9		=>	'Kagero',
		10		=>	'Shimakaze',
		);
	$jpndestroyerdata =  array( //Daten n.i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '0',3 	=> '0', 4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		3 => array(	1 	=> '0',2 	=> '0',3 	=> '0',4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		4 => array(	1 	=> '0',2	=> '0',3 	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		5 => array(	1 	=> '0',2	=> '0',3	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		6 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		7 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0'),
		8 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		9 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		10 => array(1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
	);
 	$jpncruisername =  array( // Namen i.o.
		1		=>	'Hashidate',
		2		=>	'Chikuma',
		3		=>	'Tenryu',
		4		=>	'Kuma',
		5		=>	'Furutaka',
		6		=>	'Aoba',
		7		=>	'Myoko',
		8		=>	'Mogami',
		9		=>	'Ibuki',
		10		=>	'Khabarovsk',
		);
	$jpncruiserdata =  array( //Daten n.i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '0',3 	=> '0', 4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		3 => array(	1 	=> '0',2 	=> '0',3 	=> '0',4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		4 => array(	1 	=> '0',2	=> '0',3 	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		5 => array(	1 	=> '0',2	=> '0',3	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		6 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		7 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0'),
		8 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		9 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		10 => array(1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
	);
	$jpnbattleshipname =  array( // Namen i.o.
		3		=>	'Kawachi',
		4		=>	'Myogi',
		5		=>	'Kongo',
		6		=>	'Fuso',
		7		=>	'Nagato',
		8		=>	'Amagi',
		9		=>	'Izumo',
		10		=>	'Yamato',
		);
	$jpnbattleshipdata =  array( //Daten n.i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '0',3 	=> '0', 4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		3 => array(	1 	=> '0',2 	=> '0',3 	=> '0',4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		4 => array(	1 	=> '0',2	=> '0',3 	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		5 => array(	1 	=> '0',2	=> '0',3	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		6 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		7 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0'),
		8 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		9 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		10 => array(1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
	);
	$jpncarriername =  array( // Namen i.o.
		4		=>	'Hosho',
		5		=>	'Zuiho',
		6		=>	'Ryujo',
		7		=>	'Hiryu',
		8		=>	'Shokaku',
		9		=>	'Taiho',
		10		=>	'Hakuryu',
		);
	$jpncarrierdata =  array( //Daten n.i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '0',3 	=> '0', 4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		3 => array(	1 	=> '0',2 	=> '0',3 	=> '0',4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		4 => array(	1 	=> '0',2	=> '0',3 	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		5 => array(	1 	=> '0',2	=> '0',3	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		6 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		7 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0'),
		8 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		9 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		10 => array(1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
	);
/*	$jpnpremiumname =  array( // Namen i.o.
	// zweites premium fehlt Destroy II Tachibana
		2		=>	'Mikasa',
		4		=>	'Ishizuchi',
		8		=>	'Atago',
		);
	$jpnpremiumdata =  array( //Daten n.i.o.
		0 => array(	1 	=> '0',	2 	=> '0',	3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		1 => array(	1 	=> '0',	2 	=> '0', 3 	=> '0', 4 	=> '0', 5 	=> '0', 6 	=> '0',7 	=> '0'),
		2 => array(	1 	=> '0',2 	=> '0',3 	=> '0', 4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		3 => array(	1 	=> '0',2 	=> '0',3 	=> '0',4 	=> '0', 5 	=> '0',6 	=> '0',7 	=> '0'),
		4 => array(	1 	=> '0',2	=> '0',3 	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		5 => array(	1 	=> '0',2	=> '0',3	=> '0',4	=> '0',	5	=> '0',6	=> '0',7 	=> '0'),
		6 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		7 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0'),
		8 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		9 => array(	1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
		10 => array(1	=> '0',2	=> '0',3	=> '0',4	=> '0',5	=> '0',6	=> '0',7 	=> '0'),
	);
*/
 ?>