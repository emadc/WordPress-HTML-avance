// image presantation animation
$('#presentation ul').parallax();

setInterval(function() {
	
	document.getElementById("presentation").setAttribute("class", "row go");
	
	setTimeout(function(){
		document.getElementById("presentation").setAttribute("class", "row");
		}, 1000);
	
	
}, 5000);
