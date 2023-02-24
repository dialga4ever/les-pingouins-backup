var code = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
var i=0;
var time=0;

function touchePressee(keyStroke)
{
	c = (!document.all) ? keyStroke.which : event.keyCode;
	if(i == 0){time = new Date().getTime();}
	if(new Date().getTime() - time > 1000){i=0;}
	time = new Date().getTime();
	if(c == code[i]){i++;}
	if(i >= code.length){document.location = '?page=Pesquet';}
}

document.onkeydown = touchePressee;
