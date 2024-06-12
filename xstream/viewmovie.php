<?php
session_start();
?>


<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');
$sql="SELECT * FROM movie WHERE MOVIEID={$_GET["id"]}";
$retval=mysqli_query($con,$sql);
$view = mysqli_fetch_assoc($retval)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style>
    body{
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




    .container{
     
    }
    .moviebanner{

    }
    .banner{
        
        
        border-radius: 10px;
      position: relative;
    }
    .details{
        color:white;

        margin: 190px 0 0 30px;
        position: absolute;
        top: 0;
    }
    .details #name{
        margin-right:100px;
        font-size: 50px;
        color:#0f79af; 
        animation-name:word;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-direction:alternate;
        animation-play-state: running; 
    }
   @keyframes word{
    0%{
        background-color:#0f79af;
        color:white;
        border-radius:10px;
 
    }
    25%{
       background-color:#0f79af;
        color:white;
        border-radius:10px;
      
    }
    50%{
        background-color:white;
        color:#0f79af;
        border-radius:10px;
    }
    75%{
        background-color:white;
        color:black;
        border-radius:10px;
    }
    100%{
        color:#0f79af;

    }
}
    .details #others{
        font-size: 25px;
        font-family: Footlight MT Light;
    }
    .details #para{
        font-size: 25px;
        font-family: Footlight MT Light;
    }
    .trailer{
        margin-top:30px;
        border-radius:30px;
        background-color:white;
        padding:10px;
    }
    .trailer #trailertitle{
        color:white;
        font-size:30px;
        font-family:Algerian;
        padding:10px;
        width:200px;
        text-align:center;
        background-color:#0f79af;
        border-bottom-left-radius:30px;
        border-top-right-radius:30px;

    }
    .trailer video{
        margin:10px 0px 10px 30px;
    }
    .trailer video:hover{
        box-shadow:3px 3px 30px #0f79af;
    }
   .buttons{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
    width:450px;
    margin:100px 0 0 0;
   }
   .buttons a{
    text-decoration:none;
    color:white;
   }
   .buttons a:hover{
    background-color:white;
    color:#0f79af;
    border-radius:10px;
    padding:5px;
   }

   .buttons .wmbutton{
    display:flex;
    flex-wrap:wrap;
   }
   .button .wmbutton:hover{
     background-color:white;
    color:#0f79af;
    border-radius:10px;
    padding:5px;
   }
   .wmbutton #playname{
    margin-left:10px;
    align-self:center;
   }
   .buttons .wlbutton{
    display:flex;
    flex-wrap:wrap;
   }
   .wlbutton #plus{
    font-size:70px;
    color:#0f79af;
   }
   .wlbutton #wl{
    margin-left: 10px;
    align-self:center;
   }
   .wlbutton button{
    display:flex;
    flex-wrap:wrap;
    background:transparent;
    border:none; 
    color:white;
   }
   .wlbutton button:hover{
       background-color:white;
    color:#0f79af;
    border-radius:10px;
    padding:5px;
   }




    .aboutmovie{
        margin-top:30px;
       background-color:white;
       padding:10px;
       border-radius:30px;
    }
    .aboutmovie #aboutmovietitle{
        color:white;
        font-size:30px;
        font-family:Algerian;
        text-align:center;
        width:230px;
        padding:10px;
        background-color:#0f79af;
        border-bottom-left-radius:30px;
        border-top-right-radius:30px;
    }
    .aboutmovie #abimage{
        width:170px;
        height:230px;
        border-radius:40px;
        margin:20px 30% 0 45%;
    }
    .aboutmovie #aboutmoviepara{
        color:black;
        font-size:20px;
        lighting-color:green;
        font-family:Footlight MT Light;
        word-spacing:2px;
        text-align:center;
        padding:20px;
    }
    .aboutmovie p:hover{
        text-shadow:3px 3px 5px #0f79af;
    }







    .casts{
        margin-top:30px;
        border-radius:30px;
        padding:10px;
        background-color:white;
    }
    .casts #caststitle{
         color:white;
        font-size:30px;
        font-family:Algerian;
        text-align:center;
        width:230px;
        padding:10px;
        background-color:#0f79af;
        border-bottom-left-radius:30px;
        border-top-right-radius:30px;
    }
    .castsdetails{
        margin: 0 230px 0 230px;
        font-family: Footlight MT Light;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .castsdetails .cd1{
        font-family: Footlight MT Light;
        text-align: center;
        margin: 20px 50px 20px 50px;
        padding:10px;
    }
    .castsdetails .cd1:hover{
        border-radius:10px;
        box-shadow:-3px 3px 10px skyblue;
    }
    .castsdetails img{
        width: 130px;
        height: 130px;
        border-radius: 50%;
    }
    .castsdetails img:hover{
       cursor:pointer;
       border-radius:10px;
    }
    .castsdetails #ocn{
        color:#0f79af;
        text-align: center;
        font-family: Footlight MT Light;
    }
    .castsdetails .cd1 #dt{
        border-radius:10px;
        margin-left:20px;
        margin-right:20px;
        padding:10px;
        background-color:gold;
        color:white;
        font-family: Footlight MT Light;
    }
    .castsdetails .cd1 #mdt{
        border-radius:10px;
        margin-left:20px;
        margin-right:20px;
        padding:10px;
        background-color:gold;
        color:white;
        font-family: Footlight MT Light;
    }
    .footer{
     background-color:#0f79af;
     padding:5px;
     margin:70px 0px 0px 0px;
     margin-bottom:0px;
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

    <?php
    echo "
<div class='container'>



     <div class='moviebanner'>

     <img src='".$view['MOVIEBANNER']."' height='600px' width='100%' class='banner'>

     <div class='details'>
     <p id='name'><strong>{$view["MOVIENAME"]}</strong></p>
     <p id='others'>{$view["MOVIETIME"]} . {$view["RELEACEDATE"]} . {$view["MOVIETYPE"]} . {$view["GRADE"]} . {$view["LANGUAGE"]}</p>
     <p id='para'>{$view["MOVIEPARA"]}</p>


<div class='buttons'>

<a href='watchmovie.php?id=".$view['MOVIEID']."'>
     <div class='wmbutton'>
     <img src='../play1.png' alt='NO_IMAGE' height='50px' width='50px' id='playlogo'>
     <p id='playname'>Watch Movie</p>
     </div></a>
 
   
     <form method='POST' class='wlbutton'>
     <input type='hidden' name='wlusn' value='{$_SESSION['USERNAME']}'>
     <input type='hidden' name='wlmovieid' value='{$view['MOVIEID']}'>   
    <button name='wlwl'> <img src='../plus1.png' alt='NO_IMAGE' height='50px' width='50px' id='playlogo'>
     <p id='wl'>Watch Later</p></button>
     </form>

</div>



     </div>

     </div>


     <div class='trailer'>
     <p id='trailertitle'>Trailer</p>
     <video controls height='280px' width='500px'><source src='".$view['TRAILER']."' type='video/mp4'></video>
     </div>



    <div class='aboutmovie'>
    <p id='aboutmovietitle'>About Movie</p>
    <img src='".$view['MOVIEIMAGE']."' id='abimage'>
    <p id='aboutmoviepara'>{$view['CASTS']}</p>
    </div>


    <div class='casts'>

    <p id='caststitle'>CASTS</p>

    <div class='castsdetails'>
    <div class='cd1'>
    <img src='".$view['OC1IMG']."' id='oci'>
    <p id='ocn'>{$view['OC1NAME']}</p>
    </div>
    <div class='cd1'>
    <img src='".$view['OC2IMG']."' id='oci'>
    <p id='ocn'>{$view['OC2NAME']}</p>
    </div>
    <div class='cd1'>
    <img src='".$view['OC3IMG']."' id='oci'>
    <p id='ocn'>{$view['OC3NAME']}</p>
    </div>
    <div class='cd1'>
    <img src='".$view['OC4IMG']."' id='oci'>
    <p id='ocn'>{$view['OC4NAME']}</p>
    </div>
    <div class='cd1'>
    <img src='".$view['OC5IMG']."' id='oci'>
    <p id='ocn'>{$view['OC5NAME']}</p>
    </div>
    <div class='cd1'>
    <img src='".$view['DIRECTORIMG']."' id='oci'>
    <p id='dt'>Director</p>
    <p id='ocn'>{$view['DIRECTORNAME']}</p>
    </div>
    <div class='cd1'>
    <img src='".$view['MUSICDIRECTORIMG']."' id='oc1'>
    <p id='mdt'>Music Director</p>
    <p id='ocn'>{$view['MUSICDIRECTORNAME']}</p>
    </div>
    </div>


    </div>



     </div>";

?>
<div class="footer">
     <p id="foot">© 2019-2022, xstream watcher , Team techies project.
</div>
</body>
</html>

<?php

if(isset($_POST["wlwl"])) {

$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'xstream');

$wun=$_POST['wlusn'];
$mid=$_POST['wlmovieid'];

$sql="INSERT INTO watchlater(USNAME,MID) VALUES ('$wun','$mid')";
    $retval=mysqli_query($con,$sql);
    
if ($retval) {
    echo "success";
}
}
?>