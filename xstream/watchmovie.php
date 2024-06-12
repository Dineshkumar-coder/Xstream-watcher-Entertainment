<?php
session_start();
?>


<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie WHERE MOVIEID={$_GET["id"]}";
$retval=mysqli_query($con,$sql);
$watch = mysqli_fetch_assoc($retval)
?>
<?php
$conn= mysqli_connect('localhost','root','root');
mysqli_select_db($conn,'xstream');
$sqll="SELECT * FROM movie limit 5";
$retvall=mysqli_query($conn,$sqll);
$total=mysqli_num_rows($retvall);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style>
    *{
    
        margin:0;
        background-color:black;

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
        visibility:hidden;
     }
     .h2 input{
          width:270px;
          height:30px;
          align-self:center;
          border-radius:10px;
          border:1px solid #0f79af;
     }
     .h2 .searchbutton{
          width:30px;
          height:30px;
          border:1px solid white;
          align-self:center;
     }
     .h3{
          display:flex;
          flex-direction:column;
          justify-content:space-between;
          margin-top:20px;
          margin-bottom:10px;
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
     .video{
       background-color:black;
       display:flex;
       flex-wrap:wrap;
       flex-direction:column;
     }
     .video video{
        margin-top:30px;
        align-self:center;
        height:480px; 
        width:1450px;
        box-shadow:-1px 1px 10px #0f79af;
     }
     .video .videocontent{
       margin-left:40px;
       margin-top:30px;
     }
     .videocontent span{
        color:#0f79af;
     }
     .video p{
        font-size:20px;
        margin-bottom:10px;
        color:whitesmoke;
     }
     .videocontent #name{
        font-size:25px;
        color:white;
     }
     .videocontent #others{
        font-family:Footlight MT Light;
     }
     .videocontent #para{
        font-family:Footlight MT Light;
     }
     .morelikedmovies{
         background-color:black;
         margin-top:100px;
         margin-bottom:100px;
         overflow-x:hidden;
     }
     .con1{
          display: flex;
          flex-wrap: wrap;
          margin:20px;
          justify-content: space-around;
          background-color:black;
     }
     .morelikedmovies #mlm{
        color:#0f79af;
        font-size:30px;
        font-weight:600;
        font-family:Footlight MT Light;
        margin-left:40px;
        margin-bottom:30px;
     }
     .products{
         margin:20px 30px 20px 30px; 
         
     }
     .products:hover{
          transform: scale(1.1);
          transition: 0.5s;
     }
     .products img{
          width: 200px;
          height: 270px;
          border-radius:10px;
     }
     .footer{
     background-color:#0f79af;
     padding:10px;
}
.footer #foot{
     text-align: center;
     color: white;
     background-color:#0f79af;
     font-family: Footlight MT Light;
}
</style>
<body>
<div class="head">

   <div class="h1">
         <img src="../xsmlogo.jpeg" alt="NO_IMAGE" class="logo">
   </div>
   <div class="h2">
         <input type="text" name="searchname">
         <img src="../search w.png" alt="NO_IMAGE" class="searchbutton">
   </div>
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




<div class="video">
    <video controls><?php echo "<source src='".$watch['MOVIEVIDEO']."' type='video/mp4'>";?></video>
<div class="videocontent">
    <p id='name'><strong><?php echo "{$watch["MOVIENAME"]}"; ?></strong></p>
    <p id='others'><?php echo "<span>{$watch["MOVIETYPE"]}</span> . <span>{$watch["LANGUAGE"]}</span> . {$watch["MOVIETIME"]} . {$watch["RELEACEDATE"]} . {$watch["GRADE"]}";?></p>
    <p id='para'><?php echo "{$watch["MOVIEPARA"]}";?></p>
</div>
</div>

<div class="morelikedmovies">

    <p id="mlm"><i>More liked movies...</i></p>
    <div class="con1">
    <?php
while($result = mysqli_fetch_assoc($retvall)){
echo "
     <a href='viewmovie.php?id=".$result['MOVIEID']."'>
      <div class='products'>
     <img src='".$result['MOVIEIMAGE']."' id='mimage'>
     </div></a>
     
     ";
}
?>
</div>
</div>


<div class="footer">
     <p id="foot">© 2019-2022, xstream watcher , Team techies project.</p>
</div>
</body>
</html>
