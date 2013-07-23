<?php
class ical
 {
  function __construct($DEC)
    {
      $this->cal = "BEGIN:VCALENDAR\n" .
                   "PRODID:-//WesDeGroot Projects\WDGSS\n" .
                   "VERSION:2.0\n" .
                   "CALSCALE:GREGORIAN\n" .
                   "METHOD:PUBLISH\n" .
                   "X-WR-CALNAME: {$DEC}\n";
    }

  function addevent($title,$desc,$date=null,$time=null, $dend=null)
    {

      if ( $date == null )
        $date = date("Ymd");

      if ( $dend == null )
        $dend = date("Ymd",(time()+((60*60)*24)));
        
      if ( $time == null )
        $time = date("His");
        
      $this->cal .= "BEGIN:VEVENT\n" .
                    "DTSTART;VALUE=DATE:" . $date . "\n" .
                    "DTEND;VALUE=DATE:"   . $dend . "\n" .
                    "URL:http://www.wdgss.nl\n" .
                    "LOCATION:wdgss.nl\n" .
                    "SUMMARY:{$title}\n" .
                    "DESCRIPTION:{$desc}\n" .
                    "CLASS:PUBLIC\n" .
                    "TRANSP:TRANSPARENT\n" .
                    "STATUS:CONFIRMED\n" .
                    "DTSTAMP:" . $date ."T" . $time . "\n" .
                    "CATEGORIES:WDGSS\n" .
                    "UID:" . uniqueid() . "@wdgss.nl\n" .
                    "END:VEVENT\n";

    }

  function send()
    {
      $this->cal .= "END:VCALENDAR";
        header("Content-Type: text/Calendar");
        header("Content-Disposition: inline; filename=calendar.ics");
        echo $this->cal;
    }
 }

 

?>