<?php
require("connexion.php");
?>
<!DOCTYPE html>
<html>
<head class="">
<title>Province De Guercif</title>
</head>
	
<style>
body {

background-image: linear-gradient( 109.6deg,  rgba(204,228,247,1) 11.2%, rgba(237,246,250,1) 100.2% );
   width: 99%;
}
.imaglogo {

 height: 12%;
  width: 12%;


}
.btn1 {
  position: relative;
  display: block;
  overflow: hidden;
  width: 100%;
  height: 80px;
  max-width: 250px;
  margin: 1rem auto;
  text-transform: uppercase;
  /*   border: 1px solid currentColor; */
  color: #0E6655;
  line-height: 80px;
  text-align: center;
  transition: ease 0.2s;
  font-family: "Nunito";
  font-size: 20px;
  box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
 
.btn1:before {
  content: "";
  position: absolute;
  top: 0;
  right: -50px;
  bottom: 0;
  left: 0;
  border-right: 50px solid transparent;
  border-bottom: 80px solid #229954;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  transition: cubic-bezier(1, -0.02, 0.26, 0.38) 0.2s;
  z-index: -1;
}
 
.btn1:hover {
  color: white;
}
 
.btn1:hover:before {
  transform: translateX(0);
}
 
ul {
  
  display: block;
  text-align: center;
}
 
ul li {
  display: inline-block;
}
 
li {
  list-style: none;
  /*   float: left; */
  width: 200px;
  margin-left: 10px;
} 
ul li .cherche {
	float: left;
} 
.icon {

 height: 40px;
  width: 40px;


}
main {
	
	padding:1%;
	
 min-height: 500px;
  width: 96%;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	margin-left:1%;
	margin-top:1%;
	margin-right:1%;
	
	margin-bottom:0%;
	background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );

}

section {
 min-height: 70%;

  width: 50%;

	margin:1%;
	
}
.pris{
background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
margin-top:-650px;
 min-height: 200px;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  width: 25%;
	
float:right;

}
.paragraph{
	padding:2%;
	color:gray;

}
.imagerpis{

width:100%;
height:150px;
}

footer {

	  width: 91.8%;
margin-bottom:0%;
	margin-left:1%;

float:left;
padding:50px;

height:40px;

}
.imagepub{
width:100%;
height:250px;
}
#form3{



width:45%;	
color:#154360;
}

</style>
<body class="body">
	<header class="header">
	<center>
		<img src="images/guercif.png" class=" imaglogo" /><br>
	
		
	</center>	
	
		<ul>
    <li><a class="btn1" href="index.php">Accueil</a></li>
	 <li><a class="btn1" href="contact.php">Contact</a></li>
    <li><a class="btn1" href="connecter.php">CONEXION</a></li>
   
  </ul>
	
		
	</header>
	<main>
	
	<section>
<?php
$querypub="select * from publi ";
$resultpub= mysqli_query($conn,$querypub);

while($rowpub = mysqli_fetch_array($resultpub)) {
	 $titrepubli= $rowpub['titrepub'];
  $imagepubli= $rowpub['imagepub'];
 	$discrippubli= $rowpub['discriptionpub'];
	
  echo"
			<table><tr><td><img  class='imagepub' src='$imagepubli' /></td></tr><tr><td>titre : $titrepubli</td></tr><tr><td>$discrippubli</td></tr>
		</table><hr>


";

}
?>
	</section>
		<div class="pris">
			<img src="images/president1.jpg" class="imagerpis"/>
		
			<div class="paragraph">
&ensp;&ensp;&ensp;&ensp;&ensp;Accomplissement des valeurs de communication et d'ouverture et incarnation du principe de transparence et de clarté que nous nous sommes imposés en traitant divers sujets qui préoccupent la population. Afin d'impliquer les citoyens dans les dernières évolutions de la gestion des affaires publiques locales, le portail électronique de la communauté Guercif a été lancé.<br>Monsieur le Président.<br>
	</div>	
		</div>
	</main>

<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<img src="images/gmail.png" class="icon"/>
		
	
	
	
</footer>
</body>



</html>