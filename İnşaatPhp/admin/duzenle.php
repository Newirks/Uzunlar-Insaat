<?php

include "mysql.php";

$id = $_GET["id"];

$guncelle = mysqli_query($conn,"SELECT * FROM projeler WHERE proje_id = '$id'");
$guncelyaz = mysqli_fetch_array($guncelle);

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uzunlar</title>

    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


  </head>
  <body>


    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <h2>"<b><?php echo $guncelyaz["proje_adi"]; ?></b>" Adlı Projeyi Güncelliyorsunuz.</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <style type="text/css">
            
            .projeler { margin-left: auto; margin-right: auto; }
            .projeler tr td { padding: 10px; }
            
            .proin { width: 500px; }

            .eklenmis { margin-right: auto; margin-left: auto; width: 100%; }
            .eklenmis tr td { padding: 10px; }

          </style>
          <form action="guncelle.php?id=<?php echo $id; ?>" method="post" name="ekle" id="ekle" enctype="multipart/form-data">
          <table class="projeler">
            <tr>
              <td>Proje Başlığı</td>
              <td><input class="form-control proin" type="text" name="baslik" value="<?php echo $guncelyaz['proje_adi']; ?>" ></td>
            </tr>
            <tr>
              <td>Proje Açıklaması <font color="grey"><i>(isteğe bağlı)</i></font></td>
              <td><textarea name="aciklama" class="form-control"><?php echo $guncelyaz["proje_aciklama"]; ?></textarea></td>
            </tr>
            <tr>
              <td>Proje Kategorisi</td>
              <td>
                <select form="ekle" name="kategori" class="form-control">
                  <option value="<?php echo $guncelyaz["proje_kategori"] ?>"><?php 

                  if($guncelyaz["proje_kategori"] == 1){

                    echo "<b>**Devam Eden Projeler</b>";
                  }else{

                    echo "<b>**Biten Projeler</b>";
                  }

                  ?></option>
                  <option value="0">Biten Projeler</option>
                  <option value="1">Devam Eden Projeler</option>
                </select>
              </td>
              <tr>
                <td>Resim 1</td>
                <td><img width="100px" src="<?php echo $guncelyaz['resim_1']; ?>"><input form="ekle" type="file" name="resim1"></td>
              </tr>
              <tr>
                <td>Resim 2 <font color="grey"><i>(isteğe bağlı)</i></font></td>
                <td><img width="100px" src="<?php echo $guncelyaz['resim_2']; ?>"><input type="file" name="resim2"></td>
              </tr>
              <tr>
                <td>Resim 3 <font color="grey"><i>(isteğe bağlı)</i></font></td>
                <td><img width="100px" src="<?php echo $guncelyaz['resim_3']; ?>"><input type="file" name="resim3"></td>
              </tr>
              <tr>
                <td>Resim 4 <font color="grey"><i>(isteğe bağlı)</i></font></td>
                <td><img width="100px" src="<?php echo $guncelyaz['resim_4']; ?>"><input type="file" name="resim4"></td>
              </tr>
            </tr>
            <tr>
              <td><input class="btn btn-warning" type="submit" value="Güncelle"></td>
              <td></td>
            </tr>
          </table>
        </form>
        </div>
      </div>




      

    </div>



</body>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>