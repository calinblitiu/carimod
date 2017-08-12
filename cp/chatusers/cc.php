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
	margin-top: 0px;
	margin-bottom: 0px;
}




-->



</style>

<script language=JavaScript>
<!--

//Disable right mouse click Script
//By Maximus (maximus@nsimail.com) w/ mods by DynamicDrive
//For full source code, visit http://www.dynamicdrive.com

var message="Function Disabled!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<table width="550" height="600" border="0" align="center" cellpadding="10" cellspacing="10" bgcolor="#f5f5f5">

  <tr>

    <td align="center" valign="middle"><table width="550" border="0" cellspacing="10" cellpadding="10">

      <tr>

        <td>



<form name="contactform" method="post" action="buytoken.php">
 
<table width="600px" >
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="50" placeholder="First Name ">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="50" placeholder="Last Name ">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top"">
 
  <label for="username">Carimod Username *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="username" maxlength="50" size="50" placeholder="Enter your Carimod Username">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="name_on_card">Name on Card *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="name_on_card" maxlength="50" size="50" placeholder="Name on Card">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="line_1">Billing Address Line 1 *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="line_1" maxlength="1000" size="50" placeholder="Billing Address Line 1 "></textarea>
 
 </td>
 
</tr>
 <tr>
 
 <td valign="top">
 
  <label for="line_2">Billing Address Line 2 *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="line_2" maxlength="1000" size="50" placeholder="Billing Address Line 2 "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="city">City *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="city" maxlength="1000" size="50" placeholder="Enter Billing City Here "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="state">State *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="state" maxlength="1000" size="50" placeholder="Enter your billing State "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="zip_code">Zip Code *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="zip_code" maxlength="1000" size="50" placeholder="Enter your Billing Zip Code"></textarea>
 
 </td> 
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="country">Country / Region *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="country" maxlength="1000" size="50" placeholder="Enter your billing Country "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="card_type">Credit Card Type *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="card_type" maxlength="1000" size="50" placeholder="What Type of Credit Card (Visa, Mastercard etc..)  "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="card_number">Credit Card Number *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="card_number" maxlength="1000" size="50" placeholder="Enter your Card Number "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="expiration">Expiration Date *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="expiration" maxlength="1000" size="50" placeholder="Card expiration Date (MM-YYYY) "></textarea>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="ccv">Card Security Code *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text"  name="ccv" maxlength="1000" size="50" placeholder="Three digits on the back of you card "> &nbsp;&nbsp;</textarea><a href="http://www.carimod.com"><font size="2" color="red">What is it?</a>
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="50" placeholder="Enter your Email Address Here ">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="50" placeholder="Enter your Phone Number ">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments </label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" size="50" placeholder="Comments or Instructions "></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   
 
 </td>
 
</tr>
 
</table>
 
</form>

        </p>

          </td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

    </table></td>

  </tr>

</table>

<?
include("_members.footer.php");
?>