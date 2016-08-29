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

if(!class_exists('wows')) {
	class wows extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.5.10.0';
		protected $this_game		= 'wows';
		protected $types			= array('factions','classes','roles');
		protected $classes			= array();
		protected $races			= array();
		public $langs				= array('german','english');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> false,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
						'factions' => array(
								'us'	=> array(1,2,3,4,5),	
								'jpn'	=> array(1,2,3,4,5),					
								'ger'	=> array(1,2,3,4,5),			
								'gb'	=> array(1,2,3,4,5),			
								'udssr'	=> array(1,2,3,4,5),
						),
					),
				),
		);
		public $default_roles = array( 
			1 => array(1,2,3,4),
			2 => array(1,2,3,4),
			3 => array(1,2,3,4),
			4 => array(1,2,3,4)
		);
		protected $class_colors = array(
			1	=> '#ffcb80',
			2	=> '#ffcb80',
			3	=> '#ffcb80',
			4	=> '#ffcb80',
		);
		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;
		
		public function profilefields(){
		
// Laden der Schiffsnamen aus der Sprachdatei für Dropdownmenü
			$this->load_type('usdestroyer', array($this->lang));
			$this->load_type('uscruiser', array($this->lang));
			$this->load_type('usbattleship', array($this->lang));
			$this->load_type('uscarrier', array($this->lang));

			$this->load_type('jpndestroyer', array($this->lang));
			$this->load_type('jpncruiser', array($this->lang));
			$this->load_type('jpnbattleship', array($this->lang));
			$this->load_type('jpncarrier', array($this->lang));

			$this->load_type('gerdestroyer', array($this->lang));
			$this->load_type('gercruiser', array($this->lang));
			$this->load_type('gerbattleship', array($this->lang));
			$this->load_type('gercarrier', array($this->lang));

			$this->load_type('gbdestroyer', array($this->lang));
			$this->load_type('gbcruiser', array($this->lang));
			$this->load_type('gbbattleship', array($this->lang));
			$this->load_type('gbcarrier', array($this->lang));

			$this->load_type('udssrdestroyer', array($this->lang));
			$this->load_type('udssrcruiser', array($this->lang));
			$this->load_type('udssrbattleship', array($this->lang));
			$this->load_type('udssrcarrier', array($this->lang));


			$fields = array(
				'wID'	=> array(
					'type'			=> 'int',
					'category'		=> 'character',
					'lang'			=> 'uc_account_id',
					'size'			=> 9,
					'undeletable'	=> true,
					'sort'			=> 1,
				),
				'wrealm'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_realm',
					'options'		=> array(
										'eu'	=> 'EU',
										'ru'	=> 'RU',
										'com'	=> 'NA',
										'kr'	=> 'KR',
										'asia'	=>	'ASIA',
										),
					'tolang'		=> true,
					'undeletable'	=> true,
					'sort'			=> 2
				),
				
// Auswahl us Schiffe
				'usdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_us_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->usdestroyer[$this->lang],  //Name aus german.php/english.php
					'sort'			=> 1,
				),
				'uscruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_us_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->uscruiser[$this->lang],
					'sort'			=> 2,
				),
				'usbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_us_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->usbattleship[$this->lang],
					'sort'			=> 3,
				),
				'uscarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_us_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->uscarrier[$this->lang],
					'sort'			=> 4,
				),


// Auswahl japanische Schiffe
				'jpndestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_jpn_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpndestroyer[$this->lang],
					'sort'			=> 5,
				),
				'jpncruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_jpn_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpncruiser[$this->lang],
					'sort'			=> 6,
				),
				'jpnbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_jpn_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpnbattleship[$this->lang],
					'sort'			=> 7,
				),
				'jpncarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_jpn_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpncarrier[$this->lang],
					'sort'			=> 8,
				),

// Auswahl deutsche Schiffe
/*				'gerdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_ger_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gerdestroyer[$this->lang],
					'sort'			=> 9,
				),
*/
				'gercruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_ger_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gercruiser[$this->lang],
					'sort'			=> 10,
				),

				'gerbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_ger_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gerbattleship[$this->lang],
					'sort'			=> 11,
				),
/*
				'gercarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_ger_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gercarrier[$this->lang],
					'sort'			=> 12,
				),
*/


// Auswahl britische Schiffe
				'gbdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_gb_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbdestroyer[$this->lang],
					'sort'			=> 13,
				),
/*
				'gbcruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_gb_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbcruiser[$this->lang],
					'sort'			=> 14,
				),
*/
				'gbbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_gb_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbbattleship[$this->lang],
					'sort'			=> 15,
				),
/*
				'gbcarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_gb_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbcarrier[$this->lang],
					'sort'			=> 16,
				),
*/

// Auswahl russische Schiffe
				'udssrdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_udssr_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrdestroyer[$this->lang],
					'sort'			=> 17,
				),
				'udssrcruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_udssr_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrcruiser[$this->lang],
					'sort'			=> 18,
				),
/*				'udssrbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_udssr_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrbattleship[$this->lang],
					'sort'			=> 19,
				),
				'udssrcarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'fleet',
					'lang'			=> 'uc_udssr_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrcarrier[$this->lang],
					'sort'			=> 20,
				),
*/
			);
			return $fields;
		}
		
		public function install($install=false){
			
			$arrEventIDs = array();

			// Legion events
			$arrEventIDs[] = $this->game->addEvent($this->glang('event_1'), 0, "1.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event_2'), 0, "2.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event_3'), 0, "3.png");
			$arrEventIDs[] = $this->game->addEvent($this->glang('event_4'), 0, "4.png");
			
			
			//Links
			$this->game->addLink('Wargaming', 'http://worldofwarships.eu/de/content/game/');
		}
		public function uninstall(){
			$this->game->removeLink("Wargaming");
		}
		protected function load_filters($langs){
			return array();
		}
	}
}
?>