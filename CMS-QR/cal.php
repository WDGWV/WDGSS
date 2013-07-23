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

  function addevent($title,$desc)
    {
      $this->cal .= "BEGIN:VEVENT\n" .
                    "DTSTART;VALUE=DATE:" . date("Ymd") . "\n" .
                    "DTEND;VALUE=DATE:"   . date("Ymd",(time()+((60*60)*24))) . "\n" .
                    "URL:http://www.wdgss.nl\n" .
                    "LOCATION:Haarlem\n" .
                    "SUMMARY:{$title}\n" .
                    "DESCRIPTION:Test\\nagenda!\n" .
                    "CLASS:PUBLIC\n" .
                    "TRANSP:TRANSPARENT\n" .
                    "STATUS:CONFIRMED\n" .
                    "DTSTAMP:" . date("Ymd") ."T" . date("His"). "\n" .
                    "CATEGORIES:WDGSS\n" .
                    "UID:dddddde@wdgss.nl\n" .
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

$cal=new ical('WDGSS');
$cal->addevent('TEST','TEST');
$cal->send(); 

?>