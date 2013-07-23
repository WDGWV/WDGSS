function showoverlay(scroll) { 
 document.getElementById("doverlay").style.visibility = "visible";
 document.getElementById("doverlay").style.display    = "block";
 document.getElementById("doverlay").style.position   = "absolute";   
 if (scroll == false) 
 {
  document.body.style.overflow                        = "hidden";
 }
} 


document.onkeydown = function(e){
    if (e == null) 
      { // ie
        keycode = event.keyCode;
      }
    else 
      { // mozilla
        keycode = e.which;
      }
    if(keycode == 27)
      { // escape, close box, esc
        hideoverlay();
      }
};
    
function hideoverlay() {
 document.getElementById("doverlay").style.visibility = "hidden";
 document.getElementById("doverlay").style.display    = "none";
 document.getElementById("doverlay").style.position   = "";   
 document.body.style.overflow                         = "scroll";
} 

function overlay(text,scroll) {
 showoverlay(scroll);
//MOET:
 document.getElementById("doverlay").innerHTML  = "<BR><BR><BR><BR><BR><BR><center><div id='overlay' class='overlay'>" + text + "</div></center>";
//TIJDELIJKE FIX
// document.getElementById("doverlay").innerHTML  = "<BR><BR><BR><BR><BR><BR><center>" + text + "</center>";
}

// <blink> tag ;)

spe = 500;
na  = document.all.tags("blink");
swi = 1;

bringBackBlinky();

function bringBackBlinky() {
	if (swi == 1) {
		sho="visible";
		swi=0;
	}
	else {
		sho="hidden";
		swi=1;
	}
	for(i=0;i<na.length;i++) {
		na[i].style.visibility=sho;
	}
	setTimeout("bringBackBlinky()", spe);
}