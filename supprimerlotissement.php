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


if(isset($_GET['supprimerlotissement']))
	{
	$suprimer=$_GET['supprimerlotissement'];
	$reqDelete="DELETE FROM lotissement WHERE idlotisement='$suprimer'";
	$resultat=mysqli_query($conn, $reqDelete);
	
	
	
	}
	if($resultat)
	{
	
		echo " <label style='text-align: center; color: #fff;'>la supprission a ete correctement effectuee... </label>";
	
			header("Location: voireadmin.php");	
	}else
	{
	
		echo " <label style='text-align: center; color: #fff;'>un problem du supprission... </label>";
header("Location: voireadmin.php");	
	
	
}

?>
	
	