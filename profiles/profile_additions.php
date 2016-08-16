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
 
 include 'ship/usship.php';
 include 'ship/udssrship.php';
 include 'ship/gership.php';
 include 'ship/gbship.php';
 include 'ship/jpnship.php';
	$this->jquery->Tab_header('char1_tabs');

	// init infotooltip
	infotooltip_js();

	// Add css & JS Code
	$this->tpl->add_css("
		#wows-nation-flag img{
			width:200px;
		}
		#wows-profil_main {
			width:100%;
			margin-top:30px;
			outline: none;
			border-color: #000000;
			border-radius: 10px; 
			box-shadow: 0 0 10px #000000;
			-webkit-box-shadow: 0 0px 10px #000000;
			-moz-box-shadow: 0 0px 10px #000000;
		}
		#wows-profil_header {
			width:100%;
		}
		#wows-profil_body {
			width:100%;
		}
		#wows-profil_data {
			margin:1%;
			width:48%;
			float:left;
		}
		#wows-profil_premium {
			margin:1%;
			width:48%;
			float:left;

		}	
		#wows-profil_fleet {
			clear:both;
			margin:1%;
			width:98%;
		}
		#wows-profil_pic{
			clear:both;
			width:100%;
		}
		.wows-chardata_picture img {
			margin:1%;
			max-width:700px;
			}
		.wows-achievement{
			margin:1%;
			width:98%;
		}
		.wows-achievement img{
			width:10%;
		}
		.wows-ship_fleet img{
			width:10%;
		}
		.wows-fleet {
			margin-top:10px;
		}
		.wows-border{
			border-color: #FF8450;
			border:5px;
		}
		.toolleft {
			margin:10px;
			font-size:1em;
			float:left;
			width:100px;
		}
		.toolright {
			margin:10px;
			float:left;
			width:200px;
		}
		.toolmid {
			margin:10px;
			font-size:1em;
			float:left;
			width:20px;
		}
		.tool {
			width:200px;
		}
		a.wowstooltip {outline:none; }
		a.wowstooltip strong {line-height:30px;}
		a.wowstooltip:hover {text-decoration:none;} 
		a.wowstooltip span {
			z-index:10;display:none; padding:5px 5px;
			margin-top:100px; margin-left:-297px;
			width:380px;
			line-height:16px;
		}
		a.wowstooltip:hover span{
			display:inline; position:absolute; 
			border:2px solid #cece00;  color:#EEE;
			background:#000000;
		}
		.callout {
			z-index:20;
			position:absolute;
			border:0;
			top:-14px;
			left:120px;
		}
		a.wowstooltip span
		{
			border-radius:2px;        
			box-shadow: 0px 0px 8px 4px #666;
			/*opacity: 0.8;*/
		}
		a.wowstooltip2 {outline:none; }
		a.wowstooltip2 strong {line-height:30px;}
		a.wowstooltip2:hover {text-decoration:none;} 
		a.wowstooltip2 span {
			z-index:10;display:none; padding:5px 5px;
			margin-top:100px; margin-left:-297px;
			width:380px;
			line-height:16px;
		}
		a.wowstooltip2:hover span{
			display:inline; position:absolute; 
			border:2px solid #e70000;  color:#EEE;
			background:#000000;
		}
		a.wowstooltip2 span
		{
			border-radius:2px;        
			box-shadow: 0px 0px 8px 4px #666;
			/*opacity: 0.8;*/
		}
		a.wowstooltip3 {outline:none; }
		a.wowstooltip3 strong {line-height:30px;}
		a.wowstooltip3:hover {text-decoration:none;} 
		a.wowstooltip3 span {
			z-index:10;display:none; padding:5px 5px;
			margin-top:60px; margin-left:-115px;
			width:150px;
			line-height:16px;
		}
		a.wowstooltip3:hover span{
			display:inline; position:absolute; 
			border:2px solid #e70000;  color:#EEE;
			background:#000000;
		}
		a.wowstooltip3 span
		{
			border-radius:2px;        
			box-shadow: 0px 0px 8px 4px #666;
			/*opacity: 0.8;*/
		}
.achievement-block {
	float: left;
	position: relative;
	width: 80px;
	height: 80px;
	margin: 0 20px 20px 0;

}
.achievement{
	position: relative;
	z-index: 1;
	width: 100%;
	height: 0;
	padding-bottom: 100%;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: 50%;
	align: center;
}
.avalue {
	position: absolute;
	z-index: 2;
	left: 50%;
	bottom: 0;
	margin-left: -1em;
	width: 2em;
	background-color: #eee;
	border: 1px solid #434343;
	text-align: center;
	font-size: 11px;
	font-size: .6875rem;
	color: #000;
}
	");

	$wargamingID = $this->pdh->get('member', 'profile_field', array($this->url_id, 'wID'));
	$this->tpl->assign_vars(array(
		'CHARDATA_NAME'			=> $chardata['name'],
		'WARGAMING_ID'			=>	$wargamingID,
	));
	
	
	//Flags
	$nationflag = $this->pdh->get('member', 'profile_field', array($this->url_id, 'faction'));
	$levelicon = $this->pdh->get('member', 'profile_field', array($this->url_id, 'level'));
	$this->tpl->assign_vars(array(
	'NATION'			=> $this->server_path."games/wows/profiles/nations/".$nationflag,
	'PROFURL'			=> $this->server_path."games/wows/profiles/",
	'LEVEL'				=> $this->server_path."games/wows/profiles/level/".$levelicon.".png",
	'CLASS1ICON'		=> $this->server_path."games/wows/icons/classes/1_b.png",
	'CLASS2ICON'		=> $this->server_path."games/wows/icons/classes/2_b.png",
	'CLASS3ICON'		=> $this->server_path."games/wows/icons/classes/3_b.png",
	'CLASS4ICON'		=> $this->server_path."games/wows/icons/classes/4_b.png",
	'CLASS5ICON'		=> $this->server_path."games/wows/icons/classes/5_b.png",
	));
	
	$usship = $this->server_path."games/wows/profiles/nations/us.png";
	$jpnship = $this->server_path."games/wows/profiles/nations/jpn.png";
	$gbship = $this->server_path."games/wows/profiles/nations/gb.png";
	$udssrship = $this->server_path."games/wows/profiles/nations/udssr.png";
	$gership = $this->server_path."games/wows/profiles/nations/ger.png";
	
	//usdestroyers
	$usdestroyer = $this->pdh->get('member', 'profile_field', array($this->url_id, 'usdestroyer'));
	$shipcount = count ($usdestroyer);
	for ($i=0; $i<$shipcount; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/usa/destroyer/".$usdestroyer[$i].".png";
		$this->tpl->assign_block_vars(
			'usdestroyers', array(
					'ICON'	=> $shipicon,
					'NAT'	=> $usship,
					'ID'	=> $usdestroyer[$i],
					'NAME'	=> $usdestroyername[$usdestroyer[$i]],
					'BAR1'	=> $this->jquery->progressbar('us_des_bar1_'.$i, 0, array('completed' => $usdestroyerdata[$usdestroyer[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $usdestroyerdata[$usdestroyer[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('us_des_bar2_'.$i, 0, array('completed' => $usdestroyerdata[$usdestroyer[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $usdestroyerdata[$usdestroyer[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('us_des_bar3_'.$i, 0, array('completed' => $usdestroyerdata[$usdestroyer[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $usdestroyerdata[$usdestroyer[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('us_des_bar4_'.$i, 0, array('completed' => $usdestroyerdata[$usdestroyer[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $usdestroyerdata[$usdestroyer[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('us_des_bar5_'.$i, 0, array('completed' => $usdestroyerdata[$usdestroyer[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $usdestroyerdata[$usdestroyer[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('us_des_bar6_'.$i, 0, array('completed' => $usdestroyerdata[$usdestroyer[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $usdestroyerdata[$usdestroyer[$i]][6],
			)
		);	
	}

	//uscruisers
	$uscruiser = $this->pdh->get('member', 'profile_field', array($this->url_id, 'uscruiser'));
	$shipcount = count ($uscruiser);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/usa/cruiser/".$uscruiser[$i].".png";
		$this->tpl->assign_block_vars(
			'uscruisers', array(
					'ICON' => $shipicon,
					'NAT'	=> $usship,
					'ID'	=> $uscruiser[$i],
					'NAME'	=> $uscruisername[$uscruiser[$i]],
					'BAR1'	=> $this->jquery->progressbar('us_cru_bar1_'.$i, 0, array('completed' => $uscruiserdata[$uscruiser[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $uscruiserdata[$uscruiser[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('us_cru_bar2_'.$i, 0, array('completed' => $uscruiserdata[$uscruiser[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $uscruiserdata[$uscruiser[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('us_cru_bar3_'.$i, 0, array('completed' => $uscruiserdata[$uscruiser[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $uscruiserdata[$uscruiser[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('us_cru_bar4_'.$i, 0, array('completed' => $uscruiserdata[$uscruiser[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $uscruiserdata[$uscruiser[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('us_cru_bar5_'.$i, 0, array('completed' => $uscruiserdata[$uscruiser[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $uscruiserdata[$uscruiser[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('us_cru_bar6_'.$i, 0, array('completed' => $uscruiserdata[$uscruiser[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $uscruiserdata[$uscruiser[$i]][6],
					)
		);
	}
	//usbattleship
	$usbattleship = $this->pdh->get('member', 'profile_field', array($this->url_id, 'usbattleship'));
	$shipcount = count ($usbattleship);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/usa/battleship/".$usbattleship[$i].".png";
		$this->tpl->assign_block_vars(
			'usbattleships', array(
					'ICON' => $shipicon,
					'NAT'	=> $usship,
					'ID'	=> $usbattleship[$i],
					'NAME'	=> $usbattleshipname[$usbattleship[$i]],
					'BAR1'	=> $this->jquery->progressbar('us_bat_bar1_'.$i, 0, array('completed' => $usbattleshipdata[$usbattleship[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $usbattleshipdata[$usbattleship[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('us_bat_bar2_'.$i, 0, array('completed' => $usbattleshipdata[$usbattleship[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $usbattleshipdata[$usbattleship[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('us_bat_bar4_'.$i, 0, array('completed' => $usbattleshipdata[$usbattleship[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $usbattleshipdata[$usbattleship[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('us_bat_bar5_'.$i, 0, array('completed' => $usbattleshipdata[$usbattleship[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $usbattleshipdata[$usbattleship[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('us_bat_bar6_'.$i, 0, array('completed' => $usbattleshipdata[$usbattleship[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $usbattleshipdata[$usbattleship[$i]][6],
					)
		);
	}
	//uscarriers
	$uscarrier = $this->pdh->get('member', 'profile_field', array($this->url_id, 'uscarrier'));
	$shipcount = count ($uscarrier);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/usa/carrier/".$uscarrier[$i].".png";
		$this->tpl->assign_block_vars(
			'uscarriers', array(
					'ICON' => $shipicon,
					'NAT'	=> $usship,
					'ID'	=> $uscarrier[$i],
					'NAME'	=> $uscarriername[$uscarrier[$i]],
					'BAR1'	=> $this->jquery->progressbar('us_car_bar1_'.$i, 0, array('completed' => $uscarrierdata[$uscarrier[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $uscarrierdata[$uscarrier[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('us_car_bar2_'.$i, 0, array('completed' => $uscarrierdata[$uscarrier[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $uscarrierdata[$uscarrier[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('us_car_bar4_'.$i, 0, array('completed' => $uscarrierdata[$uscarrier[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $uscarrierdata[$uscarrier[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('us_car_bar5_'.$i, 0, array('completed' => $uscarrierdata[$uscarrier[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $uscarrierdata[$uscarrier[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('us_car_bar6_'.$i, 0, array('completed' => $uscarrierdata[$uscarrier[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $uscarrierdata[$uscarrier[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('us_car_bar7_'.$i, 0, array('completed' => $uscarrierdata[$uscarrier[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $uscarrierdata[$uscarrier[$i]][7],
					)
		);
	}
	//uspremiums
	$uspremium = $this->pdh->get('member', 'profile_field', array($this->url_id, 'uspremium'));
	$shipcount = count ($uspremium);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/usa/premium/".$uspremium[$i].".png";
		$this->tpl->assign_block_vars(
			'uspremiums', array(
					'ICON' => $shipicon,
					'NAT'	=> $usship,
					'ID'	=> $uspremium[$i],
					'NAME'	=> $uspremiumname[$uspremium[$i]],
					'BAR1'	=> $this->jquery->progressbar('us_pre_bar1_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $uspremiumdata[$uspremium[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('us_pre_bar2_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $uspremiumdata[$uspremium[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('us_pre_bar3_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $uspremiumdata[$uspremium[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('us_pre_bar4_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $uspremiumdata[$uspremium[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('us_pre_bar5_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $uspremiumdata[$uspremium[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('us_pre_bar6_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $uspremiumdata[$uspremium[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('us_pre_bar7_'.$i, 0, array('completed' => $uspremiumdata[$uspremium[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $uspremiumdata[$uspremium[$i]][7],
					)
		);
	}
		//jpndestroyers
	$jpndestroyer = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpndestroyer'));
	$shipcount = count ($jpndestroyer);
	for ($i=0; $i<$shipcount; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/jpn/destroyer/".$jpndestroyer[$i].".png";
		$this->tpl->assign_block_vars(
			'jpndestroyers', array(
					'ICON'	=> $shipicon,
					'NAT'	=> $jpnship,
					'ID'	=> $jpndestroyer[$i],
					'NAME'	=> $jpndestroyername[$jpndestroyer[$i]],
					'BAR1'	=> $this->jquery->progressbar('jpn_des_bar1_'.$i, 0, array('completed' => $jpndestroyerdata[$jpndestroyer[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $jpndestroyerdata[$jpndestroyer[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('jpn_des_bar2_'.$i, 0, array('completed' => $jpndestroyerdata[$jpndestroyer[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $jpndestroyerdata[$jpndestroyer[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('jpn_des_bar3_'.$i, 0, array('completed' => $jpndestroyerdata[$jpndestroyer[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $jpndestroyerdata[$jpndestroyer[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('jpn_des_bar4_'.$i, 0, array('completed' => $jpndestroyerdata[$jpndestroyer[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $jpndestroyerdata[$jpndestroyer[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('jpn_des_bar5_'.$i, 0, array('completed' => $jpndestroyerdata[$jpndestroyer[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $jpndestroyerdata[$jpndestroyer[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('jpn_des_bar6_'.$i, 0, array('completed' => $jpndestroyerdata[$jpndestroyer[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $jpndestroyerdata[$jpndestroyer[$i]][6],
			)
		);	
	}

	//jpncruisers
	$jpncruiser = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpncruiser'));
	$shipcount = count ($jpncruiser);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/jpn/cruiser/".$jpncruiser[$i].".png";
		$this->tpl->assign_block_vars(
			'jpncruisers', array(
					'ICON' => $shipicon,
					'NAT'	=> $jpnship,
					'ID'	=> $jpncruiser[$i],
					'NAME'	=> $jpncruisername[$jpncruiser[$i]],
					'BAR1'	=> $this->jquery->progressbar('jpn_cru_bar1_'.$i, 0, array('completed' => $jpncruiserdata[$jpncruiser[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $jpncruiserdata[$jpncruiser[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('jpn_cru_bar2_'.$i, 0, array('completed' => $jpncruiserdata[$jpncruiser[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $jpncruiserdata[$jpncruiser[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('jpn_cru_bar3_'.$i, 0, array('completed' => $jpncruiserdata[$jpncruiser[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $jpncruiserdata[$jpncruiser[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('jpn_cru_bar4_'.$i, 0, array('completed' => $jpncruiserdata[$jpncruiser[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $jpncruiserdata[$jpncruiser[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('jpn_cru_bar5_'.$i, 0, array('completed' => $jpncruiserdata[$jpncruiser[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $jpncruiserdata[$jpncruiser[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('jpn_cru_bar6_'.$i, 0, array('completed' => $jpncruiserdata[$jpncruiser[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $jpncruiserdata[$jpncruiser[$i]][6],
					)
		);
	}
	//jpnbattleship
	$jpnbattleship = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpnbattleship'));
	$shipcount = count ($jpnbattleship);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/jpn/battleship/".$jpnbattleship[$i].".png";
		$this->tpl->assign_block_vars(
			'jpnbattleships', array(
					'ICON' => $shipicon,
					'NAT'	=> $jpnship,
					'ID'	=> $jpnbattleship[$i],
					'NAME'	=> $jpnbattleshipname[$jpnbattleship[$i]],
					'BAR1'	=> $this->jquery->progressbar('jpn_bat_bar1_'.$i, 0, array('completed' => $jpnbattleshipdata[$jpnbattleship[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $jpnbattleshipdata[$jpnbattleship[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('jpn_bat_bar2_'.$i, 0, array('completed' => $jpnbattleshipdata[$jpnbattleship[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $jpnbattleshipdata[$jpnbattleship[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('jpn_bat_bar4_'.$i, 0, array('completed' => $jpnbattleshipdata[$jpnbattleship[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $jpnbattleshipdata[$jpnbattleship[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('jpn_bat_bar5_'.$i, 0, array('completed' => $jpnbattleshipdata[$jpnbattleship[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $jpnbattleshipdata[$jpnbattleship[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('jpn_bat_bar6_'.$i, 0, array('completed' => $jpnbattleshipdata[$jpnbattleship[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $jpnbattleshipdata[$jpnbattleship[$i]][6],
					)
		);
	}
	//jpncarriers
	$jpncarrier = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpncarrier'));
	$shipcount = count ($jpncarrier);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/jpn/carrier/".$jpncarrier[$i].".png";
		$this->tpl->assign_block_vars(
			'jpncarriers', array(
					'ICON' => $shipicon,
					'NAT'	=> $jpnship,
					'ID'	=> $jpncarrier[$i],
					'NAME'	=> $jpncarriername[$jpncarrier[$i]],
					'BAR1'	=> $this->jquery->progressbar('jpn_car_bar1_'.$i, 0, array('completed' => $jpncarrierdata[$jpncarrier[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $jpncarrierdata[$jpncarrier[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('jpn_car_bar2_'.$i, 0, array('completed' => $jpncarrierdata[$jpncarrier[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $jpncarrierdata[$jpncarrier[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('jpn_car_bar4_'.$i, 0, array('completed' => $jpncarrierdata[$jpncarrier[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $jpncarrierdata[$jpncarrier[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('jpn_car_bar5_'.$i, 0, array('completed' => $jpncarrierdata[$jpncarrier[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $jpncarrierdata[$jpncarrier[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('jpn_car_bar6_'.$i, 0, array('completed' => $jpncarrierdata[$jpncarrier[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $jpncarrierdata[$jpncarrier[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('jpn_car_bar7_'.$i, 0, array('completed' => $jpncarrierdata[$jpncarrier[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $jpncarrierdata[$jpncarrier[$i]][7],
					)
		);
	}
	//jpnpremiums
	$jpnpremium = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpnpremium'));
	$shipcount = count ($jpnpremium);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/jpn/premium/".$jpnpremium[$i].".png";
		$this->tpl->assign_block_vars(
			'jpnpremiums', array(
					'ICON' => $shipicon,
					'NAT'	=> $jpnship,
					'ID'	=> $jpnpremium[$i],
					'NAME'	=> $jpnpremiumname[$jpnpremium[$i]],
					'BAR1'	=> $this->jquery->progressbar('jpn_pre_bar1_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $jpnpremiumdata[$jpnpremium[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('jpn_pre_bar2_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $jpnpremiumdata[$jpnpremium[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('jpn_pre_bar3_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $jpnpremiumdata[$jpnpremium[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('jpn_pre_bar4_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $jpnpremiumdata[$jpnpremium[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('jpn_pre_bar5_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $jpnpremiumdata[$jpnpremium[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('jpn_pre_bar6_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $jpnpremiumdata[$jpnpremium[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('jpn_pre_bar7_'.$i, 0, array('completed' => $jpnpremiumdata[$jpnpremium[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $jpnpremiumdata[$jpnpremium[$i]][7],
					)
		);
	}
		//gerdestroyers
	$gerdestroyer = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gerdestroyer'));
	$shipcount = count ($gerdestroyer);
	for ($i=0; $i<$shipcount; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/ger/destroyer/".$gerdestroyer[$i].".png";
		$this->tpl->assign_block_vars(
			'gerdestroyers', array(
					'ICON'	=> $shipicon,
					'NAT'	=> $gership,
					'ID'	=> $gerdestroyer[$i],
					'NAME'	=> $gerdestroyername[$gerdestroyer[$i]],
					'BAR1'	=> $this->jquery->progressbar('ger_des_bar1_'.$i, 0, array('completed' => $gerdestroyerdata[$gerdestroyer[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gerdestroyerdata[$gerdestroyer[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('ger_des_bar2_'.$i, 0, array('completed' => $gerdestroyerdata[$gerdestroyer[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gerdestroyerdata[$gerdestroyer[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('ger_des_bar3_'.$i, 0, array('completed' => $gerdestroyerdata[$gerdestroyer[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $gerdestroyerdata[$gerdestroyer[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('ger_des_bar4_'.$i, 0, array('completed' => $gerdestroyerdata[$gerdestroyer[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gerdestroyerdata[$gerdestroyer[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('ger_des_bar5_'.$i, 0, array('completed' => $gerdestroyerdata[$gerdestroyer[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gerdestroyerdata[$gerdestroyer[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('ger_des_bar6_'.$i, 0, array('completed' => $gerdestroyerdata[$gerdestroyer[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gerdestroyerdata[$gerdestroyer[$i]][6],
			)
		);	
	}

	//gercruisers
	$gercruiser = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gercruiser'));
	$shipcount = count ($gercruiser);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/ger/cruiser/".$gercruiser[$i].".png";
		$this->tpl->assign_block_vars(
			'gercruisers', array(
					'ICON' => $shipicon,
					'NAT'	=> $gership,
					'ID'	=> $gercruiser[$i],
					'NAME'	=> $gercruisername[$gercruiser[$i]],
					'BAR1'	=> $this->jquery->progressbar('ger_cru_bar1_'.$i, 0, array('completed' => $gercruiserdata[$gercruiser[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gercruiserdata[$gercruiser[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('ger_cru_bar2_'.$i, 0, array('completed' => $gercruiserdata[$gercruiser[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gercruiserdata[$gercruiser[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('ger_cru_bar3_'.$i, 0, array('completed' => $gercruiserdata[$gercruiser[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $gercruiserdata[$gercruiser[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('ger_cru_bar4_'.$i, 0, array('completed' => $gercruiserdata[$gercruiser[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gercruiserdata[$gercruiser[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('ger_cru_bar5_'.$i, 0, array('completed' => $gercruiserdata[$gercruiser[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gercruiserdata[$gercruiser[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('ger_cru_bar6_'.$i, 0, array('completed' => $gercruiserdata[$gercruiser[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gercruiserdata[$gercruiser[$i]][6],
					)
		);
	}
	//gerbattleship
	$gerbattleship = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gerbattleship'));
	$shipcount = count ($gerbattleship);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/ger/battleship/".$gerbattleship[$i].".png";
		$this->tpl->assign_block_vars(
			'gerbattleships', array(
					'ICON' => $shipicon,
					'NAT'	=> $gership,
					'ID'	=> $gerbattleship[$i],
					'NAME'	=> $gerbattleshipname[$gerbattleship[$i]],
					'BAR1'	=> $this->jquery->progressbar('ger_bat_bar1_'.$i, 0, array('completed' => $gerbattleshipdata[$gerbattleship[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gerbattleshipdata[$gerbattleship[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('ger_bat_bar2_'.$i, 0, array('completed' => $gerbattleshipdata[$gerbattleship[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gerbattleshipdata[$gerbattleship[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('ger_bat_bar4_'.$i, 0, array('completed' => $gerbattleshipdata[$gerbattleship[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gerbattleshipdata[$gerbattleship[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('ger_bat_bar5_'.$i, 0, array('completed' => $gerbattleshipdata[$gerbattleship[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gerbattleshipdata[$gerbattleship[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('ger_bat_bar6_'.$i, 0, array('completed' => $gerbattleshipdata[$gerbattleship[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gerbattleshipdata[$gerbattleship[$i]][6],
					)
		);
	}
	//gercarriers
	$gercarrier = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gercarrier'));
	$shipcount = count ($gercarrier);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/ger/carrier/".$gercarrier[$i].".png";
		$this->tpl->assign_block_vars(
			'gercarriers', array(
					'ICON' => $shipicon,
					'NAT'	=> $gership,
					'ID'	=> $gercarrier[$i],
					'NAME'	=> $gercarriername[$gercarrier[$i]],
					'BAR1'	=> $this->jquery->progressbar('ger_car_bar1_'.$i, 0, array('completed' => $gercarrierdata[$gercarrier[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gercarrierdata[$gercarrier[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('ger_car_bar2_'.$i, 0, array('completed' => $gercarrierdata[$gercarrier[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gercarrierdata[$gercarrier[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('ger_car_bar4_'.$i, 0, array('completed' => $gercarrierdata[$gercarrier[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gercarrierdata[$gercarrier[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('ger_car_bar5_'.$i, 0, array('completed' => $gercarrierdata[$gercarrier[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gercarrierdata[$gercarrier[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('ger_car_bar6_'.$i, 0, array('completed' => $gercarrierdata[$gercarrier[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gercarrierdata[$gercarrier[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('ger_car_bar7_'.$i, 0, array('completed' => $gercarrierdata[$gercarrier[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $gercarrierdata[$gercarrier[$i]][7],
					)
		);
	}
	//gerpremiums
	$gerpremium = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gerpremium'));
	$shipcount = count ($gerpremium);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/ger/premium/".$gerpremium[$i].".png";
		$this->tpl->assign_block_vars(
			'gerpremiums', array(
					'ICON' => $shipicon,
					'NAT'	=> $gership,
					'ID'	=> $gerpremium[$i],
					'NAME'	=> $gerpremiumname[$gerpremium[$i]],
					'BAR1'	=> $this->jquery->progressbar('ger_pre_bar1_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gerpremiumdata[$gerpremium[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('ger_pre_bar2_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gerpremiumdata[$gerpremium[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('ger_pre_bar3_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $gerpremiumdata[$gerpremium[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('ger_pre_bar4_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gerpremiumdata[$gerpremium[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('ger_pre_bar5_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gerpremiumdata[$gerpremium[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('ger_pre_bar6_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gerpremiumdata[$gerpremium[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('ger_pre_bar7_'.$i, 0, array('completed' => $gerpremiumdata[$gerpremium[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $gerpremiumdata[$gerpremium[$i]][7],
					)
		);
	}
		//udssrdestroyers
	$udssrdestroyer = $this->pdh->get('member', 'profile_field', array($this->url_id, 'udssrdestroyer'));
	$shipcount = count ($udssrdestroyer);
	for ($i=0; $i<$shipcount; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/udssr/destroyer/".$udssrdestroyer[$i].".png";
		$this->tpl->assign_block_vars(
			'udssrdestroyers', array(
					'ICON'	=> $shipicon,
					'NAT'	=> $udssrship,
					'ID'	=> $udssrdestroyer[$i],
					'NAME'	=> $udssrdestroyername[$udssrdestroyer[$i]],
					'BAR1'	=> $this->jquery->progressbar('udssr_des_bar1_'.$i, 0, array('completed' => $udssrdestroyerdata[$udssrdestroyer[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $udssrdestroyerdata[$udssrdestroyer[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('udssr_des_bar2_'.$i, 0, array('completed' => $udssrdestroyerdata[$udssrdestroyer[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $udssrdestroyerdata[$udssrdestroyer[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('udssr_des_bar3_'.$i, 0, array('completed' => $udssrdestroyerdata[$udssrdestroyer[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $udssrdestroyerdata[$udssrdestroyer[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('udssr_des_bar4_'.$i, 0, array('completed' => $udssrdestroyerdata[$udssrdestroyer[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $udssrdestroyerdata[$udssrdestroyer[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('udssr_des_bar5_'.$i, 0, array('completed' => $udssrdestroyerdata[$udssrdestroyer[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $udssrdestroyerdata[$udssrdestroyer[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('udssr_des_bar6_'.$i, 0, array('completed' => $udssrdestroyerdata[$udssrdestroyer[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $udssrdestroyerdata[$udssrdestroyer[$i]][6],
			)
		);	
	}

	//udssrcruisers
	$udssrcruiser = $this->pdh->get('member', 'profile_field', array($this->url_id, 'udssrcruiser'));
	$shipcount = count ($udssrcruiser);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/udssr/cruiser/".$udssrcruiser[$i].".png";
		$this->tpl->assign_block_vars(
			'udssrcruisers', array(
					'ICON' => $shipicon,
					'NAT'	=> $udssrship,
					'ID'	=> $udssrcruiser[$i],
					'NAME'	=> $udssrcruisername[$udssrcruiser[$i]],
					'BAR1'	=> $this->jquery->progressbar('udssr_cru_bar1_'.$i, 0, array('completed' => $udssrcruiserdata[$udssrcruiser[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $udssrcruiserdata[$udssrcruiser[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('udssr_cru_bar2_'.$i, 0, array('completed' => $udssrcruiserdata[$udssrcruiser[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $udssrcruiserdata[$udssrcruiser[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('udssr_cru_bar3_'.$i, 0, array('completed' => $udssrcruiserdata[$udssrcruiser[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $udssrcruiserdata[$udssrcruiser[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('udssr_cru_bar4_'.$i, 0, array('completed' => $udssrcruiserdata[$udssrcruiser[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $udssrcruiserdata[$udssrcruiser[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('udssr_cru_bar5_'.$i, 0, array('completed' => $udssrcruiserdata[$udssrcruiser[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $udssrcruiserdata[$udssrcruiser[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('udssr_cru_bar6_'.$i, 0, array('completed' => $udssrcruiserdata[$udssrcruiser[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $udssrcruiserdata[$udssrcruiser[$i]][6],
					)
		);
	}
	//udssrbattleship
	$udssrbattleship = $this->pdh->get('member', 'profile_field', array($this->url_id, 'udssrbattleship'));
	$shipcount = count ($udssrbattleship);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/udssr/battleship/".$udssrbattleship[$i].".png";
		$this->tpl->assign_block_vars(
			'udssrbattleships', array(
					'ICON' => $shipicon,
					'NAT'	=> $udssrship,
					'ID'	=> $udssrbattleship[$i],
					'NAME'	=> $udssrbattleshipname[$udssrbattleship[$i]],
					'BAR1'	=> $this->jquery->progressbar('udssr_bat_bar1_'.$i, 0, array('completed' => $udssrbattleshipdata[$udssrbattleship[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $udssrbattleshipdata[$udssrbattleship[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('udssr_bat_bar2_'.$i, 0, array('completed' => $udssrbattleshipdata[$udssrbattleship[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $udssrbattleshipdata[$udssrbattleship[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('udssr_bat_bar4_'.$i, 0, array('completed' => $udssrbattleshipdata[$udssrbattleship[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $udssrbattleshipdata[$udssrbattleship[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('udssr_bat_bar5_'.$i, 0, array('completed' => $udssrbattleshipdata[$udssrbattleship[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $udssrbattleshipdata[$udssrbattleship[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('udssr_bat_bar6_'.$i, 0, array('completed' => $udssrbattleshipdata[$udssrbattleship[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $udssrbattleshipdata[$udssrbattleship[$i]][6],
					)
		);
	}
	//udssrcarriers
	$udssrcarrier = $this->pdh->get('member', 'profile_field', array($this->url_id, 'udssrcarrier'));
	$shipcount = count ($udssrcarrier);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/udssr/carrier/".$udssrcarrier[$i].".png";
		$this->tpl->assign_block_vars(
			'udssrcarriers', array(
					'ICON' => $shipicon,
					'NAT'	=> $udssrship,
					'ID'	=> $udssrcarrier[$i],
					'NAME'	=> $udssrcarriername[$udssrcarrier[$i]],
					'BAR1'	=> $this->jquery->progressbar('udssr_car_bar1_'.$i, 0, array('completed' => $udssrcarrierdata[$udssrcarrier[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $udssrcarrierdata[$udssrcarrier[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('udssr_car_bar2_'.$i, 0, array('completed' => $udssrcarrierdata[$udssrcarrier[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $udssrcarrierdata[$udssrcarrier[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('udssr_car_bar4_'.$i, 0, array('completed' => $udssrcarrierdata[$udssrcarrier[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $udssrcarrierdata[$udssrcarrier[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('udssr_car_bar5_'.$i, 0, array('completed' => $udssrcarrierdata[$udssrcarrier[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $udssrcarrierdata[$udssrcarrier[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('udssr_car_bar6_'.$i, 0, array('completed' => $udssrcarrierdata[$udssrcarrier[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $udssrcarrierdata[$udssrcarrier[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('udssr_car_bar7_'.$i, 0, array('completed' => $udssrcarrierdata[$udssrcarrier[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $udssrcarrierdata[$udssrcarrier[$i]][7],
					)
		);
	}
	//udssrpremiums
	$udssrpremium = $this->pdh->get('member', 'profile_field', array($this->url_id, 'udssrpremium'));
	$shipcount = count ($udssrpremium);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/udssr/premium/".$udssrpremium[$i].".png";
		$this->tpl->assign_block_vars(
			'udssrpremiums', array(
					'ICON' => $shipicon,
					'NAT'	=> $udssrship,
					'ID'	=> $udssrpremium[$i],
					'NAME'	=> $udssrpremiumname[$udssrpremium[$i]],
					'BAR1'	=> $this->jquery->progressbar('udssr_pre_bar1_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $udssrpremiumdata[$udssrpremium[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('udssr_pre_bar2_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $udssrpremiumdata[$udssrpremium[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('udssr_pre_bar3_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $udssrpremiumdata[$udssrpremium[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('udssr_pre_bar4_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $udssrpremiumdata[$udssrpremium[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('udssr_pre_bar5_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $udssrpremiumdata[$udssrpremium[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('udssr_pre_bar6_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $udssrpremiumdata[$udssrpremium[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('udssr_pre_bar7_'.$i, 0, array('completed' => $udssrpremiumdata[$udssrpremium[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $udssrpremiumdata[$udssrpremium[$i]][7],
					)
		);
	}
		//gbdestroyers
	$gbdestroyer = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gbdestroyer'));
	$shipcount = count ($gbdestroyer);
	for ($i=0; $i<$shipcount; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/gb/destroyer/".$gbdestroyer[$i].".png";
		$this->tpl->assign_block_vars(
			'gbdestroyers', array(
					'ICON'	=> $shipicon,
					'NAT'	=> $gbship,
					'ID'	=> $gbdestroyer[$i],
					'NAME'	=> $gbdestroyername[$gbdestroyer[$i]],
					'BAR1'	=> $this->jquery->progressbar('gb_des_bar1_'.$i, 0, array('completed' => $gbdestroyerdata[$gbdestroyer[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gbdestroyerdata[$gbdestroyer[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('gb_des_bar2_'.$i, 0, array('completed' => $gbdestroyerdata[$gbdestroyer[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gbdestroyerdata[$gbdestroyer[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('gb_des_bar3_'.$i, 0, array('completed' => $gbdestroyerdata[$gbdestroyer[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $gbdestroyerdata[$gbdestroyer[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('gb_des_bar4_'.$i, 0, array('completed' => $gbdestroyerdata[$gbdestroyer[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gbdestroyerdata[$gbdestroyer[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('gb_des_bar5_'.$i, 0, array('completed' => $gbdestroyerdata[$gbdestroyer[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gbdestroyerdata[$gbdestroyer[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('gb_des_bar6_'.$i, 0, array('completed' => $gbdestroyerdata[$gbdestroyer[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gbdestroyerdata[$gbdestroyer[$i]][6],
			)
		);	
	}

	//gbcruisers
	$gbcruiser = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gbcruiser'));
	$shipcount = count ($gbcruiser);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/gb/cruiser/".$gbcruiser[$i].".png";
		$this->tpl->assign_block_vars(
			'gbcruisers', array(
					'ICON' => $shipicon,
					'NAT'	=> $gbship,
					'ID'	=> $gbcruiser[$i],
					'NAME'	=> $gbcruisername[$gbcruiser[$i]],
					'BAR1'	=> $this->jquery->progressbar('gb_cru_bar1_'.$i, 0, array('completed' => $gbcruiserdata[$gbcruiser[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gbcruiserdata[$gbcruiser[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('gb_cru_bar2_'.$i, 0, array('completed' => $gbcruiserdata[$gbcruiser[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gbcruiserdata[$gbcruiser[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('gb_cru_bar3_'.$i, 0, array('completed' => $gbcruiserdata[$gbcruiser[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $gbcruiserdata[$gbcruiser[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('gb_cru_bar4_'.$i, 0, array('completed' => $gbcruiserdata[$gbcruiser[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gbcruiserdata[$gbcruiser[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('gb_cru_bar5_'.$i, 0, array('completed' => $gbcruiserdata[$gbcruiser[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gbcruiserdata[$gbcruiser[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('gb_cru_bar6_'.$i, 0, array('completed' => $gbcruiserdata[$gbcruiser[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gbcruiserdata[$gbcruiser[$i]][6],
					)
		);
	}
	//gbbattleship
	$gbbattleship = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gbbattleship'));
	$shipcount = count ($gbbattleship);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/gb/battleship/".$gbbattleship[$i].".png";
		$this->tpl->assign_block_vars(
			'gbbattleships', array(
					'ICON' => $shipicon,
					'NAT'	=> $gbship,
					'ID'	=> $gbbattleship[$i],
					'NAME'	=> $gbbattleshipname[$gbbattleship[$i]],
					'BAR1'	=> $this->jquery->progressbar('gb_bat_bar1_'.$i, 0, array('completed' => $gbbattleshipdata[$gbbattleship[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gbbattleshipdata[$gbbattleship[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('gb_bat_bar2_'.$i, 0, array('completed' => $gbbattleshipdata[$gbbattleship[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gbbattleshipdata[$gbbattleship[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('gb_bat_bar4_'.$i, 0, array('completed' => $gbbattleshipdata[$gbbattleship[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gbbattleshipdata[$gbbattleship[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('gb_bat_bar5_'.$i, 0, array('completed' => $gbbattleshipdata[$gbbattleship[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gbbattleshipdata[$gbbattleship[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('gb_bat_bar6_'.$i, 0, array('completed' => $gbbattleshipdata[$gbbattleship[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gbbattleshipdata[$gbbattleship[$i]][6],
					)
		);
	}
	//gbcarriers
	$gbcarrier = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gbcarrier'));
	$shipcount = count ($gbcarrier);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/gb/carrier/".$gbcarrier[$i].".png";
		$this->tpl->assign_block_vars(
			'gbcarriers', array(
					'ICON' => $shipicon,
					'NAT'	=> $gbship,
					'ID'	=> $gbcarrier[$i],
					'NAME'	=> $gbcarriername[$gbcarrier[$i]],
					'BAR1'	=> $this->jquery->progressbar('gb_car_bar1_'.$i, 0, array('completed' => $gbcarrierdata[$gbcarrier[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gbcarrierdata[$gbcarrier[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('gb_car_bar2_'.$i, 0, array('completed' => $gbcarrierdata[$gbcarrier[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gbcarrierdata[$gbcarrier[$i]][2],

					'BAR4'	=> $this->jquery->progressbar('gb_car_bar4_'.$i, 0, array('completed' => $gbcarrierdata[$gbcarrier[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gbcarrierdata[$gbcarrier[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('gb_car_bar5_'.$i, 0, array('completed' => $gbcarrierdata[$gbcarrier[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gbcarrierdata[$gbcarrier[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('gb_car_bar6_'.$i, 0, array('completed' => $gbcarrierdata[$gbcarrier[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gbcarrierdata[$gbcarrier[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('gb_car_bar7_'.$i, 0, array('completed' => $gbcarrierdata[$gbcarrier[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $gbcarrierdata[$gbcarrier[$i]][7],
					)
		);
	}
	//gbpremiums
	$gbpremium = $this->pdh->get('member', 'profile_field', array($this->url_id, 'gbpremium'));
	$shipcount = count ($gbpremium);
	for ($i=0; $i<=$shipcount-1; $i++){
		$shipicon = $this->server_path."games/wows/profiles/ship/gb/premium/".$gbpremium[$i].".png";
		$this->tpl->assign_block_vars(
			'gbpremiums', array(
					'ICON' => $shipicon,
					'NAT'	=> $gbship,
					'ID'	=> $gbpremium[$i],
					'NAME'	=> $gbpremiumname[$gbpremium[$i]],
					'BAR1'	=> $this->jquery->progressbar('gb_pre_bar1_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][1], 'total' => 100, 'text' => '%progress%')),
					'BAR1V'	=> $gbpremiumdata[$gbpremium[$i]][1],
					'BAR2'	=> $this->jquery->progressbar('gb_pre_bar2_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][2], 'total' => 100, 'text' => '%progress%')),
					'BAR2V'	=> $gbpremiumdata[$gbpremium[$i]][2],
					'BAR3'	=> $this->jquery->progressbar('gb_pre_bar3_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][3], 'total' => 100, 'text' => '%progress%')),
					'BAR3V'	=> $gbpremiumdata[$gbpremium[$i]][3],
					'BAR4'	=> $this->jquery->progressbar('gb_pre_bar4_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][4], 'total' => 100, 'text' => '%progress%')),
					'BAR4V'	=> $gbpremiumdata[$gbpremium[$i]][4],
					'BAR5'	=> $this->jquery->progressbar('gb_pre_bar5_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][5], 'total' => 100, 'text' => '%progress%')),
					'BAR5V'	=> $gbpremiumdata[$gbpremium[$i]][5],
					'BAR6'	=> $this->jquery->progressbar('gb_pre_bar6_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][6], 'total' => 100, 'text' => '%progress%')),
					'BAR6V'	=> $gbpremiumdata[$gbpremium[$i]][6],
					'BAR7'	=> $this->jquery->progressbar('gb_pre_bar7_'.$i, 0, array('completed' => $gbpremiumdata[$gbpremium[$i]][7], 'total' => 100, 'text' => '%progress%')),
					'BAR7V'	=> $gbpremiumdata[$gbpremium[$i]][7],
					)
		);
	}
	
	
	//Achievements
	for ($i=1;$i<18;$i++){
		$achievalue = (int)$this->pdh->get('member', 'profile_field', array($this->url_id, 'achievements'.$i));
		if ($achievalue > 0){
			$achieicon = $this->server_path."games/wows/profiles/achievement/".$i.".png";
		}else{
			$achieicon = $this->server_path."games/wows/profiles/achievement/".$i."b.png";
		}
		$this->tpl->assign_block_vars(
			'achievements', array(
				'VALUE' => $achievalue,
				'ICON'	=> $achieicon,
				'NAME'	=> $this->game->glang('uc_achievement'.$i),
				)
		);
	}
?>