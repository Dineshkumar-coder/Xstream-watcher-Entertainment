<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit</title>
</head>
<body>
  <form method="GET" id="form">

    <div class="i1">
    <lable>MOVIE IMAGE</lable><br>
    <img src="<?php echo $_GET['MI']; ?>" width='200px' height='200px'>
    </div>
    <br><br>
  
    <div class="i1">
    <lable>MOVIE VIDEO</lable><br>
    <video controls height='200px' width='200px'><source src="<?php echo $_GET['MV']; ?>" type='video/mp4'></video>
      </div>
    <br><br>

    <div class="i1">
    <lable>MOVIE NAME</lable><br>
    <input type="text" name="EMN" required="" placeholder="MovieName" value="<?php echo $_GET['MN']; ?>">
      </div>
    <br><br>

    <div class="i1">
    <lable>MOVIE DESP</lable><br>
    <input type="text" name="EMP" required="" placeholder="MoviePara" value="<?php echo $_GET['MP']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>MOVIE CATEGORY</lable><br>
    <input type="text" name="EMC" required="" placeholder="MovieCategory" value="<?php echo $_GET['MC']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>MOVIE BANNER</lable><br>
    <img src="<?php echo $_GET['MB']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>GRADE</lable><br>
    <input type="text" name="EG" required="" placeholder="Grade" value="<?php echo $_GET['G']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>RELEACE DATE</lable><br>
    <input type="text" name="ERD" required="" placeholder="ReleaceDate" value="<?php echo $_GET['RD']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>MOVIE TIME</lable><br>
    <input type="text" name="EMT" required="" placeholder="MovieTime" value="<?php echo $_GET['MT']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>MOVIE TYPE</lable><br>
    <input type="text" name="EMTYP" required="" placeholder="MovieType" value="<?php echo $_GET['MTYP']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>LANGUAGE</lable><br>
    <input type="text" name="EL" required="" placeholder="Language" value="<?php echo $_GET['L']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST IMG 1</lable><br>
    <img src="<?php echo $_GET['OI1']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST NAME 1</lable><br>
    <input type="text" name="EON1" required="" placeholder="OtherName1" value="<?php echo $_GET['ON1']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST IMG 2</lable><br>
    <img src="<?php echo $_GET['OI2']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST NAME 2</lable><br>
    <input type="text" name="EON2" required="" placeholder="OtherName2" value="<?php echo $_GET['ON2']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST IMG 3</lable><br>
    <img src="<?php echo $_GET['OI3']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST NAME 3</lable><br>
    <input type="text" name="EON3" required="" placeholder="OtherName3" value="<?php echo $_GET['ON3']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST IMG 4</lable><br>
    <img src="<?php echo $_GET['OI4']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST NAME 4</lable><br>
    <input type="text" name="EON4" required="" placeholder="OtherName4" value="<?php echo $_GET['ON4']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST IMG 5</lable><br>
    <img src="<?php echo $_GET['OI5']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>CAST NAME 5</lable><br>
    <input type="text" name="EON5" required="" placeholder="OtherName5" value="<?php echo $_GET['ON5']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>DIRECTOR IMG</lable><br>
    <img src="<?php echo $_GET['DI']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>DIRECTOR NAME</lable><br>
    <input type="text" name="EDN" required="" placeholder="DIRECTORNAME" value="<?php echo $_GET['DN']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>MUSIC DIRECTOR IMG</lable><br>
    <img src="<?php echo $_GET['MDI']; ?>" width='200px' height='200px'>
    </div>
    <br><br>

    <div class="i1">
    <lable>MUSIC DIRECTOR NAME</lable><br>
    <input type="text" name="EMDN" required="" placeholder="MUSIC DIRECTOR NAME" value="<?php echo $_GET['MDN']; ?>">
    </div>
    <br><br>

    <div class="i1">
    <lable>OTHER CASTS</lable><br>
    <input type="text" name="EC" placeholder="OTHER CASTS" value="<?php echo $_GET['C']; ?>"> 
    </div>
    <br><br>

    <div class="i1">
    <lable>FILTER</lable><br>
    <input type="text" name="EF" placeholder="FILTER" value="<?php echo $_GET['F']; ?>"> 
    </div>
    <br><br>


    <div class="i1">
    <lable>TRAILER</lable><br>
    <video controls height='200px' width='200px'><source src="<?php echo $_GET['T']; ?>" type='video/mp4'></video>
    </div>
    <br><br>

    <div class="i1">
    <input type="submit" name="submit" value="UPDATE">
    </div>
    <br><br>

</form>
<?php
if(isset($_GET['submit']))
{

$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');

  $mname=$_GET['EMN'];
  $mpara=$_GET['EMP']; 
  $mcategory=$_GET['EMC'];
  $mgrade=$_GET['EG'];
  $mdate=$_GET['ERD'];
  $mtime=$_GET['EMT'];
  $mtype=$_GET['EMTYP'];
  $mlanguage=$_GET['EL'];
  $ocname1=$_GET['EON1'];
  $ocname2=$_GET['EON2'];
  $ocname3=$_GET['EON3'];
  $ocname4=$_GET['EON4'];
  $ocname5=$_GET['EON5'];
  $mdirectorname=$_GET['EDN'];
  $mmusicdirectorname=$_GET['EMDN'];
  $casts=$_GET['EC'];
  $filter=$_GET['EF'];

$sql = "UPDATE movie SET MOVIENAME='$mname',MOVIEPARA='$mpara',MOVIECATEGARY='$mcategory',GRADE='$mgrade',RELEACEDATE='$mdate',MOVIETIME='$mtime',MOVIETYPE='$mtype',LANGUAGE='$mlanguage',OC1NAME='$ocname1',OC2NAME='$ocname2',OC3NAME='$ocname3',OC4NAME='$ocname4',OC5NAME='$ocname5',DIRECTORNAME='$mdirectorname',MUSICDIRECTORNAME='$mmusicdirectorname',CASTS='$casts',FILTER='$filter' WHERE MOVIENAME='$mname'";

$data = mysqli_query($con,$sql);


if($data)
{
  echo "<font color='green'>Record updated successfully <a href='viewxstreamdb.php'>view</a>";
  echo "<script>document.getElementById('form').style.display='none'
    ;</script> ";
}
else{
  echo "<font color='red'>Record Not updated";
   }

}

else{
  echo "not working";
}
?>


</body>
</html>