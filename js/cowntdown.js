$(function(){   
	var countDownDate = new Date("Nov 20, 2018 08:00:00").getTime();

	var x = setInterval(function() {

		var now = new Date().getTime();			    
		var distance = countDownDate - now;

		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
		if (days < 10) {
			document.getElementById("pdia").innerHTML = "0" + days;
		}else if(days > 10){
			document.getElementById("pdia").innerHTML = days;
		}

		if (hours < 10) {
			document.getElementById("phor").innerHTML = "0" + hours;
		}else if(hours > 10){
			document.getElementById("phor").innerHTML = hours;
		}

		if (minutes < 10) {
			document.getElementById("pmin").innerHTML = "0" + minutes;
		}else if(minutes > 10){
			document.getElementById("pmin").innerHTML = minutes;
		}

		if (seconds < 10) {
			document.getElementById("psec").innerHTML = "0" + seconds;
		}else if(seconds > 10){
			document.getElementById("psec").innerHTML = seconds;
		}

	}, 1000);
});
