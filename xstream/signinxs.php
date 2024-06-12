<?php
session_start();
?>

<html>
<head>
	<title>Xstream sign-in</title>


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
   #b2 a{
    text-decoration:none;
    color:white;
   }
   .loginpagefooter{
   	padding-left:40px;
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

		<label>Email Id</label><br>
		<input type="email" name="EMAILID"><br><br>
		<label>Password</label><br>
		<input type="password" name="PASSWORD"><br><br><br>
		<button name="signin" id="b1">Sign-in</button><br><br>

        </form>
		<p id="b2para">_____________New to XSTREAM?_____________</p>
		<button name="newsignin" id="b2"><a href ="Regxs.php">Create your Xstream Account</a></button><br><br>
		</div>

        <div class="loginpagefooter"><br><br>
        <span>Conditions of Use</span><span>Privacy Notice</span><span>Help</span><br><br>
        <p>© 2000-2021, Xstream Watcher.com, Team Techies Project.</p>
        </div>


	</div>
</body>
</html>
<?php

if(isset($_POST['signin']))
{


    $con= mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'xstream');
    $PD=date('d/m/Y');
    $FULLNAME=$_POST['FULLNAME'];
    $EMAILID=$_POST['EMAILID'];
    $MOBILENUMBER=$_POST['MOBILENUMBER'];
    $PASSWORD=$_POST['PASSWORD'];

    //$sql="SELECT x.*,p.* FROM xstreamsignintable x,payment p WHERE x.EMAILID = p.payernam && x.EMAILID ='$EMAILID' && x.PASSWORD='$PASSWORD' p.payername && p.expiredate < '$PD' '";
    $sql="SELECT * FROM xstreamsignintable WHERE EMAILID='$EMAILID' && PASSWORD='$PASSWORD'";
    
    
    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);
    
if ($num == 0){
     echo "<p>you are Not Registered!!!</p>";
     
}
else{
    $_SESSION['USERNAME']=$EMAILID;
    $_SESSION['MYNAME']=$FULLNAME;
    header("Location:movies.php");
}
}

?>
