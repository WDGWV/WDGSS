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















error_reporting(E_ALL);
function _adminwysiwyg() {
 global $conf,$lang,$url;
  //return "Avaible In Next Update.";
  
  if ( isset ( $_GET['del'] ) )
	{
		if ( unlink ( 'data/images/'  . secure($_GET['del']) ) )
		{
		 echo "Done!";
		}
		else
		{
		 echo "ERROR";
		}
		echo "<br>";
	}
	
	$dir = opendir('data/images');
	while ( ($file = readdir($dir)) !== false )
	{
		if ( $file != '.' && $file != '..' )
		{
		 echo "<img src='{$url}data/images/{$file}' width='100' height='100'> <a href='admin.pag?act=modules&mod=wysiwyg&del={$file}' onclick=\"return confirm('Delete {$file}?');\">DEL {$file}</a><hr>";
		}
	}
}
?>