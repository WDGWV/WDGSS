<?php
function wdgsstemplate()
{
 return true;
}


///template-parser CLASS (NOW OOP!!!!!!!!!!!!!!!!!!) WDGSS "CORE" REQUIRED


  class wdgsstemplate 
  {
    function build($what = 'standard') 
    {
     if(!defined('THEME')) 
     {
       define('THEME',$what);
       define('WDGSS_THEME',$what);
       define('WDGSS_SITE_THEME',$what);
     }
     $this->theme = $what;
     $this->debuglogwdgsstemplatesystem .= "setted theme to " . $what . "\n";
     return true;
    }
    
    function parse($array = array("<\?wdg:","\?>")) 
    {
     if(isset($array[0]) && isset($array[1])) 
     {
      $this->templatef[0]=$array[0];
      $this->templatef[1]=$array[1];
     }
     else
     {
      $this->debuglogwdgsstemplatesystem .= "ERROR: parse(); function not exicuted";
     }
    }
    
    function add($what = array("comment","No Comment added...")) 
    {
     if($what[0] == 'comment') 
     {
      $this->templatetoparsebywdgss .= "\n<!-- " . $what[1] . " -->";
     }
     if($what[0] == 'text' || $what[0] == 'html') 
     {
      $this->templatetoparsebywdgss .= "\n" . $what[1];
     }      
     if($what[0] == 'style') 
     {
      $this->templatetoparsebywdgss .= "\n<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $what[1] . "\">";
     }
     if($what[0] == 'script') 
     {
      global $jss;
      if ( in_array ( $what[1] , $jss ) ) 
      {
        $secretkey = _rand(10);
        $this->templatetoparsebywdgss .= "\n<script language=\"JavaScript\" type=\"text/javascript\" src=\"core.php?js=" . $what[1] . "&key=".$secretkey."\">\r\nvar \$secretkey;\r\n\$secretkey = '".$secretkey."';\r\n</script>";
        $_SESSION['skey'] = $secretkey;
        koekje('maak','skeyy',$secretkey);
      }
      else
      {
        $this->templatetoparsebywdgss .= "\n<script language=\"JavaScript\" type=\"text/javascript\" src=\"" . $what[1] . "\"></script>";
      }
     }
     if($what[0] == 'page') 
     {
      $this->page = $what[1];
     }
     if($what[0] == 'menu') 
     {
      $this->menu = $what[1];
     }
     if($what[0] != 'html' && $what[0] != 'menu' && $what[0] != 'page') 
     {
      $this->debuglogwdgsstemplatesystem .= "added " . $what[0] . " -> " . $what[1] . "\n";
     }
     else
     {
      $this->debuglogwdgsstemplatesystem .= "added " . $what[0] . " -> " . strlen($what[1]) . " characters\n";
     }
     return true;
    }
    
    function func($addding) 
    {
     $this->debuglogwdgsstemplatesystem .= "Added {" . $addding[0] . "} with value " . $addding[1] . "\n";
     $this->commands[$addding[0]] = $addding[1];
    }
    
    function debugvars($to = 'woo') 
    {
     $this->debuglogwdgsstemplatesystem .= "setted debug to \$" . $to . "\n";
     return "<div style='width: 500; height: 250; alig: center; algin: center; overflow: scroll;'><pre>Debuglog:\n" . $this->debuglogwdgsstemplatesystem . "</pre></div>";
    }
  
    function check() 
    {
      if(!defined("PATH")) 
      { 
        DEFINE("PATH","./");
      }
      if (!isset($this->templatef[0]) || !isset($this->templatef[1])) 
      {
       $this->parse();
      }
      
     if(isset($this->theme)) 
     {
       if(file_exists(PATH . "template/" . $this->theme . ".tpl")) 
       {    
        $this->object = isset($this->templatetoparsebywdgss)?$this->templatetoparsebywdgss:false;
        //ob_start();
        $this->object1 = file_get_contents(PATH . "template/" . $this->theme . ".tpl");
        //$this->object1 = ob_get_contents();
        //ob_end_clean();
        $this->object .= $this->object1;
        unset($this->object1);
        if(isset($this->commands)) 
        {
          foreach($this->commands as $cmd => $replace) 
          {
             $this->object = preg_replace("#{" . $cmd . "}#",$replace,$this->object);
             //$this->object = preg_replace("#<" . $cmd . ">#",$replace,$this->object);

             if (isset($this->templatef[0]) && isset($this->templatef[1])) 
             {
              $this->object = preg_replace("#" . $this->templatef[0] . $cmd . $this->templatef[1] . "#",$replace,$this->object);
             }
          }
        }
        if (isset($this->theme)) 
        {
          $this->object = preg_replace("#<style>#",$this->theme,$this->object);
          $this->object = preg_replace("#{style}#",$this->theme,$this->object);
          
          if (isset($this->templatef[0]) && isset($this->templatef[1])) 
          {
            $this->object = preg_replace("#" . $this->templatef[0] . "style" . $this->templatef[1] . "#",$this->theme,$this->object);
          }
        }
        if (isset($this->theme)) 
        {
          $this->object = preg_replace("#<theme>#",$this->theme,$this->object);
          $this->object = preg_replace("#{theme}#",$this->theme,$this->object);
          
          if (isset($this->templatef[0]) && isset($this->templatef[1])) 
          {
            $this->object = preg_replace("#" . $this->templatef[0] . "theme" . $this->templatef[1] . "#",$this->theme,$this->object);
          }
        }
        if (isset($this->menu)) 
        {
          $this->object = preg_replace("#<menu>#",$this->menu,$this->object);
          $this->object = preg_replace("#{menu}#",$this->menu,$this->object);
          
          if (isset($this->templatef[0]) && isset($this->templatef[1])) 
          {
            $this->object = preg_replace("#" . $this->templatef[0] . "menu" . $this->templatef[1] . "#",$this->menu,$this->object);
          }
        }
        if (isset($this->page)) 
        {
          $this->object = preg_replace("#<page>#",$this->page,$this->object);
          $this->object = preg_replace("#{page}#",$this->page,$this->object);
          
          if (isset($this->templatef[0]) && isset($this->templatef[1])) 
          {
            $this->object = preg_replace("#" . $this->templatef[0] . "page" . $this->templatef[1] . "#",$this->page,$this->object);
          }
        }
        return $this->object;
       }
       else
       {
        return "Theme " . $this->theme . " Doesn`t exists";
       }
     }
     else
     {
      return "No Theme Selected!";
     }
   }
 }
  
///EOF. template-parser CLASS

///HTTPCLASS


class http
{
  function toggledebug($tooiw=false)
  {
    if ( isset ( $this->setdebug ) && $this->setdebug == true )
    {
      $this->setdebug = false;
    }
    else
    {
      $this->setdebug = true;
    }
  }
 
  function connect ( $to, $pa, $po=80, $timeout="3",$uag="WesDeGroot Site System" ) {
    $this -> host=$to;
    $this -> page=$pa;
    $this -> port=$po;
    $this -> cookies = null;
    $this->koekjes = array('fakecookie1=wes','wesdegroot=httpsystem');
    if ( strtoupper($this -> port) == strtoupper("HTTP") )
    {
     $this -> port = 80;   $po = 80;
    }
    if ( strtoupper($this -> port) == strtoupper("HTTPS") )
    {
     $this -> port = 443; $po = 443;
    }
    $this->socket = @fsockopen($this->host, $this->port, $this->errorno, $this->error, $timeout);
    if ( !isset ( $this->setdebug ) ) {
     $this -> setdebug=true;
     $this -> toggledebug();
    }
    $this -> useragent=$uag;
  }
  
  function setcookie($koekjes) {   
   if ( is_array ( $koekjes ) ) {
    foreach ( $koekjes As $koek => $inh ) 
    {
		$this -> cookies .= $koek . '=' . urlencode($inh) . '; '; 
    }
   }
   else
   {
    $this -> cookies = $koekjes; // zo is het voor een alt. dump vorige sessie
   }
  }
  
  function method($method)
  {
    $this -> method = strtoupper($method); 
  }
   
  function debug($TT) 
  {
    if ( $this -> setdebug == true )
    {
      echo $TT . "<hr />";
    }
  }
   
  function exec($dat=array("1"=>"2","3"=>"4"))
  {
   if ( $this->socket )
    {
      if (isset($this->host) && isset($this->page) && isset($this->port)) 
      {
        if (isset($this->method)) 
        {
          foreach($dat as $key => $value)
          {
            $dat[$key] = $key . '=' . urlencode($value);
          }
          $data = implode("&",$dat);
          $aant = strlen($data);  
          if (substr($data, 0, 1) == "&")
          {
            $data = substr($data, 1, $aant);
          }
          if ($this->method == "GET")
          {
            $this->page .= '?'.$data;
          }   
          $requestHeader = $this -> method . " " . $this -> page . "  HTTP/1.1\r\n";
          $requestHeader.= "Host: " . $this -> host . "\r\n";
          $requestHeader.= "User-Agent: " . $this -> useragent . "\r\n";
          $requestHeader.= "Cookie: " . $this -> cookies . "\r\n";
          $requestHeader.= "Content-Type: application/x-www-form-urlencoded\r\n";
          if ($this->method == "POST")
          {
            $requestHeader.= "Content-Length: ".strlen($data)."\r\n";
          }
          $requestHeader.= "Connection: close\r\n\r\n";
          if ($this->method == "POST")
          {
            $requestHeader.= $data;
          }          
          $this->debug ( $requestHeader );       
          fwrite($this -> socket, $requestHeader);       
          $responseHeader = '';
          $responseContent = '';
          do
          {
            $responseHeader.= fread($this -> socket, 1);
          }

          while (!preg_match('/\\r\\n\\r\\n$/', $responseHeader));
            if (!strstr($responseHeader, "Transfer-Encoding: chunked"))
            {
              while (!feof($this -> socket))
              {
                $responseContent.= fgets($this->socket, 128);
              }
            }
            else
            {
              while ($chunk_length = hexdec(fgets($this -> socket)))
              {
                $responseContentChunk = '';
                $read_length = 0;
                while ($read_length < $chunk_length)
                {
                  $responseContentChunk .= fread($this -> socket, $chunk_length - $read_length);
                  $read_length = strlen($responseContentChunk);
                }
                $responseContent.= $responseContentChunk;
                fgets($this -> socket);
              }
            }
          $this->debug ( $responseHeader ) ;
          // koekje => Set-Cookie: koekje2=mmmz+lekker+%3AD; exp=donotuse
          $this->koekjes=array();
          if ( preg_match_all ( "/Set-Cookie: (.*); (.*)/", $responseHeader , $xxx ) ) {
			for ( $i=0; $i<sizeof($xxx[1]); $i++ )
			{
				$this -> koekjes[] = $xxx[1][$i];
			}
          }
          
          if ( preg_match ( "#HTTP/1\.(.*) 404 Not Found#", $responseHeader ) ) {
          return 'ERROR:404';
          }
          elseif ( preg_match ("#location: (.*)#", $responseHeader ) ) {
           preg_match_all("#location: (.*)#", $responseHeader, $match ) ;
          
           echo dump ( $match );
          }          
          else
          {
          return chop($responseContent);
          }
        }
        else
        {
         return "Please Set Method Use: \$something->method(\"POST\"); OR \$something->method(\"GET\");";
        }
      }
      else
      {
        return "Please Use Connect. \$something->connect(\$to, \$path, \$port);";
      }
    }
    else
    {
      $this->debug("connect error no: " . $this->errorno . "; error: " . $this->error);
      return "ERROR";
    }
  }
  
    function dumpcookies()
    {
     return implode("; ",$this -> koekjes);
    }

}

class ini 
{
Function Read($IniFile, $IniKey, $IniVar, $defalut="Defalut txt") 
{
 if(substr($IniVar, 0,1) != ';')
 {
  if(file_exists($IniFile)) 
  {
    $this->Ini_Key = "[".strtolower($IniKey)."]";
    $this->Ini_Variable = strtolower($IniVar);
    $this->Ini_File = file($IniFile);
    unset($this->Ini_Value);
    for($Ini_Rec=0; $Ini_Rec<sizeof($this->Ini_File); $Ini_Rec++) 
    {
     $this->Ini_Temp = trim($this->Ini_File[$Ini_Rec]);
     $this->Ini_Tmp = strtolower($this->Ini_Temp);
     if ( substr_count($this->Ini_Tmp, "[") > 0 ) $this->Ini_Ready = 0; 
        
        if ( $this->Ini_Tmp == $this->Ini_Key ) $this->Ini_Ready = 1;
            If ( (substr_count($this->Ini_Tmp, "[") == 0) && ($this->Ini_Ready == 1) ) 
            {
              if (substr_count($this->Ini_Tmp, $this->Ini_Variable . "=") > 0) 
              {
               if ( substr($this->Ini_Temp, 0,1) != ';' ) 
               {
                   $this->Ini_Value = substr($this->Ini_Temp, strlen($this->Ini_Variable . "="));
                   $expl = explode(";",$this->Ini_Value);
                   if ( isset ( $expl[0] ) ) {
                    return $expl[0];
                   }
              }
             }
    }
}
    if ( $this->Ini_Ready == 1) 
    {
        $this->Ini_Value = $defalut;
                   $expl = explode(";",$this->Ini_Value);
                   if ( isset ( $expl[0] ) ) {
                    return $expl[0];
                   }
    }
    if ( !isset($this->Ini_Value) ) 
    {
        return "ERROR: Key: [<b>".strtoupper($IniKey)."</b>], does not exist in <b>".strtoupper($IniFile)."</b> file !"; // Key or Variable NOT FOUND in INI file
    }
}
else
{
 return "ERROR ini \"".$IniFile."\" does not exists!";
}
}
}
}


if(!function_exists("simplexml_load_file")){
	function simplexml_load_file($file){
 	 	$sx = new simplexml;
 	 	return $sx->xml_load_file($file);
	}
}

class SimpleXMLObject{
    function attributes(){
        $container = get_object_vars($this);
        return (object) $container["@attributes"];
    }
    function content(){
        $container = get_object_vars($this);
        return (object) $container["@content"];
    }

}

class simplexml {
    var $result = array();
    var $ignore_level = 0;
    var $skip_empty_values = false;
    var $php_errormsg;
    var $evalCode="";
    function array_insert($level, $tags, $value, $type)
    {
        $temp = '';
        for ($c = $this->ignore_level + 1; $c < $level + 1; $c++) {
            if (isset($tags[$c]) && (is_numeric(trim($tags[$c])) || trim($tags[$c]))) {
                if (is_numeric($tags[$c])) {
                    $temp .= '[' . $tags[$c] . ']';
                } else {
                    $temp .= '["' . $tags[$c] . '"]';
                }
            }
        }
        $this->evalCode .= '$this->result' . $temp . "=\"" . addslashes($value) . "\";//(" . $type . ")\n";
    }
    function xml_tags($array)
    {    $repeats_temp = array();
    $repeats_count = array();
    $repeats = array();

    if (is_array($array)) {
        $n = count($array) - 1;
        for ($i = 0; $i < $n; $i++) {
            $idn = $array[$i]['tag'].$array[$i]['level'];
            if(in_array($idn,$repeats_temp)){
                $repeats_count[array_search($idn,$repeats_temp)]+=1;
            }else{
                array_push($repeats_temp,$idn);
                $repeats_count[array_search($idn,$repeats_temp)]=1;
            }
        }
    }
    $n = count($repeats_count);
    for($i=0;$i<$n;$i++){
        if($repeats_count[$i]>1){
            array_push($repeats,$repeats_temp[$i]);
        }
    }
    unset($repeats_temp);
    unset($repeats_count);
    return array_unique($repeats);
    }
    function array2object ($arg_array)
    {

        if (is_array($arg_array)) {
            $keys = array_keys($arg_array);
            if(!is_numeric($keys[0])) $tmp = new SimpleXMLObject;
            foreach ($keys as $key) {
                if (is_numeric($key)) $has_number = true;
                if (is_string($key)) $has_string = true;
            }
            if (isset($has_number) and !isset($has_string)) {
                foreach ($arg_array as $key => $value) {
                    $tmp[] = $this->array2object($value);
                }
            } elseif (isset($has_string)) {
                foreach ($arg_array as $key => $value) {
                    if (is_string($key))
                    $tmp->$key = $this->array2object($value);
                }
            }
        } elseif (is_object($arg_array)) {
            foreach ($arg_array as $key => $value) {
                if (is_array($value) or is_object($value))
                $tmp->$key = $this->array2object($value);
                else
                $tmp->$key = $value;
            }
        } else {
            $tmp = $arg_array;
        }
        return $tmp; //return the object
    }
    function array_reindex($array)
    {
        if (is_array($array)) {
            if(count($array) == 1 && $array[0]){
                return $this->array_reindex($array[0]);
            }else{
                foreach($array as $keys => $items) {
                    if (is_array($items)) {
                        if (is_numeric($keys)) {
                            $array[$keys] = $this->array_reindex($items);
                        } else {
                            $array[$keys] = $this->array_reindex(array_merge(array(), $items));
                        }
                    }
                }
            }
        }

        return $array;
    }
    function xml_reorganize($array)
    {
        $count = count($array);
        $repeat = $this->xml_tags($array);
        $repeatedone = false;
        $tags = array();
        $k = 0;
        for ($i = 0; $i < $count; $i++) {
            switch ($array[$i]['type']) {
                case 'open':
                    array_push($tags, $array[$i]['tag']);
                    if ($i > 0 && ($array[$i]['tag'] == $array[$i-1]['tag']) && ($array[$i-1]['type'] == 'close'))
                    $k++;
                    if (isset($array[$i]['value']) && ($array[$i]['value'] || !$this->skip_empty_values)) {
                        array_push($tags, '@content');
                        $this->array_insert(count($tags), $tags, $array[$i]['value'], "open");
                        array_pop($tags);
                    }

                    if (in_array($array[$i]['tag'] . $array[$i]['level'], $repeat)) {
                        if (($repeatedone == $array[$i]['tag'] . $array[$i]['level']) && ($repeatedone)) {
                            array_push($tags, strval($k++));
                        } else {
                            $repeatedone = $array[$i]['tag'] . $array[$i]['level'];
                            array_push($tags, strval($k));
                        }
                    }

                    if (isset($array[$i]['attributes']) && $array[$i]['attributes'] && $array[$i]['level'] != $this->ignore_level) {
                        array_push($tags, '@attributes');
                        foreach ($array[$i]['attributes'] as $attrkey => $attr) {
                            array_push($tags, $attrkey);
                            $this->array_insert(count($tags), $tags, $attr, "open");
                            array_pop($tags);
                        }
                        array_pop($tags);
                    }
                    break;

                case 'close':
                    array_pop($tags);
                    if (in_array($array[$i]['tag'] . $array[$i]['level'], $repeat)) {
                        if ($repeatedone == $array[$i]['tag'] . $array[$i]['level']) {
                            array_pop($tags);
                        } else {
                            $repeatedone = $array[$i + 1]['tag'] . $array[$i + 1]['level'];
                            array_pop($tags);
                        }
                    }
                    break;

                case 'complete':
                    array_push($tags, $array[$i]['tag']);
                    if (in_array($array[$i]['tag'] . $array[$i]['level'], $repeat)) {
                        if ($repeatedone == $array[$i]['tag'] . $array[$i]['level'] && $repeatedone) {
                            array_push($tags, strval($k));
                        } else {
                            $repeatedone = $array[$i]['tag'] . $array[$i]['level'];
                            array_push($tags, strval($k));
                        }
                    }

                    if (isset($array[$i]['value']) && ($array[$i]['value'] || !$this->skip_empty_values)) {
                        if (isset($array[$i]['attributes']) && $array[$i]['attributes']) {
                            array_push($tags, '@content');
                            $this->array_insert(count($tags), $tags, $array[$i]['value'], "complete");
                            array_pop($tags);
                        } else {
                            $this->array_insert(count($tags), $tags, $array[$i]['value'], "complete");
                        }
                    }

                    if (isset($array[$i]['attributes']) && $array[$i]['attributes']) {
                        array_push($tags, '@attributes');
                        foreach ($array[$i]['attributes'] as $attrkey => $attr) {
                            array_push($tags, $attrkey);
                            $this->array_insert(count($tags), $tags, $attr, "complete");
                            array_pop($tags);
                        }
                        array_pop($tags);
                    }

                    if (in_array($array[$i]['tag'] . $array[$i]['level'], $repeat)) {
                        array_pop($tags);
                        $k++;
                    }

                    array_pop($tags);
                    break;
            }
        }
        eval($this->evalCode);
        $last = $this->array_reindex($this->result);
        return $last;
    }
    function xml_load_file($file, $resulttype = 'object', $encoding = 'UTF-8')
    {
        $php_errormsg="";
        $this->result="";
        $this->evalCode="";
        $values="";
        $data = file_get_contents($file);
        if (!$data)
        return 'Cannot open xml document: ' . (isset($php_errormsg) ? $php_errormsg : $file);

        $parser = xml_parser_create($encoding);
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        $ok = xml_parse_into_struct($parser, $data, $values);
        if (!$ok) {
            $errmsg = sprintf("XML parse error %d '%s' at line %d, column %d (byte index %d)",
            xml_get_error_code($parser),
            xml_error_string(xml_get_error_code($parser)),
            xml_get_current_line_number($parser),
            xml_get_current_column_number($parser),
            xml_get_current_byte_index($parser));
        }

        xml_parser_free($parser);
        if (!$ok)
        return $errmsg;
        if ($resulttype == 'array')
        return $this->xml_reorganize($values);
        return $this->array2object($this->xml_reorganize($values));
    }
}
?>