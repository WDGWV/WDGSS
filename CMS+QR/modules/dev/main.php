<table>
 <tr>
  <td> Catagory </td>
  <td> Scripts  </td>
  <td> Good Scripts </td>
  <td> Files </td>
 </tr>
<?php
/* List Catagory`s! */

$x = $db->query("SELECT * FROM `{$pf}dev_cat`");
$n = $db -> num ( $x, 'row' ) ;
$d = $db -> fetch ( $x, 'array' ) ;

for ($i=0; $i<sizeof($d); $i++)
{
echo <<<END
 <tr>
  <td> <a href='{$conf['site']['url']}DevCenter/cat:{$d[$i]['cat']}'>{$d[$i]['catname']}</a> </td>
  <td> <ACRONYM title='Not Supported Yet'>nsy</ACRONYM> </td>
  <td> <ACRONYM title='Not Supported Yet'>nsy</ACRONYM> </td>
  <td> <ACRONYM title='Not Supported Yet'>nsy</ACRONYM> </td>
 </tr>
END;
}
?>
</table>