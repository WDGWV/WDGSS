<?php
      ####################################################
      ####################################################
      ###                                              ###
      ###  # # # # # # # # # # # # # # # # # # # #     ###
      ###   # # # # # # # # # # # # # # # # # # # #    ###
      ###    # # # # # # # # # # # # # # # # # # # #   ###
      ###     #     WDGSS Required File     # # # # #  ###
      ###    # Please No Change In This File # # # #   ###
      ###   # # # # # # # # # # # # # # # # # # # #    ###
      ###  # # # # # # # # # # # # # # # # # # # #     ###
      ###                                              ###
      ####################################################
      ####################################################
      ### WARNING DO NOT EDIT THIS FILE, THAT MISMATCH ###
      ### THE USABILITY OF WDGSS, WE DO NOT GIVE ----- ###
      ### SUPPORT FOR EDITTED FILES!!!!!!!!!!!!!!!!!!! ###
      ####################################################
      ####################################################
	  ### STARTED BY: Wesley De Groot (wes@wdgss.nl)   ###
	  ### FILE VERSION: 6.0.0.1-25                     ###
	  ### WDGSS VERSION: 6.0.0.1 Final                 ###
      ####################################################
	  ### LAST EDIT BY: Wesley De Groot (wes@wdgss.nl) ###
	  ### LAST REVISION: 20:12 @ 15 / 09 / 2010        ###
	  ####################################################
	  ####################################################















if ( !defined ( 'in_wdgss' ) )
 {
  exit("You`ll Missed This Action");
 }
 
 function fix_lang($e) 
 {
  if ( $e == 'be' )
   $e = 'nl';
   
  return $e;
 }
 
 
$user_langs = array(); // This array will hold the user selected languages
if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
	{
	// The user has selected preferred languages, prepare them to read
	$accept_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$accept_lang = preg_replace('/(;q=[0-9]+\.[0-9]+)/i', '', $accept_lang);
	$accept_langs = explode(',', $accept_lang);

	// Loop over the languages and add them to the array
	foreach ($accept_langs as $accept_lang)
		{
			// Remove potential countries
			$accept_lang = explode('-', $accept_lang);
			$user_langs[] = $accept_lang[0];
		}
	// Remove duplicate values from the array
	$user_langs = array_unique($user_langs);
	}
	
	$end = explode(".",getfullhost(false)); //getfullhost:false: (if proxy then user lang)
	$user_langs[] = $end[sizeof($end)-1];
	
	$end = explode(".",getfullhost(true)); //getfullhost:true: (if proxy then proxy lang)
	$user_langs[] = $end[sizeof($end)-1];
	

$found = 0;
for ( $i = 0; $i<sizeof($user_langs) && $found == 0; $i++ )
	{
		If ( isset ( $user_langs[$i] ) ) 
		{
		$user_langs[$i] = fix_lang($user_langs[$i]);
		
			if ( file_exists ( "lang/" . $user_langs[$i] . ".php" ) )
				{
					include "lang/" . $user_langs[$i] . ".php";
					$conf['site']['lang'] = $user_langs[$i];
					define('lang',$user_langs[$i]);
					global $lang;
					$found = 1;
				}
		}
	}

if ( $found == 0 )
  {
    if ( file_exists ( "lang/en.php" ) )
      {
					include "lang/en.php";
					$conf['site']['lang'] = 'en';
					define('lang','en');
					global $lang;
      }
    elseif( file_exists ( "../lang/en.php" ) )
      {
					include "../lang/en.php";
					$conf['site']['lang'] = 'en';
					define('lang','en');
					global $lang;
      }
    else
      {
        exit("Corrupted Installation!");
      }
  }

if ( isset ( $conf['site']['override_lang'] ) )
{
					include "lang/{$conf['site']['override_lang']}.php";
					$conf['site']['lang'] = $conf['site']['override'];
					define('lang',$conf['site']['override']);
					global $lang;
}


function sitelang($W)
{
		global $lang;
		if ( isset ( $lang['site'][$W] ) ) 
		{
			return sprintf($lang['site'][$W]);
		}
		else
		{
			return sprintf($W);
		}
}
?>