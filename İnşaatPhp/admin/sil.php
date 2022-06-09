<?php

include "mysql.php";

$id = $_GET["id"];




	$guncelle = mysqli_query($conn,"DELETE FROM projeler WHERE proje_id = '$id'");

	if($guncelle){

		header("location:index.php");
	}else{

		echo "Hata oluştu";
	}






 ?>