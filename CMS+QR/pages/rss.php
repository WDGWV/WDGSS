<?php
/* Class Global Fix... */
function _returnconf()
  {
    global $conf;
    return $conf;
  }
  
header("Content-Type: text/xml");
header("X-Rss-id: WDGSS REGULAR"); // Opt. News, Agenda, Forum, Others

$q=new rss();

$q->item();

exit ( $q->get() ) ;