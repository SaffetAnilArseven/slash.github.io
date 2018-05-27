if((self.parent && !(self.parent===self)) && (self.parent.frames.length!=0)){
	window.stop();
	document.execCommand('Stop');
	self.parent.location=document.location;
}
var tamEkranButon = document.getElementById("tamekran-button");
 
function tamEkranYap() {
var tamEkranDiv = document.getElementById("tamekran");
var tamEkranFonk=tamEkranDiv.requestFullscreen||
tamEkranDiv.mozRequestFullScreen||
tamEkranDiv.msRequestFullscreen||
tamEkranDiv.webkitRequestFullScreen;
 
tamEkranFonk.call(tamEkranDiv); 
}
tamEkranButon.addEventListener('click', tamEkranYap);
