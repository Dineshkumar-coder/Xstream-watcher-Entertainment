<?php
session_start();
?>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie USNAME='{$_SESSION['USERNAME']}";
$retval=mysqli_query($con,$sql);
$total=mysqli_num_rows($retval);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My page</title>
</head>
<body>
   <div class="me">
   	 <img src="../user1.png" alt="NO_IMAGE" class="userlogo">
     <p id="usname"><?php echo " ".$_SESSION['NAME'];?></p>
     <p id="usid"><?php echo " ".$_SESSION['USERNAME'];?></p>
   </div>
</body>
</html>