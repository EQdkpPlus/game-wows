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
 
 include 'ship.php';
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

	");
	$this->tpl->assign_vars(array(
		'CHARDATA_NAME'			=> $chardata['name'],
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
	//jpndestroyer
	$jpndestroyer = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpndestroyer'));
	$shipcount = count ($jpndestroyer);
	for ($i=0; $i<=$shipcount-1; $i++){
		$destroyericon = $this->server_path."games/wows/profiles/ship/jpn/destroyer/".$jpndestroyer[$i].".png";
		$this->tpl->assign_block_vars(
			'jpndestroyers', array(
				'ICON' => $destroyericon,
				)
		);
	}
	//jpncruiser
	$jpncruiser = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpncruiser'));
	$shipcount = count ($jpncruiser);
	for ($i=0; $i<=$shipcount-1; $i++){
		$cruisericon = $this->server_path."games/wows/profiles/ship/jpn/cruiser/".$jpncruiser[$i].".png";
		$this->tpl->assign_block_vars(
			'jpncruisers', array(
				'ICON' => $cruisericon,
				)
		);
	}
	//jonbattleship
	$jpnbattleship = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpnbattleship'));
	$shipcount = count ($jpnbattleship);
	for ($i=0; $i<=$shipcount-1; $i++){
		$battleshipicon = $this->server_path."games/wows/profiles/ship/jpn/battleship/".$jpnbattleship[$i].".png";
		$this->tpl->assign_block_vars(
			'jpnbattleships', array(
				'ICON' => $battleshipicon,
				)
		);	
	}
	//jpncarrier
	$jpncarrier = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpncarrier'));
	$shipcount = count ($jpncarrier);
	for ($i=0; $i<=$shipcount-1; $i++){
		$carriericon = $this->server_path."games/wows/profiles/ship/jpn/carrier/".$jpncarrier[$i].".png";
		$this->tpl->assign_block_vars(
			'jpncarriers', array(
				'ICON' => $carriericon,
				)
		);
	}
	//jpnpremium
	$jpnpremium = $this->pdh->get('member', 'profile_field', array($this->url_id, 'jpnpremium'));
	$shipcount = count ($jpnpremium);
	for ($i=0; $i<=$shipcount-1; $i++){
		$premiumicon = $this->server_path."games/wows/profiles/ship/jpn/premium/".$jpnpremium[$i].".png";
		$this->tpl->assign_block_vars(
			'jpnpremiums', array(
				'ICON' => $premiumicon,
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