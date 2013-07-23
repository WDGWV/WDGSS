table wdgss_dev_cat
catid   id    auto
catname vc255 null
rights  vc255 null [lv]

table wdgss_dev_scripts
scriptid    id    auto
scriptname  vc255 null
catid       vc255 null
catname     vc255 null
script      text  -


CREATE TABLE IF NOT EXISTS `wdgss_dev_cat` (
  `cat` int(255) NOT NULL AUTO_INCREMENT COMMENT 'automatic cat id',
  `catname` varchar(255) NOT NULL COMMENT 'cat name',
  `rights` varchar(255) NOT NULL COMMENT 'rights for users',
  PRIMARY KEY (`cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `wdgss_dev_scripts` (
  `scriptid` int(255) NOT NULL AUTO_INCREMENT COMMENT 'the script id',
  `scriptname` varchar(255) NOT NULL COMMENT 'The Script Name',
  `catid` int(255) NOT NULL COMMENT 'Catagory Id',
  `catname` varchar(255) NOT NULL COMMENT 'Catagory Name',
  `file` text NOT NULL COMMENT 'File Name',
  `by` varchar(255) NOT NULL COMMENT 'By User',
  PRIMARY KEY (`scriptid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table For Scripts By DevCenter!' AUTO_INCREMENT=1 ;
