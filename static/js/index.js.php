<?php header('Content-Type:text/javascript;charset=utf-8'); ?>

var playing = -1;
var imgDir = <?php echo $_GET['baseurl'];?>+"static/img/";
var imgStopPreload = new image(imgDir+"stop.png");

$(document).ready(function(){
	$(".play-button").on("click", function(){
		var index = $(this).index(".play-button");
		if (playing !== -1) {
			$("audio").get(playing).pause();
			$("audio").get(playing).currentTime = 0;
			$(".play-button").get(playing).style.backgroundImage = "url('"+imgDir+"play.png')";
			if (playing !== index) {		
				$("audio").get(index).play();
				this.style.backgroundImage = "url('"+imgDir+"stop.png')";
				playing = index;
			} else {
				console.log(imgDir+"play.png");
				this.style.backgroundImage = "url('"+imgDir+"play.png')";
				playing = -1;
			}
		} else {		
			$("audio").get(index).play();
			this.style.backgroundImage = imgDir+"stop.png";
			this.style.backgroundImage = "url('"+imgDir+"stop.png')";
			playing = index;
		}
	})
})