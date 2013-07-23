<?php
    function getip($ra = false)
    {
      if ($ra == false)
      {
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
          return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif (isset($_SERVER['HTTP_PROXY_CONNECTION'])) { 
          return $_SERVER['HTTP_PROXY_CONNECTION'];
        }
        elseif (isset($_SERVER['HTTP_VIA'])) { 
          return $_SERVER['HTTP_VIA'];
        } 
        elseif (isset($_SERVER['HTTP_CLIENT_IP'])) { 
          return $_SERVER['HTTP_CLIENT_IP'];
        } 
        else
        {
          if(isset($_SERVER['REMOTE_ADDR']))
          {
            return $_SERVER['REMOTE_ADDR'];
          }
          else
          {
            return "00.00.00.000";
          }
        }
      }
      else
      {
        if(isset($_SERVER['REMOTE_ADDR']))
        {
          return $_SERVER['REMOTE_ADDR'];
        }
        else
        {
          return "00.00.00.000";
        }
      }
    }
    

    function isproxy() {
     return (getip(true) != getip(false)) ? true : false;
    }
    
    function isip($ip)
    {
     return realip($ip);
    }
    
    function realip($ip)
    {
      if(preg_match("/^((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])$/", $ip))
      {
        return true;
      }
      else
      {
        return false;
      }
    }
        
function gethost($tf=true)
{
     $string  = getip($tf);
     $string2 = explode(".", $string);

     if(isset($string2[sizeof($string2)-2]))
     {
       if ( $string2[sizeof($string2)-2] == "co")
       {
        if ( isset ( $string2[sizeof($string2)-3] ) )
        {
          $rer = $string2[sizeof($string2)-3];
        }
        else
        {
          $rer = "Uknown";
        }
       }
       else
       {
        $rer = $string2[sizeof($string2)-2];
       }
     }
     else
     {
      $rer = "Uknown";
     }
     return $rer;
} 


function getfullhost($raa = false) {
  if ( isip ( getip( $raa ) ) ) 
  {
    return gethostbyaddr ( getip ( $raa ) );   
  }
  else
  {
    return "faked. ip.";
  }
}

function getuseragent() 
{
     return isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : 'uknown';
}

define('ip',getip());
define('hostname',gethost());
define('uri',@$_SERVER['REQUEST_URI']);


function client_os()
{
    if (preg_match("@(win|windows)[ ]*((nt)*[ /]*([0-9]+(.?[0-9]+))*)@", getuseragent()))
    {
        if (preg_match("@(win|windows)[ ](95)@", getuseragent()))
        {
         return "Windows 95";
        }
        else if (preg_match("@(win|windows)[ ](98)@", getuseragent()))
        {
         return "Windows 98";
        }
        else if (preg_match("@(win|windows)[ ](9x)[ ](4.90)@", getuseragent()))
        {
         return "Windows ME";
        }
        else if (preg_match("@(win|windows)[ ](NT)@", getuseragent()))
        {
           if (preg_match("@(win|windows)[ ](NT)[ ](5.1)@", getuseragent()))
           {
            return "Windows XP";
           }
           else if (preg_match("@(win|windows)[ ](NT)[ ](5.0)@", getuseragent()))
           {
            return "Windows 2000";
           }
           else if (preg_match("@(win|windows)[ ](NT)[ ](6.0)@", getuseragent())) 
           {
            return "Windows Vista"; 
           }
           else if (preg_match("@(win|windows)[ ](NT)[ ](6.1)@", getuseragent())) 
           {
            return "Windows Seven"; 
           }
           else if (preg_match("@(win|windows)[ ](NT)[ ](6.2)@", getuseragent())) 
           {
            return "Windows 8?"; 
           }
           else if (preg_match("@(win|windows)[ ](NT)[ ](7.0)@", getuseragent())) 
           {
            return "Windows 8?"; 
           }
           else if (preg_match("@(win|windows)[ ](NT)@", getuseragent()))
           {
            return "Windows NT";
           }
        }
        else
        {
         return "Windows";
        }
    }
    else if (stristr(getuseragent(), "linux"))
    {
     if (preg_match("@(lin|linux)[ ](Suse)@", getuseragent()))
     {
      return "SuSe Linux";
     }
     else if (preg_match("@(lin|linux)[ ](Ubuntu)@", getuseragent()))
     {
     return "Ubuntu linux";
     }
     else
     {
     return "Linux";
     }
    }
    else if (isin("unix",getuseragent()))
    {
     return "Unix";
    }
    else if (isin("mac",getuseragent()))
    { 
     if(isin("iphone",getuseragent()))
     {
      return "I-Phone";
     }
     else
     {
      return "Mac OS(X)";
     }
    }
    else if (isin("psp",getuseragent()))
    { 
     return "PlayStation Portable";
    }
    else if (isin("PlayStation",getuseragent()))
    { 
     return "PlayStation 3";
    }
    else if (isin("J2ME",getuseragent()))
    {
    //J2ME/MIDP; Opera Mini
     if ( isin ( "Opera Mini" , getuseragent() ) )
     {
      return "Opra Mini (Java based)";
     }
     else
     {
      return "Java Internet Application";
     }
    }
    else if (isin("Nintendo Wii",getuseragent()))
    {
    return "Nintendo Wii";
    }
    else if (isin("ppc",getuseragent()))
    {
     return "Mac OS(X)";
    }
    else if (isin("HP",getuseragent()))
    {
     return "HPuX";
    }
    else if (isin("sunos",getuseragent())) 
    {
     return "SunOS";
    }
    else
    {
     return "Unknown Operating System";
    }
} 

    $ip = getip(true);

    function getref()
    {
     if(isset($_SERVER['HTTP_REFERER']))
     {
      return $_SERVER['HTTP_REFERER'];
     }
     else
     {
      return "False";
     }
    }

$headers     = array(
              "Content-type"      => "text/html; charset=ISO-8859-15", //Not "utf-8",
              "X-powered-by"      => "WesDeGroot Site System",
              "powered-by"        => "WesDeGroot Site System",
              "Core"              => "WesDeGroot Site System",
              "Abuse"             => "wes@vista.aero",
              "Remote_address"    => ip,
              "Remote_address-f"  => getip(true),
              "Remote_hostname"   => hostname,
              "Remote_hostname-f" => getfullhost(true),
              "Request_URI"       => urlencode(uri),
              "your_os"           => client_os(),
              "your_host"         => gethost()
               );

if(!headers_sent($hfile,$hline))
{
 foreach ( $headers as $header => $value)
 {
  header( $header . ": " . $value );
 }
}
else
{
 exit("The Headers Are Send already! In The File \"{$hfile}\" And The Line \"{$hline}\"");
}

 
function ga($url)
{
 go($url); 
}

function go($url) 
{
 if(!headers_sent()) 
 {
  header("location: " . $url);
 }
  echo "<a href='" . $url . "'> Please Click Here </a><meta http-equiv=\"refresh\" content=\"0;URL='" . $url . "'\" />\n<script language=\"JavaScript\">\n<!--\nwindow.location=\"" . $url . "\";\n//-->\n</script>";
  exit;
}

function renew($time,$url = fullurl,$tof = false) 
{
 if(!headers_sent()) 
 {
  header("refresh: " . $time . "; url=\"" . $url ."\"");
 }
 if ($tof == false) 
 {
  $lis = "no";
 }
 else
 {
  $lis = "yes"; 
 }
 echo "<meta http-equiv=\"refresh\" content=\"" . $time . ";URL='" . $url . "'\" />" .
 "<script language=\"JavaScript\">\r\n// Verander hier de tijd dat er refreshed moe" .
 "t worden ( in seconden )\r\nvar refreshinterval=".$time."\r\n// Wil je de refresh" .
 " in je statusbalk zichtbaar ? ( yes of No )\r\nvar displaycountdown=\"" . $lis ."" .
 "\"\r\nvar starttime;\r\nvar nowtime\r\nvar reloadseconds=0\r\nvar secondssinceloa" .
 "ded=0\r\n\r\nfunction starttime() {\r\n	starttime=new Date()\r\n	starttime=start" .
 "time.getTime()\r\n  countdown()\r\n}\r\n\r\nfunction countdown() {\r\n	nowtime= " .
 "new Date()\r\n	nowtime=nowtime.getTime()\r\n	secondssinceloaded=(nowtime-startti" .
 "me)/1000\r\n	reloadseconds=Math.round(refreshinterval-secondssinceloaded)\r\n	i" .
 "f (refreshinterval>=secondssinceloaded) {\r\n        var timer=setTimeout(\"count" .
 "down()\",1000)\r\n		if (displaycountdown==\"yes\") {\r\n			window.status=\"P" .
 "age refreshing in \"+reloadseconds+ \" seconds\"\r\n		}\r\n    }\r\n    else { " .
 "\r\n        clearTimeout(timer)\r\n        window.location=\"" . $url . "\";\r\n " .
 "   }\r\n }\r\nwindow.onload=starttime\r\n</script>";
} 

function kortin($string, $tekens) 
{
 return inkorten($string, $tekens);
}

function inkorten( $html, $length )
{
    $output = '';
    $cursor = 0;
    $add = true;
    $newLength = 0;
    if ( !preg_match_all( '/<[^>]*>/U', $html, $matches, PREG_OFFSET_CAPTURE ) )
    {
        if ( strlen($html) > $length )
        {
            return substr( $html, 0, $length ) . '...';
        }
        else
        {
            return $html;
        }
    }

    foreach ( $matches[0] as &$match )
    {
        $text = substr( $html, $cursor, $match[1]-$cursor );
        $cursor = $match[1]+strlen($match[0]);
        while ( 1 )
        {
            $newText = preg_replace( '/[\s]{2}/U', ' ', $text );
            if ( $newText == '' || $newText == $text )
            {
                $text = $newText;
                break;
            }
            $text = $newText;
        }
        $text = trim($text);
        if ( $add )
        {
            if ( $newLength + strlen($text) > $length )
            {
                $add = false;
                $text = substr( $text, 0, $length - $newLength ) . '...';
            }
            $newLength += strlen($text);
            $output .= $text;
        }
        $output .= $match[0];
    }
   
    if ( $add && $cursor < strlen($html) )
    {
        $text = substr( $html, $cursor );
        while ( 1 )
        {
            $newText = preg_replace( '/[\s]{2}/U', ' ', $text );
            if ( $newText == '' || $newText == $text )
            {
                $text = $newText;
                break;
            }
            $text = $newText;
        }
        $text = trim($text);
        if ( $newLength + strlen($text) > $length )
        {
            $output .= substr( $text, 0, $length - $newLength ) . '...';
        }
        else
        {
            $output .= $text;
        }
    }
    return $output;
} 


function isauth($sessionname = "auth",$die=false) 
{
  if(!isset($_SESSION[$sessionname])) 
  {
   if(!$die)
    { 
     return auth();//false;
    }
    else
    {
     die();
    }
  }
  else
  {
   return true;
  }
}

function auth($up = array("wes"=>"xpass","uknown"=>"xit"),$areaname = " ",$cos=null,$sessionname = "auth") 
{
  if(!isset($_SESSION[$sessionname])) 
  { 

    if( !isset ( $_SERVER["PHP_AUTH_USER"] ) && !isset ( $_SERVER["PHP_AUTH_PW"] ) )   
    {
      header("HTTP/1.0 401 Unauthorized");
      header("WWW-Authenticate: Basic realm=\"$areaname\"");
      echo "<style type=\"text/css\"> * { background-color: #ffc; } </style>";
      echo "<title>Authorization Required (".$_SERVER['REMOTE_ADDR'].")</title>";
      echo "<center><h1>Authorization Required.</h1>";
      echo $cos;
      exit();
    }
    if (isset($_SERVER["PHP_AUTH_USER"]) && isset($_SERVER["PHP_AUTH_PW"])) 
    {
        $usr = $_SERVER["PHP_AUTH_USER"];
        $pwd = $_SERVER["PHP_AUTH_PW"];
        
        if (isset($up[$usr]) && $up[$usr]=$pwd) 
        {
          $_SESSION[$sessionname] = "TRUE";
          return ($usr);
        }
        else
        {
          header("HTTP/1.0 401 Unauthorized");
          header("WWW-Authenticate: Basic realm=\"$areaname\"");
          echo "<style type=\"text/css\"> * { background-color: #ffc; } </style>";
          echo "<title>Authorization Required (".$_SERVER['REMOTE_ADDR'].")</title>";
          echo "<center><h1>Authorization Required.</h1>";
          echo $cos;
          exit();
        }
    }
    }
}

  function framebreaker($fburi = 'self.location.href') 
  {
    breakframe($fburi);
  }
  
  function inframe($mfuri = '?mustinframe=t&!=!#warning#!=!') 
  {
    mustframe($mfuri);
  }
  
  function breakframe($fburi = 'self.location.href') 
  { 
    $w = false;
      if($fburi != 'self.location.href') 
      {
        $w = "\"";
      }
    return "<body><script type=\"text/javascript\" language=\"JavaScript\">\n <!-- // auto-framebreaker (BY: WDGSS!!!)\n  if (top.location != self.location) {\n     top.location = " . $w . $fburi . $w . ";\n  }\n //-->\n</script>";
  }
  
  function mustframe($mfuri = '?mustinframe=t&!=!#warning#!=!') 
  {
    echo "<body><script type=\"text/javascript\" language=\"JavaScript\">\n <!-- // auto-frame (mif, must in frame!) (BY: WDGSS!!!)\n  if (top.location == self.location) {\n     top.location = \"" . $mfuri . "\";\n  } \n //-->\n</script>";
  }

function xmail($to,$subject,$text,$frorm,$m='normal',$send=array(null,null), $reply=array('def','def'))
{
if ( !is_array ( $frorm ) || !is_array ( $text ) || !is_array ( $reply ) || !is_array ( $send ) )
{
 return array(false,'need $me And $text And $reply as array<br/>' . 
 'Ex:  xmail($to,$subject,$text=array(\'plain\',\'html\'),$me=array(\'name\',\'em@il\'),$prio=\'normal\',[$sendfrom=array(\'name\',\'email\')],[$reply]); //[] is optional and array as $me ((if u want to skipe something please put there null, ex $reply=array(null,null) and done))<br/>' .
 null
 );
}
else
{
if ( is_array( $to ) )
{
 $ret=array();
 for ( $i=0; $i<sizeof($to); $i++ )
 {
  if(isset($to[$i]))
  {
   $ret[] = xmail($to[$i],$subject,$text,$frorm,$m,$reply);
  }
 }
 return array(null,$ret);
}
else
{
  $x=null;
	$prio=3;
	if($m=='normal')
	 $prio=3;
	if($m=='high')
	 $prio=1;
	if($m=='low')
	 $prio=5;
	if ($m==1 || $m == 3 || $m == 5)
	 $prio=$m;
    if($reply[0]=='def')
     $reply[0]=$frorm[0];
    if($reply[1]=='def')
     $reply[1]=$frorm[1];
   if(!isset($send)) $send=array(null,null);
    if( ($send[0]!=null) && ($send[1]!=null) )
     $x = "Sender: {$send[0]} <{$send[1]}>\n";     
$notice_text = "This is a multi-part message in MIME format.";
$semi_rand = md5(time());
$mime_boundary = "==MULTIPART_BOUNDARY_$semi_rand";
$mime_boundary_header = chr(34) . $mime_boundary . chr(34);
$from = "{$frorm[0]} <{$frorm[1]}>";
$rep=array(
 "#{email}#"       => $to,
 "#{subject}#"     => $subject ,
 "#{from-name}#"   => $frorm[0],
 "#{from-email}#"  => $frorm[1],
 "#{prio}#"        => ucfirst($m),
 "#{reply-name}#"  => $reply[0],
 "#{reply-email}#" => $reply[1],
 "#{date}#"        => date('d-m-Y'),
 "#{time}#"        => date('H:i:s'),
 "#{year}#"        => date('Y')
);
$text[0]=replace($text[0],$rep);
$text[1]=replace($text[1],$rep);
$body = "$notice_text

--$mime_boundary
Content-Type: text/plain; charset=us-ascii
Content-Transfer-Encoding: 7bit

{$text[0]}

--$mime_boundary
Content-Type: text/html; charset=us-ascii
Content-Transfer-Encoding: 7bit

{$text[1]}

--$mime_boundary--";

if (@$W=@mail($to, $subject, $body,
    "From: " . $from . "\n" .
    "Return-Path: {$reply[0]} <{$reply[1]}>\n" .
    //"bcc: " . $bcc . "\n" .
    'X-Priority: ' . $prio . "\n" .
	  'X-MSMail-Priority: ' . ucfirst($m) . "\n" .
	  $x .
	  "X-Mailer: WesDeGroot Php Mailer\n" .
    "MIME-Version: 1.0\n" .
    "Content-Type: multipart/alternative;\n" .
    "     boundary=" . $mime_boundary_header))
    return array(true,'mail sended To "'.$to.'" :D ('.$W.')');
else
    return array(false,'mail not send To "'.$to.'" ('.$W.')');
}
}
}
function checkmail($mail)  
{
 $host = explode('@',$mail);
 list($account,$host) = $host;

 if (!getmxrr($host,$mxa)) $mxa = array($host);

 while (list ($key, $mx) = each($mxa))
 {
  if ($mxg = @fsockopen ($mx,25,$ir,$sr,5))
  {
   $out = fgets($mxg, 1024);
   if (substr($out,0,3) == "220")
   {
    fputs ($mxg, "HELO example.com\r\n");
    $out = fgets ( $mxg, 1024 );
    fputs ($mxg, "MAIL FROM: <{$mail}>\r\n");
    $from = fgets ( $mxg, 1024 );
    fputs ($mxg, "RCPT TO: <{$mail}>\r\n");
    $to = fgets ($mxg, 1024);
    fputs ($mxg, "QUIT\r\n");
    fclose($mxg);
    if (ereg ("^250", $from) && ereg ( "^250", $to ))
    {
      return TRUE;
    }
    return FALSE;
   }
   return FALSE;
  }
  return FALSE;
 }
 return FALSE;
}

function ascii2hex($ascii,$af=" ",$bef="\\x") 
{
  $hex = '';
  for ($i = 0; $i < strlen($ascii); $i++)
  {
    $byte = strtoupper(dechex(ord($ascii{$i})));
    $byte = str_repeat('0', 2 - strlen($byte)).$byte;
    $hex.=$bef.$byte.$af;
  }
  return $hex;
}

function encodeip($ip)
{
 if ( isip ( $ip ) ) {
  return ipv4_encode ( $ip ) ;
 }
 else
 {
  return "No Such Ip!";
 }
}

function ipv4_encode($ip) {
    $ip=explode(".",$ip);
    return chr($ip[0]).chr($ip[1]).chr($ip[2]).chr($ip[3]);
}

function decodeip ( $ip )
{
 return ipv4_decode ( $ip ) ;
}

function ipv4_decode($ip) {
    return ord(substr($ip,0,1)).'.'.ord(substr($ip,1,1)).'.'.ord(substr($ip,2,1)).'.'.ord(substr($ip,3,1));
}


function hex2ascii($hex,$af=" ")
{
  $ascii='';
  $hex=str_replace($af, null, $hex);
  for($i=0; $i<strlen($hex); $i=$i+2)
  
  {
    $ascii.=chr(hexdec(substr($hex, $i, 2)));
  }
  return($ascii);
}

function loadtime() 
{
global $starttime;
$endtime   = microtime();
$endarray  = explode(" ", $endtime);
$endtime   = $endarray[1] + $endarray[0];
$totaltime = $endtime - $starttime; 
$totaltime = round($totaltime,5);
return $totaltime;
}

?>