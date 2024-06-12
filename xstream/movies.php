<?php
session_start();
?>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie";
$retval=mysqli_query($con,$sql);
$total=mysqli_num_rows($retval);
?>
<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie WHERE FILTER='Trending'";
$Trending=mysqli_query($con,$sql);
$Trendingtotal=mysqli_num_rows($Trending);
?>

<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie WHERE FILTER='showcase'";
$Showcase=mysqli_query($con,$sql);
$Showcasetotal=mysqli_num_rows($Showcase);
?>

<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie WHERE FILTER='movie'";
$othermovie=mysqli_query($con,$sql);
$othertotal=mysqli_num_rows($othermovie);
?>



<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT m.*,w.* FROM movie m,watchlater w WHERE  m.MOVIEID = w.MID && USNAME='{$_SESSION['USERNAME']}'";
$wlater=mysqli_query($con,$sql);
$wlatertotal=mysqli_num_rows($othermovie);
?>


<?php


if(isset($_POST['submit']))
{
$conn= mysqli_connect('localhost','root','root');
mysqli_select_db($conn,'xstream');

$sn=$_POST['searchname'];

$sqll="SELECT * FROM movie WHERE MOVIENAME='$sn'";

$search=mysqli_query($conn,$sqll);
if ($search) {
 echo "<script>document.getElementById('slides').style.display='none';</script>";
    
}
}
?>



<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>MOVIESPAGE</title>
</head>
<style>
     body{
       background-color:black;
     }
     #all{
       
     }
     #all .trending{
          margin-top:50px;
          margin-bottom:50px;
     }
     .trending #trendingtitle{
          color:white;
          font-size:25px;
          margin-left:30px;
     }
     .trend{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          margin:20px;
          background-color:black;
     }
     .trend .products{
         margin:20px 30px 20px 30px; 
         
     }
     .trend .products:hover{
          transform: scale(1.1);
          transition: 0.5s;
     }
     .trend .products img{
          width: 230px;
          height: 300px;
     }
     .trend .products img:hover{
          box-shadow:1px 1px 10px 2px #0f79af;
     }







    #all .showcase{
          margin-top:50px;
          margin-bottom:50px;
     }
     .showcase #showcasetitle{
          color:white;
          font-size:25px;
          margin-left:30px;
     }
     .sc{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          margin:20px;
          background-color:black;
     }
     .sc .products{
         margin:20px 30px 20px 30px; 
         
     }
     .sc .products:hover{
          transform: scale(1.1);
          transition: 0.5s;
     }
     .sc .products img{
          width: 400px;
          height: 250px;
          border-radius:20px;
     }
     .sc .products img:hover{
          box-shadow:1px 1px 10px 2px #0f79af;
     }







   #all .othermovie{
          margin-top:50px;
          margin-bottom:50px;
     }
     .othermovie #othermovietitle{
          color:white;
          font-size:25px;
          margin-left:30px;
     }
     .om{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          margin:20px;
          background-color:black;
     }
     .om .products{
         margin:20px 30px 20px 30px; 
         
     }
     .om .products:hover{
          transform: scale(1.1);
          transition: 0.5s;
     }
     .om .products img{
          width: 230px;
          height: 290px;
          border-radius:20px;
     }
     .om .products img:hover{
          box-shadow:1px 1px 10px 2px #0f79af;
     }






.search{
          margin-top:50px;
          margin-bottom:50px;
     }
.search #searchtitle{
          color:white;
          font-size:25px;
          margin-left:30px;
     }         

     }
     #search{
          
     }
     .ser{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          margin:20px;
          background-color:black;
     }
     .ser .products{
         margin:20px 30px 20px 30px; 
         
     }
     .ser .products:hover{
          transform: scale(1.1);
          transition: 0.5s;
     }
     .ser .products img{
          width: 230px;
          height: 290px;
          border-radius:20px;
     }
     .ser .products img:hover{
          box-shadow:1px 1px 10px 2px #0f79af;
     }




     

     #all .wl{
          margin-top:50px;
          margin-bottom:50px;
     }
     .wl #wltitle{
          color:white;
          font-size:25px;
          margin-left:30px;
     }
     .watchlater{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          margin:20px;
          background-color:black;
     }
     .watchlater .products{
         margin:20px 30px 20px 30px; 
         
     }
     .watchlater .products:hover{
          transform: scale(1.1);
          transition: 0.5s;
     }
     .watchlater .products img{
          width: 230px;
          height: 290px;
          border-radius:20px;
     }
     .watchlater .products img:hover{
          box-shadow:1px 1px 10px 2px #0f79af;
     }








     .head{
          display:flex;
          flex-wrap:wrap;
          justify-content:space-between;
          background-color:black;
     }
     .h1{

     }
     .h1 .logo{
          width:300px;
     }
     .h2{
        display:flex;
     }
     .h2 input{
          width:270px;
          height:30px;
          align-self:center;
          border-radius:10px;
          border:1px solid #0f79af;
     }
     .h2 .searchbutton{
          background-color:#0f79af;
           width:70px;
          align-self:center;
     }
     .h3{

     }
     .user{
           display:flex;
           flex-direction:row;
           width:200px;
     }
     .user .userlogo{
          width:30px;
          height:30px;
          align-self:center;
     }
     .user #username{
          width:150px;
          align-self:center;
          margin-left:10px;
          color:white;
     }
     #username a{
          text-decoration:none;
          color:white;
     }
     .h3 .signout{
          margin-left:100px;
     }
     .signout a{
          text-decoration:none;
          color:white;
          padding:5px;
          border-radius:5px;
          outline:1px solid white;
          align-self:center;
     }
     .signout a:hover{
          color:black;
          background-color:red;
          outline:1px solid red;
     }
     #slides{
          margin:10px 20px 30px 20px;
          height:65vh;
          border-radius:20px;
          background-color:gray;
          background-image:url(../enemymb.jpg);
  background-repeat: none;
  background-size:cover;
  background-position:cover;
  animation-name: sslide;
  animation-duration: 20s;
  animation-delay: 3s;
  animation-timing-function:ease-in-out;
  animation-iteration-count: infinite;
  animation-play-state: running;
     }
     @keyframes sslide{
     0%{
          background-image: url(../mastermb.jpg);
          background-size: cover;
     }
     25%{
          background-image: url(../mankathamb.jpg);
          background-size: cover;
          }
     50%{
          background-image: url(../bachelormb.jpg);
          background-size: cover;
     }
     75%{
          background-image: url(../marakkayarmbb.jpg);
          background-size: cover;
     }
     100%{
          background-image: url(../methagumb.jpg);
          background-size: cover;
     }

}
     .footer{
     background-color:#0f79af;
     padding:5px;
}
.footer #foot{
     text-align: center;
     color: white;
     font-family: Footlight MT Light;
}

</style>
<body>
     
<div class="head">

   <div class="h1">
         <img src="../xsmlogo.jpeg" alt="NO_IMAGE" class="logo">
   </div>
   <form method="POST" class="h2">
         <input type="text" name="searchname" placeholder="search">
        <input type="submit" name="submit" onclick="search()" class="searchbutton">
   </form>
   <div class="h3">  
   <div class="signout">
           <p><a href ="signinxs.php">Signout</a></p>
     </div> 
     <div class="user">
          <img src="../user1.png" alt="NO_IMAGE" class="userlogo">
          <p id="username"><?php echo " ".$_SESSION['USERNAME'];?></p>
     </div>
   </div>
         
        
</div>

<div id="all">
<div id="slides">
     
</div>





<div class="search" id="search">

<p id="searchtitle">Searched</p>

<div class="ser">

<?php
while($sr = mysqli_fetch_assoc($search)){
echo "

     <a href='viewmovie.php?id=".$sr['MOVIEID']."'>
      <div class='products'>
     <img src='".$sr['MOVIEIMAGE']."' id='mimage'>
     </div></a>
     
     ";
}
?>
</div>
</div>









<div class="wl" id="wl">
<p id="wltitle">Watch Later</p>

<div class="watchlater">

<?php
while($w = mysqli_fetch_assoc($wlater)){
echo "

     <a href='viewmovie.php?id=".$w['MOVIEID']."'>
      <div class='products'>
     <img src='".$w['MOVIEIMAGE']."' id='mimage'>
     </div></a>
     
     ";
}
?>
</div>
</div>









<div class="trending" id="trendding">
<p id="trendingtitle">Trending</p>

<div class="trend">

<?php
while($T = mysqli_fetch_assoc($Trending)){
echo "

     <a href='viewmovie.php?id=".$T['MOVIEID']."'>
      <div class='products'>
     <img src='".$T['MOVIEIMAGE']."' id='mimage'>
     </div></a>
     
     ";
}
?>
</div>
</div>






<div class="showcase">
<p id="showcasetitle">Show Case</p>

<div class="sc">

<?php
while($sc = mysqli_fetch_assoc($Showcase)){
echo "

     <a href='viewmovie.php?id=".$sc['MOVIEID']."'>
      <div class='products'>
     <img src='".$sc['MOVIEIMAGE']."' id='mimage'>
     </div></a>
     
     ";
}
?>
</div>
</div>






<div class="othermovie">
<p id="othermovietitle">Other Movies</p>

<div class="om">

<?php
while($om = mysqli_fetch_assoc($othermovie)){
echo "

     <a href='viewmovie.php?id=".$om['MOVIEID']."'>
      <div class='products'>
     <img src='".$om['MOVIEIMAGE']."' id='mimage'>
     </div></a>
     
     ";
}
?>
</div>
</div>

</div>










<div class="footer">
     <p id="foot">© 2019-2022, xstream watcher , Team techies project.
</div>
</body> 

</html>

