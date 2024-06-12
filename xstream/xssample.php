<?php
  

?>
<html>
<head>
	<title>php</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
    <lable>MOVIEVIDEO</lable><br>
	<input type="file" name="videos" value="">
	<br><br>
	<input type="text" name="name"  placeholder="MOVIENAME">
	<br><br>
	<input type="submit" name="upload" value="SUBMIT">
    </form>
    <div class="banner">
      
    </div>
</body>
</html>

<?php

if(isset($_POST['upload']))

{
  $con= mysqli_connect('localhost','root','root');
  mysqli_select_db($con,'sample');

  $videos=$_POST['videos'];
  $name=$_POST['name'];

  $filename=$_FILES["videos"]["name"];
  $temp=$_FILES["videos"]["tmp_name"];
  $file_size = $_FILES["videos"]["size"];
  $filedestination="../xstreamvideos/".$filename;
  move_uploaded_file($temp,$filedestination);

     $sql="INSERT INTO xs (videos,name) VALUES ('$filedestination','$name')";
    $retval=mysqli_query($con,$sql);

    mysqli_close($con);

}


?>