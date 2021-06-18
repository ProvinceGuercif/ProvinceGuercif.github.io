<?php

session_start();
require("connexion.php");



/*


$file = 'placement.pdf';
$filename = 'placement.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' .$filename. '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranger: bytes');
@readfile($file);
*/

?>
<!DOCTYPE html>
<html>
<head class="">
<title>Province De Guercif</title>
</head>
	
<style>
body {

background-image: linear-gradient( 109.5deg,  rgba(229,233,177,1) 11.2%, rgba(223,205,187,1) 100.2% );
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
nav {
	padding:1%;
	
 min-height: 500px;
  width: 97%;
 box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	margin-left:1%;
	margin-top:1%;
	margin-right:1%;
	
	margin-bottom:0%;
	background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );

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
width:350px;
height:250px;
}
#form3{

padding:1px;

width:45%;	
color:#154360;
}
.sectionB{
	margin-left:1%;
	margin-top:1%;
	margin-right:0%;
	margin-bottom:1%;
 min-height: 403px;
  width: 100%;
		float:left;
	
	}
.lineone{
border:1px;
background-image: linear-gradient( 75.7deg,  rgba(34,126,34,1) 3.8%, rgba(99,162,17,1) 87.1% );
	color:white;
	padding:0%;
	min-height:30px;
}
/*	
.tdlineone{
padding:1%;
width:17%;
	
}
.tdlineonepdf{
padding:1%;
width:6.5%;
}
	*/
.dimontion{
width:65%;
 min-height: 300px;	
box-shadow: -3px 9px 20px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
padding:50px;
color:#0E6655;
}
	
</style>
<body class="body">
	<header class="header">
	
	
		<ul>
    
    <li><a class="btn1" onclick="closeWin()">Fermer</a></li>
   
  </ul>
<script>
var myWindow;
function closeWin() {
  myWindow.exit();
}		
</script>	
		
	</header>
	
<?php

if(isset($_GET['view']))
	{
	$sup=$_GET['view'];
	
	$querylot="select * from lotissement where idlotisement= $sup";
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
	
	

	?>
	
<center>
		<section class="sectionB">
		<table class="dimontion">
			
		<tr>
		<td>
		Nom de lotissement 	
		</td>
			<td>:</td>
<?php echo" <td class='tdlineone'>$Nomlotissement</td>"; ?>
	
		</tr>
<!--  ------------------------------------------------  -->
		<tr>
		<td>
		Proprietaire de lotissement 	
		</td>
		<td>:</td>
<?php echo" <td class='tdlineone'>$prolotissement</td>"; ?>
	
		</tr>	
<!--  ------------------------------------------------  -->
	<tr>
		<td>
		Situation de Lotissement 	
		</td>
		<td>:</td>
<?php echo" <td class='tdlineone'>$situlotissement</td>"; ?>
		
		</tr>	
<!--  ------------------------------------------------  -->
		<tr>
		<td>
		Titre Fancé de Lotissement (T.F) 	
		</td>
		<td>:</td>
<?php echo" <td class='tdlineone'>$tflotissement</td>"; ?>
	
		</tr>	
<!--  ------------------------------------------------  -->		<tr>
		<td>
		Plan de Lotissement	
		</td>
		<td>:</td>
<?php echo" <td class='tdlineonepdf'><a name='click1' href='$planlotissement' target='_blank'><img src='images/pdf.png'  class='icon' /></a></td> "; ?>
	
		</tr>	
<!--  ------------------------------------------------  -->
	<tr>
		<td>
		Cahier des charges 	
		</td>
		<td>:</td>
<?php echo" <td class='tdlineonepdf'><a name='click2' href='$chaierlotissement'><img src='images/pdf.png'  class='icon' /></a></td> "; ?>
		
		</tr>	
<!--  ------------------------------------------------  -->
	<tr>
		<td>
		Autres fichiers 	
		</td>
		<td>:</td>
<?php echo" <td class='tdlineonepdf'><a name='click3' href='$autrelotissement'><img src='images/pdf.png'  class='icon' /></a></td>"; ?>
	
		</tr>	
<!--  ------------------------------------------------  -->

<!--  ------------------------------------------------  -->	
		</table>
		</section>
	</center>
		<?php
		}
	}

?>
	
	


</body>



</html>