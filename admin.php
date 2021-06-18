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
   width: 99%;
	
background-image: radial-gradient( circle 993px at 0.5% 50.5%,  rgba(137,171,245,0.37) 0%, rgba(245,247,252,1) 100.2% );
	
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

 height: 25px;
  width: 25px;
 margin-left:-30px;
	


}
.btn1 {
  position: relative;
  display: block;
  overflow: hidden;
  width: 100%;
  height: 80px;
  max-width: 250px;
	margin-top:50px;

 
  color: #0E6655 ;
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
main {
	
	padding-top:0%;
	padding-bottom:1%;
	padding-left:0%;
	padding-right:0%;
 min-height: 500px;
  width: 98%;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	margin-left:1%;
	margin-top:1%;
	margin-right:0%;
	float: left;
	margin-bottom:0%;
	

}


.sectionA {
	padding:2px;
 min-height:400px;
  width: 17.72%;
 	float:left;
	margin-left:0%;
	margin-top:1%;
	margin-right:1%;
	margin-bottom:1%;
	box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	

color :gray;
}
.sectionB {
	padding:2px;
 height:70px;
  width: 99.8%;
 
	margin-left:0%;
	margin-top:0%;
	margin-right:0%;
	margin-bottom:1%;
	
	color :gray;
background-image: linear-gradient( 92.6deg,  rgba(0,126,154,1) 0.7%, rgba(67,85,99,1) 153.1% );	
}
.sectionD {
	padding:1%;
 min-height:400px;
  width: 98%;
 	float:left;
	margin-left:0%;
	margin-top:1%;
	margin-right:1%;
	margin-bottom:1%;
	
	color :gray;
	
	box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	
}
.sectionC {
	padding:1%;
 min-height:400px;
  width: 98%;
 	float:left;
	margin-left:0%;
	margin-top:1%;
	margin-right:1%;
	margin-bottom:1%;
	
	color :gray;
	
	box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	
}
.inpotuser{
width:80%;
border:0px;
height:20px;

}
.inpotusera{
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:82%;
border:0px;
height:20px;

}
.inpotuseraa{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:82%;
border:0px;
height:20px;
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(7,121,222,1) 0%, rgba(20,72,140,1) 90% );

}
.inpotuseraa:hover {
  color: white;
background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );	
}
.inpotuseraaaac{
	 color: white;

width:23%;
border:0px;
height:50px;
	margin:0.5%;
background-image: linear-gradient( 171.8deg,  rgba(5,111,146,1) 13.5%, rgba(6,57,84,1) 78.6% );
}
.inpotuseraaaac:hover {
  color: white;
background-image: linear-gradient( 92.6deg,  rgba(0,126,154,1) 0.7%, rgba(67,85,99,1) 153.1% );
}
upplotissement{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:100px;
border:0px;
height:25px;
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(7,121,222,1) 0%, rgba(20,72,140,1) 90% );

}
.supplotissement:hover {
  color: white;
	background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );
}


/*--------------------------------------------------*/
.inpotuseraaa{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:82%;
border:0px;
height:25px;
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(7,121,222,1) 0%, rgba(20,72,140,1) 90% );

}

.inpotuseraaa:hover {
  color: white;

	background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );
}
/*--------------------------------------------------*/
/*--------------------------------------------------*/
.supprimemessage{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:82%;
border:0px;
height:25px;
	background-image: linear-gradient( 178.2deg,  rgba(118,8,23,1) 10.9%, rgba(158,12,33,1) 62.6% );
}

.supprimemessage:hover {
  color: white;


background-image: radial-gradient( circle farthest-corner at 50.4% 50.5%,  rgba(251,32,86,1) 0%, rgba(135,2,35,1) 90% );
}
/*--------------------------------------------------*/
.supppub{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:100px;
border:0px;
height:25px;
background-image: linear-gradient( 178.2deg,  rgba(118,8,23,1) 10.9%, rgba(158,12,33,1) 62.6% );
}
.supppub:hover {
  color: white;
	background-image: radial-gradient( circle farthest-corner at 50.4% 50.5%,  rgba(251,32,86,1) 0%, rgba(135,2,35,1) 90% );
}
/*--------------------------------------------------*/	
.voire{
	 color: white;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width:100px;
border:0px;
height:25px;

	background-image: radial-gradient( circle 652px at 0.8% 45.2%,  rgba(4,103,246,1) 0%, rgba(8,0,163,1) 100.3% );
	
}
.voire:hover {
  color: white;
background-image: radial-gradient( circle farthest-corner at 49% 50.7%,  rgba(28,190,212,1) 0%, rgba(27,161,179,1) 90% );
	
}

/*--------------------------------------------------*/	

.inpotuseraaab{
	 color: #138D75;

width:82%;
border:0px;
height:25px;


}
.lotissementform{
margin-right:1%;
padding-left:1%;
}	

.validcontact{
color:#229954;
}
.errorecontact{
color: #FF0000;
}
.dimantion{
width:95%;
border:1px;
}
.imagepub{
width:100px;
height:50px;
}
#form3{
width:100%;

}
#form4{
	 width: 100%;
	
	}
.rtitre{
width:100%;
}
.tdtitre{
width:25%;
}
.tdtitrelotissement{
width:36%;
}
.tdtitreusermessage{

width:19.5;
}
</style>
		<script>
			

function maFonctione() {
  var div = document.getElementById("form5");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
			

			

function maFonctionb() {
  var div = document.getElementById("form3");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
			

			

function maFonctionc() {
  var div = document.getElementById("form4");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
			

			

function maFonction() {
  var div = document.getElementById("form1");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}

			

</script>	
<body class="body">
	<header class="header">
		
			<center>
		<br>
		<img src="images/admin.png" class=" imaglogo" />
		<a href="modifieradmin.php" >
		 <img src="images/modifier.png" class=" imaglogoa" /><br>
</a>
		<?php
      echo"".$login;

?>

	<!--<img src="images/guercif.png" class=" imaglogo" /><br><br>-->
		<br>
	

		<ul>

    <li><a class="btn1" href = "logout.php" tite = "Logout">Deconnecter</a></li>
   
  </ul>
	
	</center>
		
	</header>
	
	<main>

<!-- ................. Gestion des Messages .................-->	
		
		<section class="sectionB">
			
<center>
<!-- ---------- gestion des publication -------------- -->	

			<button onclick="maFonctionb()" class="inpotuseraaaac">Gestion des publications</button>
<!-- ------------------------------------------------- -->			

<!-- ---------- gestion des lotissement -------------- -->	

<button onclick="maFonctionc()" class="inpotuseraaaac">Gestion des Lotissemants</button>
			
<!-- ------------------------------------------------- -->
			
<!-- ---------- gestion des utilisateurs -------------- -->	

		<button onclick="maFonction()" class="inpotuseraaaac">Gestion des utilisateurs</button>
			
<!-- ------------------------------------------------- -->
		
<!-- ----------- gestion des message ---------------- -->	
			<button onclick="maFonctione()" class="inpotuseraaaac">Gestion des messages</button>
<!-- ------------------------------------------------- -->
		
</center>				

			

	</section>

<!-- ....... Gestion des publications ...........-->	

	<section class="sectionC">
		
<!-- .............Debut de Table des ajoutes ...........-->		
		<table>
<!-- -------------------------------------------------- -->		   <tr class="trtitre">
		<td class="tdtitre">
			<center><br><H1 class="inpotuseraaab">Ajouter des Publication</h1></center>		
		</td>
			
		<td class="tdtitrelotissement">
		<center><br><H1 class="inpotuseraaab">Ajouter des lotissement</h1></center>	
		</td>
			
		<td class="tdtitreusermessage">
		<center><br><H1 class="inpotuseraaab">Ajouter un utilisateur </h1></center>	
		</td>
		
		<td class="tdtitreusermessage">
			<center><H3 class="inpotuseraaab">Gestion des messages</H3></center>	
		</td>
			
		</tr>
		<tr><td>
		
	
			<form method="post" action="" enctype="multipart/form-data">
			
			<label>Titre :</label><center><br><input type="text" name="titrpub" placeholder="Entrer Un titre..." class="inpotuser" required ><br></center>
			<label>Description :</label><center><br><textarea id="story" name="descrpub" placeholder="Entrer votre text du discription..."  required rows="5" cols="36"></textarea></center>	<br>
	
			<label>Image :</label><center><br><input type="file" name="photoann" class="inpotuser" required ><br><br>
		<input type="submit" name="publi" value="publier" class="inpotuseraa" ><br><br>
</center>
<?php  
				
	
	if(isset($_POST["publi"]))
	{
	
	$titrpub=$_POST['titrpub'];
				
	$descripub=$_POST['descrpub'];

	$image=$_FILES['photoann']['tmp_name'];
	
	$traget="publication/".$_FILES['photoann']['name'];
	
	move_uploaded_file($image,$traget);

		$querypub = "INSERT INTO publi(titrepub, discriptionpub, imagepub) VALUES ('$titrpub','$descripub','$traget')";
		
		
 			$insertpub= mysqli_query($conn,$querypub);	
		if (!$insertpub){
		echo " <div class='errorecontact'> impossible d’ajouter cet publication</div>";
					echo "<meta http-equiv='refresh' content='1'>";
									 }
								 else{
		
			echo " <div class='validcontact'>la publication est ajouté</div>";
				echo "<meta http-equiv='refresh' content='1'>";
					
									 }

											  }
				
					?>
			</form>
		<!--  
-----------------------------------------------------------
<center><br><button onclick="maFonctionb()" class="inpotuseraaaac">masquer et afficher la list  des publications</button></center>
-----------------------------------------------------------
-->
				

			

</td>
<td>

	
		
			<form class="lotissementform" method="post" action="" enctype="multipart/form-data">
				<label>Nom de Lotissement :</label><br>
				<input type="text"  name="lotissementnom" placeholder="Entrer le nom de lotissement..." class="inpotuser" required ><br><br>
				<label>Proprietaire de lotissement :</label><br>
				<input type="text" name="lotissementprop" placeholder="Entrer le nom de Proprietaire..." class="inpotuser" required ><br><br>
				<label>Situation de lotissement :</label><br>
				<input type="text" name="lotissementsit" placeholder="Entrer la situation de lotissement..." class="inpotuser" required ><br><br>
				<label>Titre fancée de lotissment (T.F) :</label><br>
				<input type="text" name="lotissementTF" placeholder="Entrer le T.F..." class="inpotuser" required ><br><br>
				<label>Plan de lotissement (Format pdf) :</label><br>
				<input type="file" name="lotissementplanpdf" value=" Plan de lotissement..." class="inpotuser"  ><br><br>
				<label>Cahier des charges (Format pdf) :</label><br>
				<input type="file" name="lotissementcdcpdf" value=" Cahier des charges..." class="inpotuser"  ><br><br>
				<label>Autres fichier (Format pdf) :</label><br>
				<input type="file" name="lotissementautrepdf" value="Fichier pdf..." ><br><br>
				<center><input type="submit" name="ajoutlotissement" value="Ajouter" class="inpotuseraaa" ></center><br>
			
			</form>	
<!--
-----------------------------------------------------------
		<center><br><button onclick="maFonctionc()" class="lotissementgestion">Gestion des Lotissemants</button><br></center>
-----------------------------------------------------------
-->
<?php
if(isset($_POST["ajoutlotissement"]))
	{
	
	$Nomlot=$_POST['lotissementnom'];			
	$proplot=$_POST['lotissementprop'];
	$Sitlot=$_POST['lotissementsit'];
	$TFlot=$_POST['lotissementTF'];
	
// plan ..........
	$plan=$_FILES['lotissementplanpdf']['tmp_name'];
	$tragetplan="PDF/".$_FILES['lotissementplanpdf']['name'];
	move_uploaded_file($plan,$tragetplan);
	
// Cahier des charge ..........
	$CDC=$_FILES['lotissementcdcpdf']['tmp_name'];
	$tragetcdc="PDF/".$_FILES['lotissementcdcpdf']['name'];
	move_uploaded_file($CDC,$tragetcdc);

// autre fichier pdf ..........
	$autre=$_FILES['lotissementautrepdf']['tmp_name'];
	$tragetautre="PDF/".$_FILES['lotissementautrepdf']['name'];
	move_uploaded_file($autre,$tragetautre);


		$querylotissement = "INSERT INTO lotissement(Nomlotissement, Propietaire, Situation, TF, Plan, Cahierdescharge, autres) VALUES ('$Nomlot','$proplot','$Sitlot','$TFlot','$tragetplan','$tragetcdc','$tragetautre')";
		
		
 		$insertlotissement= mysqli_query($conn,$querylotissement);	
		if (!$insertlotissement){
		echo " <div class='errorecontact'> impossible d’ajouter cet lotissement</div>";
					echo "<meta http-equiv='refresh' content='1'>";
									 }
								 else{
		
			echo " <div class='validcontact'><br>lotissement est bien ajouté</div>";
				echo "<meta http-equiv='refresh' content='1'>";
					
									 }

											  }
			
						
	
												   

	
								
					
			
?>
			

		
</td>
<td>
			
<!-- -------------------------------------------------- -->
			
			
			<form method="post" action="">
			<table>
			<tr><td>Email :</td><td><input type="email" name="mailajout" placeholder="Entrer Email..." class="inpotuser" required ></td></tr>	
			<tr><td>Login :</td><td><input type="text" name="loginajout" placeholder="Entrer Login..." class="inpotuser" required ></td></tr>	
			<tr><td>Mot de pass :</td><td><input type="password" name="passwordajout" placeholder="Entrer mot de pass ..." class="inpotuser" required ></td></tr>
			<tr><td>Type :</td><td><select name="typedajout" placeholder="...." class="inpotusera" required>
				<option>user</option><option>admin</option></select></td></tr>
			<tr><td></td><td><input type="submit" name="ajouter" value="Ajouter" class="inpotuseraa" ></td></tr>	
</table>
			
			
			</form>					
<?php
if(isset($_POST['ajouter'])){

	$email = $_POST['mailajout'];
	$login = $_POST['loginajout'];
	$password = $_POST['passwordajout'];
	$type = $_POST['typedajout'];
	
	$insertajout=" INSERT INTO `users` (`iduser`, `usermail`, `login`, `password`, `usertype`)
	VALUES ('','$_POST[mailajout]','$_POST[loginajout]','$_POST[passwordajout]','$_POST[typedajout]')";
	$insertionajout = mysqli_query($conn,$insertajout);
	if($email && $login && $password && $type){
				if (!$insertionajout){
		echo " <div class='errorecontact'> impossible d’ajouter cet u</div>";
					echo "<meta http-equiv='refresh' content='1'>";
									 }
								 else{
		
			echo " <div class='validcontact'>L'utilisateur est ajouté</div>";
				echo "<meta http-equiv='refresh' content='1'>";
					
									 }

											  }else{
			echo " <div class='errorecontact'> impossible d’ajouter cet utilisateur</div>";
						
	
												   }

	
							}
?>
<div id="form1">
	
			
</div>

			
<!-- -------------------------------------------------  -->			
			
</td>
<td>
				
<div id="form5">
	
	
<div id='form2' class='dimantion'>	<form method='post' action=''>			
			<?php
$querymessage="select * from contacts ";
$resulta= mysqli_query($conn,$querymessage);

while($rowmessage = mysqli_fetch_array($resulta)) {
	 $nomcontact= $rowmessage['nomcontact'];
  $mailcontact= $rowmessage['mailcontact'];
	$idmessage = $rowmessage['idcontact'];
  $descriptioncontact=$rowmessage['messagecontact'];
	
  echo"
			<hr>
			nom : $nomcontact<br>Email : $mailcontact
<br>Message : <br>
$descriptioncontact<br>
<input class='supprimemessage' type='submit' name='supprimer' value='Supprimer'/>
<hr
<br>

";
	
	
 
}



	if(isset($_POST['supprimer']))
	{

	$reqDelete="DELETE FROM contacts WHERE idcontact='$idmessage'";
	$resultat=mysqli_query($conn, $reqDelete);
	
	if($resultat)
	{
	
		echo " <div class='validcontact'>le message est supprimer</div>";
	echo "<meta http-equiv='refresh' content='1'>";	
	}
	
	}
	
	
	
	
		    	
?>
</form></div>
</div>	
			
</td>
</tr>	
<!-- .............Fin de Table des ajoutes ...........-->		
		</table>
<!-- -------------------------------------------------- -->
	</section>
		
<!-- ................. Gestion des Lotissemants .................-->
		
		<!-- 
Nomlotissement
Propietaire
Situation
TF
Plan
Cahierdescharge
autres
-->
		
	<section class="sectionD">
	<table>
	<tr>
	<td>
	<center><br><H1 class="inpotuseraaab"> Liste des Publications</h1></center>		
	</td>
	<td>
	<center><br><H1 class="inpotuseraaab">Liste des lotissement </h1></center>	
	</td>
	<td>
	<center><br><H1 class="inpotuseraaab"> liste des utilisateurs</h1></center>
	</td>
	<td>
	<center><br><H1 class="inpotuseraaab"> Messages</h1></center>	
	</td>
	</tr>	
	<tr>
	<td>
		<div id="form3">		
			<?php
$querypub="select * from publi ";
$resultpub= mysqli_query($conn,$querypub);

while($rowpub = mysqli_fetch_array($resultpub)) {
	 $titrepubli= $rowpub['titrepub'];
  $imagepubli= $rowpub['imagepub'];
  $idpub = $rowpub['idpub'];
	
  echo"<div id='form3' class='dimantion'>	<form method='post' action=''><hr>
			<table>
			<tr><td><input class='supppub' type='submit' name='supprimerpub' value='Supprimer'/> </td><td><img  class='imagepub' src='$imagepubli' /></td><td>$titrepubli
</td></tr>
</table>
<hr>
</form></div>";
	
	
 
}

	if(isset($_POST['supprimerpub']))
	{

	$reqDelete="DELETE FROM publi WHERE idpub='$idpub'";
	$resultatpub=mysqli_query($conn, $reqDelete);
	
	if($resultatpub)
	{
	
		echo " <div class='validcontact'>la publication est supprimer</div>";
	echo "<meta http-equiv='refresh' content='1'>";	
	}
	
	}
?>
</div>
	</td>	
	<td>
		
	<!-- ............................................... -->
<div id="form4">	
				<?php
$querylot="select * from lotissement ";
$resultlot= mysqli_query($conn,$querylot);

while($rowlot = mysqli_fetch_array($resultlot)) {
	$idlotissement= $rowlot['idlotisement'];
	 $Nomlotissement= $rowlot['Nomlotissement'];
  	$prolotissement= $rowlot['Propietaire'];
 	$situlotissement= $rowlot['Situation'];
  	$tflotissement= $rowlot['TF'];
	
  echo"<div id='form4' class='dimantion'>	<form method='post' action=''>
  <hr>
  <table>
    <tr>
	<td>Nom lotissement</td>
	<td>$Nomlotissement</td>
	</tr>
	
	 <tr>
	<td>Proprietaire</td>
	<td>$prolotissement</td>
	</tr>
	
	 <tr>
	<td>Situation</td>
	<td>$situlotissement</td>
	</tr>
	
	 <tr>
	<td>Titre Fancée</td>
	<td>$tflotissement</td>
	</tr>
	
	 <tr>
	<td>
	";
	?>
	<a href="voireadmin.php?voire=<?php echo $idlotissement; ?>" target="_blank"><img src='images/view.png'  class='icon' /></a>
	 <?php 
	echo"
	  </td>
	</tr>
	
	

  </table>
			<hr>
</form></div>";

}

/*
if(isset($_POST['supprimerfiche']))
	{
	$reqDeletelotissement="DELETE FROM lotissement WHERE idlotisement =$idlotissement ";
	$resultatlotissement=mysqli_query($conn, $reqDeletelotissement);
	
	if($resultatlotissement)
	{
	
		echo " <div class='validcontact'>lotissement  $Nomlotissement est supprimer de $idlotissement </div>";
		
	echo "<meta http-equiv='refresh' content='1'>";	
	}
	
	}
*/
if(isset($_POST['voirefiche'])){

	$_SESSION['idlot'] = $idlotissement;
			header("Location: voireadmin.php");
}
?>

<!-- ............................................... -->
		<!-- 
Nomlotissement
Propietaire
Situation
TF
Plan
Cahierdescharge
autres
-->	
				</div>
	</td>	
	<td>
	
	</td>	
	<td>
		
	
	</td>
	</tr>	
		
		
	</table>	
	</section>

<!-- ................... ajouter un utilisateur 		
		<section class="sectionA">
		
			

	</section>
.................-->	
	</main>
	
	<br>
<footer>


	<img src="images/facebook.png" class="icon"/>
	<img src="images/youtube.png" class="icon"/>
	<img src="images/gmail.png" class="icon"/>
		
	
	

</footer>
</body>



</html>