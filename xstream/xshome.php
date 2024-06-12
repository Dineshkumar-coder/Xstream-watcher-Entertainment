<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xstreamhomepage</title>
	
</head>
<style>
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body{
    background-color:black;
}
.maincontainer{

}
.head{
	background-color:black;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
.head .logo{
    width: 300px;
    padding: 10px;
}
.head .nav{
  

}
.head .nav ul{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	margin: 13px;
}
.nav ul li{
	display: inline-block;
	padding: 20px;       
	font-size: 20px;
	margin: 0 5px 0 5px;
}
.nav ul li a{
	text-decoration: none;
	color: white;
}
.nav ul #loginbutton{
	background-color:#0f79af;
	border-radius: 10px;
}
.screen{
	width:100%;
	height: 85vh;
    text-align: center;
background-image:url(../moviebgg.jpg);
margin: -20px 0 0 0;


}
.screen a{
	text-decoration:none;

}

.hhh{
  transform: translate(0px,200px);
}
h1{
	color: #0f79af;
	margin: 20px;
	font-size: 60px;
	font-family:Segoe UI Semibold;
}
h2{
	font-size: 25px;
	margin: 20px;
	font-weight: lighter;
	color: white;
}
h3{
    margin: 20px 43% 20px 43%;
    padding: 5px;
    background-color: #0f79af;
    color: white;
    border-radius: 10px;
}
.second{
	display:flex;
	flex-wrap:wrap;
	justify-content:space-around;
	color:white;
	height: 50vh;
	margin:0 0 150px 0;
}
.secondcontent{
	margin:150px 0 0 0;
     width: 700px;
}
.secondcontent #sc1{
	font-size: 40px;
	font-weight: bolder;
	color:#00a9ff;
	font-family:Microsoft JhengHei;
	margin-bottom:30px;
}
.secondcontent #sc2{
	font-family:Candara Light;
    font-size: 20px;
}
.secondcontent #sc3{
	font-family:Candara Light;
    font-size: 20px;
}
.secondcontent #sc3 span{
	background-color:#00a9ff;
	border-radius: 5px;
	padding: 5px;
}
.second .secondimg{
	margin:100px 0 0 0;
	width: 600px;

}
.boxes{
	width:100%;
	background-color:white;
     margin:100px 0 100px 0;
	

}
.box{
	display:flex;
	flex-wrap:wrap;
	justify-content:space-around;
	margin:100px 350px 100px 350px;
}
.boxes #b1{
	width:200px;
	height:100px;
	color: white;
	margin: 20px;
	text-align: center;
	border:1px solid skyblue;
	background-image: linear-gradient(234deg,black,#00a9ff);
    padding:5px;
}
#b1 span{
	font-size: 49px;
}
.contact{
	color:#00a9ff;
    font-size:30px;
	margin: 150px 0 100px 0;
	display:flex;
	flex-wrap:wrap;
	flex-direction:column;
	justify-content:center;
	align-content:center;
	
}
.contact input{
	border: 1px solid #00a9ff;
	width:400px;
	height:30px;

}
.contact textarea{
	border: 1px solid #00a9ff;
	width:400px;
	height:200px;

}
.contact input[type='submit']{
	background-color:#00a9ff;
	font-size:23px;
	color:white;
	font-weight:bold;
}
.contact input[type='submit']:hover{
	color:black;
}
.cont{
	width:400px;
}
#contacttitle{
	color:white;
	text-shadow:-1px 1px 5px #00a9ff;
}
.footer{
	background-color:#00a9ff;
	padding: 20px;
}
.footer #foot{
	text-align: center;
	color: white;
	font-family: Footlight MT Light;
}
</style>
<body>
<div class="maincontainer">


<div class="head">
	    <img src="../xstream ws.png" alt="NO_IMAGE" class="logo">

		<div class="nav">
	    <ul>
		<li><a href =""></a></li>
		<li><a href ="#contacttitle">Contact</a></li>
		<li id="loginbutton"><a href ="signinxs.php">Signin</a></li>
	    </ul>
        </div> 

</div>





<div class="screen">
	<div class="hhh">
	<h1>welcome to XSTREAM WATCHER</h1>
	<h2>Explore more to know about as & Join xstream to watch the latest movies</h2>
	<a href="signinxs.php"><h3>SignIn</h3></a>
	</div>
</div>


<div class="second">
     <div class="secondcontent">
     	<p id="sc1">We are Specaily For Tamil Audiance</p>
     	<p id="sc2">We are giveing tamil movies & Dudded other language movies so it is specially for you. So enjoy our xstream as well as Extream.</p>
     	<p id="sc3">Enjoy our xstream for just <span>₹399</span> for 365 days
     </div>

	<img src="../tvg.gif" alt="NO_IMAGE" class="secondimg">

</div>

<div class="boxes">
	<div class="box">
	<p id="b1"><span>+125</span><br>Movies</p>
	<p id="b1"><span>+50</span><br>Kolliwood Movies(D)</p>
	<p id="b1"><span>+17</span><br>Holliwood Movies(D)</p>
	<p id="b1"><span>+15</span><br>Tolliwood Movies(D)</p>
	<p id="b1"><span>+30</span><br>Other Dubbed Movies(D)</p>
	<p id="b1"><span>+1</span><br>RankMovies</p>
	<p id="b1"><span>+12</span><br>Shortflims</p>
    <p id="b1"><span>+19</span><br>ramboflims</p>
	<p id="b1"><span>+20</span><br>Series</p>
	<p id="b1"><span>+3</span><br>Xstream specials</p>
	<p id="b1"><span>+5</span><br>Xs Flimes</p>
	<p id="b1"><span>+10</span><br>Xs shot shows</p>
   </div>
</div>

<div class="contact">
	<p id="contacttitle">Feel free to ask any Thing...</p><br>
	<div class="cont">
	<lable>Name:</lable><br>
	<input type="text" required=""><br><br>
	<lable>Email:</lable><br>
	<input type="email" required=""><br><br>
	<lable>Mobile No:</lable><br>
	<input type="number" required=""><br><br>
	<lable>Message:</lable><br>
	<textarea></textarea><br><br>
	<input type="submit" name="">
</div>
</div>


</div>
<div class="footer">
	<p id="foot">© 2021-2022, xstream watcher entertainment.</p>
</div>
</body>
</html>