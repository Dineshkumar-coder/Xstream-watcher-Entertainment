<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Register xstream</title>

</head>

<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family:Yu Gothic UI Light;
	}
   .container{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      justify-content: center;
      align-content: center;

   }
   img{
   	width: 250px;
   	text-align: center;
   	margin:20px 0 20px 40px;
   }

   .logincontent{    
   box-shadow: -1px 1px 5px dimgray;
   padding: 15px;
   }

   .logincontent h1{
    
   }
   input{
     width: 300px;
     padding: 3px;
   }
   input:hover{
   	box-shadow: -1px 1px 5px skyblue;
   	border: 1px solid skyblue;
   }
   button{
   	background-color:#24c3fb;
   	color: black;
    font-weight: bold;
    padding: 3px 7px 3px 7px;
    border-radius: 5px;
    width: 300px;
    font-family: Footlight MT Light;
   }
   button:hover{
   	color: white;
   }

   #b2para{
       padding-bottom: 7px;
    
   }
   #b2{
    	background-color: darkgray;
    	border-radius: 5px;
   }   
   .loginpagefooter{
   	padding-left: 40px;
   	font-size: 12px;


   }
   .loginpagefooter span{
   	color:#24c3fb;
   	font-weight: bold;
   	padding: 10px;
   }
   .loginpagefooter p{
   	font-size: 11px;
   	font-weight: bold;
   }
   label{
   	font-weight: bold;
   	font-family: Footlight MT Light;
   }

</style>

<body>
	<div class="container">





		<img src="../xstream bs.png" alt="NO_IMAGE" class="mwbbimage">

		<div class="logincontent">
		<h1>Sign in</h1><br>
        <form method="POST">
		<label>FULLNAME:</label><br>
		<input type="text" name="FULLNAME"><br><br>
		<label>EMAILID:</label><br>
		<input type="email" name="EMAILID"><br><br>
        <label>MOBILE NUMBER:</label><br>
        <input type="number" name="MOBILENUMBER"><br><br>
        <label>PASSWORD:</label><br>
        <input type="password" name="PASSWORD"><br><br>
		<button name="register" id="b1">CREATE ACCOUNT</button><br><br>
        </form>
		</div>

        <div class="loginpagefooter"><br><br>
        <span>Conditions of Use</span><span>Privacy Notice</span><span>Help</span><br><br>
        <p>© 2000-2021, Xstream Watcher.com, Team Techies Project.</p>
            </div>




	</div>
</body>
</html>
<?php

if(isset($_POST['register']))
{

    $con= mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'xstream');

    $FULLNAME=$_POST['FULLNAME'];
    $EMAILID=$_POST['EMAILID'];
    $MOBILENUMBER=$_POST['MOBILENUMBER'];
    $PASSWORD=$_POST['PASSWORD'];



    $sql="INSERT INTO xstreamsignintable(FULLNAME,EMAILID,MOBILENUMBER,PASSWORD) VALUES ('$FULLNAME','$EMAILID','$MOBILENUMBER','$PASSWORD')";
    
    $retval=mysqli_query($con,$sql);

    if($retval){
    $_SESSION['USERNAME']=$EMAILID;
    $_SESSION['MYNAME']=$FULLNAME;
    header("Location:xspayment.php");
}
    
}

?>