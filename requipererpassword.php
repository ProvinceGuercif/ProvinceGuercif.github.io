
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
	width:90%;
	height:60%;
	padding:3%;
box-shadow: -3px 9px 30px rgba(0, 0, 0, 0.16), 0 3px 10px rgba(0, 0, 0, 0.23);	
	margin:1%;
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
.lienmofifier{
color:#2471A3;
}
.icon {

 height: 40px;
  width: 40px;


}
.mesagein{
color: #FF0000;

}
footer {

background-image: linear-gradient( 107deg,  rgba(13,198,180,1) 8.1%, rgba(33,198,138,1) 79.5% );



padding:50px;

height:40px;

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
		
	</header>
	<main>
	<center>
	<form class="form" action='' method='post'>
<table cellspacing='5' align='center'>
	<h1> Enter votre Email </h1>
<tr><td>Votre Email:</td><td><input class="inpot" type='text' name='user_id'/></td></tr>
<tr><td></td><td><input class="submit" type='submit' name='submit' value='chercher'/></td></tr>

</table>
	
	

<?php
session_start();
include_once 'connexion.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $result = mysqli_query($conn,"SELECT usermail,login FROM users where usermail='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['usermail'];
	$email_id=$row['login'];
	
	if($user_id==$fetch_user_id) {
		$_SESSION['user'] = $fetch_user_id ;
			echo" Bonjour ".$email_id." :) ...<br><br><br>";
		
			echo" <a class='lienmofifier' href='modifier.php'>Clicker Ici pour modifier Votre mode de passe </a>";
		
		?>
		
             
		<?php
    
			}
				else{
					echo "<div class='mesagein' />Votre email est incorrect :(  </div> ";
				}
}
?>

</form></center>
	</main>
<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<img src="images/gmail.png" class="icon"/>
		
	
	
	
</footer>
</body>



</html>