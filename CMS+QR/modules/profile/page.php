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















#PID = PROFILE ID
# _GET['PID'];

 if ( isset ( $_GET['PID'] ) )
 {
  $_GET['PID']=secure($_GET['PID']);
	if ( $_GET['PID'] == "Team " . $conf['site']['name'] )
	 ga($conf['site']['url'] . "profile/1");
	 
	$sql = "SELECT * FROM `{$conf['database']['pref']}users` WHERE `id`='{$_GET['PID']}' Or `username`='{$_GET['PID']}' or `realname`='{$_GET['PID']}' LIMIT 0,1;"; 
	$sql = $conf['database']['db'] -> query($sql);
	$num = $conf['database']['db'] -> num($sql,'rows');
	$sql = $conf['database']['db'] -> fetch($sql,'array');
	$sql = @$sql[0];
	$sql['text'] = @$conf['database']['db']->strip($sql['text']);
	$sql['text'] = strip($sql['text']);

	if ( $num == 1 )
	{
if ( !$sql['hideprofile'] )
{
		$_SESSION['avatar'] = $sql['username'];
		echo '<img src=\'' . $conf['site']['url'] .'avatar.png\' width=\'250\' height=\'250\'><table>';
		$_SESSION['email']  = (($sql['hideemail'])?$lang['profile']['hidden']:$sql['email']);
		echo "<tr><td>{$lang['profile']['id']}</td><td>:</td><td>{$sql['id']}</td></tr>";
		echo "<tr><td>{$lang['profile']['username']}</td><td>:</td><td>{$sql['username']}</td></tr>";
		echo "<tr><td>{$lang['profile']['realname']}</td><td>:</td><td>" . (($sql['hiderealname'])?$lang['profile']['hidden']:$sql['realname']) . "</td></tr>";
		echo "<tr><td>{$lang['profile']['email']}</td><td>:</td><td><img src='{$conf['site']['url']}email.png'></td></tr>";
		echo "<tr><td>{$lang['profile']['age']}</td><td>:</td><td>" . ((!$sql['hidebirthday'])?age($sql['birthday']):$lang['profile']['hidden']) . "</td></tr>";
		echo "<tr><td>{$lang['profile']['website']}</td><td>:</td><td><a href=\"http://{$sql['website']}\">{$sql['website']}</a></td></tr>";
		echo "<tr><td></td><td></td><td>{$sql['text']}</td></tr>";
/*
    ['status']
    ['text']
*/    		//echo dump ( $sql ) ;
		echo "</table>";
}
else
{
 echo $lang['profile']['hidden'] . ' ' . $lang['profile']['profile'];
}
 }
 else
 {
 echo "BESTAAT NIET";
 }
 }
 else
 {
	ga("home.pag");
 }
?>