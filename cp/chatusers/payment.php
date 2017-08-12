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


<p>&nbsp;</p>
  <p>&nbsp;</p>
<table width="380" height="40" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#f5f5f5">

  <tr>

    <td align="center" valign="middle"><table width="380" border="0" cellspacing="5" cellpadding="5">

      <tr>

        <td>


<a href="buyminutes.php"><img src="../../images/bank.png" border=21/>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="tcho.php"><img src="../../images/lajan-cash.png"border=21 />&nbsp;&nbsp;&nbsp;&nbsp;<br>
<a href="tcho.php"><img src="../../images/tcho.png"border=21/>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cc.php"><img src="../../images/cc.png" border=21/></a>
        </p>

          </td>

      </tr>

      <tr>


      </tr>

    </table></td>

  </tr>

</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<?
include("_members.footer.php");
?>