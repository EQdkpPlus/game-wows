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
	$wREALM = $this->pdh->get('member', 'profile_field', array($this->url_id, 'wrealm'));
	$this->tpl->assign_vars(array(
		'CHARDATA_NAME'			=> $chardata['name'],
		'WARGAMING_ID'			=>	$wargamingID,
		'WARGAMING_REALM'		=>	$wREALM,
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