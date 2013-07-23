<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="{wdg:load}images/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="{wdg:load}iphone.style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="{wdg:load}iphone.functions.js" type="text/javascript"></script>
<title>{wdg:title}</title>
<link href="{wdg:load}images/startup.png" rel="apple-touch-startup-image" />
<script type="text/javascript">
<!--
function IosLoad(url) {
 alert('You Just Clicked On "' + url + '"!'); //MZ?
}

function ra(){
    var myLinks = document.links;
    var btype=0;
    if (window.attachEvent) {
        b=1;
    } else if (window.addEventListener) {
        b=2;
    }
    for(var i=0;i < myLinks.length;i++) {
        //var thehref = myLinks[i].href.toString();
        //if(thehref.indexOf("mydomain.com") == -1){
            switch (b) {
                case 1: // IE
                    myLinks[i].attachEvent("onclick","return IosLoad('"+myLinks[i].href+"')"); //IE
                    break;
                case 2: //FireFox
                    myLinks[i].setAttribute("onclick","return IosLoad('"+myLinks[i].href+"')")
                    break;
                default:
                    //do nothing
            }
        //}
    }
}

// -->
</script>

        <script type="text/javascript" language="javascript">
            function showmenu()
            {
              if(document.getElementById("mmenu").style.display == 'block')
                {
                  document.getElementById("mmenu").style.display = 'none';
                  document.getElementById("xj").style.display = 'none';
                }
              else 
                {
                  document.getElementById("mmenu").style.display = 'block';
                  document.getElementById("xj").style.display = 'block';
                }
              return false;
            }
        </script>
        <script type="text/javascript" language="javascript">
            function updateOrientation()
            {
                var displayStr = "&nbsp;";
                switch(window.orientation)
                {
                    case 0:
                        displayStr += "Portrait Please Use Landscape!!!";
                        document.getElementById("output").style.display = 'block';                        
                    break;
 
                    case -90:
                        displayStr += "Landscape (right, clockwise)";
                        document.getElementById("output").style.display = 'none';
                    break;
 
                    case 90:
                        displayStr += "Landscape (left, counterclockwise)";
                        document.getElementById("output").style.display = 'none';
                    break;
 
                    case 180:
                        displayStr += "Portrait Please Use Landscape!!!";
                        document.getElementById("output").style.display = 'block';
                    break;
 
                }
                document.getElementById("output").innerHTML = displayStr;
            }
    </script>
</head>

<body onorientationchange="updateOrientation();" onload="ra();updateOrientation();">
<div id="output"></div>
<div id="topbar" class="transparent">
	<div id="leftnav">
		<a href="{wdg:url}"><img alt="home" src="{wdg:load}images/home.png" /></a>
		<a href="{wdg:url}pages/{wdg:page}">{wdg:page}</a> </div>
	<div id="rightnav">
      <a onclick="showmenu();"><div id='xj' style='display:none;'>hide&nbsp;</div>Menu</a>
  </div>
</div>
<div id="tributton">
	<div class="links">
				{wdg:hide1=begin}<a href="{wdg:url=1}"><span>{wdg:link=1}</span></a>{wdg:hide1=end}
				{wdg:hide2=begin}<a href="{wdg:url=2}"><span>{wdg:link=2}</span></a>{wdg:hide2=end}
				{wdg:hide3=begin}<a href="{wdg:url=3}"><span>{wdg:link=3}</span></a>{wdg:hide3=end}
				{wdg:hide4=begin}<a href="{wdg:url=4}"><span>{wdg:link=4}</span></a>{wdg:hide4=end}
				{wdg:hide5=begin}<a href="{wdg:url=5}"><span>{wdg:link=5}</span></a>{wdg:hide5=end}
				{wdg:hide6=begin}<a href="{wdg:url=6}"><span>{wdg:link=6}</span></a>{wdg:hide6=end}
				{wdg:hide7=begin}<a href="{wdg:url=7}"><span>{wdg:link=7}</span></a>{wdg:hide7=end}
				{wdg:hide8=begin}<a href="{wdg:url=8}"><span>{wdg:link=8}</span></a>{wdg:hide8=end}
				{wdg:hide9=begin}<a href="{wdg:url=9}"><span>{wdg:link=9}</span></a>{wdg:hide9=end}
				{wdg:hide10=begin}<a href="{wdg:url=10}"><span>{wdg:link=10}</span></a>{wdg:hide10=end}
	</div>
</div>
<div id="content">
	<span class="graytitle">
    {wdg:page}
  </span>
	<ul class="pageitem">
		<li class="textbox">
        <div id='mmenu' class='mmenu' style='display:none;'>{wdg:menu}</div>
            <div name='InPage' class='InPage' id='InPage'>
              <p>
              {wdg:content}
              </p>
            </div>
		</li>
	</ul>
</div>
<div id="footer">
  {wdg:copyright=1}<br>{wdg:copyright=2}
</div>
</body>
</html>
