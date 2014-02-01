$(document).ready(function(){
	var time = 3;
	var interval = setInterval(function(){
		time -= 1;
		$(".timing").html(time);
		if (time === 0) {
			window.location.href = ".."
			clearInterval(interval);
		};
	}, 1000);
})