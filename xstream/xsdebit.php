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
          margin-left:100px;
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
        margin:10px 35% 0px 35%;
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
     .payment input{
       padding:5px;
     }
     .payment .pay1{
        display:flex;
        flex-wrap:wrap;
        
     }
     .payment .pay1 #cvv{
        margin-left:30px;
     }
     .payment .pay1 input{
        width:60px;
        margin:15px 0px 15px 0px;
     }
     .payment #paynow{
        margin:30px 0px 10px 0px;
        text-align:center;
        background-color:#0f79af;
        text-decoration:none;
        color:white;
        padding:10px;
     }

     .payhead{
        padding:10px;
        box-shadow:-1px 1px 10px lightgray;
        margin:100px 35% 0px 35%;
        width:450px;
     }
     .payhead span{
        color:white;
        background-color:limegreen;
        border-radius:10px;
        padding:5px;
     }
     .payhead p{
        font-size:20px;
     }





     .sall{
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-content:center;
        padding:10px;
        box-shadow:-1px 1px 10px lightgray;
        margin:150px 35% 0px 37%;
        width:400px;
     }
     .success{
        display:flex;
        flex-wrap:wrap;
        flex-direction:row;
        align-self:center;
     }
     .successimg{
        width:100px;
        height:100px;
     }
     #successname{
        color:#00cd58;
        align-self:center;
        font-size:25px;
        margin-left:10px;
     }
     #signin a{
       margin:100px 0px 10px 250px;
       text-decoration:none;
       color:white;
       background-color:#00cd58;
       padding:5px;
       border-radius:10px;

     }
</style>
<body>
<div class="head" id="head">

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
<div class="payhead" id="payhead">
    <p id="amount"><span>₹399</span> is to Pay</p>
</div>
<div class="body" id="body">
<p class="paymenttitle">Debit or Credit Payment</p>
<form method="POST" class="payment">
    <input type="text" name="cardnumber" placeholder="Card Number">
    <div class="pay1">
        <input type="text" name="carded" placeholder="MM/YY" id="my">
        <input type="text" name="carded" placeholder="CVV" id="cvv">
    </div>
    <input type="text" name="holdername" placeholder="Card holder name" id="holder">
    <button name='pay' id="paynow">Pay Now</button>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST['pay']))
{

    $con= mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'xstream');
    
    
    $PTYP='Debit or Credit';
    $PINO=$_POST['cardnumber'];
    $A='399';
    $PD=date('d/m/Y');
    date_default_timezone_set('Asia/kolkata');
    $PT=date('h:i:s A');
    $expiredate=date("d-m-Y",strtotime("1 year")); 



    $sql="INSERT INTO payment(payername,paymenttype,paymentidno,amount,paymentdate,paymenttime,expiredate) VALUES ('{$_SESSION['USERNAME']}','$PTYP','$PINO','$A','$PD','$PT','$expiredate')";
    
    $retval=mysqli_query($con,$sql);

if($retval){
    echo "<script>document.getElementById('head').style.display='none';</script>";
    echo "<script>document.getElementById('payhead').style.display='none';</script>";
    echo "<script>document.getElementById('body').style.display='none';</script>";
    echo "<div class='sall'>
          <div class='success'>
          <img src='../successgif.gif' class='successimg'>
          <p id='successname'> Successfully Payed</p>
          </div>
          <p id='signin'><a href='signinxs.php'>Sign In</a></p>
          </div>
    ";
}
else{
    echo "<p id='Error'>Error</p>";
}

    
}

?>