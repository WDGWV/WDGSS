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















if ( isset ( $_GET['id'] ) )
{
  $c = $conf['database']['db'] -> query("SELECT * FROM `{$conf['database']['pref']}forum` where `id`='{$_GET['id']}' OR `catname`='{$_GET['id']}' limit 0,1;");
  $c = $conf['database']['db'] -> fetch($c, 'array');
  $_GET['id'] = $c[0]['id'];


 $a = $conf['database']['db'] -> query("
 SELECT
 `id`,`name`,`by`,`datetime`,`lastpost` /*wat heb ik nodig?*/
 FROM `{$conf['database']['pref']}forum_topics` /*van*/
 WHERE `catid`='{$_GET['id']}' /*catid (_GET is already Encoded)*/
 ORDER BY `sticky` desc, `id` desc /*works*/
 ");
 $a = $conf['database']['db'] -> fetch($a, 'array');
 //echo dump(array(mysql_error(),$conf['database']['db']->debug,$a));
?>
<table>
 <tr>
  <td>
   <?php echo $lang['forum']['topic']; ?>
  </td>
  <td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </td>
  <td>
   <?php echo $lang['forum']['reactions']; ?>
  </td>
  <td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </td>
  <td>
   <?php echo $lang['forum']['last']; ?>
  </td>
 </tr>
<?php
if ( is_array ( $a ) ) {
for ( $i=0; $i<sizeof($a); $i++ )
{
?>
 <tr>
  <td>
   <a href='<?php echo $conf['site']['url']; ?>forum/<?php echo $c[0]['catname']; ?>/<?php echo $a[$i]['name']; ?>'><?php echo $a[$i]['name']; ?></a>
  </td>
  <td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </td>
  <td>
   <?php
    #see topics
    $e = $conf['database']['db'] -> query("SELECT `id` FROM `{$conf['database']['pref']}forum_reactions` WHERE `catid`='{$a[$i]['id']}'");
    $e = $conf['database']['db'] -> num ( $e );
    if (is_numeric($e)) echo $e;
    Else               echo '0';
   ?>
  </td>
  <td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </td>
  <td>
    <?php
    #Last/Reaction
    $e = $conf['database']['db'] -> query("SELECT `by`,`topicid` FROM `{$conf['database']['pref']}forum_reactions` WHERE `topicid`='{$a[$i]['id']}' ORDER BY `datetime` DESC");
    $e = $conf['database']['db'] -> fetch ( $e, 'array' );
    
    if ( isset ( $e[0]['by'] ) && isset ( $e[0]['topicid'] ) )
    {
    $z = $conf['database']['db'] -> query("SELECT `name` FROM `{$conf['database']['pref']}forum_topics` WHERE `id`='{$e[0]['topicid']}'");
    $z = $conf['database']['db'] -> fetch ( $z, 'array' );
    $topic = $z[0]['name'];
     echo "<a href='{$conf['site']['url']}profile/" . $e[0]['by'] . "'>" . $e[0]['by'] . "</a> @ <a href='{$conf['site']['url']}forum/{$c[0]['catname']}/{$e[0]['topicid']}'>" . $topic . "</a>"; 
    }
    else
    {
    echo 'None';
    }
    ?>
  </td>
 </tr>
<?php
}
}
?>
</table>
<a href="<?php echo $conf['site']['url']; ?>forum/new/<?php echo $_GET['id']; ?>"><?php echo $lang['forum']['newtopic']; ?></a>
<?php
}
else
{
	ga ("forum.pag");
}
?>