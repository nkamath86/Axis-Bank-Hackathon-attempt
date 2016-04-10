<?php
$con=mysql_connect("localhost","root","");
$select=mysql_select_db("aadhar",$con);
$query="SELECT * From information";
$result=mysql_query($query);
$rows=mysql_fetch_array($result);
?>
<html>
 <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/npm.js"></script>
<body>
<center>
<?php
include('header.php');
?>
<fieldset style="margin:10%;margin-left: 20%;margin-right: 20%">
	<legend>
		Your Details
	</legend>
<table style="align-content: center;">
<tr>	
<td>Name 		  	   : </td><td> <?php echo $rows['name']; ?></td></tr><br>
<tr><td>UID  		  	   :  </td><td><?php echo $rows['uid']; ?></td></tr><br>
<tr><td>Pan				   :  </td><td><?php echo $rows['pan']; ?></td></tr> <br>
<tr><td>Phone Number  	   :</td><td>  <?php echo $rows['phone']; ?></td></tr><br>
<tr><td>Date of Birth 	   :</td> <td> <?php echo $rows['dob']; ?></td></tr><br>
<tr><td>Place of Residence : </td><td> <?php echo $rows['street'].",".$rows['district'].",".$rows['state'].",".$rows['pincode'];?></td></tr></table>	
	
</label>

</fieldset>	

</center>
</body>
</html>