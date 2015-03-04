<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('Location: ../users/login.php');
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Your Website Title</title>
<link href="../css/stylesimple.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<?php include("../include/header.php"); ?>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <td width="250" valign="top" class="lineRight">
       <?php include("../include/leftbar.php"); ?>
    </td>
    <td width="551" align="left" valign="top">
	<ul type="disc">
            <li><a href="../Report/displayWeeks.php">Weekly Report</a></li>
            <li><a href="../Report/displayMonths.php">Monthly Report</a></li>
            <li><a href="../Report/YearlyReports.php">Yearly Report</a></li>

        </ul>
    </td>
  </tr>
</table>
<?php include("../include/footer.php"); ?>

</html>
