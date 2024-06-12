<?php
$id=$_GET['delid'];
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql ="DELETE FROM movie WHERE MOVIEID='$id'";
$data = mysqli_query($con,$sql);
if($data){
	echo "<font color='green'>Record Deleted from Table";
	header("Location:viewxstreamdb.php");
} 
else{
	echo "<font color='red'>Sorry, Delete process failed <a href='viewxstreamdb.php'>view</a>";
}
?>