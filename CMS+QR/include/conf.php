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
 
$conf = array();

# User, Please Don`t Edit This!
#  Only Developers Of WDGSS!

#Site Naam:
$conf['site']['name']       = 'WDGSS SETUP'; # => Will Be Overrided By SQL 

#Site Adres:bv. www.wocnl.nl
$conf['site']['url']        = 'http://127.0.0.1/';

#Site Database (auto make)
$conf['database']['host']   = 'localhost';
$conf['database']['user']   = 'root';
$conf['database']['pass']   = '';
$conf['database']['data']   = 'cms';
$conf['database']['pref']   = 'wdgss_';
		
#Voor Later
$conf['database']['connected'] = false;
$conf['database']['resource']  = 'Not Connected (Yet).';

#Belangrijke Modules VERANDER NIET
$conf['module']['autoload'] = array(
										"home",
										"chat",
										"news",
										"profile",
										"login",
										"register",
										"guestbook",
										"forum",
										"wysiwyg",
										"xss",
										"agenda",
										"photobook",
										"gamecenter",
										"invoice"
									);

#other
$wdgssautoload = array(); //autoload for modules in template. see help file of module!

$url = $conf['site']['url'];

	if ( !preg_match ( "#(login|qr|captcha|wysiwygl|favicon|ico|png|thisistotrickyou|bmp|gif|img|jpg|avatar|avatar\.png)#", $_SERVER['REQUEST_URI']) )
		$_SESSION['lasturl'] = substr($url,0,strlen($url)-1) . $_SERVER['REQUEST_URI'];
?>