<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IT CALL LOG</title>
<link href="CSS/ss.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header">
  <h1 align="center"><img src="image/logo.png" alt="c" width="150" height="150" />
    IT Department Call Ragister  </h1>
  <h1 align="right">&nbsp;</h1>
</div>
<div id="con">
<form method="post" action="" name="Call log">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="485" height="540" border="1" align="center" cellpadding="1" cellspacing="1" id="tbl">
    <tr>
      <th colspan="2" scope="row"><h1>Call Log</h1><?php if(isset($err)){
	  echo $err;
	  } if(isset($result)){
	  echo $result;
	  }?></th>
      </tr>
    <tr>
      <th width="236" scope="row">Complaint:</th>
      <td width="236"><input type="text" name="comp" required  placeholder="Enter The Complains"/></td>
    </tr>
    <tr>
      <th scope="row">Department:</th>
      <td><input type="text" name="dept" /></td>
    </tr>
    <tr>
      <th scope="row">Date/Time</th>
      <td><input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" name="date" /></td>
    </tr>
    <tr>
      <th scope="row">Engineer:</th>
      <td>
      <select name="ename">
     <option>Mr. Krishna k Vishwakarma</option>
          <option>Ms Shaziya Khan</option> 
               <option>Mr. Suresh Malviya</option>
                <option>Er. Mukesh sharma</option>
                     <option>Mr. Sunil </option>
                   <option>Mr. Sonu Jatav</option>
                        <option>Mr. Sonu Mewada</option>
                             <option>Mr Rohit Chourasia</option>
      </select>
      </td>
    </tr>
    <tr>
      <th scope="row">Down Time:</th>
      <td><input type="time" name="dtime" /></td>
    </tr>
    <tr>
      <th scope="row">Remark:</th>
      <td><input type="text" name="remark" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><p>
        <input type="submit" name="submit" />
      </p>
        <p><a href="report.php">Print Report </a></p></th>
      </tr>
  </table>
<?php 
$con = mysqli_connect("localhost","root","","nabh");
/*if(!$con){ 
echo "Your wrong";
}else{ 
echo "connected";
}*/

if(isset($_POST['submit'])){


$query = "Insert into call_log values('','$_POST[comp]','$_POST[dept]','$_POST[date]','$_POST[ename]','$_POST[dtime]','$_POST[remark]')";
$sql = mysqli_query($con,$query);
if(!$sql){ echo "Your wrong";}else{

$result = "Data is Inserted into the Database";
}

}else{

$err= "your wrong";
}
?>
</form>
</div>
<div class="footer"></div>
</body>
</html>
