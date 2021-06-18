<?php
session_start();
require("connexion.php");
$login = $_SESSION['nom'];
?>
<!DOCTYPE html>
<html>
<head class="">
<title>Province De Guercif</title>
</head>
	
<style>
body {

background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );
   width: 99%;
}
	header{
	margin:1px;
	height:130px;
	width:100%;
	
	}
.imaglogo {

 height: 120px;
  width: 120px;

	


}
.imaglogoa {

 height: 10px;
  width: 10px;

	


}
.btn1 {
  position: relative;
  display: block;
  overflow: hidden;
  width: 100%;
  height: 80px;
  max-width: 250px;

 
 
  color: white;
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
  text-align: left;
 	float:right;
	margin-top:-10%;
}
 
ul li {
  display: inline-block;
}
 
li {
  list-style: none;
  /*   float: left; */
  width: 200px;
 
 
} 
ul li .cherche {
	float: left;
} 
.icon {

 height: 40px;
  width: 40px;


}
footer {
	  width: 91.8%;
margin-bottom:0%;
	margin-left:1%;



float:left;
padding:50px;

height:40px;

}
nav {
	color :white;
	padding:2px;
 min-height: 500px;
  width: 100%;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	margin-left:1%;
	margin-top:1%;
	margin-right:0%;
	
	margin-bottom:0%;
	background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );

}
.sectionA {
	padding:2px;
 min-height:400px;
  width: 40%;
 	float:center;
	margin-left:0%;
	margin-top:1%;
	margin-right:1%;
	margin-bottom:1%;
	 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	

	color :white;
}
.sectionB {
margin-left:1%;
	margin-top:1%;
	margin-right:0%;
	margin-bottom:1%;
 min-height: 403px;
  width: 80%;
		float:left;
	
	
	background-image: linear-gradient( 95.2deg,  rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );
}
.inpotuser{
width:100%;
border:0px;
height:25px;

}
.inpotusera{
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:102%;
border:0px;
height:20px;

}
.inpotuseraa{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:102%;
border:0px;
height:20px;
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(7,121,222,1) 0%, rgba(20,72,140,1) 90% );

}
.inpotuseraa:hover {
  color: white;
background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );	
}
.inpotuseraaa{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:82%;
border:0px;
height:20px;
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(7,121,222,1) 0%, rgba(20,72,140,1) 90% );

}
.inpotuseraaa:hover {
  color: white;
	background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );
}
.validcontact{
color:#229954;
}
.errorecontact{
color: #FF0000;
}
.herorh{
	color:#229954 ;
	
}
.heror{
	color:#FF0000 ;
	
}
</style>
<body class="body">
	<header class="header">
	<center>
		<img src="images/guercif.png" class=" imaglogo" /><br><br>
		<br>
	
		
		
	
	
	</center>
		
	</header>
	
	<nav>
	<center>
		<br>
		<img src="images/admin.png" class=" imaglogo" /><br>
		
		

		<?php
      echo"".$login;
?>
	
		<section class="sectionA">
		<center> <br><br><br></center>
<?php
$querya="select * from users where login = '".$login."' ";
$resulta= mysqli_query($conn, $querya);
while($rowa = mysqli_fetch_array($resulta)) {
  
  $Email= $rowa['usermail'];
  $log= $rowa['login'];
  $passworda=$rowa['password'];
}
?>
<div id="form1">
			<form method="post" action="">
			<table>
			<tr><td>Email :</td><td><input type="email" name="mailajout" value='<?php echo($Email); ?>' placeholder="Entrer Email..." class="inpotuser" required ></td></tr>	
			<tr><td>Login :</td><td><input type="text" name="loginajout" value='<?php echo($log); ?>' placeholder="Entrer nouveau login ..." class="inpotuser" required ></td></tr>	
			<tr><td>Mot de pass :</td><td><input type="password" id="pwd"  name="passwordajout" value='<?php echo($passworda); ?>' placeholder="Entrer mot de pass ..." class="inpotuser" required />
	
				<button type="button" onclick="showHide()" id="eye">
            <img src="images/eye.png" alt="eye" class=" imaglogoa"/>
         </button>
				</td></tr>
			
				
			<script>
				function show()
{
var p = document.getElementById('pwd');
p.setAttribute('type','text');  
}

function hide()
{
   var p = document.getElementById('pwd');
p.setAttribute('type','password');   
}

function showHide()
{
    var pwShown = 0;

document.getElementById("eye").addEventListener("click", function() {
    if (pwShown == 0) 
    {
        pwShown = 1; 
        show();
    } 
    else {
        pwShow = 0;
        hide();
    }
            }, false);

}
				
				
				
				</script>
			<tr><td></td><td><input type="submit" name="mod" value="Modifier" class="inpotuseraa" ></td></tr>	
</table>
			
				
</form>	
	</div>
<?php
if(isset($_POST['mod'])){
/*
  $Email= $rowa['usermail'];
  $log= $rowa['login'];
  $passworda=$rowa['password'];

*/
	$email = $_POST['mailajout'];
	$logina = $_POST['loginajout'];
	$password = $_POST['passwordajout'];
	
$resultata = mysqli_query($conn,'UPDATE users SET usermail ="' . $email . '", login ="' . $logina .'", password ="' . $password .'" WHERE login="' . $login . '"');
	
	if($resultata){
			 echo" <h3 class='herorh'>Votre Données est bien modifier <a class='herorh' href = 'admin.php'>Clicker ici pour reteourner</a></h3> ";

				 	 }else{
					 
					 echo" <h3 class='heror'>Un errore dans le modification :(  </h3>";
				
				}

	}
	

?>

	</section>
		</center>
	</nav>
	
	<br>
<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<img src="images/gmail.png" class="icon"/>
		
	
	

</footer>
</body>



</html>