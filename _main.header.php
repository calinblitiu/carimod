<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("dbase.php");
include("settings.php");
$nTime=time(); 

		  

		  //we set the status to offline to models that have not changed theyr status for 30 seconds

		  mysql_query("UPDATE chatmodels SET status='offline' WHERE $nTime-lastupdate>30 AND status!='rejected' AND status!='blocked' AND status!='pending' AND forcedOnline='0'");
?>

		<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="Camscripts-menuebar_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}


#search {

}

#search input[type="text"] {
    background: url(../../search-dark.png) no-repeat 10px 6px #f5f5f5;
    border: 0 none;
    font: bold 13px Arial,Helvetica,Sans-serif;
    color: #000000;
    width: 130px;
    padding: 2px 15px 6px 35px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    }

#search input[type="text"]:focus {
    width: 200px;
    }


</style>
	<!-- End css3menu.com HEAD section -->


<?php
$query=mysql_query("select * from category order by name asc");
while($row=mysql_fetch_object($query))
{
$cats[]=$row->name;
}
$cat_array=array_chunk($cats,7);
$columns=count($cat_array);
?>
<html>
<div class="selector" align="left">
  <table width="100%" border="0">
    <tr>
      
      <td valign="top"><!-- Start css3menu.com BODY section -->
<ul id="css3menu1" class="topmenu">
	<li class="topmenu"><a href="index.php" style="height:10px;line-height:10px;">Live Webcams</a>	</li>
	<li class="topmenu"><a href="#" style="height:10px;line-height:10px;"><span>Categories</span></a>
	<div class="submenu" style="width:<?=(120*$columns);?>px;">
<?php
foreach($cat_array as $cat)
{
echo '<div class="column" style="width:'.(100/$columns).'%"><ul>';
foreach($cat as $c)
{
echo '<li><a href="category.php?category='.$c.'" class="style6">'.$c.'</a></li>';
}	
echo '</ul></div>';
}
?>
</div>
</li>       
<li class="topmenu"><form action="searchModel_ff.php" method="post" id="search">
  <input name="search" type="text" size="40" placeholder="Search..." />
</form></li>


<!--<li class="topmenu"><a href="searchModel.php" style="height:18px;line-height:18px;">Search</a></li>-->
	<li class="topmenu"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><img src="images/camscripts-v2.2-logo.png" alt="Camscripts-logo" width="200" height="30" align="absmiddle" valign="top" /><center></li>
</ul>
<!-- End css3menu.com BODY section --></td>




     <td align="left"></td> 
	  
	  
	  
	  
	  
      <td align="right" valign="top"><!-- Start css3menu.com BODY section -->
<ul id="css3menu1" class="topmenu">
	
	
    <li class="topmenu"><a href="registration/user.php" style="height:10px;line-height:10px;">Register</a></li>
	<li class="topmenu"><a href="login.php" style="height:10px;line-height:10px;">Login</a></li> 
</ul>
<!-- End css3menu.com BODY section --></td>
    </tr>
  </table>
</div>
<head>

<link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAADgAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiIiIhEiIiIiIiIhERIiIiIiIhERESIiIiIhESIREiIiIhEQIgERIiIhEQAiIBESIhEQIiIiAREhESIiIiIiERESIiIiIiIhERIiIhEiIiEREiIhERIiIRERIhERESIREhERESIREREiIREQIgEREiAAAAAAAAAAD//wAA/n8AAPw/AAD4HwAA8Y8AAOPHAADH4wAAj/EAAB/4AAA//AAAPnwAADw8AAAYGAAAgYEAAMPDAAD//wAA" rel="icon" type="image/x-icon" /></head>



<title><? echo $sitename; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--

.selector
{
  background-image: url(images/top-bar-red.png);
  
  position: fixed;
  
  top: 0;
  left: 0;
  width: 100%;
  height: 40px;
  z-index: 10;

}


div.hoverbox
  {
  opacity:0.9;
  filter:alpha(opacity=97); /* For IE8 and earlier */
  }
  
  div.hoverbox:hover
  {
  opacity:1.0;
  filter:alpha(opacity=100); /* For IE8 and earlier */
  }






body,td,th {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
}

body {
	margin-left: 0px;
	
	margin-right: 0px;
	
	background-color: #8F0000;
	
	
	
	background-repeat: repeat-x;
	
	background-attachment: fixed;
	
	margin-top: 0px;
	
	margin-bottom: 0px;

	background-color: #8F0000;

}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #FFFFFF;
	text-decoration: none;
}
a:active {
	color: #666666;
	text-decoration: none;
}
.style2 {font-size: 14px; font-family: Arial, Helvetica, sans-serif;}
.style3 {
	font-weight: bold;
	font-size: 11;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.style7 {font-weight: bold; font-size: 11px; 

}


.modelbox_title {

	font-family: Arial, Verdana, Tahoma, Helvetica, sans-serif;

	font-size: 16px;

	color: #ffffff;

	font-weight: bold;

}

-->
</style>



