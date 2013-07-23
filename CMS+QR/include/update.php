<?php

if ( !defined ( 'in_wdgss' ) )
 {
  exit("You`ll Missed This Action");
 }

if ( 
      !preg_match('/(776|777)/',substr(sprintf('%o', fileperms('./data')), -4))
    )
  {
    @chmod('./data',776);
    @chmod('./data',0776);
    exit ( 'CHMOD "data" To 0776/776' );
  }

if ( 
      !preg_match('/(776|777)/',substr(sprintf('%o', fileperms('./include')), -4))
    )
  {
    @chmod('./include',776);
    @chmod('./include',0776);
    exit ( 'CHMOD "include" To 0776/776' );
  }
  
if ( 
      !preg_match('/(776|777)/',substr(sprintf('%o', fileperms('./modules')), -4))
    )
  {
    @chmod('./modules',776);
    @chmod('./modules',0776);
    exit ( 'CHMOD "modules" To 0776/776' );
  }
  
if ( 
      !preg_match('/(776|777)/',substr(sprintf('%o', fileperms('./template')), -4))
    )
  {
    @chmod('./template',776);
    @chmod('./template',0776);
    exit ( 'CHMOD "template" To 0776/776' );
  }
  
function _UPD_CHK($act=null, $x) 
{
    $arr  = array();
        $z    = explode(" ", $x);
    
          if ( isset ( $z[0], $z[1], $z[2], $z[3] ) )
            {
              $z[3] = preg_replace("/_/"," ",$z[3]);
              $arr[] = array(
                    'type'    => $z[0],
                    'version' => $z[1],
                    'url'     => $z[2],
                    'comment' => $z[3]
                   );
            }
    return $arr;
}

function _UPD_GET($url)
 {
  $f=file_Get_contents($url);
  $AR=array();
      $z=explode(":",$f);
      $AR[]= array(
       'type'                                         => (($z[0]=='FX') ? 'Fix' : (($z[0]!='ERR')?'Update':'File Not Found')),
       'version'                                      => ($z[1]=='FNF') ? 'File Not Found!' : $z[1],
       'filename'                                     => ($z[1]=='FNF') ? 'File Not Found!' : $z[3],
       'filesize'                                     => ($z[1]=='FNF') ? 'File Not Found!' : ( $z[5] == 'NARN' ) ? 'Unknown' : $z[5],
       'action'                                       => ($z[1]=='FNF') ? 'File Not Found!' : ( $z[6] == 'FL' ) ? 'File' : 'UpdateVersion',
       ( ( @$z[6] == 'FL' ) ? 'file' : 'setversion' ) => ($z[1]=='FNF') ? 'File Not Found!' : ( ( $z[6] == 'FL' ) ? base64_decode($z[7]) : $z[7] )
      );
    return $AR;
 }
 
function _UPD_PARSE($f)
{
 $i=array();
 $i[]='Debug Basedir ../!';
 $basedir="./"; #DEBUG!
 $i[]='Reading $f..';

 for ( $z=0; $z<sizeof($f); $z++) 
  {
    $i[] = 'Got: "' . $f[$z]['filename'] . '"';
    @chmod($basedir                     ,0776);
    @chmod($basedir . $f[$z]['filename'],0776);
    if ( !file_exists ( $basedir . $f[$z]['filename'] ) )
      {
        $s = @fopen($basedir . $f[$z]['filename'],'a');
        @fclose($s);
      }
      
    if ( is_writeable ( $basedir . $f[$z]['filename'] ) && !preg_match("/conf/",$f[$z]['filename']) )
      { 
        $i[] = $basedir . $f[$z]['filename'] . ' is writable!';
        $er  = fopen ( $basedir . $f[$z]['filename'] , 'w' );
        if ( $er == true )
          {
            @fwrite($er, $f[$z]['file']);
            @fclose($er);
            @chmod($basedir                     ,0776);
            @chmod($basedir . $f[$z]['filename'],0776);
            $r = 'done';
          }
        else
          {
            $r = $basedir . $f[$z]['filename'] . '.. Can`t Open?';
          }
      }
   elseif ( !preg_match("/conf/",$f[$z]['filename']) )
      {
        $i[] = $basedir . $f[$z]['filename'] . ' NOT is writable!';
        $r   = $basedir . $f[$z]['filename'] . ' not writeable';
      }
   else
      {
        $r   = 'done'; #BYPASS NOT WRITEABLE FOR CONFIG FILES!
      }
  }
  
    return $r;
}

function _UPD_SET_VER ( $ver )
  {
  // cms:version
    global $conf;
    $conf['database']['db'] -> query("DELETE FROM `{$conf['database']['pref']}config` WHERE `config` like 'cms:version%'");
    $conf['database']['db'] -> query("DELETE FROM `{$conf['database']['pref']}config` WHERE `config` like 'cms\:version%'");
    $conf['database']['db'] -> query("INSERT INTO `{$conf['database']['pref']}config` (`config`) VALUES ('cms:version={$ver}');");
    return true;
  }

function _UPD ( ) 
  {
    global $conf;  

    #BETA
      // $x = file_get_contents('http://upd.wdgss.nl/updc/999999');
    # CUR
      $x = file_get_contents('http://upd.wdgss.nl/updc/' . ($conf['cms']['version']) );
    # CUR-1
      // $x = file_get_contents('http://upd.wdgss.nl/updc/' . ($conf['cms']['version'])-1);  
    # TO OLD
      // $x = file_get_contents('http://upd.wdgss.nl/updc/0');

    if ( preg_match ( "/(C|c)(U|u)(R|r)/", $x) )
      {
        return '<div style=\'background: lightgreen;\'>Update: Current Version</div>';
      }
    Elseif ( preg_match ( "/(B|b)(E|e)(T|t)(A|a)/", $x ) ) 
      {
        return '<div style=\'background: purple;\'>Update: You`re Running A Beta Version, No Newer Update...</div>';
      }
    elseif ( preg_match ( "/(T|t)(oo|OO|oO|Oo|o|O) (o|O)(l|L)(d|D)/", $x ) )
      {
        return '<div style=\'background: orange;\'>Update: Your Version Is To Old.</div>';
      }
    else 
      {
        $Y = _UPD_CHK('UPDC', $x);   #Up Date Check...  /* GOT VERSION 63 RUNNING 67! GO AND UPDATE IT
        $RT=null;
        
        $tel = $conf['cms']['version'];
        $EE = sizeof(explode("\n",$x)); #How Many Updates? And ReCalc Them Here Down!
        $EE = (($EE+$tel)); #-"-2" # ReCalc The Updates!

          while ( $EE >= $tel )
            {
              $x = file_get_contents('http://upd.wdgss.nl/updc/' . ( $tel ) );
                    $X = _UPD_CHK('UPDC', $x);   #Up Date Check...  /* GOT VERSION 63 RUNNING 67! GO AND UPDATE IT
                    $f = _UPD_GET($X[0]['url']); #Get Updates.....
                    $x = _UPD_PARSE($f);         #Parse Updates...
                            $tel = $tel + 1; 
                    if ( $x == 'done') 
                      {
                        $e = _UPD_SET_VER($f[0]['version']); #VERSION.
                        $RT .= '<div style=\'background: lightgreen;\'>Update #' . $tel . ': "Update #' . $tel . '" Sucessed Site Is Public/Running Again! <a href=\'http://www.wdgss.nl/help/update:'.$tel.'\'>Click Here For info!</a></div><br/>';
                      }
                    else
                      {
                        $RT .= '<div style=\'background: red;\'>Update #' . $tel . ': Update Failed Read The <a href=\'http://www.wdgss.nl/help/update\'>Help Page @ wdgss.nl</a><br>' .$x . '</div><br />';
                      }
            }
        return $RT;
     }
  }

?>