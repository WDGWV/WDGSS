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















#English By:
# NOOIT %s VERANDEREN OF BIJV \\\'\\\'%s\\\'\\\' 
	$lang = array();
	
	# Guestbook related
	$lang['guestbook']['name']         = 'name';
	$lang['guestbook']['email']        = 'email address';
	$lang['guestbook']['text']         = 'message';
	$lang['guestbook']['captcha']      = 'type this over';
	$lang['guestbook']['messagesend']  = 'message is placed';
	$lang['guestbook']['messagenot']   = 'message Is <u><b>Not</b></u> placed</div>';
	$lang['guestbook']['fakeemail']    = 'Email Adress correct <u><b>NoT</b></u>';
	$lang['guestbook']['wrongcaptcha'] = 'the typt Captcha Code Was Not Good!';
	$lang['guestbook']['module']       = 'Guestbook';
	$lang['guestbook']['emailshow']    = 'Let Email show: ';
	$lang['guestbook']['true']         = 'yes';
	$lang['guestbook']['false']        = 'false';
	$lang['guestbook']['save']         = 'save';
	$lang['guestbook']['edit']         = 'edit';
	$lang['guestbook']['del']		   = 'delete';
	$lang['guestbook']['dele']		   = 'are you sure that you Post Met ID \\\'\\\'%s\\\'\\\' Want to delete?';
	$lang['guestbook']['deleted']	   = 'Post with ID <b><u>%s</u></b> deleted';
	$lang['guestbook']['notdeleted']   = 'Post with ID <b><u>%s</u></b> can\'t <u>not</u> delete';
	
	# News related
	$lang['news']['module']            = 'News';
	$lang['news']['by']                = 'by:';
	$lang['news']['editedpage']		   = 'News Page edited';
	$lang['news']['noteditedpage']     = 'News Page Not edited';
	$lang['news']['title']			   = 'Title';
	$lang['news']['content']		   = 'Content';
	$lang['news']['save']			   = 'Save';
	$lang['news']['edit']			   = 'Edit';
	$lang['news']['createdpage']	   = 'News Page created';
	$lang['news']['notcreatedpage']    = 'News Page Not created';
	$lang['news']['deletedpage']	   = 'News Page deleted';
	$lang['news']['notdeletedpage']    = 'News Page Not deleted';
	$lang['news']['del']			   = 'delete';
	$lang['news']['suredelpage']	   = 'Are u sure that you the news page\\\'\\\'%s\\\'\\\' wish to delete?';
	$lang['news']['newpage']           = 'New News page';
	
	# Site related
    $lang['site']['invoice']           = 'Invoice';
	$lang['s-ite']['guestbook']         = 'Guestbook';
	$lang['site']['seturl']			   = 'Set Url %s In';
	$lang['site']['setlink']		   = 'Set Link %s In';
	$lang['site']['profile']           = 'Profile';
	$lang['site']['login']             = 'Login';
	$lang['site']['news']              = 'News';
	$lang['site']['register']          = 'Register';
	$lang['site']['username']		   = 'Username';
	$lang['site']['password']		   = 'Password';
	$lang['site']['info']			   = 'Info';
	$lang['site']['photobook']         = 'Photobook';

	# Error related
	$lang['site']['error']['404']      = '<h1>Error!</h1>Page: %s Not found';
	$lang['site']['error']['403']      = '<h1>Error!</h1>no license to see<br>Page!';
	
	#Age Definitions
	$lang['age']['notborn']			   = 'Not Yet Born';
	$lang['age']['borntoday']	       = 'Born Today';
	$lang['age']['today']              = 'Today became %s years';
	$lang['age']['year']               = 'Year';
	
	#Agenda
	$lang['agenda']['months']     	   = array( 1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December' );
	$lang['agenda']['first']           = array('M','t','W','t','f','s','s'); //monday, tuesday, wednesday, thursday, friday, saterday, sunday
	$lang['agenda']['weekdays']  	   = array('monday','tuesday','wednesday','thursday','friday','saterday','sunday');
	$lang['agenda']['welcome']   	   = 'Welcome to this agenda, choose a day when you want something on that day add, Or when you want read like the appointment which are pinned on the day.';
	$lang['agenda']['siteerror'] 	   = 'Error: The page is called incorrect! For your safety and ours, you get this message, This message can be ignored, since our systems in action entered.</font><br><br>Welcome to this agenda, Choose one day when you want to add something on that day, or if you want to read the appointments on the day are pinned down.';
	$lang['agenda']['prikked']	 	   = 'The appointments for date';
	$lang['agenda']['add']		 	   = 'Add';
	$lang['agenda']['noo']       	   = 'There are no appointments for this day.';
	$lang['agenda']['_add']		 	   = 'You can add one';
	$lang['agenda']['delete']    	   = 'Delete appointment';
	$lang['agenda']['deleted']   	   = 'Deleted';
	$lang['agenda']['description']	   = 'Description';
	$lang['agenda']['by']			   = 'By';
	$lang['agenda']['time']			   = 'Time';
	$lang['agenda']['_add']		       = 'To add a appointment is easy, fill <u>everything</u> and push on send!';
	$lang['agenda']['date']            = 'Date';
	$lang['agenda']['change']		   = 'Change';
	$lang['agenda']['day']			   = 'Day';
	$lang['agenda']['month']		   = 'Month';
	$lang['agenda']['year']			   = 'Year';
	$lang['agenda']['time']			   = 'Time';
	$lang['agenda']['send']			   = 'Send!';
	$lang['agenda']['reset']           = 'Reset';
	$lang['agenda']['wk']		       = 'WK'; //week
	$lang['agenda']['added']		   = 'The appointment was added successfully.';
	$lang['agenda']['notadded']		   = 'Errror! You have not completed all the required values!';
	$lang['agenda']['selected']        = 'Selected';
	$lang['agenda']['datetoday']       = 'Date today';
	$lang['agenda']['week']			   = 'Week';
	$lang['agenda']['wholeday']        = 'Whole day';
	$lang['agenda']['emptyday']		   = 'No appointments';

	#WYSIWYG Related
	#$lang['wysiwyg']['']			   = '';
	$lang['wysiwyg']['bold']		   = 'Bold';
	$lang['wysiwyg']['italic']		   = 'Oblique';
	$lang['wysiwyg']['underline']      = 'Underline';
	$lang['wysiwyg']['leftalgin']	   = 'Left-align';
	$lang['wysiwyg']['center']		   = 'Center';
	$lang['wysiwyg']['rightalgin']	   = 'Right align';
	$lang['wysiwyg']['justifyalgin']   = 'Continuous';
	$lang['wysiwyg']['orderedlist']	   = 'Ordered List';
	$lang['wysiwyg']['onorderedlist']  = 'Onordered list';
	$lang['wysiwyg']['fontsize']	   = 'Font size';
	$lang['wysiwyg']['fontfamily']     = 'Font type';
	$lang['wysiwyg']['fontformat']	   = 'Font format';
	$lang['wysiwyg']['paragraph']      = 'Paragraph';
	$lang['wysiwyg']['pre']            = 'Normal';
	$lang['wysiwyg']['h6']             = 'Heading 6';
	$lang['wysiwyg']['h5']             = 'Heading 5';
	$lang['wysiwyg']['h4']             = 'Heading 4';
	$lang['wysiwyg']['h3']             = 'Heading 3';
	$lang['wysiwyg']['h2']             = 'Heading 2';
	$lang['wysiwyg']['h1']             = 'Heading 1';
	$lang['wysiwyg']['identtext']      = 'Indent';
	$lang['wysiwyg']['removeident']    = 'Remove indent';
	$lang['wysiwyg']['addimage']       = 'Add image';
	$lang['wysiwyg']['uploadimg']      = 'Uploading image (not working yet!)';
	$lang['wysiwyg']['link']		   = 'Link';
	$lang['wysiwyg']['unlink']         = 'Remove Link';
	$lang['wysiwyg']['textcolor']      = 'Text color';
	$lang['wysiwyg']['bgcolor']        = 'Background Color';
	$lang['wysiwyg']['subscript']      = 'Subscript';
	$lang['wysiwyg']['superscript']    = 'Superscript';
	$lang['wysiwyg']['strike']         = 'Strikethrough';
	$lang['wysiwyg']['removeformat']   = 'Remove Format';
	$lang['wysiwyg']['horizontalrule'] = 'Horizontal Rule';
	$lang['wysiwyg']['edithtml']       = 'Edit HTML';
	$lang['wysiwyg']['addeditimg']     = 'Create / Edit Image';
	$lang['wysiwyg']['nourl']          = 'No Link!';
	$lang['wysiwyg']['uploaderror']    = 'Upload error';
	$lang['wysiwyg']['width']          = 'Width';
	$lang['wysiwyg']['height']         = 'Height';
	$lang['wysiwyg']['invalidid']      = 'Youtube Url Not Valid';
	
	#Forum related
	$lang['forum']['cat']              = 'Category';
	$lang['forum']['topics']           = 'Topics';
	$lang['forum']['last']             = 'Last';
	$lang['forum']['topic']            = 'Topic';
	$lang['forum']['reactions']        = 'Comments';
	$lang['forum']['vote']			   = 'Vote';
	$lang['forum']['result']		   = 'Result';
    $lang['forum']['noreactions']      = 'No Comments';
	$lang['forum']['closed']           = 'This Topic Is Closed, You Can not Comment';
	$lang['forum']['post']			   = 'Post';
	$lang['forum']['username']         = 'Username';
	$lang['forum']['message']          = 'Message';
	$lang['forum']['guest']			   = 'Guest';
	$lang['forum']['newtopic']		   = 'Create New Topic';
	$lang['forum']['name']		       = 'Subject';
	$lang['forum']['sticky']		   = 'Sticky';
	$lang['forum']['protected']		   = 'Secured';
	$lang['forum']['reset']		       = 'Reset';
	$lang['forum']['no']		       = 'No';
	$lang['forum']['yes']		 	   = 'Yes';
	$lang['forum']['submit']		   = 'Save';
	$lang['forum']['everyone']		   = 'Everyone';
	$lang['forum']['loggedin']		   = 'Members Logged';
	$lang['forum']['vips']		  	   = 'VIP`S';
	$lang['forum']['moderators']	   = 'Moderators';
	$lang['forum']['admins']           = 'Administrators';
	$lang['forum']['captcha']          = 'Wrong Captcha Code';
	$lang['forum']['topicerror']	   = 'Error Could Not Create Topic';
	$lang['forum']['closed']	       = 'Closed';
	$lang['forum']['noaccess']		   = 'No Rights To This Topic To See!<br>You have level "%s" and you need level "%s"';
	$lang['forum']['suredel']	 	   = 'Are you sure Post/Topic (% s) \ To Remove?';

	# Register/Login/Profile (orginal=1module)
	# Userlist Related
	$lang['site']['userlist']          = 'Members List';
	$lang['userlist']['module']        = 'Members List';
	$lang['profile']['hidden']		   = 'Hidden';
	$lang['profile']['profile']	       = 'Profile';
	$lang['profile']['id']		       = 'Membership number';
	$lang['profile']['username']	   = 'Username';
	$lang['profile']['realname']	   = 'Realname';
	$lang['profile']['email']	       = 'Email Address';
	$lang['profile']['age']		       = 'Age';
	$lang['profile']['website']		   = 'Website';


	$lang['register']['erroruserfakemail']    = 'Email Address Is <u> <b> NOT correct </ b> </ u>';
	$lang['register']['yes']           = 'Yes';
	$lang['register']['no']            = 'No';
	$lang['register']['hideprofile']   = 'Hide Profile';
	$lang['register']['username']      = 'Username';
	$lang['register']['realname']      = 'Realname';
	$lang['register']['hiderealname']  = 'Hide RealName';
	$lang['register']['email'] 		   = 'Email Address';
	$lang['register']['hideemail']     = 'Hide Email Address';
	$lang['register']['password']      = 'Password';
	$lang['register']['confirm']       = 'Password Control';
	$lang['register']['website']       = 'Website';
	$lang['register']['birthday']      = 'Birthday';
	$lang['register']['hidebirthday']  = 'Hide birthday';
	$lang['register']['text']          = 'Personal Text';
	$lang['register']['reset']         = 'Reset';
	$lang['register']['submit']        = 'Send';
	$lang['register']['passnotmatch']  = 'The two passwords do not match';
	$lang['register']['maked']         = 'Your Account Is created';
	$lang['register']['error']		   = 'Your Account Is not created';
	$lang['register']['errorusermail'] = 'Email address is already used or Username Is Already Used';
	$lang['register']['logout']        = 'Logout';
	
	$lang['login']['notexists']		   = 'User "% s" does not exist';
	$lang['login']['wrongpass']		   = 'Wrong Password';
	$lang['login']['loggedin']         = 'Logged in';
	
	#Admin Related
	$lang['admin']['moderror']		   = 'Module "%s" Can Not be-Configured!';
	$lang['admin']['config']           = 'Site configuration';
	$lang['admin']['modules']          = 'Module Configuration';
	$lang['admin']['pages']			   = 'Page Configuration';
	$lang['admin']['topmenu']		   = 'Top Menu Configuration';
	$lang['admin']['menu']		       = 'Menu Configuration';
	$lang['admin']['editvalues']	   = 'Edit This What You Want Change<br>';
	$lang['admin']['warnvalues']       = 'Use This Only If You Know What You Do!';
	$lang['admin']['suredel']		   = 'Are you sure ,\\ U \\\'\\\'%s\\\'\\\' with value \\\'\\\'%s\\\'\\\' Would Remove?';
	$lang['admin']['those']            = '%s to publish email on guestbook, %s is which modules must be loaded automatically  "~" is a separator for more third modules stabbing';
	$lang['admin']['save']             = 'Save';
	$lang['admin']['reset']            = 'Reset';
	$lang['admin']['del']              = 'Delete';	
	$lang['admin']['deleted']          = 'Configuration Parameter %s Removed.';
	$lang['admin']['updated']          = 'Configuration Parameter %s Created/Changed.';
	$lang['admin']['errdeleted']       = 'Error: Could not remove %s Configuration Parameter';
	$lang['admin']['errupdated']       = 'Error: Could not create %s Parameter Configuration Change';
	$lang['admin']['newvalue']         = 'New!';
	$lang['admin']['example']          = 'Example';
	$lang['admin']['suredelpage']      = 'Are you sure,\\\that you page \\\'\\\'%s\\\'\\\' wants To Remove?';
	$lang['admin']['newpage']          = 'New Page';
	$lang['admin']['editedpage']	   = 'Edited page!';
	$lang['admin']['noteditedpage']	   = 'Not Edited page!';
	$lang['admin']['edit']             = 'Edited';
	$lang['admin']['content']          = 'Content';
	$lang['admin']['title']            = 'Title';
	$lang['admin']['createdpage']	   = 'Page created';
	$lang['admin']['notcreatedpage']   = 'Page not created';
	$lang['admin']['deletedpage']      = 'Page deleted';
	$lang['admin']['notdeletedpage']   = 'Page not deleted';

 #SQL
  $lang['sql']['connect'] = 'Can\'t Connect To The MySQL Database!';
?>