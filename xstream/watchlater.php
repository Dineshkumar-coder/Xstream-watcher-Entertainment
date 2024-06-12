<?php
session_start();
?>
<?php
$iid=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <form method='POST' id='wlwl'>
     <input type='text' value='<?php echo " ".$_SESSION['USERNAME'];?>' name='wlusname'>
     <input type='text' value='<?php echo "$iid";?>' name='wlmovieid'>
     <button><img src="../plus2.png"></button>
 </form>
</body>
</html>






<?php


$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');

$wun=$_POST['wlusname'];
$mid=$_POST['wlmovieid'];

$sql="INSERT INTO watchlater(USNAME,MID) VALUES ('$wun','$mid')";
	$retval=mysqli_query($con,$sql);
    
if ($retval) {
	echo "$wun";
}

?>