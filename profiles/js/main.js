$(document).ready(function (){
	var $achievement = $('#achievement');
	var $wID = "<?php echo $fields.level ?>";
	var $aURL ='achievement/';
	var $wURL = 'https://api.worldofwarships.';
	var $wREALM = 'eu';
	var $wGAME = 'wows';
	var $iconURL = 'http://api.worldofwarships.eu/static/1.8.3/wows/encyclopedia/achievements/icon_achievement_';
	$.ajax({
		type: 'GET',
		url: $wURL + $wREALM +'/'+ $wGAME + '/account/achievements/?application_id=demo&account_id='+$wID,
		success: function(achievement) {
			$.each(achievement.data[$wID].battle, function (i,avalue){
				$achievement.append(
				'<div class="achievement-block"><div class="achievement" style="background-image: url('+$iconURL+i+'.png);"></div><div class="avalue">'+avalue+'</div></div>'
				);
			});
		}
	});
});