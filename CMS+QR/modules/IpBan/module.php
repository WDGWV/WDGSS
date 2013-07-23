<?php
// echo gethost(true);
 
$banned = array(
  //"1","2","3","4","5","6","7","8","9","0","."
);

if ( in_array(getip(true),$banned) or in_array(gethost(true),$banned))
{
echo "<h1>Hi, Hello, Goodbye</h1><br />
 You Just Kicked Out Of This Site<br>
 Possible Reasons:
 <ul>
 <li>Your Ip Is A Proxy</li>
 <li>Your`e Hiding your own ip</li>
 <li>Your Ip/Hostname is like: (" . '"1","2","3","4","5","6","7","8","9","0","."' . ") As We All Know Of Proxy`s</li>
 <li>Banned By The Webmaster (Unlikely Noboady On BanList Only On Bad-List (Proxy`s))</li>
 </ul>
 <br>
  Is This Not Good???, Email To webmaster@(thissitenamegoeshere.+tld)<br><br>Goodbye.<br><br>Data:" . getip(true).'/'.getip(false);
exit;

}
?>