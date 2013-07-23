#########################################
######## WesDeGroot Site System #########
########       MySql Dump       #########
### Â© WesDeGroot Projects, 2001-2010 ###
####       All rights Reserved       ####
#########################################
#### Backup id: 1f8cef2373038cc142d0 ####
#### Date/Time: 15_09_2010, 17:08:09 ####
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#Dump data From "wdgss_agenda"

INSERT INTO wdgss_agenda SET `id`='1',`omschrijving`='Wesley De Groot Jarig',`door`='Wesley De Groot',`datum`='3-8-2010',`tijd1`='00:00',`tijd2`='00:00';
INSERT INTO wdgss_agenda SET `id`='3',`omschrijving`='Party bij Ed-37 dan bijna 38 :)))))))',`door`='Edwin',`datum`='14-8-2010',`tijd1`='20:00',`tijd2`='02:00';
INSERT INTO wdgss_agenda SET `id`='4',`omschrijving`='Wesley En June Naar België',`door`='Wesley De Groot',`datum`='5-8-2010',`tijd1`='00:00',`tijd2`='00:00';
INSERT INTO wdgss_agenda SET `id`='5',`omschrijving`='Wesley En June Terug Uit België',`door`='Wesley De Groot',`datum`='7-8-2010',`tijd1`='00:00',`tijd2`='00:00';
INSERT INTO wdgss_agenda SET `id`='6',`omschrijving`='Wesley En June In België',`door`='Wesley De Groot',`datum`='6-8-2010',`tijd1`='00:00',`tijd2`='00:00';
INSERT INTO wdgss_agenda SET `id`='8',`omschrijving`='Jolanda Van Nuil Jarig :D [17j]',`door`='Wesley De Groot',`datum`='7-8-2010',`tijd1`='00:00',`tijd2`='00:00';

#Dump data From "wdgss_agenda" Done
# End Of table "wdgss_agenda"

#Create table "wdgss_api_releases"
#table "wdgss_api_releases"

DROP TABLE IF EXISTS `wdgss_api_releases`;
CREATE TABLE `wdgss_api_releases` (
  `new` varchar(11) NOT NULL COMMENT 'newest version',
  `old` varchar(11) NOT NULL COMMENT 'maximal old supported'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Releases ';

#Dump data From "wdgss_api_releases"

INSERT INTO wdgss_api_releases SET `new`='6002',`old`='0000';

#Dump data From "wdgss_api_releases" Done
# End Of table "wdgss_api_releases"

#Create table "wdgss_api_users"
#table "wdgss_api_users"

DROP TABLE IF EXISTS `wdgss_api_users`;
CREATE TABLE `wdgss_api_users` (
  `id` int(255) NOT NULL auto_increment COMMENT 'User Id',
  `username` varchar(255) NOT NULL COMMENT 'Username',
  `password` varchar(255) NOT NULL COMMENT 'User Password',
  `options` varchar(255) NOT NULL COMMENT 'User Options',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Api Users';

#Dump data From "wdgss_api_users"

INSERT INTO wdgss_api_users SET `id`='1',`username`='wes',`password`='wtc2001',`options`='all';
INSERT INTO wdgss_api_users SET `id`='2',`username`='edwin',`password`='loungechat',`options`='all';

#Dump data From "wdgss_api_users" Done
# End Of table "wdgss_api_users"

#Create table "wdgss_config"
#table "wdgss_config"

DROP TABLE IF EXISTS `wdgss_config`;
CREATE TABLE `wdgss_config` (
  `config` varchar(255) NOT NULL COMMENT 'config parameters Use As site:something=bla OR something:something:blah'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='General Config';

#Dump data From "wdgss_config"

INSERT INTO wdgss_config SET `config`='guestbook:mail=0';
INSERT INTO wdgss_config SET `config`='site:lang=nl';
INSERT INTO wdgss_config SET `config`='chat:url=http://chat.loungechat.net/?e';
INSERT INTO wdgss_config SET `config`='site:link2=Gastenboek';
INSERT INTO wdgss_config SET `config`='site:link3=Test';
INSERT INTO wdgss_config SET `config`='site:url4=jaja.pag';
INSERT INTO wdgss_config SET `config`='site:url6=Projects.pag';
INSERT INTO wdgss_config SET `config`='site:link7=Agenda';
INSERT INTO wdgss_config SET `config`='site:link8=Fotoboek';
INSERT INTO wdgss_config SET `config`='site:link9=admin';
INSERT INTO wdgss_config SET `config`='site:link5=Forum';
INSERT INTO wdgss_config SET `config`='site:url3=test.pag';
INSERT INTO wdgss_config SET `config`='site:link6=projects';
INSERT INTO wdgss_config SET `config`='site:url2=guestbook.pag';
INSERT INTO wdgss_config SET `config`='captcha:length=5';
INSERT INTO wdgss_config SET `config`='captcha:height=30';
INSERT INTO wdgss_config SET `config`='captcha:square=1';
INSERT INTO wdgss_config SET `config`='captcha:chars=ABCDFGHJKLMNPQRSTUVWXY23456789';
INSERT INTO wdgss_config SET `config`='captcha:bgcolor=trans';
INSERT INTO wdgss_config SET `config`='captcha:lines=1';
INSERT INTO wdgss_config SET `config`='captcha:over=0';
INSERT INTO wdgss_config SET `config`='cms:done=100';
INSERT INTO wdgss_config SET `config`='site:started=2001';
INSERT INTO wdgss_config SET `config`='module:autoloadthose=invoice~adblockdedect~3~4';
INSERT INTO wdgss_config SET `config`='site:link4=2DO';
INSERT INTO wdgss_config SET `config`='site:url8=photobook.pag';
INSERT INTO wdgss_config SET `config`='site:name=WesDeGroot Projects/WDGSS';
INSERT INTO wdgss_config SET `config`='site:url9=admin.pag';
INSERT INTO wdgss_config SET `config`='site:url10=wysiwyg.pag';
INSERT INTO wdgss_config SET `config`='site:url5=forum.pag';
INSERT INTO wdgss_config SET `config`='module:autoloadthose=invoice~adblockdedect~3~4';
INSERT INTO wdgss_config SET `config`='site:url7=agenda.pag';
INSERT INTO wdgss_config SET `config`='site:link1=Home';
INSERT INTO wdgss_config SET `config`='site:url1=home.pag';
INSERT INTO wdgss_config SET `config`='site:theme=windowsupdate';

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='general Forum';

#Dump data From "wdgss_forum"

INSERT INTO wdgss_forum SET `id`='1',`catname`='Regels',`protected`='2';

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='Forum Reactions Database';

#Dump data From "wdgss_forum_reactions"

INSERT INTO wdgss_forum_reactions SET `id`='12',`topicid`='11',`catid`='1',`by`='Wes',`datetime`='2010-09-15 12:50:36',`ip`='Mù±]',`reaction`='<span style=\\\"text-decoration: line-through;\\\">ReTrY </span><br style=\\\"text-decoration: line-through;\\\"><span style=\\\"text-decoration: line-through;\\\">...</span><br style=\\\"text-decoration: line-through;\\\"><span style=\\\"text-decoration: line-through;\\\">waarom bestaan bugs... fuck die bugs</span><br>Oke,;) een override geen bug meer <br>';

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='the topic database';

#Dump data From "wdgss_forum_topics"

INSERT INTO wdgss_forum_topics SET `id`='3',`catid`='2',`name`='Regels',`by`='Noboady',`datetime`='2010-07-18 17:16:24',`lastpost`='2010-07-25 11:39:24',`ip`='AAAA',`text`='TEXT',`sticky`='0',`protected`='0',`closed`='0';
INSERT INTO wdgss_forum_topics SET `id`='10',`catid`='3',`name`='TestByWes(Online)',`by`='Wes',`datetime`='2010-07-25 11:40:09',`lastpost`='2010-07-25 11:40:09',`ip`='Mù±]',`text`='TEst<br>',`sticky`='1',`protected`='4',`closed`='1';
INSERT INTO wdgss_forum_topics SET `id`='11',`catid`='1',`name`='Wat Te Doen',`by`='Wes',`datetime`='2010-09-15 16:50:17',`lastpost`='2010-09-14 21:43:01',`ip`='Mù±]',`text`='Oke Dit Moet Nog Kebeuren :D<br><br><span style="text-decoration: line-through;">- Edit Message</span>, Werkt<br><span style="text-decoration: line-through;">- Delete Message</span>, Werkt<br><br><span style="text-decoration: line-through;">- Admin/Mod edit Message</span>, Werkt<br><span style="text-decoration: line-through;">- Admin/Mod delete Message</span>, Werkt<br><br><span style="text-decoration: line-through;">- Maak Catagorie</span>, Werkt<br><span style="text-decoration: line-through;">- Verwijder Catagorie</span>, Werkt<br><br style="text-decoration: line-through;"><span style="text-decoration: line-through;">- Later: Geen,</span><br style="text-decoration: line-through;"><span style="text-decoration: line-through;">- Vervallen: Poll Reset/Maken/Deleten/etc</span><br style="text-decoration: line-through;"><br style="text-decoration: line-through;"><br>',`sticky`='1',`protected`='0',`closed`='0';

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COMMENT='guestbook engine';

#Dump data From "wdgss_guestbook"

INSERT INTO wdgss_guestbook SET `id`='1',`name`='Wesley De Groot',`ip`='AAAA',`email`='info@wocnl.nl',`datetime`='2010-06-13 00:00:00',`text`='Hallo,\nDeze Website Is Mooi Gewoorden :D';
INSERT INTO wdgss_guestbook SET `id`='10',`name`='Wesley De Groot',`ip`='Mù±]',`email`='wes@wocnl.nl',`datetime`='2010-07-17 22:16:16',`text`=':P';
INSERT INTO wdgss_guestbook SET `id`='11',`name`='Wesley De Groot',`ip`='Mù±]',`email`='wes@wocnl.nl',`datetime`='2010-07-25 16:08:35',`text`='kaat<br><br>';
INSERT INTO wdgss_guestbook SET `id`='12',`name`='Edwin',`ip`='RÙ¶À',`email`='edwinlaptop@quicknet.nl',`datetime`='2010-07-25 16:11:48',`text`='Ik ben benieuwd als de site af is :))))))<BR>';
INSERT INTO wdgss_guestbook SET `id`='13',`name`='Richard ',`ip`='P9Dñ',`email`='Bird4ever@msn.com',`datetime`='2010-08-08 23:11:56',`text`='<P>He wes,</P>\n<P>&nbsp;</P>\n<P>Leuke foto\\'s heb je gemaakt in Antwerpen.</P>\n<P>&nbsp;</P>\n<P>Jammer dat de iPad was uitverkocht. Heb je hem hier al besteld?</P>\n<P>&nbsp;</P>\n<P>Groetjes Richard&nbsp; aka Bird4ever<BR></P>';
INSERT INTO wdgss_guestbook SET `id`='14',`name`='Wesley De Groot',`ip`='R_Ç`',`email`='wes@wocnl.nl',`datetime`='2010-09-15 11:51:44',`text`='@edwin<br>\n  Ik ben benieuwd als de site af is :))))))<br><br>dat is ie al bijna :)<br></div>';

#Dump data From "wdgss_guestbook" Done
# End Of table "wdgss_guestbook"

#Create table "wdgss_menu"
#table "wdgss_menu"

DROP TABLE IF EXISTS `wdgss_menu`;
CREATE TABLE `wdgss_menu` (
  `menu` varchar(255) NOT NULL COMMENT 'config parameters Use As site:something=bla OR menu:X(num):(val)'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='General Menu';

#Dump data From "wdgss_menu"

INSERT INTO wdgss_menu SET `menu`='menu:link2=chat';
INSERT INTO wdgss_menu SET `menu`='menu:link3=forum';
INSERT INTO wdgss_menu SET `menu`='menu:link4=registreer';
INSERT INTO wdgss_menu SET `menu`='menu:link5=login';
INSERT INTO wdgss_menu SET `menu`='menu:url2=chat.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link6=projects';
INSERT INTO wdgss_menu SET `menu`='menu:link7=To Do';
INSERT INTO wdgss_menu SET `menu`='menu:url3=forum.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link8=leden';
INSERT INTO wdgss_menu SET `menu`='menu:link10=Optional Modules';
INSERT INTO wdgss_menu SET `menu`='menu:url4=register.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url5=login.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url6=Projects.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url7=jaja.pag';
INSERT INTO wdgss_menu SET `menu`='menu:link9=User Panel';
INSERT INTO wdgss_menu SET `menu`='menu:url8=userlist.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url9=userpanel.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url1=test.pag';
INSERT INTO wdgss_menu SET `menu`='menu:url10=Modules.pag';

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='The News Database';

#Dump data From "wdgss_news"

INSERT INTO wdgss_news SET `id`='5',`by`='Wes',`datetime`='2010-09-15 16:55:38',`name`='Welkom',`text`='Hallo,\n\n<center>\n<h1>als je dit ziet...<br>\ndan is wdgss AF?!,</h1>\n<br><h2>\nnee, MAAR WEL BIJNA!!!,\n</h2></center>\n<br>Maar deze taken resten nog:<br>\n - engelse taal<br>\n - eventueel bugfixes<br>\n - Official Release!!!<br>\n<br>\nWelkom Op Onze Vernieuwde Website.<br>\nDe Website Is Nu Nog In Beta 5 (ditgeen betekend dat er mogelijk nog een enkele fout in kan zitten)<br>\nen maakt nu gebruik van WDGSS 6.0.0.1<br>\n<br>\n<br>\nmvg,<br>\nWesley De Groot';

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

INSERT INTO wdgss_pages SET `page`='test',`content`='ik ben een mysql pagina!<br>\nMet PHP!<br>\n<?php echo date("d-m-Y H:i:s"); ?>, Mooi He';
INSERT INTO wdgss_pages SET `page`='jaja',`content`='ik ben een nutteloose pagina<br>om maar wat eens WYSIWYG te testen vanuit de admin paneel<br><br>todo:<br><ol><li>Engelse Taal Vertaalen (als alle modules e.d. af zijn)</li><li style="text-decoration: line-through;">modules afmaken</li><li style="text-decoration: line-through;">forum maken (alleen nieuw topic maken nog)<br></li><li style="text-decoration: line-through;">Forumadmin paneel (laatste 30%)</li><li style="text-decoration: line-through;">User-List</li><li style="text-decoration: line-through;">User Registratie</li><li style="text-decoration: line-through;">USer Inloggen</li></ol>Meer?<br><span style="text-decoration: line-through;">komt later wel</span><br><img src="/data/images/711087557655745.jpg" width="160"><br>';
INSERT INTO wdgss_pages SET `page`='WDGSSRules',`content`='<font style="font-family: impact;" size="6">WesDeGroot Site System&nbsp; Rules.<br><br></font><pre><font style="font-family: impact;" size="3">Rules:</font></pre><br>&nbsp;* Do <span style="font-weight: bold;">Not</span> Remove The © Message!, if you want it away Please Register <span style="text-decoration: underline;">WDGSS</span>, Or Contact <a target="_blank" title="" href="http://www.wesdegrootprojects.nl">Wesley De Groot</a>.<br>&nbsp;* If You Want Optional Updates (Not The Standard) Please Register WDGSS.<br>&nbsp;* If You Want Optional Modules, Register WDGSS<br><br>&nbsp;* WesDeGroot Projects May Always Change This Rules, Without Any Notice *<br>';
INSERT INTO wdgss_pages SET `page`='Projects',`content`='The Websites Are:<br><a target="_blank" title="www.wdgss.nl" href="http://www.wdgss.nl">www.wdgss.nl</a> (WesDeGroot Site System)<br><a target="_blank" title="www.wesdegrootprojects.nl" href="http://www.wesdegrootprojects.nl">www.wesdegrootprojects.nl</a> (WesDeGroot Projects)<br><br>The Current Projects Are:<br><a target="_blank" title="WesDeGroot Projects" href="http://www.wocnl.nl">www.wocnl.nl</a> (Website For World Of Crime "NL" Created With WDGSS)<br><a target="_blank" title="A Dutch Chat Website" href="http://www.loungechat.net">www.loungechat.net</a> (A Dutch Chat Website)<br><br>WesDeGroot Projects &amp; CdEeden Productions (C&amp;W Productions) &amp; R. Cremer)<br><a target="_blank" title="BIHappy" href="http://www.bihappy.eu">www.bihappy.eu</a> (A Dutch Website Special For Bi sexuals, Homo sexuals,&nbsp; but also hetro sexuals are welcome)<br>';
INSERT INTO wdgss_pages SET `page`='eric',`content`='\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;eric<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;jaaaah<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;weet jij waarom june denkt dak vreemd ga?<br>&nbsp; ?<br>&nbsp;jij spreekt haar nog wel es dusj<br>&nbsp; <br>You have just sent a nudge.<br>&nbsp; <br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;nee&nbsp; <br>&nbsp;ik spreek june eigenlijks helemaal niet meer <br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;oh <br>&nbsp;ziet kirsten er goed uit dan irl?<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;juhwel<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;zi4en<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;heb geen fotow<br>&nbsp;ze komt miss zondag nog en anders maandag&nbsp; <br>&nbsp;dan maak ik wel fotow <br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp; <br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;ok ok? <br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;isgoe<br>&nbsp;maar wtf<br>&nbsp;ik ga helemaal nie vreemd<br>&nbsp;met wie dan?<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;hoe moet ik da ruiken?<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;leuk dat je dit zecht june zit naast me, en ze zei dat jij dat zei. dat ik je moest aanspreken<br>&nbsp;zegt*<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;tjah<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;mja, weer iets wat niet waar is uit de wereld&nbsp; <br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;mja de berichten liegen niet :I<br>&nbsp; <br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;wie zegt dat dan<br>&nbsp;vertel het mij<br>&nbsp;ik zeg alleen tegen demika schat, <br>ik zit op een sex chat, en die mensen die daar tegen me praten krijgen mijn andere msn en daar zit ik nooit op<br>&nbsp;dus wie is het<br>&nbsp;als ik zo nodig vreemd ga &gt;_&gt;<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;ik noem geen namen...<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;waarom niet<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;maar nu weet ik in ieder geval dat juni niet te vertrouwen is<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;als ik WEET DAT HET NIET WAAR IS, waarom dan liegen<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;omdat ik diegene heb beloofd om dr naam niet te noemmen&nbsp; <br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;dan is het dus fake<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;neeh<br>&nbsp;dat verzint ze echt niet<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;wel, ik flirt niet met andere<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;Wes laat me niet lachen...<br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;laat jij mij niet laggen<br>&nbsp;stuur logs dan als het waar is<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;ik stuur geen logs meer...<br>&nbsp;waarom zou ik logs sturen wel dat ze me ut persoonlijk heeft verteld... dus dr zijn geen logs van&nbsp; <br>\/\/3$|3&#65509;&nbsp; &#8730;&#956;&#8745;3 says:<br>&nbsp;june gaat op haar ipod touch die ze van mij heeft nu op msn dusja <br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;moet ze zelf weten<br>&nbsp;DevilShadow&nbsp; Het Was Gezellig Met Jou Kirsten &lt;3&nbsp;&nbsp; says:<br>&nbsp;moet ze zelf weten<br>&nbsp;maar kijk wes als je june wil bedondere doe ut dan recht in haar gezicht en niet achter haar rug om...<br>&nbsp;het is zeer zwak...<br>';
INSERT INTO wdgss_pages SET `page`='egg',`content`='<?php\n$x = "<marquee behavior=\'alternate\' >.o/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\o.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\o/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.o/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\o.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\o/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.o/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\o.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\o/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</marquee>";\n		echo "<title>WesDeGroot Site System: Easter Egg</title>Hey You Found My API Easter Egg!<br>{$x}<br><marquee direction=\'up\' scrollamount=\'2\'><center><h1>Wesley De groot</h1><h2>Presents</h2><h3>WesDeGroot Site System</h3></center><br><br><br>Thanks For Using My Cms.<br>If You Want More Things In WDGSS Then Don\'t Be Afraid And Email Me NOW :D<br>if you dare.....<br><br><br>ok, Seriously <br><br><br>I Want to Thanks These Special People <br><b><u>June Wessels, Being my Girlfriend And All The Positive Things In My live</u></b><br>H.F. Balk, My Mom :P<br>P.H.G. De Groot, My Dad.<br>C.M.L. V/D Eeden, A Special Person To Me<br>R. Cremer, The Boyfriend Of C.M.L V/D Eeden<br>Hans Blaauw, Another Special Person To Me (And Have Helped Me Out Of Regex (When He was drunk!))<br>Patrick Ekkel, The Person Who Helped Me To Am What I Am, And Accept It, And My Hoster & Special Friend :)<br>M. Wolvekamp, A Verry Special Person To Me.<br>Eric R, A Verry Special Person/Best Friend To Me<br>Edwin H, A Verry Special Person/Friend To Me<br><br>Did I Forgot You? No, That`s Almost Not Possible!<br>But If You Are Sure Contact Me :)<br></marquee><br>{$x}";\n?>';
INSERT INTO wdgss_pages SET `page`='logo :D',`content`='dat ik m nog heb :P<br><img style="width: 97px; height: 70px;" src="/data/images/logo.png"><br>';
INSERT INTO wdgss_pages SET `page`='Modules',`content`='Paid Modules / Betaalde Modules<br><img style="width: 753px; height: 360px;" src="http://www.wdgss.nl/data/images/368930296751518.png"><br>';

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
  `text` varchar(255) NOT NULL COMMENT 'Personal Text',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='WesDeGroot Site System Users';

#Dump data From "wdgss_users"

INSERT INTO wdgss_users SET `id`='1',`hideprofile`='0',`username`='Wes',`realname`='Wesley De Groot',`hiderealname`='0',`email`='wes@wocnl.nl',`hideemail`='0',`avatar`='wes in niggah styl (goed) 2z.jpg',`password`='i»åµWh',`website`='www.wocnl.nl',`birthday`='1990-08-03',`hidebirthday`='0',`status`='4',`text`='ProfielBewerkenWerkt :D<br>';
INSERT INTO wdgss_users SET `id`='2',`hideprofile`='0',`username`='Edwin',`realname`='Edwin',`hiderealname`='0',`email`='edwinlaptop@quicknet.nl',`hideemail`='1',`avatar`='Ed-37.jpg',`password`='hé½½Wi ',`website`='www.loungechat.net',`birthday`='1972-08-16',`hidebirthday`='0',`status`='4',`text`='Hoi ik ken Wes vaag maar hij lijkt me wel aardig en handig met pc\\\\'s :P';

#Dump data From "wdgss_users" Done
# End Of table "wdgss_users"

#Mysql Dump Compleated dumped total "13" tables with "86" Values

#Mysql Dump Time Total: 0.00417 Ms 
