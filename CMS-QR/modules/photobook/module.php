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















//photobook=	&img=
if  ( 
		isset ( $_GET [ 'photobook'] ) &&
		isset ( $_GET [ 'img' ]		 )
	)
	
		{
			$array = array(
				'JPEG','Jpeg','JPeg','jPeg','jPeG','jpeg','jpeG',
				'JPG','Jpg','JPg','jPg','jPG','jpg','jpG',
				'png','Png','pNg','pnG','PnG','pNG','PNg',
				'XWDG'
				);
			$found = 0;

			for ( $i=0; $i<sizeof($array); $i++)
				{
					if ( file_exists ( 'data/photobook/' . $_GET['photobook'] . '/' . $_GET['img'] . '.' . $array[$i] ) )
								{
									$found = 1;
									header("content-type: image/jpeg");
									echo file_get_contents('data/photobook/' . $_GET['photobook'] . '/' . $_GET['img'] . '.' . $array[$i]);
									exit;
								}
				}
			
			if ( $found == 0 )
				{
					// notfound...
					echo "ERROR";
					exit;
				}
		}
		
?>