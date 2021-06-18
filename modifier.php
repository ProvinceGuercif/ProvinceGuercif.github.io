
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

 height: 15%;
  width: 15%;


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
	text-align: left;
	width:55%;
	height:60%;
	padding:5%;
box-shadow: -3px 9px 30px rgba(0, 0, 0, 0.16), 0 3px 10px rgba(0, 0, 0, 0.23);	
margin:2.5%;
}

form h1 {
	color: gray;
	margin-top:-10px;
	margin-bottom:5;
	text-align: center;
}
form table tr th {
	color: #229954;
	 text-align: left;
}
form table tr td {
	
	 text-align: right;
	color:#229954;
}
.inpot{
	color: gray;
	float:right;
	border:0px; 
}
.submit{
	color: gray;
	float:right;
	border:0px; 
}
.herorh{
	color:#229954 ;
	
}
.heror{
	color:#FF0000 ;
	
}
.icon {

 height: 40px;
  width: 40px;


}
footer {

background-image: linear-gradient( 107deg,  rgba(13,198,180,1) 8.1%, rgba(33,198,138,1) 79.5% );



padding:50px;

height:40px;
margin:0.5%;


}
</style>
<body class="body">
	<header class="header">
	<center>
		<img src="images/guercif.png" class=" imaglogo" /><br>
			<ul>
 
    <li><a class="btn1" href="connecter.php">CONEXION</a></li>
   
  </ul>
	<br><br>
		
	</center>	
<?php
session_start();
$user= $_SESSION['user'];
include_once 'connexion.php';

  
    
    
	
		
			
			
		?>
		<center>
             <form class="form" action='' method='post'>
				 
				<h1>Nouveau mot de passe</h1> 
				 <table><tr><td>Nouveau mot de passe :</td><td><input class='inpot' type='password' name='newpass'/></td><td><input class='submit' type='submit' name='sub' value='Modifier'/></td></tr>
		<?php
             if(isset($_POST['sub'])){
				$newpas = $_POST['newpass'];
				$resultat = mysqli_query($conn,"UPDATE users SET password='" . $_POST['newpass'] . "' WHERE usermail='".$_SESSION['user']."' ");
				 if($resultat){
				
					 echo" <h3 class='herorh'>Votre mot de passe est bien modifier  </h3></table></form></center>";
					 unset($user);
   
  
   					header('Refresh: 2; URL = connecter.php');
					 
				 	 }else{
					 
					 echo" <h3 class='heror'>un errore dans le modification :(  </h3>";
				
				}
				 
 									 }
                
			
				

?>	
</table></form></center>
	</header>
	<main>
	
	
	
	</main>
<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<img src="images/gmail.png" class="icon"/>
		
	
	
	
</footer>	
</body>



</html>