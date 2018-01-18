var isToggle = false;

function clickMe() {
	alert("Clicked!")
}

function chngColor() {
	var newColor = document.getElementById('color').value;
	document.getElementById('div1').style.color = newColor;
}

function chngText() {
	if(isToggle)
		document.getElementById('toggle').innerHTML = "Fade In";
	else
		document.getElementById('toggle').innerHTML = "Fade Out";
}

function toggle() {
	if(isToggle)
		isToggle = false;
	else
		isToggle = true;
	chngText()
}

$(function(){
	$("#toggle").click(function(){
    	$("#div3").fadeToggle("slow");
    	toggle();
    });
    $("#background").click(function(){ 
    	$("#div1").css({"background-color": $("#color2").val()});
    });
});