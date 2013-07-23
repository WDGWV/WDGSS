<?php
 /* TEST */ 
  
  function _wiki_replace ( $from ) 
   {
		  global $conf;
		  $do 	= $conf['database']['db']	->	query("select * from `{$conf['database']['pref']}wiki_link`;");
		  $doe 	= $conf['database']['db']	->	fetch($do,'array');

			for ( $i = 0 ; $i < sizeof ( $doe ) ; $i++ )
				{
					$sa 	  = 	( splitall ( $doe [ $i ] [ 'title' ] ) ) ;
					$split	=	null;
					
					for ( $e = 0 ; $e < sizeof ( $sa ) ; $e++ )
					 {
					  $split .= "(" . strtoupper($sa[$e]) . "|" . strtolower($sa[$e]) . ")";
					 }

					$from = preg_replace ( 
											"#" . 
											$split . 
											"#", 
											
											"<a href='{$conf['site']['url']}wiki:{$doe[$i]['toid']}:{$doe[$i]['title']}'>" .
											"\\1\\2\\3\\4\\5\\6\\7\\8\\9\\10\\11\\12\\13\\14\\15\\16\\17\\18\\19\\20\\21"  .
											"\\22\\23\\24\\25\\26\\27\\28\\29\\30\\31\\32\\33\\34\\35\\36\\37\\38\\39\\40" .
											"\\41\\42\\43\\44\\45\\46\\47\\48\\49\\50\\51\\52\\53\\54\\55\\56\\57\\58\\59" .
											"</a>",
											
											$from
										 );
				}

		return $from;

   }
   
if(!isset($_GET['title']))
 $_GET['title']='home';
 
		  global $conf;
		  $do 	= $conf['database']['db']	->	query("select * from `{$conf['database']['pref']}wiki` WHERE `id`='".secure($_GET['title'])."' OR `title`='".secure($_GET['title'])."' LIMIT 0,1;");
		  $doe 	= $conf['database']['db']	->	fetch($do,'array');

$from = (isset($doe[0]['text']))?$doe[0]['text']:'Page Not Found!';

echo _wiki_replace ( $from ) ;
?>