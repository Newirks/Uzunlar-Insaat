<?php

include "mysql.php";

$id = $_GET["id"];

if($_POST){


	$baslik = $_POST["baslik"];
	$aciklama = $_POST["aciklama"];
	$kategori = $_POST["kategori"];


	$guncelle = mysqli_query($conn,"UPDATE projeler SET proje_adi = '$baslik' , proje_aciklama = '$aciklama' , proje_kategori = '$kategori' WHERE proje_id = '$id'");

	if($guncelle){

		header("location:index.php");
	}else{

		echo "Hata oluştu";
	}

}else{

	echo "<center><h2>Bir Hata İle Karşılaşıldı Tekrar Deneyiniz.</h2></center>";
}




 ?>