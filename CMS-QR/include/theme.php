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
 
$error = null;

$errorx = "<table><tr><td><img src='/template/admin/images/error.png' width='80' height='80'></td><td><h1>Error</h1>CHMOD \"%s\" NOT GOOD!<br />Please Chmodd it to 666<br />i`m not gonna work right now!</td></tr></table>";

@mkdir('data',0777);
if (!is_writeable('data'))
 	 $error = overlay(sprintf($errorx,'data'),false);
 	 
@mkdir('data/images',0777); 	 
if (!is_writeable('data/images'))
 	 $error = overlay(sprintf($errorx,'data/images'),false);
 	 
@mkdir('data/images',0777); 	 
if (!is_writeable('data/avatar'))
 	 $error = overlay(sprintf($errorx,'data/avatar'),false);

@mkdir('pages',0777); 	 
if (!is_writeable('pages'))
 	 $error = overlay(sprintf($errorx,'pages'),false);

if ( isset ( $_GET['theme'] ) )
 {
 $conf['site']['override'] = true;
 $conf['site']['theme']    = $_GET['theme'];
 } 
 
function themed ( $title, $page )
	{
		global $conf,$sql,$temp,$lang,$wdgssautoload,$error,$member,$site;
			
			$page = preg_replace ( "#{wdg\:(.*)}#" , null , $page ) ; //26-1-11

			if ( isset ( $conf['site']['override'] ) )
			 {
			  if ( $conf['site']['override'] == 'true' Or $conf['site']['override'] == '1' )
			   {
			     $member['theme'] = $conf['site']['theme'];
			   }
			 }
			 
		$t = new wdgsstemplate();
			if ( isset ( $member['theme'] ) )
				{
					if ( !file_exists ( 'template/' . $member['theme'] . '/theme.tpl' ) )
						{
								if ( !file_exists ( 'template/' . $conf['site']['theme'] . '/theme.tpl' ) )
									$conf['site']['theme'] = 'default';
						}
					else
						{
									$conf['site']['theme'] = $member['theme'];						
						}
				}
			else
				{
					if ( !file_exists ( 'template/' . $conf['site']['theme'] . '/theme.tpl' ) )
						$conf['site']['theme'] = 'default';
				}
						
		$temp = $conf['site']['theme'];
		
  if ( preg_match ( "/(iPhone|iPod|iPad)/", getuseragent() ) ) 
  { 
  if ( !preg_match ( "/(O|o)pera/", getuseragent() ) )
  {
  $conf['site']['theme']='admin'; $temp='admin';$EE='admin/iphone.theme';
  }
  else
  {
  $conf['site']['theme']='admin'; $temp='admin';$EE='admin/iphone-Opera.theme';
  }
  }
  elseif ( isset ( $_GET['theme'] ) )
  {
    $conf['site']['override'] = true;
    $conf['site']['theme']    = $_GET['theme'];
    $temp                     = $_GET['theme'];
    $EE                       = $_GET['theme'] . '/theme';
  }
  else
  { $EE = $temp . '/theme'; }

			$t -> build ($EE) ;
			
		if ( isset ( $conf['site']['started'] ) ) 
		 $AR = $conf['site']['started'] . " - ";
		Else
		 $AR = null;
		
		if ($conf['site']['snow'] == true)
		 $xx = '<script type=\'text/javascript\' src=\'' . $conf['site']['url'] . 'template/admin/snow.js\'></script>' . "<!-- {$conf['site']['snow']} -->\r\n";
		Else
		 $xx = "<!-- {$conf['site']['snow']} -->\r\n"; 

		$xx=null;//TfiX
		$replace = array ( 
			"title" 		=> $conf['site']['name'],
			"meta"  		=> setmeta( array (
												"description" => $conf['site']["description"],
												"keywords"    => "wdgss,wes,de,groot,site,system,woc,wocnl,v{$conf['cms']['version']}",
												"Author"      => "Wesley De Groot (WesDeGroot)",
												"Subject"     => "WesDeGroot Site System (WDGSS) [www.wdgss.nl]",
												"Title"       => ((!preg_match('/W(.*)D(.*)G(.*)S(.*)S/',$conf['site']['name'])) ? "{$conf['site']['name']} Powered By WDGSS v{$conf['cms']['version']}" : $conf['site']['name']),
												"Language"    => "dutch",
												"Robots"      => "all"
											   ) ) . '<style type=\'text/css\'> img, div, input { behavior: url("iepngfix.htc") }</style>' . "\r\n" . 
	'<script type=\'text/javascript\' src=\'' . $conf['site']['url'] . 'template/admin/js.js\'></script>' . "\r\n" .
	$xx .

			'<link rel="stylesheet" type="text/css" href="' . $conf['site']['url'] . 'template/admin/css.css" media="screen" />' .
			'<script type="text/javascript" src="http://jquery.com/src/jquery-latest.js"></script>' .
			"\r\n<div id=\"doverlay\"><br><br><br><br><br><br><br><br><center>INFO</center></div>
<script type=\"text/javascript\">
var ns = (navigator.appName.indexOf(\"Netscape\") != -1);
var d = document;
function JSFX_FloatDiv(id, sx, sy)
{
	var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
	var px = document.layers ? \"\" : \"px\";
	window[id + \"_obj\"] = el;
	if(d.layers)el.style=el;
	el.cx = el.sx = sx;el.cy = el.sy = sy;
	el.sP=function(x,y){this.style.left=x+px;this.style.top=y+px;};

	el.floatIt=function()
	{
		var pX, pY;
		pX = (this.sx >= 0) ? 0 : ns ? innerWidth : 
		document.documentElement && document.documentElement.clientWidth ? 
		document.documentElement.clientWidth : document.body.clientWidth;
		pY = ns ? pageYOffset : document.documentElement && document.documentElement.scrollTop ? 
		document.documentElement.scrollTop : document.body.scrollTop;
		if(this.sy<0) 
		pY += ns ? innerHeight : document.documentElement && document.documentElement.clientHeight ? 
		document.documentElement.clientHeight : document.body.clientHeight;
		this.cx += (pX + this.sx - this.cx)/8;this.cy += (pY + this.sy - this.cy)/8;
		this.sP(this.cx, this.cy);
		setTimeout(this.id + \"_obj.floatIt()\", 20);
	}
	return el;
}
JSFX_FloatDiv(\"doverlay\", 0,0).floatIt();
</script>
",
			"content" 		=> $page.$error,
			"site"          => $conf['site']['url'],
			"url"           => $conf['site']['url'],
			"copyright=1"	=> "&nbsp;&nbsp;&nbsp;&copy;&nbsp;" . $conf['site']['name'] . "&nbsp;{$AR}" . date("Y"),
			"copyright=2" 	=> "Powered By <a href='http://www.wdgss.nl'>WDGSS</a> 2001-" . date("Y") . ", Runned " . $conf['database']['db']->total() . " Query`s In ".loadtime() ." s&nbsp;&nbsp;&nbsp;",
			"load" 			=> $conf['site']['url'] . "template/{$temp}/",
		);
		
		if  ( !isset ( $replace['page'] ) )
		{
			if ( isset ( $lang['site'][$_GET['pag']] ) ) 
				{
					$replace['page'] = $lang['site'][$_GET['pag']];
				}
			else
				{
					$replace['page'] = ($_GET['pag']);
				}
		}
		
		for($i=0; $i<sizeof($wdgssautoload); $i++) 
			{
				$replace[$wdgssautoload[$i][0]] = $wdgssautoload[$i][1];
			}
			
		for($i=0; $i<11; $i++)
			{
				if ( isset ( $conf['site']['link' . $i] ) && isset ( $conf['site']['url'. $i] ) )
					{
						$conf['site']['url' . $i] = preg_replace("/\.pag/", null, $conf['site']['url' . $i]);
						$replace["url=" . $i]  = $conf['site']['url'] . 'page/' . $conf['site']['url' . $i];
						$replace["link=" . $i] = $conf['site']['link' . $i];
						$replace["hide" . $i . "=begin"] = null;
						$replace["hide" . $i . "=end"] = null;
						// {wdg:hide1=end}
					}
				else
					{
						$replace["url=" . $i]  = null; //sprintf($lang['site']['seturl'],$i);
						$replace["link=" . $i] = null; //sprintf($lang['site']['setlink'],$i);  
						$replace["hide" . $i . "=begin"] = '<!--';
						$replace["hide" . $i . "=end"] = '-->';
					}
			}
			
		if ( ! isset ( $conf['site']['menu'] ) )
			$conf['site']['menu']	=	null;
			
		foreach ($replace As $i => $w)
			{
				$t -> func ( array ( $i , $w ) ) ;
			}
		$t -> add ( array('page',$replace['page'] ) ) ;
		$t -> add ( array('menu',$conf['site']['menu'] ) ) ;
                $t -> func ( array ('menu=li',$conf['site']['menu-li'] ) ) ;
                $t -> func ( array ('menu=l',$conf['site']['menu-l'] ) ) ;
		$t -> parse ( array("{wdg\:","}" ) );

		echo $t->check();
	}

?>