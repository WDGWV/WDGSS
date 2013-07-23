
<center>
  <h1>
    QR Code Maker
  </h1>
</center>

<table><tr><td>

<table>
  <tr><td>Type</td><td>input</td><td>type here</td></tr>

     <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->
<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/link'>
  <tr>
    <td>Link</td>
    <td>link/url:</td>
    <td><input type='text' name='link'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>
  
   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/bookmark'>  
  <tr>
    <td>BookMark</td>
      <td>Title:</td>
      <td><input type='text' name='title'></td>
  </tr>
  <tr>
   <td></td>
    <td>Url</td>
    <td><input type='text' name='url'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>

   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/plaintext'>
  <tr>
    <td>PlainText</td>
    <td>Text</td>
    <td><input type='text' name='plaintext'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>

   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/sms'>
  <tr>
    <td>SMS</td>
     <td>phone</td>
     <td><input type='text' name='phone'></td>
    </tr>
   <tr>
    <td></td>
     <td>text</td>
     <td><input type='text' name='sms'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>

   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/call'>
  <tr>
    <td>Phone Call</td>
    <td>Number</td>
    <td><input type='text' name='call'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>

   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/contact'>
  <tr>
    <td>contact</td>
      <td>name</td>
      <td><input type='text' name='name'></td>
   </tr>
   <tr>
    <td></td>
     <td>Address</td>
     <td><input type='text' name='address'></td>
   </tr>
   <tr>
    <td></td>
     <td>Phone</td>
     <td><input type='text' name='phone'></td>
   </tr>
   <tr>
    <td></td>
     <td>Email</td>
     <td><input type='text' name='email'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>

   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/email'>
  <tr>
   <td>Email</td>
    <td>To</td>
    <td><input type='text' name='to'></td>
   </tr>
  <tr>
   <td></td>
    <td>Subject</td>
    <td><input type='text' name='subject'></td>
   </tr>
   <tr>
    <td></td>
     <td>Message</td>
     <td><input type='text' name='message'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>
   
   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><!-- WHITE LINE -->

<form method='post' action='<?php echo $conf['site']['url']; ?>page/qr?=/content'>
  <tr>
   <td>Content</td>
    <td>Type</td>
    <td><input type='text' name='type'></td>
   </tr>
   <tr>
    <td></td>
     <td>Size</td>
     <td><input type='text' name='size'></td>
   </tr>
   <tr>
    <td></td>
     <td>Content</td>
     <td><input type= text' name='content'></td>
  </tr>
<tr><td></td><td></td><td><input type='submit' value='make'></td></tr>
</form>

</table>

</td><td>

<?php
 $qr = new qrcode();
 if ( false == true ) { } #ALWAYS ELSEIF...
// [link] => URL2OPEN
 elseif ( isset ( $_POST['link'] ) ) {
  $qr -> link ( $_POST['link'] ) ;
  echo "Link";
 }
 
// [title] [url] => Bookmark
 elseif ( isset ( $_POST['title'] ) &&
           isset ( $_POST['url']  ) ) {
  $qr -> bookmark ( $_POST['title'], $_POST['url'] ) ;
  echo "Bookmark";
 }

// [plaintext] => PlainText
 elseif ( isset ( $_POST['plaintext'] ) ) {
  $qr -> text ( $_POST['plaintext'] ) ;
  echo "Plaintext";
 }
 
 // [phone] [sms] => SMS
 elseif ( isset ( $_POST['phone'] ) &&
           isset ( $_POST['sms'] ) ) {
  $qr -> sms ( $_POST['phone'], $_POST['sms'] ) ;
  echo "Sms";
 }
 
 // [call] => Phone Call
 elseif ( isset ( $_POST['call'] ) )
 {
  $qr -> phone ( $_POST['call'] ) ;
  echo "Phone Number";
 }

 // [name] [address] [phone] [email] => mail
 elseif ( isset ( $_POST['name'] )     &&
           isset ( $_POST['address'] )  &&
           isset ( $_POST['phone'] )    &&
           isset ( $_POST['email'] )
     ) {
 $qr -> contact ( $_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email'] ) ;
 echo "Contact Info";
 }
 
 // [to] [subject] [message] => Send Email
 elseif ( isset ( $_POST['to'] )      &&
           isset ( $_POST['subject'] ) &&
           isset ( $_POST['message'] ) ) {
  $qr -> email ( $_POST['to'], $_POST['subject'], $_POST['message'] );
  echo "Email";
 }
 
 // [type] [size] [content] => Content
 elseif ( isset ( $_POST['type'] )     &&
           isset ( $_POST['size'] )     &&
           isset ( $_POST['content'] ) ) {
  $qr -> content ( $_POST['type'], $_POST['size'], $_POST['content'] );
  echo "Content";
 }
 
 else {
  $qr -> text('Made By WDGSS (Wesley De Groot): http://www.wdgss.nl/');
  echo "ERROR";
 }
 
 $x = $qr -> geturl () ;
 
 echo "&nbsp;QRCode<br><img src='{$x}'><br><pre>{$x}</pre>";
?>
<pre>
<?php print_r($_POST); ?>
</pre>

</td></tr></table>