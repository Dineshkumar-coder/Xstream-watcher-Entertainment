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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Products</title>
</head>
<style>
    body{
        background-color:white;
    }
    .all{
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        background-color:white;
    }
.container{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    background:#0f79af;
    padding:10px;
    height: 100vh;
    border-radius:10px;
    position:sticky;
    top:10px;
    }
.companynl{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    width:300px;
}
.companynl .logo{
    width:300px;
    height:130px;
}
.companynl #title{
    align-self: center;
       margin: 0 0 0 5px;
       font-family: Monotype Corsiva;
       font-weight: bold;
       font-size: 20px;
    }

.links{
    
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    margin-top:60px;

}
.links p{
  padding:10px 0 10px 0;
  text-align: center;
  box-shadow:0px 1px 1px white;
}
.links p:hover{
   background-color:white;
   color:black;
   box-shadow:-1px 1px 1px lightgray;
   transition-duration:1s;
}
.links a{
   text-decoration:none;
   color:white;
   font-size:20px;
    font-family:Cambria Math;
   padding:10px;
}
.links a:hover{
    color:black;
}
.contents{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
}
.user{
     display:flex;
     flex-direction:row;
     flex-wrap: wrap;
     align-self:flex-start;
     
}
.user #userimg{
        width: 30px;
        height: 30px;
        margin:5px;
        align-self:center;

    }
.user #username{
        padding: 5px;
    }
    .user #ptotal{
        padding:20px 10px 20px 10px;
        background-color:gray;
        border-radius:10px;
    }
table{
        background-color:white;
        text-align:center;
        margin:0 50px 0 50px;
        border-radius:10px;
        
    }
#s{
    }
table th{
  background-color:black;
  color:white;
  padding:10px;
}
table td{
    padding:10px;
    outline:0.1px solid lightgray;
}
#ptotal{
        align-self:center;
        margin:0 50px 0 50px;
        font-family:Microsoft JhengHei;
        font-weight: 1000;
    }
.data{
    display:flex;
    flex-wrap:wrap;
    flex-direction:column;
}
form{
    margin:10px 0 10px 50px;
}
form input[type='submit']{
    background-color:green;
    color:white;
}
.nav{
    margin:10px 0 30px 0;
}
ul{
    display:flex;
    flex-wrap:wrap;
}
ul li{
    display:inline-block;
    margin:0 100px 0 10px;
}
ul li a{
    border-radius:10px;
    background-color:black;
    text-decoration:none;
    color:white;
    padding:5px;
}
#search{
    background-color:#a2ff60;
}
.tablettt{
    width:1150px;
     height:90vh;
    overflow:auto;

}
</style>
<body>
    <div class="all">
    <div class="container" id="container">
<div class="companynl">
     <img src="../xstream ws.png" alt="NO_IMAGE" class="logo">
     <div class="user">
        <img src="../user.png" id="userimg">
        <p id="username"><?php echo " ".$_SESSION['AUSERNAME'];?></p> 
    </div>
    </div>
<div class="links">
    <p id="l1"><a href="dashboad.php">DASH BOARD</a></p>
    <p id="l2"><a href="viewproductsfnvm.php">MOVIES</a></p>
    <p id="l3"><a href="uploadfnvm.php">UPLOAD NEW MOVIES</a></p>
    <p id="l4"><a href="adminorder.php">LOGIN INFO</a></p>
    </div>
 </div>

 <div class="contents" id="contents">
    <div class="nav" id="nav">
        
    </div>
    <div class="user">
        <p id="ptotal">Featched Records: <?php echo "$total";?></p> 
    </div>
  <div class="data">
<form method="POST" id="form">
	 <input type="text" name="fd" placeholder="00/00/0000">
	 <input type="submit" name="submit" value="SEARCH" onclick="sub()">
</form>
<div class="tablettt">
	 <table>
    <tr>
        <th>MOVIEID</th>
        <th>MOVIEIMAGE</th>
        <th>MOVIEVIDEO</th>
        <th>MOVIENAME</th>
        <th>ABOUT MOVIE</th>
        <th>MOVIECATEGARY</th>
        <th>MOVIEBANNER</th>
        <th>GRADE</th>
        <th>RELEACEDATE</th>
        <th>MOVIETIME</th>
        <th>MOVIETYPE</th>
        <th>LANGUAGE</th>
        <th>CAST 1 IMG</th>
        <th>CAST 1 NAME</th>
        <th>CAST 2 IMG</th>
        <th>CAST 2 NAME</th>
        <th>CAST 3 IMG</th>
        <th>CAST 3 NAME</th>
        <th>CAST 4 IMG</th>
        <th>CAST 4 NAME</th>
        <th>CAST 5 IMG</th>
        <th>CAST 5 NAME</th>
        <th>DIRECTORIMG</th>
        <th>DIRECTORNAME</th>
        <th>MUSICDIRECTORIMG</th>
        <th>MUSICDIRECTORNAME</th>
        <th>DISCRIPTION</th>
        <th>TRAILER</th>
        <th>FILTER</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

	<?php
while($result = mysqli_fetch_assoc($retval))
{
    echo "<tr>
            <td>".$result['MOVIEID']."</td>
          <td><img src='".$result['MOVIEIMAGE']."' height='150px' width='100px'></td>
          <td><video controls height='200px' width='200px'><source src='".$result['MOVIEVIDEO']."' type='video/mp4'></video></td>
          <td>".$result['MOVIENAME']."</td>
          <td>".$result['MOVIEPARA']."</td>
          <td>".$result['MOVIECATEGARY']."</td>
          <td><img src='".$result['MOVIEBANNER']."' height='150px' width='350px'></td>
          <td>".$result['GRADE']."</td>
          <td>".$result['RELEACEDATE']."</td>
          <td>".$result['MOVIETIME']."</td>
          <td>".$result['MOVIETYPE']."</td>
          <td>".$result['LANGUAGE']."</td>
          <td><img src='".$result['OC1IMG']."' height='150px' width='100px'></td>
          <td>".$result['OC1NAME']."</td>
          <td><img src='".$result['OC2IMG']."' height='150px' width='100px'></td>
          <td>".$result['OC2NAME']."</td>
          <td><img src='".$result['OC3IMG']."' height='150px' width='100px'></td>
          <td>".$result['OC3NAME']."</td>
          <td><img src='".$result['OC4IMG']."' height='150px' width='100px'></td>
          <td>".$result['OC4NAME']."</td>
          <td><img src='".$result['OC5IMG']."' height='150px' width='100px'></td>
          <td>".$result['OC5NAME']."</td>
          <td><img src='".$result['DIRECTORIMG']."' height='150px' width='100px'></td>
          <td>".$result['DIRECTORNAME']."</td>
          <td><img src='".$result['MUSICDIRECTORIMG']."' height='150px' width='100px'></td>
          <td>".$result['MUSICDIRECTORNAME']."</td>
          <td>".$result['CASTS']."</td>
          <td><video controls height='200px' width='200px'><source src='".$result['TRAILER']."' type='video/mp4'></video></td>
          <td>".$result['FILTER']."</td>
          <td><a href='Edit.php? MI=$result[MOVIEIMAGE] & MV=$result[MOVIEVIDEO] & MN=$result[MOVIENAME] & MP=$result[MOVIEPARA] & MC=$result[MOVIECATEGARY] & MB=$result[MOVIEBANNER] & G=$result[GRADE] & RD=$result[RELEACEDATE] & MT=$result[MOVIETIME] & MTYP=$result[MOVIETYPE] & L=$result[LANGUAGE] & OI1=$result[OC1IMG] & ON1=$result[OC1NAME] & OI2=$result[OC2IMG] & ON2=$result[OC2NAME] & OI3=$result[OC3IMG] & ON3=$result[OC3NAME] & OI4=$result[OC4IMG] & ON4=$result[OC4NAME] & OI5=$result[OC5IMG] & ON5=$result[OC5NAME] & DI=$result[DIRECTORIMG] & DN=$result[DIRECTORNAME] & MDI=$result[MUSICDIRECTORIMG] & MDN=$result[MUSICDIRECTORNAME] & C=$result[CASTS] & F=$result[FILTER] & T=$result[TRAILER]'>Edit</a></td>
          <td id='delet'><a href='delete.php?delid=$result[MOVIEID]'>Delete</a></td>
          ";
}
?>


</table></div>
</div>
</div>
</div>
</body>

</html>
