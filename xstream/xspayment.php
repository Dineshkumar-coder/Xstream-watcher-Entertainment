<?php
session_start();
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
        padding:0;
        box-sizing:border-box;
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
     .h3 .name{
          margin-left:90px;
          color:white;
     }
     .name p{
        color:white;
     }
     .body{
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-content:center;
        padding:10px;
        box-shadow:-1px 1px 10px lightgray;
        margin:100px 35% 0px 35%;
        width:450px;
     }
     .paymenttitle{
         color:#0f79af;
         font-size:30px;
         font-weight:1000;
         padding:10px 10px 20px 1px;
     }
     .payment{
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        margin-bottom:10px;
     }
     .payment a{
        text-decoration:none;
        color:black;
        background-color:lightgray;
        padding:10px;
        width:400px;
     }
     .payment a:hover{
        background-color:black;
        color:#0f79af;
        box-shadow:-1px 1px 10px black;
        transition-duration:1s;
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
   <div class="name">
           <p><?php echo "Hi, ".$_SESSION['MYNAME'];?></p>
     </div> 
     <div class="user">
          <img src="../user1.png" alt="NO_IMAGE" class="userlogo">
          <p id="username"><?php echo " ".$_SESSION['USERNAME'];?></p>
     </div>
   </div>

</div>

<div class="body">
<p class="paymenttitle">Payment Gate Way</p>
<div class="payment">
    <a href="xsupi.php" id="upi">UPI Payment</a><br>
    <a href="xsdebit.php" id="dc">Debit or Credit Payment</a>
</div>
</div>
</body>
</html>