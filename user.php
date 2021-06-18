<?php

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
	header{
	margin:1px;
	height:130px;
	width:100%;
	}
.imaglogo {

 height: 120px;
  width: 120px;

	


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
background-image: linear-gradient( 107deg,  rgba(13,198,180,1) 8.1%, rgba(33,198,138,1) 79.5% );


float:left;
padding:50px;

height:40px;

}
nav {
	
	padding:0px;
 min-height: 500px;
  width: 98%;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	margin-left:1%;
	margin-top:1%;
	margin-right:0%;
	float: left;
	margin-bottom:0%;
	background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );

}
.sectionA {
padding:1%;
 min-height:400px;
  width: 16%;
 	float:right;
	margin-left:0%;
	margin-top:1%;
	margin-right:1%;
	margin-bottom:1%;
	
	background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(7,121,222,1) 0%, rgba(20,72,140,1) 90% );
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
	
	
	
}
.lineone{
border:1px;
background-image: linear-gradient( 75.7deg,  rgba(34,126,34,1) 3.8%, rgba(99,162,17,1) 87.1% );
	color:white;
	padding:0%;
	min-height:30px;
}	
.tdlineone{
padding:1%;
width:17%;
	
}
.tdlineonepdf{
padding:1%;
width:6.5%;
}
.data{
width:64%;
height:25px;
border:0px;
}
.recherch{

width:30%;
height:25px;
	color:white;
	border:0px;
	background-image: linear-gradient( 180.2deg,  rgba(128,174,248,1) 14.1%, rgba(50,118,227,1) 77% );
}
.recherch:hover {
  color: white;
	background-image: linear-gradient( 178.5deg,  rgba(122,231,248,1) 6.5%, rgba(86,118,191,1) 90.9% );
}
.affichage{
  font-size: 10px;

}
</style>
<body class="body">
	<header class="header">
	<center>
		<img src="images/usera.png" class=" imaglogo" /><br>
		<?php
session_start();
require("connexion.php");
$login = $_SESSION['nom'];

      echo"".$login;
?>
	
	
		<ul>

    <li><a class="btn1" href = "logout.php" tite = "Logout">Deconnecter</a></li>
   
  </ul>
	
	</center>
		
	</header>
	
	<nav>
	<center>
		

		</center>
	
		<section class="sectionB">
		<table>
		<tr class="lineone">
		<td class="tdlineone">
			Nom de Lotissement
		</td>
		<td class="tdlineone">
			Proprietaire de Lotissement
		</td>
		<td class="tdlineone">
			Situation de Lotissement
		</td>
		<td class="tdlineone">
			Titre Fancé de Lotissement (T.F)
		</td>
		<td class="tdlineonepdf">
			Plan de Lotissement
		</td>
		<td class="tdlineonepdf">
			 Cahier des charges
		</td>
		<td class="tdlineonepdf">
			Autres fichiers
		</td>
		</tr>	
		<?php
$querylot="select * from lotissement ";
$resultlot= mysqli_query($conn,$querylot);

while($rowlot = mysqli_fetch_array($resultlot)) {
	$idlotissement= $rowlot['idlotisement'];
	 $Nomlotissement= $rowlot['Nomlotissement'];
  	$prolotissement= $rowlot['Propietaire'];
 	$situlotissement= $rowlot['Situation'];
  	$tflotissement= $rowlot['TF'];
	
	$planlotissement= $rowlot['Plan'];
 	$chaierlotissement= $rowlot['Cahierdescharge'];
  	$autrelotissement= $rowlot['autres'];
	
  echo"
  
<tr>

	<td class='tdlineone'>$Nomlotissement</td>

	<td class='tdlineone'>$prolotissement</td>

	<td class='tdlineone'>$situlotissement</td>
	
	<td class='tdlineone'>$tflotissement</td>
	

	
	<td class='tdlineonepdf'><a name='click1' href='$planlotissement' target='_blank'><img src='images/pdf.png'  class='icon' /></a></td>

	<td class='tdlineonepdf'><a name='click2' href='$chaierlotissement'><img src='images/pdf.png'  class='icon' /></a></td>
	
	<td class='tdlineonepdf'><a name='click3' href='$autrelotissement'><img src='images/pdf.png'  class='icon' /></a></td>
<tr>
";

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
/*
if(click1 == true){

	$file1 = $planlotissement;
	header('Content-type:application/pdf');
	header('Content-Description:inline;"'.$file1.'"');
	header('Content-Transfer-Encoding:binary');
	header('Accept-Ranged:bytes');
	@readfile($file1);
}
if(click2 == true){

	$file2 = $chaierlotissement;
	header('Content-type:application/pdf');
	header('Content-Description:inline;"'.$file2.'"');
	header('Content-Transfer-Encoding:binary');
	header('Accept-Ranged:bytes');
	@readfile($file2);
}
if(click3 == true){

	$file3 = $autrelotissement;
	header('Content-type:application/pdf');
	header('Content-Description:inline;"'.$file3.'"');
	header('Content-Transfer-Encoding:binary');
	header('Accept-Ranged:bytes');
	@readfile($file3);
}
*/
?>	
		
		</table>
		</section>
		<section class="sectionA">
		<form method="post" action="">
	<br><center>
	<img src='images/seo.png' class='icon' />
		 </center><br>
		<input type="text" name="data" class="data" placeholder="Recherche... ">
		<input type="submit" name="search" class="recherch" value="Recherch" /> 		
			
			<br>
		</form>
<?php		
		 if(isset($_POST['search'])){
		 $mc = $_POST['data'];
		 $reqSelect="select * from lotissement where Nomlotissement like '%$mc%' or Propietaire like '%$mc%' or Situation like '%$mc%' or TF like '%$mc%' ";
		

	$resultata = mysqli_query($conn,$reqSelect);

	while($row=mysqli_fetch_array($resultata)){
		
	$idlot= $row['idlotisement'];
	 $Nomlot= $row['Nomlotissement'];
  	$prolot= $row['Propietaire'];
 	$situlot= $row['Situation'];
  	$tflot= $row['TF'];
	
		
	echo "
	<table class='affichage'>
	<br>
	<tr>
	<td>
Nom
	</td>
	<td>:</td>
	<td>$Nomlot</td>
</tr>

<tr>
	<td>
Propietaire
	</td>
	<td>:</td>
	<td>$prolot</td>
</tr>
<tr>
	<td>
Situation
	</td>
	<td>:</td>
	<td>$situlot</td>
</tr>
<tr>
	<td>
T.F
	</td>
	<td>:</td>
	<td>$tflot</td>
</tr>
<tr>
<td></td>
<td></td>
<td>

	<a href='voireuser.php?view=$idlot' target='_blank'><img src='images/file.png'  class='icon' /></a>
 

</td>
</tr>

</table>	
	";	
		
		
	}
	 
	 
		 }

?>

	</section>
	</nav>
	
	<br>

</body>



</html>