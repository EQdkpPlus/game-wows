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
		public $version				= '0.5.8.1';
		protected $this_game		= 'wows';
		protected $types			= array('factions','classes','roles');
		protected $classes			= array();
		protected $races			= array();
		public $langs				= array('german');

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
			1 => array(1,2,3,4,5),
			2 => array(1,2,3,4,5),
			3 => array(1,2,3,4,5),
			4 => array(1,2,3,4,5)
		);
		protected $class_colors = array(
			1	=> '#770000',
			2	=> '#007700',
			3	=> '#000077',
			4	=> '#770077',
			5	=> '#777700',
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
			$this->load_type('uspremium', array($this->lang));
			$this->load_type('jpndestroyer', array($this->lang));
			$this->load_type('jpncruiser', array($this->lang));
			$this->load_type('jpnbattleship', array($this->lang));
			$this->load_type('jpncarrier', array($this->lang));
			$this->load_type('jpnpremium', array($this->lang));
			$this->load_type('gerdestroyer', array($this->lang));
			$this->load_type('gercruiser', array($this->lang));
			$this->load_type('gerbattleship', array($this->lang));
			$this->load_type('gercarrier', array($this->lang));
			$this->load_type('gerpremium', array($this->lang));
			$this->load_type('gbdestroyer', array($this->lang));
			$this->load_type('gbcruiser', array($this->lang));
			$this->load_type('gbbattleship', array($this->lang));
			$this->load_type('gbcarrier', array($this->lang));
			$this->load_type('gbpremium', array($this->lang));
			$this->load_type('udssrdestroyer', array($this->lang));
			$this->load_type('udssrcruiser', array($this->lang));
			$this->load_type('udssrbattleship', array($this->lang));
			$this->load_type('udssrcarrier', array($this->lang));
			$this->load_type('udssrpremium', array($this->lang));






			$fields = array(
				'wID'	=> array(
					'type'			=> 'int',
					'category'		=> 'character',
					'lang'			=> 'account_id',
					'size'			=> 9,
					'undeletable'	=> true,
					'sort'			=> 1,
				),
				'realm'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_realm',
					'options'		=> array(
										1	=> 'DE',
										2	=> 'EN',
										3	=> 'RU',
										4	=> 'ES',
										5	=> 'FR',
										),
					'tolang'		=> true,
					'undeletable'	=> true,
					'sort'			=> 2
				),
				

// Auswahl us Schiffe
				'usdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'usa',
					'lang'			=> 'uc_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->usdestroyer[$this->lang],
					'sort'			=> 1,
				),
				'uscruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'usa',
					'lang'			=> 'uc_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->uscruiser[$this->lang],
					'sort'			=> 2,
				),
				'usbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'usa',
					'lang'			=> 'uc_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->usbattleship[$this->lang],
					'sort'			=> 3,
				),
				'uscarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'usa',
					'lang'			=> 'uc_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->uscarrier[$this->lang],
					'sort'			=> 4,
				),
/*				'uspremium'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'usa',
					'lang'			=> 'uc_premium',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->uspremium[$this->lang],
					'sort'			=> 5,
				),
*/
// Auswahl japanische Schiffe
				'jpndestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'jpn',
					'lang'			=> 'uc_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpndestroyer[$this->lang],
					'sort'			=> 1,
				),
				'jpncruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'jpn',
					'lang'			=> 'uc_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpncruiser[$this->lang],
					'sort'			=> 2,
				),
				'jpnbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'jpn',
					'lang'			=> 'uc_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpnbattleship[$this->lang],
					'sort'			=> 3,
				),
				'jpncarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'jpn',
					'lang'			=> 'uc_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpncarrier[$this->lang],
					'sort'			=> 4,
				),
/*				'jpnpremium'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'jpn',
					'lang'			=> 'uc_premium',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->jpnpremium[$this->lang],
					'sort'			=> 5,
				),
*/
// Auswahl deutsche Schiffe
/*				'gerdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'ger',
					'lang'			=> 'uc_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gerdestroyer[$this->lang],
					'sort'			=> 1,
				),
*/
				'gercruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'ger',
					'lang'			=> 'uc_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gercruiser[$this->lang],
					'sort'			=> 2,
				),
/*
				'gerbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'ger',
					'lang'			=> 'uc_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gerbattleship[$this->lang],
					'sort'			=> 3,
				),
				'gercarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'ger',
					'lang'			=> 'uc_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gercarrier[$this->lang],
					'sort'			=> 4,
				),
				'gerpremium'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'ger',
					'lang'			=> 'uc_premium',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gerpremium[$this->lang],
					'sort'			=> 5,
				),
*/
/* Auswahl britische Schiffe
				'gbdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'gb',
					'lang'			=> 'uc_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbdestroyer[$this->lang],
					'sort'			=> 1,
				),
				'gbcruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'gb',
					'lang'			=> 'uc_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbcruiser[$this->lang],
					'sort'			=> 2,
				),
				'gbbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'gb',
					'lang'			=> 'uc_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbbattleship[$this->lang],
					'sort'			=> 3,
				),
				'gbcarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'gb',
					'lang'			=> 'uc_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbcarrier[$this->lang],
					'sort'			=> 4,
				),
				'gbpremium'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'gb',
					'lang'			=> 'uc_premium',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->gbpremium[$this->lang],
					'sort'			=> 5,
				),
*/
// Auswahl russische Schiffe
				'udssrdestroyer'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'udssr',
					'lang'			=> 'uc_destroyer',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrdestroyer[$this->lang],
					'sort'			=> 1,
				),
				'udssrcruiser'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'udssr',
					'lang'			=> 'uc_cruiser',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrcruiser[$this->lang],
					'sort'			=> 2,
				),
/*				'udssrbattleship'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'udssr',
					'lang'			=> 'uc_battleship',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrbattleship[$this->lang],
					'sort'			=> 3,
				),
				'udssrcarrier'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'udssr',
					'lang'			=> 'uc_carrier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrcarrier[$this->lang],
					'sort'			=> 4,
				),
				'udssrpremium'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'udssr',
					'lang'			=> 'uc_premium',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->udssrpremium[$this->lang],
					'sort'			=> 5,
				),
*/

			);
			return $fields;
		}
		
		public function install($install=false){
			return array();
		}

		protected function load_filters($langs){
			return array();
		}
	}
}
?>