
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
.imaguser {

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

.form {
	text-align: center;
	width:25%;
	height:40%;
	padding-left:2%;
	padding-bottom:2%;
	padding-right:2%;
	padding-top:1%;
box-shadow: -3px 9px 30px rgba(0, 0, 0, 0.16), 0 3px 10px rgba(0, 0, 0, 0.23);	
	margin:2.5%;
}


form table tr th {
	color: #229954;
	 text-align: left;
}
form table tr td {
	
	 text-align: right;
}
.forget {
	color:#229954 ;
	float:left;
}
.inpot{
	color: gray;
	
	border:0px; 
}
.titr{
	color: #229954;

	
}
.submit{
	color: gray;
	float:right;
	border:0px; 
}

.submit:hover{
  color:#229954;
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
.errorcolor {
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
		
		<img src="images/user.png" class="imaguser" /><br><br>
	
		
	
				<table>
				<tr><th>Login :</th><td><input class="inpot" type="text" name="login" /></td></tr>
				<tr><th>Mot de passe :</th><td><input class="inpot" type="password" name="password" /></td></tr>
				<tr><th></th><td><input class="submit" type="submit" name="ok" value="Connecter" /></td></tr>
					<tr>
					<th></th>
	
					</tr>
						
						<?php
session_start();
require("connexion.php");



if(isset($_POST['ok'])){

	$user = $_POST['login'];
	$pass = $_POST['password'];
	
	$query=mysqli_query($conn,"select login,password,usertype from users where login='".$user."' and password='".$pass."'  ");
	$row=mysqli_fetch_array($query);
	
	$login = $row['login'];
	
	if($row["usertype"]=="user"){
		
		if($login == $user){
			$_SESSION['nom'] = $login;
			header("Location: user.php");
								 }
		else{
				echo"<div class='errorcolor' >votre login ou mot de pass est incorrect :( ....</div>";
			}

	
								}
	
	
	if($row["usertype"]=="admin"){
		if($login == $user){
			$_SESSION['nom'] = $login;
			header("Location: admin.php");
			
								 }
		}
		else{
				echo"<div class='errorcolor' >votre login ou mot de pass est incorrect :( ....</div>";
			header('Refresh: 0; URL = connecter.php');
			}
	
	
}
		

?>

				</table>
	<a class="forget" href="requipererpassword.php">Mot de passe oublié</a>
	</center>
	 
	</form>
	
	
</main>
	
<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<a href="mailto:info@guercif.ma" > <img src="images/gmail.png" class="icon"/>	  </a>
		
	
	
	
</footer>
</body>



</html>