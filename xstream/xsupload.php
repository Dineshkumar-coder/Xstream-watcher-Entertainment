<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
	<lable>MOVIEIMAGE</lable><br>
	<input type="file" name="MOVIEIMAGE" value="">
	<br><br>
	<lable>MOVIEVIDEO</lable><br>
	<input type="file" name="MOVIEVIDEO" value="">
	<br><br>
	<input type="text" name="MOVIENAME"  placeholder="MOVIENAME">
	<br><br>
	<input type="text" name="MOVIEPARA"  placeholder="MOVIEPARA"> 
	<br><br>
	<input type="text" name="MOVIECATEGARY"  placeholder="MOVIECATEGARY">
	<br><br>
	<lable>MOVIEBANNER</lable><br>
	<input type="file" name="MOVIEBANNER"  value=""> 
	<br><br>
	<input type="text" name="GRADE"  placeholder="GRADE"> 
	<br><br>
	<input type="text" name="RELEACEDATE"  placeholder="DATE"> 
	<br><br>
	<input type="text" name="MOVIETIME"  placeholder="MOVIETIME"> 
	<br><br>
	<input type="text" name="MOVIETYPE"  placeholder="MOVIETYPE"> 
	<br><br>
	<input type="text" name="LANGUAGE"  placeholder="LANGUAGE"> 
	<br><br>
	<label>CASTS</label><br>
	<input type="file" name="OC1IMG" value="">     
	<input type="text" name="OC1NAME"  placeholder="CAST1"> 
	<br><br>
	<input type="file" name="OC2IMG" value="">     
	<input type="text" name="OC2NAME"  placeholder="CAST2"> 
	<br><br>
	<input type="file" name="OC3IMG" value="">     
	<input type="text" name="OC3NAME"  placeholder="CAST3"> 
	<br><br>
	<input type="file" name="OC4IMG" value="">     
	<input type="text" name="OC4NAME"  placeholder="CAST4"> 
	<br><br>
	<input type="file" name="OC5IMG" value="">     
	<input type="text" name="OC5NAME"  placeholder="CAST5"> 
	<br><br>
	<input type="file" name="DIRECTORIMG" value="">      
	<input type="text" name="DIRECTORNAME"  placeholder="DIRECTORNAME"> 
	<br><br>
	<input type="file" name="MUSICDIRECTORIMG" value="">         
	<input type="text" name="MUSICDIRECTORNAME"  placeholder="MUSICDIRECTORNAME"> 
	<br><br>
	<input type="text" name="CASTS"  placeholder="OTHER CASTS"> 
	<br><br>
	<input type="text" name="FILTER"  placeholder="FILTER"> 
	<br><br>
	<label>TRAILER</label><br>
	<input type="file" name="TRAILER" value="">
	<br><br>

	
	<input type="submit" name="sub" value="UPLOAD">

	<br><br>


</form>



</body>
</html>


<?php

if(isset($_POST['sub']))

{
  $con= mysqli_connect('localhost','root','root');
	mysqli_select_db($con,'xstream');


  $MOVIEIMAGE=$_POST['MOVIEIMAGE'];
	$MOVIENAME=$_POST['MOVIENAME'];
	$MOVIEVIDEO=$_POST['MOVIEVIDEO'];
	$MOVIEPARA=$_POST['MOVIEPARA']; 
	$MOVIECATEGARY=$_POST['MOVIECATEGARY'];
  $MOVIEBANNER=$_POST['MOVIEBANNER'];
  $DIRECTORIMG=$_POST['DIRECTORIMG'];
  $DIRECTORNAME=$_POST['DIRECTORNAME'];
  $MUSICDIRECTORIMG=$_POST['MUSICDIRECTORIMG'];
  $MUSICDIRECTORNAME=$_POST['MUSICDIRECTORNAME'];
  $GRADE=$_POST['GRADE'];
  $DATE=$_POST['RELEACEDATE'];
  $MOVIETIME=$_POST['MOVIETIME'];
  $MOVIETYPE=$_POST['MOVIETYPE'];
  $LANGUAGE=$_POST['LANGUAGE'];
  $CASTS=$_POST['CASTS'];
  $OC1IMG=$_POST['OC1IMG'];
  $OC1NAME=$_POST['OC1NAME'];
  $OC2IMG=$_POST['OC2IMG'];
  $OC2NAME=$_POST['OC2NAME'];
  $OC3IMG=$_POST['OC3IMG'];
  $OC3NAME=$_POST['OC3NAME'];
  $OC4IMG=$_POST['OC4IMG'];
  $OC4NAME=$_POST['OC4NAME'];
  $OC5IMG=$_POST['OC5IMG'];
  $OC5NAME=$_POST['OC5NAME'];
  $TRAILER=$_POST['TRAILER'];
  $FILTER=$_POST['FILTER'];

 

  $filename = $_FILES["MOVIEIMAGE"]["name"];
  $tempname = $_FILES["MOVIEIMAGE"]["tmp_name"];
  $folder = "../xstreamimages/".$filename;
  move_uploaded_file($tempname,$folder);


  $f_n = $_FILES["MOVIEBANNER"]["name"];
  $tmp_n = $_FILES["MOVIEBANNER"]["tmp_name"];
  $banner = "../xstreamimages/".$f_n;
  move_uploaded_file($tmp_n,$banner);
  


  
  $file_DI = $_FILES["DIRECTORIMG"]["name"];
  $temp_DI = $_FILES["DIRECTORIMG"]["tmp_name"];
  $DI = "../xstreamimages/".$file_DI;
  move_uploaded_file($temp_DI,$DI);



  
  $file_MDI = $_FILES["MUSICDIRECTORIMG"]["name"];
  $temp_MDI = $_FILES["MUSICDIRECTORIMG"]["tmp_name"];
  $MDI = "../xstreamimages/".$file_MDI;
  move_uploaded_file($temp_MDI,$MDI);



  
  $file_oca = $_FILES["OC1IMG"]["name"];
  $tmp_oca = $_FILES["OC1IMG"]["tmp_name"];
  $oca = "../xstreamimages/".$file_oca;
  move_uploaded_file($tmp_oca,$oca);



  $file_ocb = $_FILES["OC2IMG"]["name"];
  $tmp_ocb = $_FILES["OC2IMG"]["tmp_name"];
  $ocb = "../xstreamimages/".$file_ocb;
  move_uploaded_file($tmp_ocb,$ocb);



  $file_occ = $_FILES["OC3IMG"]["name"];
  $tmp_occ = $_FILES["OC3IMG"]["tmp_name"];
  $occ = "../xstreamimages/".$file_occ;
  move_uploaded_file($tmp_occ,$occ);



  $file_ocd = $_FILES["OC4IMG"]["name"];
  $tmp_ocd = $_FILES["OC4IMG"]["tmp_name"];
  $ocd = "../xstreamimages/".$file_ocd;
  move_uploaded_file($tmp_ocd,$ocd);



  $file_oce = $_FILES["OC5IMG"]["name"];
  $tmp_oce = $_FILES["OC5IMG"]["tmp_name"];
  $oce = "../xstreamimages/".$file_oce;
  move_uploaded_file($tmp_oce,$oce);





  $file_name = $_FILES["MOVIEVIDEO"]["name"];
  $temp_name = $_FILES["MOVIEVIDEO"]["tmp_name"];
  $file_destination = "../xstreamvideos/".$file_name;
  move_uploaded_file($temp_name,$file_destination);

  $f_n = $_FILES["TRAILER"]["name"];
  $t_n = $_FILES["TRAILER"]["tmp_name"];
  $trailer = "../xstreamvideos/".$f_n;
  move_uploaded_file($t_n,$trailer);
   


$sql="INSERT INTO movie(MOVIEIMAGE,MOVIENAME,MOVIEVIDEO,MOVIEPARA,MOVIECATEGARY,MOVIEBANNER,DIRECTORIMG,DIRECTORNAME,MUSICDIRECTORIMG,MUSICDIRECTORNAME,GRADE,RELEACEDATE,MOVIETIME,MOVIETYPE,LANGUAGE,CASTS,TRAILER,OC1IMG,OC1NAME,OC2IMG,OC3IMG,OC2NAME,OC3NAME,OC4IMG,OC4NAME,OC5IMG,OC5NAME,FILTER) VALUES ('$folder','$MOVIENAME','$file_destination','$MOVIEPARA','$MOVIECATEGARY','$banner','$DI','$DIRECTORNAME','$MDI','$MUSICDIRECTORNAME','$GRADE','$DATE','$MOVIETIME','$MOVIETYPE','$LANGUAGE','$CASTS','$trailer','$oca','$OC1NAME','$ocb','$occ','$OC2NAME','$OC3NAME','$ocd','$OC4NAME','$oce','$OC5NAME','$FILTER')";
	
	$retval=mysqli_query($con,$sql);
    
}
?>


