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
  height: 100%;
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
  color: #229954;
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
.form {
	size:12;
	color:white;
	width:40%;
	min-height:60%;
	padding:1%;
	background-image: linear-gradient( 109.6deg,  rgba(102,203,149,1) 11.2%, rgba(39,210,175,1) 98.7% );
box-shadow: -3px 9px 30px rgba(0, 0, 0, 0.16), 0 3px 10px rgba(0, 0, 0, 0.23);	
    margin:1%;
}
.inpot{
	color: gray;
	float:right;
	border:0px; 
	height:5% ;
width: 99%;
}
.inpot1{
	color: gray;
	float:right;
	border:0px; 
	height: 200px;
	
width: 99%;
}
.send:hover{
background-color:#229954;
color:white;
border:0px; 

}
.send{
background-color:white;
color:#229954;
height:2% ;
width: 48.5%;
border:0px; 

}
.icon {

 height: 40px;
  width: 40px;


}
footer {

background-image: linear-gradient( 107deg,  rgba(13,198,180,1) 8.1%, rgba(33,198,138,1) 79.5% );



padding:50px;

height:40px;

}
.validcontact{
color:#229954;
}
.errorecontact{
color: #FF0000;
}
</style>
<body class="body">
	<header class="header">
	<center>
		<img src="images/guercif.png" class="imaglogo" /><br>
	
		
	</center>	
	
		<ul>
    <li><a class="btn1" href="index.php">Accueil</a></li>
	 <li><a class="btn1" href="contact.php">Contact</a></li>
    <li><a class="btn1" href="connecter.php">CONEXION</a></li>
   
  </ul>
	
		
	</header>

	<main>
	
	<center>
		<form method="post" action="" class="form">
		<table>
			<h1> Contacter chez nous </h1>
			<tr>
	<td>Votre nom :</td><td><input type="text" name="name"  class="inpot" /></td>
			
			</tr>	
			<tr>
	<td>Votre adresse e-mail :</td><td><input type="text" name="mail" class="inpot" /></td>
			
			</tr>
			<tr>
	<td>Message:</td><td><input type="text" name="message" class="inpot1" /></td>
			
			</tr>
			<tr>
	<td></td><td><input type="submit" name="envoyer" value="Envoyer" class="send" />  <input type="reset" value="Réinitialiser" class="send" /></td>
			
			</tr>
			<tr>
<?php
if(isset($_POST['envoyer'])){

	$nom = $_POST['name'];
	$email = $_POST['mail'];
	$message = $_POST['message'];
	
	$insert=" INSERT INTO `contacts` (`idcontact`, `nomcontact`, `mailcontact`, `messagecontact`)
	VALUES
	('','$_POST[name]','$_POST[mail]','$_POST[message]')";
	$insertion = mysqli_query($conn,$insert);
	if($nom && $email && $message){
		
	

	if (!$insertion)
	{
	echo " <div class='errorecontact'> impossible d’ajouter cet enregistrement</div>";
	}

	echo " <div class='validcontact'>L’enregistrement est ajouté</div>";
		header('Refresh: 1; URL = contact.php');

	}
	
}
?>
			</tr>
		</table>
	 
		</form>
		</center>	
	</main>
<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<img src="images/gmail.png" class="icon"/>
		
	
	
	
</footer>
</body>



</html>