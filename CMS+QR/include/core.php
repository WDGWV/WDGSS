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















# {REPLACE}
@set_time_limit(5);
@session_start();

if ( !defined ( 'in_wdgss' ) )
 {
  exit("You`ll Missed This Action");
 }
 


$flz = array  (
                "include/check.php",   # General File Check
                "include/conf.php",    # General Config
                "include/qr_img.php",  # QRcode Engine
                "include/wdgss.php",   # WesDeGroot Site System Core
                "include/sql.php",     # Sql; FROM WDGSS
                "include/lang.php",    # Language
                "include/update.php",  # Update System
                "include/captcha.php", # Captcha Engine
                "include/cal.php",     # Calendar Engine                             
                "include/modules.php", # Modules (auto) Load, List
                "include/js.php",      # JavaScript Engine
                "include/rss.php",     # Rss Engine
                "include/page.php",    # Page Engine
                "include/theme.php",   # Theme Engine
                "include/admin.php"    # Admin Engine
              ) ;

for($ii=0; $ii < sizeof($flz); $ii++)
  {
    $fl = $flz [ $ii ] ;
    if ( file_exists ( $fl ) )
      {
        include ( $fl ) ;
      }
    elseif ( file_exists ( '../' . $fl ) )
      {
        include ( '../' . $fl ) ;
      }
    else
      {
        exit ( 'Missing ' . $fl ) ;
      }
    unset($fl);
 }
?>