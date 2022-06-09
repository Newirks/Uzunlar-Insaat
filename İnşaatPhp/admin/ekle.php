<?php

include "mysql.php";

if($_POST){


	$baslik = $_POST["baslik"];
	$aciklama = $_POST["aciklama"];
	$kategori = $_POST["kategori"];
	$resim2 = $_POST["resim2"]["name"];
	$resim3 = $_POST["resim3"]["name"];
	$resim4 = $_POST["resim4"]["name"];


    $dosya_adi1 = $_FILES["resim1"]["name"];
	$uzanti1 = substr($dosya_adi1,-4,4);
    $rand1 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad1 = "img/".$rand1.$uzanti1;
    move_uploaded_file($_FILES["resim1"]["tmp_name"], $yeni_ad1);


    if(!empty($resim2)){


    $dosya_adi2 = $_FILES["resim2"]["name"];
	$uzanti2 = substr($dosya_adi2,-4,4);
    $rand2 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad2 = "img/".$rand2.$uzanti2;
    move_uploaded_file($_FILES["resim2"]["tmp_name"], $yeni_ad2);


    }else{

    	$yeni_ad2 = "";
    }


    if(!empty($resim3)){

    $dosya_adi3 = $_FILES["resim3"]["name"];
	$uzanti3 = substr($dosya_adi3,-4,4);
    $rand3 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad3 = "img/".$rand3.$uzanti3;
    move_uploaded_file($_FILES["resim3"]["tmp_name"], $yeni_ad3);


    }else{

    	$yeni_ad3 = "";
    }

    if(!empty($resim4)){

    $dosya_adi4 = $_FILES["resim4"]["name"];
	$uzanti4 = substr($dosya_adi4,-4,4);
    $rand4 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad4 = "img/".$rand4.$uzanti4;
    move_uploaded_file($_FILES["resim4"]["tmp_name"], $yeni_ad4);	

    }else{

    	$yeni_ad4 = "";
    }

    $ekle = mysqli_query($conn,"INSERT INTO projeler (proje_adi,proje_aciklama,proje_kategori,resim_1,resim_2,resim_3,resim_4) VALUES ('$baslik','$aciklama','$kategori','$yeni_ad1','$yeni_ad2','$yeni_ad3','$yeni_ad4')");

    if($ekle){

    	header("location:index.php");

    }else{

    	echo "Başarız";
    }
}

 ?>