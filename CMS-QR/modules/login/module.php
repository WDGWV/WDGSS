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















 # {REP}
 
if ( isset ( $_GET['user_logout'] ) )
{
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (@ini_get("session.use_cookies")) {
    $params = @session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
ga("home.pag");
}

 
	if ( isset ( $_SESSION['hijack'] ) )
		{
			if ( $_SESSION['hijack'] != getip(true) )
				{
					$replace['page'] = "SESSION HIJACKING NOT ALLOWED :)";
				}
		}

	if ( isset ( $_SESSION['login'] ) )
		{
			define("login", $_SESSION['login']);
			$a = $conf['database']['db'] -> query("SELECT * FROM `{$conf['database']['pref']}users` WHERE `username` = '{$_SESSION['login']}' LIMIT 1");
			$member = $conf['database']['db'] -> fetch($a, 'array');
			$member = $member[0];
			
		}
$status = isset ( $member['status'] ) ? $member['status'] : 1;
$_SESSION['niveau'] = $status;
$_SESSION['status'] = $status;

function is( $sectionlevel )
{
 global $member;
 if ( isset ( $member['status'] ) )
 {
	$s = $member['status'];
	switch ( $sectionlevel )
	{
		case 'banned':
		case 'ban':
			return ( $s < 1 ) ? true : false ;
		break;
		 
		case 'member':
		case 'login':
		case 'loggedin':
			return ( $s >= 1 ) ? true : false ;
		break;

		case 'vip':
			return ( $s >= 2 ) ? true : false ;
		break;
		
		case 'mod':
		case 'moderator':
			return ( $s >= 3 ) ? true : false ;
		break;

		case 'admin':
		case 'administrator':
			return ( $s >= 4 ) ? true : false ;
		break;

		// For Now Not Supported
		case 'root':
		case 'rootadmin':
		case 'rootadministrator':
			return ( $s == 5 ) ? true : false ;
		break;
	}
 }
 return false;
}
function isroot() 				{ return is('rootadministrator'); 	}
function isrootadmin() 			{ return is('rootadmin'); 			}
function isrootadministrator() 	{ return is('rootadministrator'); 	}
function isadministrator()	 	{ return is('administrator'); 		}
function isadmin() 				{ return is('admin'); 				}
function ismod() 				{ return is('mod'); 				}
function ismoderator()	 		{ return is('moderator'); 			}
function isvip() 				{ return is('vip'); 				}
function loggedin() 			{ return is('member'); 				}
function isbanned() 			{ return is('banned'); 				}

?>