<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('Location: users/login.php');
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kaladhar CashewKaladhar Cashew</title>
<link href="css/stylesimple.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="header">
  <tr>
    <td><img src="css/logo.png" alt="Kaladhar Cashew" width="203" height="118" /></td>
    <td>
        <h1> Kaladhar Cashew</h1>
    </td>
  </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="nav">
  <tr>
    <td height="19" align="center"><a href="http://localhost/Kaladhara">Home</a></td>
    <td align="center"><a href="#">About</a></td>

    <td align="center"><a href="#">Contact</a></td>
  </tr>
</table>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <td width="250" valign="top" class="lineRight">
<ul type="disc">
    <li><a href="Wages">Wages</a></li><br>
    <li><a href="Employees">Employees</a></li><br>
    <li><a href="EmpType">Employee Types</a></li><br>
    <li><a href="WageWeeks">WageWeeks</a></li><br>
    <li>Reports</li>

</ul>

    </td>
    <td width="551" align="left" valign="top">
	
    </td>
  </tr>
</table>
<?php include("include/footer.php"); ?>

</html>
