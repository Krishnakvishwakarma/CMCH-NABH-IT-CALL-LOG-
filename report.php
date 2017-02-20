<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report of Call Log</title>

<link href="CSS/ss.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header">
  <div align="center">
    <h1><img src="image/logo.png" alt="c" width="150" height="150" />IT Department Call Ragister </h1>
  </div>
</div>
<div id="con">
<form method="post" action="">
<p>&nbsp;</p>
<p align="center"><a href="index.php"><img src="image/hlogo.png" alt="hlogo" width="167" height="90" /></a></p>
<table width="567" height="137" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#000099" bgcolor="#CC9900">
  <tr>
    <th width="24" scope="col">Start date:</th>
    <th width="73" scope="col"><input type="date" name="sdate" /></th>
    <th width="85" scope="col">End date:</th>
    <th width="71" scope="col"><input type="date" name="edate" /></th>
    <th colspan="3" scope="col"><input type="submit" name="submit"/></th>
    </tr>
  <tr>
    <th scope="col">S. No.</th>
    <th scope="col">Complaint:</th>
    <th scope="col">Department:</th>
    <th scope="col">Date/Time</th>
    <th width="65" scope="col">Engineer:</th>
    <th width="42" scope="col">Down Time:</th>
    <th width="111" scope="col">Remark:</th>
  </tr>
 



<?php

$con=mysqli_connect("localhost","root","","nabh");
//if(isset($_POST['submit'])){

$query = "select * from call_log ";
$sql = mysqli_query($con,$query);
if(mysqli_num_rows($sql)>0){
$i=1;
while($row=mysqli_fetch_assoc($sql)){
?>
 <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row['comp'] ?></td>
    <td><?php echo $row['dept'] ?></td>
    <td><?php echo $row['date'] ?></td>
    <td><?php echo $row['ename'] ?></td>
    <td><?php echo $row['dtime'] ?></td>
    <td><?php echo $row['remark'] ?></td>
  </tr>
<?php
}

}
//}
?>
</table>
</form></div>
<div id="print"></div>
<div class="footer"></div>
</body>
</html>
