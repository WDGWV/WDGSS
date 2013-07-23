#########################################
######## WesDeGroot Site System #########
########       MySql Dump       #########
### Â© WesDeGroot Projects, 2001-2011 ###
####       All rights Reserved       ####
#########################################
#### Backup id: 01a4277a5321d53a58bc ####
#### Date/Time: 23_07_2011, 12:58:41 ####
#### Date/Time is in d m yyyy h m s  ####
#########################################

#TABLE: "wesdegroot_cms"


#Create table "wdgss_agenda"
#table "wdgss_agenda"

DROP TABLE IF EXISTS `wdgss_agenda`;
CREATE TABLE `wdgss_agenda` (
  `id` int(11) NOT NULL auto_increment,
  `omschrijving` varchar(255) NOT NULL,
  `door` varchar(50) NOT NULL,
  `datum` varchar(50) NOT NULL,
  `tijd1` varchar(50) NOT NULL,
  `tijd2` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

#Dump data From "wdgss_agenda"

#EMPTY

#Dump data From "wdgss_agenda" Done
# End Of table "wdgss_agenda"

#Create table "wdgss_config"
#table "wdgss_config"

DROP TABLE IF EXISTS `wdgss_config`;
CREATE TABLE `wdgss_config` (
  `config` varchar(255) NOT NULL COMMENT 'config parameters Use As site:something=bla OR something:something:blah'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='General Config';

#Dump data From "wdgss_config"

INSERT INTO wdgss_config SET `config`='guestbook:mail=0';
INSERT INTO wdgss_config SET `config`='site:snow=false';
INSERT INTO wdgss_config SET `config`='chat:url=http://chat.wesdegrootprojects.nl/?chan_is_wdgss&server_is_irc.loungechat.net&nick_is_Wdgss%';
INSERT INTO wdgss_config SET `config`='site:link2=Gastenboek';
INSERT INTO wdgss_config SET `config`='site:link3=Test';
INSERT INTO wdgss_config SET `config`='site:url4=jaja.pag';
INSERT INTO wdgss_config SET `config`='site:url6=Projects.pag';
INSERT INTO wdgss_config SET `config`='site:link7=Agenda';
INSERT INTO wdgss_config SET `config`='site:link8=Fotoboek';
INSERT INTO wdgss_config SET `config`='site:link9=admin';
INSERT INTO wdgss_config SET `config`='site:url5=qr.pag';
INSERT INTO wdgss_config SET `config`='site:url3=test.pag';
INSERT INTO wdgss_config SET `config`='site:link6=projects';
INSERT INTO wdgss_config SET `config`='site:url2=guestbook.pag';
INSERT INTO wdgss_config SET `config`='captcha:length=5';
INSERT INTO wdgss_config SET `config`='captcha:height=30';
INSERT INTO wdgss_config SET `config`='captcha:square=1';
INSERT INTO wdgss_config SET `config`='captcha:chars=ABCDFGHJKLMNPQRSTUVWXY';
INSERT INTO wdgss_config SET `config`='captcha:bgcolor=trans';
INSERT INTO wdgss_config SET `config`='captcha:lines=1';
INSERT INTO wdgss_config SET `config`='captcha:over=0';
INSERT INTO wdgss_config SET `config`='cms:done=100';
INSERT INTO wdgss_config SET `config`='site:started=2001';
INSERT INTO wdgss_config SET `config`='site:link4=2DO';
INSERT INTO wdgss_config SET `config`='site:url8=photobook.pag';
INSERT INTO wdgss_config SET `config`='site:name=WesDeGroot Site System';
INSERT INTO wdgss_config SET `config`='site:link10=leden';
INSERT INTO wdgss_config SET `config`='site:lang=nl';
INSERT INTO wdgss_config SET `config`='site:url9=admin.pag';
INSERT INTO wdgss_config SET `config`='site:link5=QR';
INSERT INTO wdgss_config SET `config`='module:autoloadthose=invoice~IpBan~share~adblockdedect~3~4';
INSERT INTO wdgss_config SET `config`='site:url7=agenda.pag';
INSERT INTO wdgss_config SET `config`='site:theme=blend';
INSERT INTO wdgss_config SET `config`='site:description=WesDeGroot Site System [www.wdgss.nl]';
INSERT INTO wdgss_config SET `config`='site:snow=false';
INSERT INTO wdgss_config SET `config`='site:override=false';
INSERT INTO wdgss_config SET `config`='site:link1=Home';
INSERT INTO wdgss_config SET `config`='site:url1=home.pag';
INSERT INTO wdgss_config SET `config`='site:url10=userlist.pag';
INSERT INTO wdgss_config SET `config`='cms:version=76';

#Dump data From "wdgss_config" Done
# End Of table "wdgss_config"

#Create table "wdgss_forum"
#table "wdgss_forum"

DROP TABLE IF EXISTS `wdgss_forum`;
CREATE TABLE `wdgss_forum` (
  `id` int(255) NOT NULL auto_increment COMMENT 'CAT id',
  `catname` varchar(255) NOT NULL COMMENT 'cat name',
  `protected` int(1) NOT NULL COMMENT 'protected',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='general Forum';

#Dump data From "wdgss_forum"

INSERT INTO wdgss_forum SET `id`='1',`catname`='Regels',`protected`='2';
INSERT INTO wdgss_forum SET `id`='6',`catname`='test',`protected`='2';

#Dump data From "wdgss_forum" Done
# End Of table "wdgss_forum"

#Create table "wdgss_forum_polls"
#table "wdgss_forum_polls"

DROP TABLE IF EXISTS `wdgss_forum_polls`;
CREATE TABLE `wdgss_forum_polls` (
  `id` int(255) NOT NULL auto_increment COMMENT 'The ID',
  `by` varchar(255) NOT NULL COMMENT 'By',
  `name` varchar(255) NOT NULL COMMENT 'Name Of Poll',
  `datetime` datetime NOT NULL COMMENT 'Date&Time',
  `postid` int(255) NOT NULL COMMENT 'TopicID',
  `TXT1` varchar(255) NOT NULL COMMENT 'TXT1',
  `ANS1` text NOT NULL COMMENT 'ANS1',
  `TXT2` varchar(255) NOT NULL COMMENT 'TXT2',
  `ANS2` text NOT NULL COMMENT 'ANS2',
  `TXT3` varchar(255) NOT NULL COMMENT 'TXT3',
  `ANS3` text NOT NULL COMMENT 'ANS3',
  `TXT4` varchar(255) NOT NULL COMMENT 'TXT4',
  `ANS4` text NOT NULL COMMENT 'ANS4',
  `TXT5` varchar(255) NOT NULL COMMENT 'TXT5',
  `ANS5` text NOT NULL COMMENT 'ANS5',
  `TXT6` varchar(255) NOT NULL COMMENT 'TXT5',
  `ANS6` text NOT NULL COMMENT 'ANS6',
  `TXT7` varchar(255) NOT NULL COMMENT 'TXT7',
  `ANS7` text NOT NULL COMMENT 'ANS7',
  `TXT8` varchar(255) NOT NULL COMMENT 'TXT8',
  `ANS8` text NOT NULL COMMENT 'ANS8',
  `TXT9` varchar(255) NOT NULL COMMENT 'TXT9',
  `ANS9` text NOT NULL COMMENT 'ANS9',
  `TXT10` varchar(255) NOT NULL COMMENT 'txt10',
  `ANS10` text NOT NULL COMMENT 'ANS10',
  `protected` int(1) NOT NULL COMMENT 'Protected?',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Forum Poll Database';

#Dump data From "wdgss_forum_polls"

INSERT INTO wdgss_forum_polls SET `id`='1',`by`='Wes',`name`='Testje',`datetime`='2010-06-26 16:25:37',`postid`='1',`TXT1`='Tekst 1',`ANS1`='',`TXT2`='Tekst 2',`ANS2`='',`TXT3`='Tekst 3',`ANS3`='',`TXT4`='Tekst 4',`ANS4`='',`TXT5`='Tekst 5',`ANS5`='',`TXT6`='Tekst 6',`ANS6`='',`TXT7`='Tekst 7',`ANS7`='',`TXT8`='Tekst 8',`ANS8`='',`TXT9`='Tekst 9',`ANS9`='',`TXT10`='Tekst 10',`ANS10`='',`protected`='0';

#Dump data From "wdgss_forum_polls" Done
# End Of table "wdgss_forum_polls"

#Create table "wdgss_forum_reactions"
#table "wdgss_forum_reactions"

DROP TABLE IF EXISTS `wdgss_forum_reactions`;
CREATE TABLE `wdgss_forum_reactions` (
  `id` int(255) NOT NULL auto_increment COMMENT 'The ID',
  `topicid` int(255) NOT NULL COMMENT 'From Topic ID',
  `catid` int(255) NOT NULL COMMENT 'CAT id',
  `by` varchar(255) NOT NULL COMMENT 'By',
  `datetime` datetime NOT NULL COMMENT 'Date&Time',
  `ip` varchar(4) NOT NULL COMMENT 'ipadress',
  `reaction` text NOT NULL COMMENT 'reaction',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COMMENT='Forum Reactions Database';

#Dump data From "wdgss_forum_reactions"

INSERT INTO wdgss_forum_reactions SET `id`='16',`topicid`='0',`catid`='6',`by`='Wes',`datetime`='2011-06-18 12:21:21',`ip`='>lc',`reaction`='style is already fixed on gb<br>';

#Dump data From "wdgss_forum_reactions" Done
# End Of table "wdgss_forum_reactions"

#Create table "wdgss_forum_topics"
#table "wdgss_forum_topics"

DROP TABLE IF EXISTS `wdgss_forum_topics`;
CREATE TABLE `wdgss_forum_topics` (
  `id` int(255) NOT NULL auto_increment COMMENT 'the id',
  `catid` int(255) NOT NULL COMMENT 'CAT id',
  `name` varchar(255) NOT NULL COMMENT 'the name/title',
  `by` varchar(255) NOT NULL COMMENT 'by who?',
  `datetime` datetime NOT NULL COMMENT 'datetime',
  `lastpost` datetime NOT NULL COMMENT 'Last Reaction/Reaction Edit Date',
  `ip` varchar(4) NOT NULL COMMENT 'ip adress',
  `text` text NOT NULL COMMENT 'the message',
  `sticky` int(1) NOT NULL COMMENT 'is topic sticky?',
  `protected` tinyint(1) NOT NULL COMMENT 'Protected',
  `closed` int(1) NOT NULL COMMENT 'Closed?',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='the topic database';

#Dump data From "wdgss_forum_topics"

INSERT INTO wdgss_forum_topics SET `id`='19',`catid`='6',`name`='Tanks For Using WDGSS',`by`='Wes',`datetime`='2011-07-16 17:24:28',`lastpost`='2011-07-16 17:24:28',`ip`='>lc',`text`='Thank You For Using WDGSS,<br>We Hope Youll Enjoy The Cms.<br><br>',`sticky`='1',`protected`='0',`closed`='1';

#Dump data From "wdgss_forum_topics" Done
# End Of table "wdgss_forum_topics"

#Create table "wdgss_guestbook"
#table "wdgss_guestbook"

DROP TABLE IF EXISTS `wdgss_guestbook`;
CREATE TABLE `wdgss_guestbook` (
  `id` int(255) NOT NULL auto_increment COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT 'name',
  `ip` varchar(4) NOT NULL COMMENT 'ip encoded',
  `email` varchar(255) NOT NULL COMMENT 'email',
  `datetime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT 'date/time',
  `text` text NOT NULL COMMENT 'text',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='guestbook engine';

#Dump data From "wdgss_guestbook"


#Dump data From "wdgss_guestbook" Done
# End Of table "wdgss_guestbook"

#Create table "wdgss_help"
#table "wdgss_help"

DROP TABLE IF EXISTS `wdgss_help`;
CREATE TABLE `wdgss_help` (
  `id` varchar(255) NOT NULL COMMENT 'The Id',
  `text` text NOT NULL COMMENT 'The Help',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Help File';

#Dump data From "wdgss_help"

#Dump data From "wdgss_help" Done
# End Of table "wdgss_help"

#Create table "wdgss_menu"
#table "wdgss_menu"

DROP TABLE IF EXISTS `wdgss_menu`;
CREATE TABLE `wdgss_menu` (
  `menu` varchar(255) NOT NULL COMMENT 'config parameters Use As site:something=bla OR menu:X(num):(val)'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='General Menu';

#Dump data From "wdgss_menu"

INSERT INTO wdgss_menu SET `menu`='menu:url15=About.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url5=login.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link8=User List';
INSERT INTO wdgss_menu SET `menu`='menu:url8=userlist.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url2=chat.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link3=Forum';
INSERT INTO wdgss_menu SET `menu`='menu:link4=Register';
INSERT INTO wdgss_menu SET `menu`='menu:link6=Projects';
INSERT INTO wdgss_menu SET `menu`='menu:url3=forum.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url6=Projects.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link9=User Panel';
INSERT INTO wdgss_menu SET `menu`='menu:url9=userpanel.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link10=Optional Modules';
INSERT INTO wdgss_menu SET `menu`='menu:url10=Modules.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link11=Team WDG';
INSERT INTO wdgss_menu SET `menu`='menu:url11=Team.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link12=Chat...';
INSERT INTO wdgss_menu SET `menu`='menu:url12=chat.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link7=Log In/Out';
INSERT INTO wdgss_menu SET `menu`='menu:url7=login.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link13=Help';
INSERT INTO wdgss_menu SET `menu`='menu:url13=help.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link14=Wiki';
INSERT INTO wdgss_menu SET `menu`='menu:url14=wiki.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link1=About Me';
INSERT INTO wdgss_menu SET `menu`='menu:url1=About.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url4=register.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url16=About.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url17=About.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url18=About.pag';

#Dump data From "wdgss_menu" Done
# End Of table "wdgss_menu"

#Create table "wdgss_news"
#table "wdgss_news"

DROP TABLE IF EXISTS `wdgss_news`;
CREATE TABLE `wdgss_news` (
  `id` int(255) NOT NULL auto_increment COMMENT 'The id',
  `by` varchar(255) NOT NULL COMMENT 'By',
  `datetime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT 'Date&Time',
  `name` varchar(255) NOT NULL COMMENT 'Title',
  `text` text NOT NULL COMMENT 'Text',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='The News Database';

#Dump data From "wdgss_news"

INSERT INTO wdgss_news SET `id`='7',`by`='Wesley De Groot',`datetime`='2011-07-20 20:28:24',`name`='Welkom Bij WDGSS',`text`='TANKYOU FOR USING WESDEGROOT SITE SYSTEM';

#Dump data From "wdgss_news" Done
# End Of table "wdgss_news"

#Create table "wdgss_pages"
#table "wdgss_pages"

DROP TABLE IF EXISTS `wdgss_pages`;
CREATE TABLE `wdgss_pages` (
  `page` varchar(255) NOT NULL COMMENT 'The Page',
  `content` text NOT NULL COMMENT 'The Content Of The Page'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Pages';

#Dump data From "wdgss_pages"


#Dump data From "wdgss_pages" Done
# End Of table "wdgss_pages"

#Create table "wdgss_users"
#table "wdgss_users"

DROP TABLE IF EXISTS `wdgss_users`;
CREATE TABLE `wdgss_users` (
  `id` int(255) NOT NULL auto_increment COMMENT 'The Id',
  `hideprofile` int(1) NOT NULL COMMENT 'Hide Profile?',
  `username` varchar(255) NOT NULL COMMENT 'Username',
  `realname` varchar(255) NOT NULL COMMENT 'Realname',
  `hiderealname` int(1) NOT NULL COMMENT 'Hide Realname?',
  `email` varchar(255) NOT NULL COMMENT 'Email Adress',
  `hideemail` int(1) NOT NULL COMMENT 'Hide Email Adress',
  `avatar` varchar(255) NOT NULL COMMENT 'user avatar',
  `password` varchar(255) NOT NULL COMMENT 'Password',
  `website` varchar(255) NOT NULL COMMENT 'Users Website',
  `birthday` date NOT NULL COMMENT 'Birth Date',
  `hidebirthday` int(1) NOT NULL COMMENT 'Hide Birthday',
  `status` int(1) NOT NULL COMMENT 'SiteStatus',
  `theme` varchar(255) NOT NULL COMMENT 'user defined theme',
  `text` text NOT NULL COMMENT 'Personal Text',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='WesDeGroot Site System Users';

#Dump data From "wdgss_users"

INSERT INTO wdgss_users SET `id`='1',`hideprofile`='0',`username`='Admin',`realname`='ADMIN',`hiderealname`='0',`email`='CHANGEME',`hideemail`='0',`avatar`='none',`password`='i»åµWh',`website`='www.wdgss.nl',`birthday`='0000-00-00',`hidebirthday`='0',`status`='4',`theme`='default',`text`='Yaay';

#Dump data From "wdgss_users" Done
# End Of table "wdgss_users"

#Create table "wdgss_wiki"
#table "wdgss_wiki"

DROP TABLE IF EXISTS `wdgss_wiki`;
CREATE TABLE `wdgss_wiki` (
  `id` int(255) NOT NULL auto_increment COMMENT 'the id',
  `title` varchar(255) NOT NULL COMMENT 'The Title',
  `text` text NOT NULL COMMENT 'Text',
  `by` varchar(255) NOT NULL COMMENT 'By Who',
  `datetime` datetime NOT NULL COMMENT 'date/time',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='WesDeGroot Site System Wiki';

#Dump data From "wdgss_wiki"

#Dump data From "wdgss_wiki" Done
# End Of table "wdgss_wiki"

#Create table "wdgss_wiki_link"
#table "wdgss_wiki_link"

DROP TABLE IF EXISTS `wdgss_wiki_link`;
CREATE TABLE `wdgss_wiki_link` (
  `id` int(255) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `toid` int(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COMMENT='WesDeGroot Site System Wiki Links';

#Dump data From "wdgss_wiki_link"


#Dump data From "wdgss_wiki_link" Done
# End Of table "wdgss_wiki_link"

#Mysql Dump Compleated dumped total "16" tables with "175" Values

#Mysql Dump Time Total: 0.05937 Ms 