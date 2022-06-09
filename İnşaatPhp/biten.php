<?php

include "header.php";

 ?>

        <section class="innerpage_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Biten Projelerimiz</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">

            <?php


                $biten = mysqli_query($conn,"SELECT * FROM projeler WHERE proje_kategori = 0");
                while($bitenyaz = mysqli_fetch_array($biten)){


             ?>

            <div class="container-fluid">
                <div class="section-title text-center">
                    <h3><?php echo $bitenyaz["proje_adi"] ?></h3>
                    <p><?php echo $bitenyaz["proje_aciklama"] ?></p>
                    <br>
                    <?php

                    if(empty($bitenyaz["resim_1"])){


                    }else{


                        echo '<img class="aw-zoom" width="300px" src="admin/'.$bitenyaz["resim_1"].'"> ';


                       }

                    if(empty($bitenyaz["resim_2"])){


                    }else{


                        echo '<img class="aw-zoom" width="300px" src="admin/'.$bitenyaz["resim_2"].'"> ';


                       }                    
                    if(empty($bitenyaz["resim_3"])){


                    }else{


                        echo '<img class="aw-zoom" width="300px" src="admin/'.$bitenyaz["resim_3"].'"> ';


                       }

                    if(empty($bitenyaz["resim_4"])){


                    }else{


                        echo '<img class="aw-zoom" width="300px" src="admin/'.$bitenyaz["resim_4"].'">';


                       }
                     ?>
                                    



                </div><!-- end title -->
 
            </div><!-- end container -->

<hr>
<?php } ?>

                    <style type="text/css">
                        
                        .aw-zoom
                        {
                            position: relative;
                            -webkit-transform: scale(1);
                            -ms-transform: scale(1);
                            -moz-transform: scale(1);
                            transition: all .3s ease-in;
                            -moz-transition: all .3s ease-in;
                            -webkit-transition: all .3s ease-in;
                            -ms-transition: all .3s ease-in;
                        }
                        .aw-zoom:hover
                        {
                            z-index:2;
                            -webkit-transform: scale(1.5);
                            -ms-transform: scale(1.5);  
                            -moz-transform: scale(1.5);
                            transform: scale(1.5);
                        }

                    </style>
        </section>



 <?php 

 include "footer.php"

 ?>