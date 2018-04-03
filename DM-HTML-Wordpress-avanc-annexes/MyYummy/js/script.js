// image presantation animation
$('#presentation ul').parallax();

setInterval(function() {
	
	var target = document.getElementById("presentation");
	
	if(target != null){
		document.getElementById("presentation").setAttribute("class", "row go");
		
		setTimeout(function(){
			document.getElementById("presentation").setAttribute("class", "row");
			}, 1000);
	}
	
	
}, 5000);
