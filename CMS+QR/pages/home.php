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










$pre=$conf['cms']['done'];
$conf['module']['autoload'][] = "userlist";
$don = 0;
$nod = 0;
foreach($conf['module']['list'] As $module) {
 if (in_array($module,$conf['module']['autoload']) && file_exists("modules/".$module."/status") && !file_exists("modules/".$module."/dropped")) 
 {
  $done = file_get_contents("modules/".$module."/status");
  if ( !is_numeric($done) )
   { $Z=null;   $don  = $don + 100;   }
  else
   { $Z='% Af'; $don  = $don + $done; }
    $nod ++; 
 }
}
$pree=floor($don / $nod); 
$pre= floor ( ( $pree + $pre ) / 2 ); 

	if ( $pre > 99 )
		{
			$hidden = true;
			include "modules/news/page.php";
		}
	else
		{ 
			unset($pre);
		}

if ( ! $hidden )
{
?>
CMS STATUS:
<?php $pre=$conf['cms']['done']; if(isset($_GET['status'])) $pre = $_GET['status']; progressbar($pre); ?>
Module(s) Nog Af Te Maken / Plugin(s) Not Yet Ready:
<ul><?php
$don = 0;
$nod = 0;
$conf['module']['autoload'][] = "userlist";
foreach($conf['module']['list'] As $module) {
 if (in_array($module,$conf['module']['autoload']) && file_exists("modules/".$module."/status") && !file_exists("modules/".$module."/dropped")) 
 {
  $done = file_get_contents("modules/".$module."/status");

  if ( !is_numeric($done) )
   { $Z=null;   $don  = $don + 100;   }
  else
   { $Z='% Af'; $don  = $don + $done; }
  
  $nod ++; 
  
  if ($done != 100)
	echo "<li><a href='{$conf['site']['url']}{$module}.pag'>".sitelang($module)."</a> ({$done}{$Z})</li>"; 
 }
}
?></ul>
<br>Modules Totaal / Plugins Total:
<?php 
$pree=floor($don / $nod); 
progressbar($pree);
?>
<br>
Totaal / Overall Total:
<?php 
$pre= floor ( ( $pree + $pre ) / 2 ); 

	if ( $pre > 99 )
	 ga ( "{$conf['site']['url']}news.pag") ;

progressbar($pre);
?>
(Zie Tevens: <a href='<?php echo "{$conf['site']['url']}"; ?>jaja.pag'>deze pagina</a>)
<?php
}
?>