<?php echo $lang['test']['test']; ?>

<?php
	 
	$mail = md5( strtolower( trim( "wes@vista.aero " ) ) );
	$str = file_get_contents( 'http://www.gravatar.com/'.$mail.'.php' );
	$profile = unserialize( $str );
	if ( is_array( $profile ) && isset( $profile['entry'] ) )
	    {
	     echo "<pre>"; print_r($profile); echo "</pre>";
	    }//echo $profile['entry'][0]['displayName'];
	 
?>