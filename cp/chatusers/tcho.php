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
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
body {
	background-color: #8F0000;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #fff;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style1 {color: #000000}
.style2 {color: #FFFFFF;
font-size: 15px;
}
.style3 {color: #FFFFFF;
font-size: 18px;
}

div.hoverbox2
  {
  opacity:1.0;
  filter:alpha(opacity=100); /* For IE8 and earlier */
  }
  
  div.hoverbox2:hover
  {
  opacity:0.8;
  filter:alpha(opacity=80); /* For IE8 and earlier */
  }




-->
.token_box{width:150px;height:175px;float:left;background:#8EC1DA url(../../images/rounded.png);margin:10px;}




 .token_box h1{color:#8F0000;padding-top:5px;margin:0 auto;text-align:center;}
 .token_box h2{color:black;padding-top:5px;margin:0 auto;text-align:center;}
 .token_box h3{color:black;padding-top:5px;margin:0 auto;text-align:center;}
.token_box .btn {margin-top:20px;text-align:center;opacity:1.0;filter:alpha(opacity=100);}
.token_box .btn:hover {margin-top:20px;text-align:center;opacity:0.8;filter:alpha(opacity=95);}
</style>


<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="728" height="494" border="0" align="center" cellpadding="0" cellspacing="0" background="../../images/money-bg1.png" style="background-repeat:no-repeat;">

  <tr valign="top">

    <td height="113"><table width="700" height="458" border=0 align="center" cellPadding=4 cellSpacing=0 class="form_definitions">

        <TR>

          <TD><p><span class="style2">Date: 
            <?php
echo date("m-d-Y");
?>
          </span>            <br />
            <br />
            <span class="style2">Tokens in your account:
              
              <span class="style3"><b><?

			  include("../../dbase.php");

			  $result=mysql_query("SELECT money from chatusers where user='$username' LIMIT 1");

			  while($row = mysql_fetch_array($result)){

			  	//$money=$row[money]/100;
				//strstr($row['money'],'.')?$money=$row['money']:$money=$row['money'].'.00';

				echo $row['money'];

				} 

			  

			  

			  ?>
            <ul id="css3menu1" class="topmenu">
			<li class="topmenu"><a href="viewsessions.php" style="height:10px;line-height:10px;">Account History</a></li></span><br />
              </span><br />
            </p></TD>
        </TR>

        <TR>

          <TD height="16" class="barbg"><p><strong><font color="#FFFFFF"><br />
              </font>      <span class="style1">Add funds to your member account using a credit or debit card, Tchotcho Mobile, Lajan Cash</span><font color="#FFFFFF"><br />
<p>
< class="btn"><a href="tcho.php"><img src="../../images/lajan-cash.png" />
< class="btn"><a href="tcho.php"><img src="../../images/tcho.png"/>
< class="btn"><a href="../../cp/chatusers/buyminutes.php"><img src="../../images/cc.png" border=1/></a>

<p/>

              </font></strong>

<b><span class="style1 ">For those of you who live in the Caribbean Islands, You will have the opportunity to Recharge your account With Tchotcho Mobile, Lajan Cash.</b>   
<br><br><span class="style1 ">1. Go to an Agent Near you and send the money to us.
<br>2. Send your Username and the transaction ID to us and we will credit your account.
</span></p>


<b><span class="style1 ">Pou tout moun ki abite nan karayib la, nou ka rechaje kont nou avek Tchotcho Mobile, Lajan Cash.</b>   
<br><br><span class="style1 ">1. Ale kay yon agent e transfere lajan sou kont nou.   
<br>2. Apre nou finn transfer lajan, voye username nou ak nimero tranzaksyon an oubyen kopi resi a ban nou sou telefon oubyen email epi nap rechaje kont nou.



          </TD> 
        </TR>

        <TR>

          <TD>
<?php
$query=mysql_query("select * from package order by price asc");
while($row=mysql_fetch_object($query))
{
echo '<div class="token_box"><h1>'.$row->name.'</h1><h2>'.$row->tokens.' Tokens</h2><h3>Price $'.$row->price.'</h3><div class="btn"><a href="ccbill.php?amt='.$row->price.'&usr='.$username.'"><img src="../../images/buy-package-btn-lg.png" /></a></div></div>';
}
?>
<div style="clear:both;"></div>
            <!--  <div class="hoverbox2" align="center"><br>
                <input name="image" type="image" src="../../images/add-funds-button.png" alt="" width="155" height="40" border="0"/>
                <br>
                <br>
              </div>--></TD>
        </TR>

        <TBODY>
        </TBODY>

      </TABLE></td>

  </tr>
<script language="javascript" type="text/javascript">
function validte()
{
if (document.getElementById('txtAmount').value == "")
{
	alert("Please enter Amount");
	document.getElementById('txtAmount').focus();
	return false;
}
if (parseFloat(document.getElementById('txtAmount').value )<2.95)
{
	alert("Amount should be above $ 2.95");
	document.getElementById('txtAmount').focus();
	return false;
}
return true;
}
</script>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?
include("_members.footer.php");
?>